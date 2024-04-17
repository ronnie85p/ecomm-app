<script setup>
import Vendor from '@/Api/Controllers/Vendor'
import { _getLog } from '@/Api/helpers'
import Select from './../Category/Select.vue'

const getVendors = () => {
    console.log('getting vendors')
    return Vendor.getMany();
}
</script>

<template>
    <Select 
       :placeholder="'Выберите'" 
       :loadingText="'Loading...'"
       :requestProps="{ action: getVendors }"
    />
</template>