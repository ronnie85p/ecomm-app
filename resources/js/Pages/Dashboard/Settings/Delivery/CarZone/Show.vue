<script setup>
import { defineProps } from 'vue'
import Layout from '@/Layouts/Dashboard/Home.vue'

const { title } = defineProps(['title', 'data']);

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

        <nav class="nav">
            <a class="nav-link active border rounded" aria-current="page" href="#">Транспорт</a>
            <a class="nav-link" href="#">Зоны</a>
        </nav>

        <div class="row">
            <div class="col">
                {{ data.name }}
            </div> 
        </div>

        <div class="row">
            <div class="col">
                {{ data.description }}
            </div> 
        </div>

        <div class="row">
            <div class="col">
               Weight: {{ data.weight }} Length: {{ data.length }}
            </div> 
        </div>

    </Layout>

</template>