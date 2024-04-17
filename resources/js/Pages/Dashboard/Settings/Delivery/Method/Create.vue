<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'
import Form from './Form/Index.vue'

const { title } = defineProps(['title']);

const options = {
    title, 
    menu: {
        title: 'Доставка',
        items: [
            { text: 'Способы доставки', uri: '/dashboard/settings/deliveries' },
            { text: 'Транспорт', uri: '/dashboard/settings/delivery/cars' },
            { text: 'Зоны', uri: '/dashboard/settings/delivery/zones' },
        ]
    },

    breadcrumbs: [
        {text: 'Профиль', uri: '/dashboard'}, 
        {text: 'Настройки', uri: '/dashboard/settings'},
        {text: 'Способы доставки', uri: '/dashboard/settings/deliveries'},
    ]
}

</script>

<template>

    <Layout :options="options">

        <Form />

    </Layout>

</template>