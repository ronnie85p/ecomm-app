<script setup>
import { defineProps } from 'vue'
import Layout from '@/Layouts/Dashboard/Home.vue'

const { title } = defineProps(['title']);

const options = {
    title, 
    menu: {
        items: [
            { text: 'Заказы', uri: 'dashboard/orders' },
            { text: 'Товары', uri: 'dashboard/products' },
            { text: 'Оплата', uri: 'dashboard/payments' },
            { text: 'Сообщения', uri: 'dashboard/messages' },
            { text: 'Настройки', uri: 'dashboard/settings' },
        ]
    },

    // breadcrumbs: [{text: 'Профиль', uri: '/dashboard'}]
}

console.log('log')

</script>

<template>
    <Layout :options="options">
        content
    </Layout>
</template>