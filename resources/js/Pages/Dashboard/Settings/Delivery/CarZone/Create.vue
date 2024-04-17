<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'
import Form from './Form/Index.vue'

const { title } = defineProps(['title', 'car']);

const options = {
    title, 
    menu: {
        title: 'Доставка',
        items: [
            { text: 'Способы доставки', uri: '/dashboard/settings/deliveries' },
            { text: 'Автомобили', uri: '/dashboard/settings/delivery/cars' },
            { text: 'Зоны', uri: '/dashboard/settings/delivery/zones' },
        ]
    },

    breadcrumbs: [
        {text: 'Профиль', uri: '/dashboard'}, 
        {text: 'Настройки', uri: '/dashboard/settings'},
        {text: 'Автомобили', uri: '/dashboard/settings/delivery/cars'},
    ]
}

</script>

<template>

    <Layout :options="options">
        <Form :car="car"/>
    </Layout>

</template>