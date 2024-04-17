class MapPoint {
    options = {
        coords: [],
        properties: {},
        options: {
            preset: "islands#redDotIcon",
            iconColor: "#e61923",
            draggable: false,
        },
    }
  
    constructor(map, coords, _options) {
        this.map = map;
        this.coords = coords;
        this.options = {...this.options, ..._options};
  
        this.placemark = new ymaps.Placemark(coords, 
            this.options.properties, 
            this.options.options
        );
  
        this.addEvents(this.options.events);
    }
  
    addEvent(event, callback) {
        this.placemark.events.add(event, callback);
    }
  
    addEvents(events) {
        for (const name in events) {
            if (typeof events[name] === 'function') {
                this.addEvent(name, events[name]);
            }
        }
    }
  
    addToMap(visibleOnMap = false) {
        this.map.ymap.geoObjects.add(this.placemark);
  
        if (visibleOnMap === true) {
            this.map.ymap.panTo(this.coords, this.options.checkZoomRange);
        }
    }
  
    removeFromMap() {
        this.map.ymap.geoObjects.remove(this.placemark);
    }
}

export default MapPoint;