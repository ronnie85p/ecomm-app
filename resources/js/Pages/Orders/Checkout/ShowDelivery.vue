<script setup>
import { defineProps, ref, watch } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from './Layout.vue'
import DeliveryPickup from './Delivery/DeliveryPickup.vue'
import DeliveryCompany from './Delivery/DeliveryCompany.vue'

const { data, deliveries } = defineProps(['data', 'deliveries']);

const getCurrentIndex = (deliveryId) => {
    return deliveries.findIndex((el) => el.id == deliveryId);
}

const currentIndex = ref(getCurrentIndex(data.delivery_id));
const delivery = ref(null);
const components = [
    DeliveryPickup,
    DeliveryCompany
];

</script>

<template>
    <Layout :data="data" page="delivery">
        
        <template #content>
            <form>

                <div class="row mb-4">
                    <div class="col">
                        <div v-for="(item, index) in deliveries" class="form-check">
                            <input class="form-check-input" type="radio" name="delivery_id" :id="`delivery-${item.id}`" 
                                :checked="index == currentIndex"
                                @change="currentIndex = index">
                            <label class="form-check-label" :for="`delivery-${item.id}`">
                                {{ item.name }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <component :is="components[currentIndex]" :data="deliveries[currentIndex]" />
                </div>

                <hr class="border" />

                <div class="row">
                    <div class="col-12">
                        <label class="form-label mb-1 fw-bolder" for="delivery_datetime">Дата и время отгрузки / получения</label>
                    </div>
                    <div class="col-3">
                        <input class="form-control" name="delivery_datetime" type="datetime-local" >
                    </div>
                </div>

                <hr />

                <div class="text-end">
                    <Link href="/checkout/ordering" class="btn btn-primary">Продолжить</Link>
                </div>

                </form>
        </template>

    </Layout>
</template>