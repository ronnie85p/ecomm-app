<script setup>
import Categories from '@/Api/Controllers/Category'
import { _getLog } from '@/Api/helpers'
import Select from './Select.vue'

const getCategories = () => {
    console.log('getting categories')
    return Categories.getMany();
}
</script>

<template>
    <Select 
       :placeholder="'Выберите'" 
       :loadingText="'Loading...'"
       :requestProps="{ action: getCategories }"
    />
</template>