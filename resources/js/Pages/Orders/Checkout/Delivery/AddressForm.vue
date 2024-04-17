<script setup>
import { onMounted, ref } from 'vue'
import { MapRouter } from '@/Api/maps'

import MapsContainer from '@/Components/Maps/MapsContainer.vue'
import MapLayout from '@/Components/Maps/MapLayout.vue'

const mapErrorRef = ref(null);
const mapLayoutRef = ref(null);

const options = {
    points: [
        {
                coords: [56.2213499, 36.9488971],
                visibleOnMap: true
            },
        ],
    };

const mapRouterOptions = {

};

const mapReady = (map) => {
    console.log('map ready');

    const mapRouter = new MapRouter(map, mapRouterOptions);

    map.addEvents({
        click(e) {
            console.log('coords', e.get('coords'), )

            map.addOncePoint('custom', e.get('coords'), { visibleOnMap: true });

            setTimeout(() => {
                mapRouter.addRoutes();
            }, 500)

            map.maps.getGeoCollection(e.get('coords')).then(collection => {
                collection.each(obj => {
                    console.log('obj', obj)
                })
            });
        }
    });
}

        // const map = new Map(maps, container, options);
    // map.initialize();
    //     // map.runGeolocation();
    // console.log('address', addressRef.value)

    // const mapAddres = new MapAddress(map, document.getElementById('address'));
    // const mapRouter = new MapRouter(map, routerOptions);

onMounted(() => {
  console.log(mapLayoutRef.value)
})
</script>

<template>
    <div class="row mb-2">
        <div class="col">
            <label class="form-label mb-1 fw-bolder" for="address">Адрес доставки</label>
            <input class="form-control" name="address" />
        </div>
    </div>

    <MapsContainer>

        <template #loading>
            <div class="loading">
                Loading...
            </div>
        </template>

        <template #error="{ error }">
            <div class="error text-danger">
                {{ error  }}
            </div>
        </template>

        <template #default="{ maps }">
            <MapLayout 
                :maps="maps"
                :options="options"
                height="300px"
            >
                <template #error="{ error }">
                    <div class="text-danger">{{ error }}</div>
                </template>

                <template #default="{ map }">
                    <!-- <MapRouter :map="map" :options="mapRouterOptions"/> -->
                    {{ mapReady(map) }}
                </template>
            </MapLayout>
        </template>

    </MapsContainer>

</template>