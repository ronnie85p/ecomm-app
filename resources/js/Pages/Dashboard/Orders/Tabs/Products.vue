<script setup>
import { defineProps } from 'vue';
import ProductsSearchForm from './Products/ProductsSearchForm.vue'

const { data } = defineProps(['data']);
const products = data?.products || [];
</script>

<template>

    <ProductsSearchForm />

    <div v-if="!products.length" class="alert alert-light text-center">
        <p class="mb-2">Вы еще не добавляли товар(ы)</p>
     </div>
  
    <div v-for="item in products" class="card card-body mb-2" style="height: 70px">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>

</template>