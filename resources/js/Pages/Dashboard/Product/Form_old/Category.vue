<script setup>
import { useRequest } from '@/Components/Hooks/Http'
import CategoryOptions from './Category/Options.vue'
import VendorOptions from './Vendor/Options.vue'
import TrademarkOptions from './Trademark/Options.vue'
import CountryOptions from './Country/Options.vue'

const request = useRequest();
</script>

<template>
    <div class="row mb-2">
        <div  class="col-3">
            <label for="">Категория</label>
        </div>
        <div class="col">
            <CategoryOptions />
        </div>
    </div>

    <div class="row mb-2">
        <div  class="col-3">
            <label for="">Производитель</label>
        </div>
        <div class="col">
            <VendorOptions />
        </div>
    </div>

    <div class="row mb-3">
        <div  class="col-3">
            <label for="">Торговая марка</label>
        </div>
        <div class="col">
            <TrademarkOptions />
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="">Страна производства</label>
        </div>
        <div class="col">
            <CountryOptions />
        </div>
    </div>
</template>