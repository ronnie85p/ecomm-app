class MapAddress {
    options = {
        suggestViewEnabled: true,
        suggestViewOptions: { }
    }

    map = null
    suggestView = null

    constructor(map, element, options) {
        this.map = map;
        this.element = element;
        this.options = {...this.options, ...options}

        if (this.options.suggestViewEnabled === true) {
            this.suggestViewSetup();
        }

        this.element.addEventListener('input', () => {
            console.log('input')
        }, false)

        // this.addDefaultEvents();

        // for (let event in this.events) {
        //     this.element.addEventListener(event, this.events[event], false);
        // }
    }

    suggestViewSetup() {
        console.log('element', this.elemetn)
        this.suggestView = new ymaps.SuggestView(
            this.element,
            this.options.suggestViewOptions
          );
    
          this.suggestView.events.add("select", (e) => {
            // changePointOnMap(e, e.get("item").value);
            // changed = true;



        });
    }

    addDefaultEvents() {

    }

    init() {
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
}

export default MapAddress;