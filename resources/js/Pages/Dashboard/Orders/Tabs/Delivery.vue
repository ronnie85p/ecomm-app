<script setup>
import { ref } from 'vue'
import PickupForm from './Delivery/PickupForm.vue'
import FactoryForm from './Delivery/FactoryForm.vue'

const currentTab = ref(0);

const data = [
    {
        id: 1,
        name: 'Самовывоз',
        description: ''
    },
    {
        id: 2,
        name: 'Доставка завода Латерес',
        description: ''
    },
];

const tabs = [
    {
        ...data[0],
        component: PickupForm
    },
    {
        ...data[1],
        component: FactoryForm
    },
];

</script>

<template>

    <div class="row mb-4">
        <div class="col">
            <div v-for="(tab, index) in tabs" class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="delivery_id" 
                    :id="'delivery-checked-' + index" 
                    :checked="currentTab == index"
                    @change="currentTab = index"> 
                <label class="form-check-label" :for="'delivery-checked-' + index">
                    {{ tab.name }}
                </label>
            </div>
        </div>
    </div>

    <component :is="tabs[currentTab]?.component" :data="data"></component>

    <div class="row my-4">
        <div class="col-3">Время отгрузки / получения</div>
        <div class="col-3">
            <input class="form-control" name="delivery_datetime" type="datetime-local">
        </div>
    </div>
</template>