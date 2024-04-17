class Geolocation {
    options = {
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
    }

    maps = null

    constructor(maps, options) {
        this.maps = maps;
        this.options = {...this.options, ...options}
    }

    run() {
        return ymaps.geolocation.get(this.options)
            .then(({ geoObjects }) => geoObjects.get(0));
    }
}

class Maps {
    config = {
      params: {
        // apikey: "5ef0d5e8-302e-48ff-8666-1a7755486090",
        apikey: "d1bae7b4-3735-44be-9478-3bdce975bc3f",
        suggest_apikey: '1916be30-16a4-42df-97b6-97d9005b0614',
        lang: "ru_RU",
        load: "package.full"
      },
      ver: "2.1",
      url: "https://api-maps.yandex.ru/",
    }
  
    constructor(config) {
      this.config = {...this.config, ...config};
  
      this.getUrl();
    }
  
    getUrl() {
      const url = new URL(this.config.url);
      url.pathname = url.pathname + this.config.ver;
  
      for (let key in this.config.params) {
        url.searchParams.append(key, this.config.params[key]);
      }
  
      this.url = url;
    }
  
    addScript() {
      const script = document.createElement("script");
      script.src = this.url;
  
      document.head.append(script);
  
      return script;
    }
  
    async loadScript() {
      const script = this.addScript();
  
      return new Promise((resolve, reject) => {
        script.onload = () => {
          resolve();
        };
    
        script.onerror = (e) => {
          reject(e);
        };  
      })
    }
  
    async ready() {
      if (typeof ymaps === 'undefined') {
        try {
          await this.loadScript();
        } catch (e) {
          throw new Error(e);
        }
      }
  
      return ymaps.ready();
    }

    runGeocode(request, options) {
        return ymaps.geocode(request,options);      
    }

    getGeoCollection(request, options) {
        return this.runGeocode(request, options)
            .then(results => results.geoObjects);        
    }

    getGeoObject(request, options) {
        return this.getGeoCollection(request, { ...options, results: 1 })
            .then(collection => collection.get(0));
    }

    runGeolocation(options) {
        return (new Geolocation(this, options)).run();
    }
  }
  
  export default Maps