<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'
import Form from './Form/Index.vue'

const { title, data } = defineProps(['title', 'data']);

const options = {
    title, 
    menu: {
        title: 'Доставка',
        items: [
            { text: 'Способы доставки', uri: '/dashboard/settings/deliveries' },
            { text: 'Транспорт', uri: '/dashboard/settings/delivery/cars' },
            { text: 'Зоны доставки', uri: '/dashboard/settings/delivery/zones' },
        ]
    },

    breadcrumbs: [
        {text: 'Профиль', uri: '/dashboard'}, 
        {text: 'Настройки', uri: '/dashboard/settings'},
        {text: 'Транспорт', uri: '/dashboard/settings/delivery/cars'},
    ]
}

</script>

<template>

    <Layout :options="options">
        <template #subtitle>
            <div class="fs-5">{{  data.name }}</div>
        </template>

        <nav class="nav mb-4">
            <Link class="nav-link active border rounded" aria-current="page" :href="`/dashboard/settings/delivery/cars/${data?.id}/edit`">Транспорт</Link>
            <Link class="nav-link" :href="`/dashboard/settings/delivery/cars/${data?.id}/zones`">Зоны</Link>
        </nav>

        <Form :data="data"/>

    </Layout>

</template>