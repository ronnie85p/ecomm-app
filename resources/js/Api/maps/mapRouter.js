class MapRouter {
    options = {
        // вы можете настроить внешний вид маршрута
        // Внешний вид путевых точек.
        // wayPointStartIconColor: "#333",
        // wayPointStartIconFillColor: "#B3B3B3",
        // // Задаем собственную картинку для последней путевой точки.
        // wayPointFinishIconLayout: "default#image",
        // wayPointFinishIconImageHref: "images/sokolniki.png",
        // wayPointFinishIconImageSize: [30, 30],
        // wayPointFinishIconImageOffset: [-15, -15],
        // // Позволяет скрыть иконки путевых точек маршрута.
        // // wayPointVisible:false,
        // // Внешний вид транзитных точек.
        // viaPointIconRadius: 7,
        // viaPointIconFillColor: "#000088",
        // viaPointActiveIconFillColor: "#E63E92",
        // // Транзитные точки можно перетаскивать, при этом
        // // маршрут будет перестраиваться.
        // viaPointDraggable: true,
        // // Позволяет скрыть иконки транзитных точек маршрута.
        // // viaPointVisible:false,
        // // Внешний вид точечных маркеров под путевыми точками.
        // pinIconFillColor: "#000088",
        // pinActiveIconFillColor: "#B3B3B3",
        // // Позволяет скрыть точечные маркеры путевых точек.
        // // pinVisible:false,
        // // Внешний вид линии маршрута.
        // routeStrokeWidth: 2,
        // routeStrokeColor: "#000088",
        // routeActiveStrokeWidth: 6,
        // routeActiveStrokeColor: "#E63E92",
        // // Внешний вид линии пешеходного маршрута.
        // routeActivePedestrianSegmentStrokeStyle: "solid",
        // routeActivePedestrianSegmentStrokeColor: "#00CDCD",
        // // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
        // boundsAutoApply: true,
        editorDrawOver: false,
        wayPointDraggable: true,
        viaPointDraggable: true,
        wayPointVisible: false,
  
        // Зададим собственное оформление линий мультимаршрута.
        routeStrokeColor: "000088",
        routeActiveStrokeColor: "ff0000",
        pinIconFillColor: "ff0000",
        boundsAutoApply: false,
        zoomMargin: 30,
    }

    map = null
    routers = []
    activeRoute = null

    constructor(map, options) {
        this.map = map;
        this.options = {...this.options, ...options}
    }

    getReferencePoints() {
        return this.map.getAllPoints().map(point => point.coords)
    }

    setActiveRoute(route) {
        this.activeRoute = route;
    }

    removeRoutes(key) {
        if (this.routers[key]) {
            this.map.ymap.geoObjects.remove(this.routers[key]);
        }
    }

    clearRoutes() {
        for (let i in this.routers) {
            this.removeRoutes(i);
        }
    }

    addRoutes(rebuild = true) {
        if (rebuild === true) {
            this.clearRoutes();
        }

        this.setActiveRoute(null);

        const referencePoints = this.getReferencePoints();
        const properties = { referencePoints };

        const router = new ymaps.multiRouter.MultiRoute(
            properties, this.options
        );
      
        router.events.add("activeroutechange", () => {
            this.setActiveRoute(router.getActiveRoute());
        });
        
        this.map.ymap.geoObjects.add(router);
        this.routers.push(router);

        return router;
    }
}

export default MapRouter;