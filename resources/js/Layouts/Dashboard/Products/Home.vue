<script setup>
import { defineProps } from 'vue'
import Layout from '@/Layouts/Dashboard/Home.vue'

const { title, breadcrumbs } = defineProps(['title', 'breadcrumbs']);

const options = {
    title, 
    menu: {
        title: 'Товары',
        items: [
            {text: 'Добавить товар', uri: '/dashboard/products/create'}, 
            {text: 'Все товары', uri: '/dashboard/products'},
            {text: 'Категории', uri: '/dashboard/categories'},
            {text: 'Производители', uri: '/dashboard/vendors'},
        ]
    },

    breadcrumbs: [{text: 'Профиль', uri: '/dashboard'}]
}

</script>

<template>
    <Layout :options="options">
        content
    </Layout>
</template>