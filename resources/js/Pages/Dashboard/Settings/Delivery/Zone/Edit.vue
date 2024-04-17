<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'
import Form from './Form/Index.vue'

const { title } = defineProps(['title', 'data']);

const options = {
    title, 
    menu: {
        title: 'Доставка',
        items: [
            { text: 'Способы доставки', uri: '/dashboard/settings/deliveries' },
            { text: 'Зоны доставки', uri: '/dashboard/settings/delivery/zones' },
            { text: 'Транспорт', uri: '/dashboard/settings/delivery/cars' },
        ]
    },

    breadcrumbs: [
        {text: 'Профиль', uri: '/dashboard'}, 
        {text: 'Настройки', uri: '/dashboard/settings'},
        {text: 'Зоны доставки', uri: '/dashboard/settings/delivery/zones'},
    ]
}

</script>

<template>

    <Layout :options="options">

        <Form :data="data" />

    </Layout>

</template>