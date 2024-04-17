<script setup>
import { onMounted, ref } from 'vue'
import { MapRouter } from '@/Api/maps'
import FormGroupRow from '@/Components/Form/FormGroupRow.vue'
import FormGroup from '@/Components/Form/FormGroup.vue'
import Label from '@/Components/Form/Label.vue'
import Input from '@/Components/Form/Input.vue'
import AlertWarning from '@/Components/Alert/AlertWarning.vue'
import AlertDanger from '@/Components/Alert/AlertDanger.vue'
import Col from '@/Components/Grid/Col.vue'
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
    <FormGroupRow>
        <Col>
            <Label for="address" class="mb-1">Адрес доставки</Label>
            <Input name="address" />
        </Col>
    </FormGroupRow>

    <MapsContainer>

        <template #loading>
            <AlertWarning>
                Loading...
            </AlertWarning>
        </template>

        <template #error="{ error }">
            <AlertDanger>
                {{ error  }}
            </AlertDanger>
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