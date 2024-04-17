import MapPoint from './mapPoint';

class Map {
  options = {
    map: {},
    events: {},
    state: {
      center: [56.2213499, 36.9488971],
      zoom: 15,
      type: "yandex#map",
      controls: [
        "zoomControl", 
        "fullscreenControl"
      ],
    },
    geoLocation: {

    },
    geoLocationPoint: {
      visibleOnMap: true
    },
    points: [],
  }

  maps = null
  container = null
  ymap = null

  points = {}
  oncePoints = {};

  constructor(maps, options) {
    this.maps = maps;
    this.options = {...this.options, ...options};

    if (this.options.container) {
      this.setContainer(this.options.container);
    }
  }

  initialize() {
    this.ymap = new ymaps.Map(
      this.container,
      this.options.state,
      this.options.map
    );

    this.addPoints(this.options.points);
    this.addEvents(this.options.events);
  }

  setContainer(container) {
    this.container = container;
  }

  addEvents(events) {
    for (let event in events) {
      this.ymap.events.add(event, events[event]);
    }
  }

  addPoint(coords, options) {
    const point = new MapPoint(this, coords, options);
    point.addToMap(options?.visibleOnMap === true);

    this.points[coords] = point;

    return point;
  }

  addOncePoint(key, coords, options) {
    if (this.oncePoints[key]) {
      this.removePoint(this.oncePoints[key].coords);
      delete this.oncePoints[key];
    }

    this.oncePoints[key] = this.addPoint(coords, options);
  }

  addPoints(points) {
    for (let i in points) {
      this.addPoint(points[i].coords, points[i]);
    }
  }

  removePoint(key) {
    const point = this.points[key];
     if (point) {
      point.removeFromMap();
      delete this.points[key];
    }
  }

  removeAllPoints() {
    for (let key in this.points) {
      this.removePoint(key);
    }
  }

  getAllPoints() {
    return Object.values(this.points);
  }

  runGeolocation() {
    this.maps.runGeolocation(this.options.geoLocation)
      .then(geoObject => {
        const coords = geoObject.geometry._coordinates;
        this.addPoint(coords, this.options.geoLocationPoint);
      })
      .catch(error => {
        console.log('geolocation error', error);
      })
  }
}

export default Map;