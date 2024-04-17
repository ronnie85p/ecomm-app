<script setup>
import Vendor from '@/Api/Controllers/Vendor'
import { _getLog } from '@/Api/helpers'
import Select from './../Category/Select.vue'

const getTrademarks = () => {
    console.log('getting trademarks')
    return Vendor.getTrademarks(1);
}
</script>

<template>
    <Select 
       :placeholder="'Выберите'" 
       :loadingText="'Loading...'"
       :requestProps="{ action: getTrademarks }"
    />
</template>