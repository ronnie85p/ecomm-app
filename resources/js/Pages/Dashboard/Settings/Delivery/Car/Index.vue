<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'

const { title } = defineProps(['title', 'data']);

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
        {text: 'Настройки', uri: '/dashboard/settings'}
    ]
}

</script>

<template>

    <Layout :options="options">
        <template #panel>
            <div class="text-start mb-2">
                <Link href="/dashboard/settings/delivery/cars/create" class="btn btn-primary">Добавить</Link>
            </div>
        </template>

        <div v-if="!data?.length" class="text-center text-muted p-4">
            Нет данных для вывода
        </div>

        <div v-for="item in data">
            <div class="row">
                <div class="col">
                    <Link :href="`/dashboard/settings/delivery/cars/${item.id}/edit`" class="fs-5 text-decoration-none">
                        {{ item.name }}
                    </Link>
                    <div class="text-muted">{{ item.description }}</div>
                </div>
                <div class="col text-end">
                    <Link :href="`/dashboard/settings/delivery/cars/${item.id}/zones`" class="btn btn-light me-2">Зоны</Link>
                    <button class="btn btn-danger">Удалить</button>
                </div>
            </div>

            <hr />
        </div>
    </Layout>

</template>