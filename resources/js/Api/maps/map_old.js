class Map {
    options = {
      map: {},
      events: {},
      state: {
        center: [56.2213499, 36.9488971],
        zoom: 15,
        type: "yandex#map",
        controls: ["zoomControl", "fullscreenControl"],
      },
  
      clickOnMap: false,
      autoGeolocation: false,
  
      defaultPlacemark: {
        checkZoomRange: true,
        properties: {},
        options: {
          preset: "islands#redDotIcon",
          iconColor: "#e61923",
          draggable: false,
        },
      },
  
      defaultGeolocation: {
        /*
        @timeout
          Время ожидания ответа в мс.
        */
        timeout: 30000,
  
        /*
          @provider
          'yandex' - геолокация по данным Яндекса на основе ip пользователя,
          'browser' - встроенная браузерная геолокация,
          'auto' - провести геолокацию всеми доступными способами и выбрать лучшее значение.
        */
        provider: "auto",
  
        /*
          @mapStateAutoApply
          при добавлении на карту автоматически выставить центр и уровень масштабрования карты так,
          чтобы показать текущее местоположение пользователя
        */
        mapStateAutoApply: true,
  
        /*
          @autoReverseGeocode
          true - автоматически прогеокодировать положение пользователя, false - вернуть как есть.
          В случае автоматического геокодирования объект, обозначающий текущее местоположение пользователя,
          будет иметь структуру, аналогичную результату выполнения geocode.
        */
        autoReverseGeocode: true,
      },
  
      suggestView: {
        enabled: true,
      },
  
      points: [],
    };
  
    selectors = {
      map: ".maps-map",
      address: ".maps-address",
      geolocation_btn: ".maps-geolocation-btn",
      prefix_field: "maps-field-",
    };
  
    container = null;
    mapContainer = null;
    address = null;
    map = null;
    events = {};
    points = [];
  
    /**
     * 1 нет единой опции на разные события добавления точки на карту
     * 2 установить поля из результатов запроса определения локации
     * 3 определить местоположение
     * */
  
    constructor(container, options) {
      options.state = { ...this.options.state, ...options.state };
      options.defaultPlacemark = {
        ...this.options.defaultPlacemark,
        ...options.defaultPlacemark,
      };
  
      this.options = { ...this.options, ...options };
      this.events = this.options.events || {};
      this.container = container;
    }
  
    initialize() {
      try {
        const mapContainer = this.container.querySelector(this.selectors.map);
  
        this.map = new ymaps.Map(
          mapContainer,
          this.options.state || {},
          this.options.map || {}
        );
  
        this.geolocationInit();
        this.addressInit();
        this.addDefaultEvents();
        this.addEvents(this.events);
  
        if (this.options.points) {
          this.addPointsOnMap(this.options.points);
        }
  
        if (this.options.clickOnMap?.startCoords) {
          this.clickOnMap(null, this.options.clickOnMap.startCoords);
        }
      } catch (err) {
        console.log("err", err);
      }
    }
  
    geolocationInit() {
      this.geolocationBtn = this.container.querySelector(
        this.selectors.geolocation_btn
      );
      this.geolocationBtn?.addEventListener(
        "click",
        (event) => {
          event.preventDefault();
          this.runGeolocation({ event });
        },
        false
      );
  
      if (this.options.autoGeolocation) {
        this.runGeolocation();
      }
    }
  
    async runGeolocation(options) {
      options = {
        ...this.options.defaultGeolocation,
        ...options,
      };
  
      const events = this.options.events || {};
      if (typeof events.beforeGeolocation === "function") {
        events.beforeGeolocation(options);
      }
  
      return await ymaps.geolocation.get(options).then(({ geoObjects }) => {
        const geoObject = geoObjects.get(0);
        this.clickOnMap(null, geoObject.geometry.getCoordinates());
  
        if (typeof events.afterGeolocation === "function") {
          events.afterGeolocation(geoObject, options);
        }
  
        return geoObject;
      });
    }
  
    addressInit() {
      this.address = this.container.querySelector(this.selectors.address);
      if (!this.address) return;
  
      let changed = false;
  
      const changePointOnMap = (e, position) => {
        if (position) {
          this.getGeoObject(position).then((geoObject) => {
            if (this.options.clickOnMap !== false) {
              this.clickOnMap(e, geoObject.geometry.getCoordinates());
            }
          });
        }
      };
  
      if (this.options.suggestView?.enabled === true) {
        this.suggestView = new ymaps.SuggestView(
          this.address,
          this.options.suggestView
        );
  
        this.suggestView.events.add("select", (e) => {
          changePointOnMap(e, e.get("item").value);
          changed = true;
        });
      }
  
      this.address.addEventListener(
        "keypress",
        (e) => {
          if (e.keyCode === 13) {
            e.preventDefault();
            if (!changed) {
              changePointOnMap(e, e.target.value.trim());
              changed = true;
            } else {
              changed = false;
            }
          }
        },
        false
      );
  
      this.address.addEventListener(
        "change",
        (e) => {
          setTimeout(() => {
            if (!changed) {
              changePointOnMap(e, e.target.value.trim());
            } else {
              changed = false;
            }
          }, 300);
        },
        false
      );
    }
  
    addEvents(events) {
      for (const name in events) {
        this.map.events.add(name, events[name]);
      }
    }
  
    addDefaultEvents() {
      this.events["boundschange"] = (e) => {
        if (e.get("newZoom") !== e.get("oldZoom")) {
          this.setFields({ zoom: e.get("newZoom") });
        }
      };
  
      this.events["click"] = (e) => {
        if (this.options.clickOnMap !== false) {
          this.clickOnMap(e, e.get("coords"));
        }
      };
    }
  
    clickOnMap(e, position) {
      const options = this.options.clickOnMap || {};
      const placemark =
        typeof options.placemark === "function"
          ? options.placemark(e, position)
          : options.placemark;
  
      if (options.once && this.lastPointIdx > -1) {
        console.log("lstpontidx", this.lastPointIdx);
        this.removePoint(this.lastPointIdx);
      }
  
      this.addPointOnMap({
        ...placemark,
        position,
      });
  
      this.lastPointIdx = this.points.length - 1;
    }
  
    removePoint(idx) {
      const point = this.points[idx];
      if (point) {
        this.map.geoObjects.remove(point);
        this.points.splice(idx, 1);
      }
    }
  
    removePoints() {
      for (const [i, point] of new Set(this.points).entries()) {
        this.removePoint(i);
      }
    }
  
    addPointsOnMap(points) {
      for (const [i, point] of new Set(points).entries()) {
        this.addPointOnMap(point);
      }
    }
  
    addPointOnMap(point) {
      point = {
        ...this.options.defaultPlacemark,
        ...point,
      };
  
      const {
        geocode = true,
        position = [],
        properties = {},
        options = {},
        events = {},
        once = false,
        autoCenter = true,
        checkZoomRange = false,
      } = point;
  
      const placemark = new ymaps.Placemark(position, properties, options);
      const runGeocode = async (position) => {
        if (
          typeof this.events.beforeGeocode === "function" &&
          this.events.beforeGeocode(placemark, position) === false
        ) {
          return;
        }
  
        const result =
          typeof geocode === "function"
            ? await geocode(position, placemark)
            : await this.getGeoObject(position);
  
        if (typeof this.events.afterGeocode === "function") {
          this.events.afterGeocode(placemark, result);
        }
      };
  
      if (options.draggable) {
        events["dragend"] = (e) => {
          if (typeof e.dragend === "function") {
            e.dragend(e);
          }
  
          const coords = e.get("target").geometry.getCoordinates();
          this.map.panTo(coords, checkZoomRange);
          runGeocode(coords);
        };
      }
  
      if (geocode !== false) {
        runGeocode(position);
      }
  
      for (const name in events) {
        placemark.events.add(name, events[name]);
      }
  
      this.map.geoObjects.add(placemark);
  
      if (autoCenter !== false) {
        this.map.panTo(position, checkZoomRange);
      }
  
      if (once !== false) {
        this.lastPointIdx = this.points.length;
      }
  
      this.points.push(placemark);
      return placemark;
    }
  
    getGeoObject(request) {
      return ymaps.geocode(request, { results: 1 }).then((results) => {
        return results.geoObjects.get(0);
      });
    }
  
    setFields(fields) {
      for (let k in fields) {
        let v = fields[k] || "";
        k = k.replace("_", "-");
  
        this.container
          .querySelectorAll(`.${this.selectors.prefix_field}${k}`)
          .forEach((elem) => {
            switch (elem.nodeName) {
              case "INPUT":
                elem.value = v;
                break;
              case "SELECT":
                const option = [...element.options].find(
                  (elem) => elem.value == v
                );
                if (option) {
                  option.selected = true;
                }
                break;
              default:
                elem.innerText = v;
            }
          });
      }
    }
  }
  
  export default Map;
  