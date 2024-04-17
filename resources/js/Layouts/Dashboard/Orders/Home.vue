<script setup>
import { defineProps } from 'vue'
import Layout from '@/Layouts/Dashboard/Home.vue'

const { title, breadcrumbs } = defineProps(['title', 'breadcrumbs']);

const options = {
    title, 
    menu: {
        title: 'Заказы',
        items: [
            {text: 'Создать заказ', uri: '/dashboard/orders/create'}, 
            {text: 'Все заказы', uri: '/dashboard/orders'}
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