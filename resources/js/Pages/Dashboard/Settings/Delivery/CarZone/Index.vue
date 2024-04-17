<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'
import Form from './Form/Index.vue'

const { title } = defineProps(['title', 'data', 'car']);

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
        {text: 'Транспорт', uri: '/dashboard/settings/delivery/cars'},
    ]
}

</script>

<template>

    <Layout :options="options">

        <template #subtitle>
            <div class="fs-5">{{ car?.name }}</div>
        </template>

        <nav class="nav mb-4">
            <Link class="nav-link" aria-current="page" :href="`/dashboard/settings/delivery/cars/${car.id}/edit`">Транспорт</Link>
            <Link class="nav-link active border rounded" :href="`/dashboard/settings/delivery/cars/${car.id}/zones`">Зоны</Link>
        </nav>

        <Link :href="`/dashboard/settings/delivery/cars/${car.id}/zones/create`" class="btn btn-light mb-4">Добавить зону</Link>

        <div v-for="item in data">
            <div class="fs-5">
                <Link :href="`/dashboard/settings/delivery/carzones/${item.id}/edit`" class="text-decoration-none">{{ item.zone.name }}</Link>
            </div>
            <div class="text-muted">Price: {{ item.price }} Min Price: {{ item.min_price }} Max Price: {{ item.max_price }}
            Fixprice: {{ item.fixprice }}</div>

            <hr class="my-4" />
        </div>

    </Layout>

</template>