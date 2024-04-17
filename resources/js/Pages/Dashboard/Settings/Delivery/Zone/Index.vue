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
    ]
}

</script>

<template>

    <Layout :options="options">

        <template #panel>
            <div class="text-start mb-2">
                <Link href="/dashboard/settings/delivery/zones/create" class="btn btn-primary">Добавить</Link>
            </div>
        </template>

        <div v-if="!data?.length" class="text-center text-muted p-4">
            Нет данных для вывода
        </div>

        <div v-for="item in data">
            <div class="row">
                <div class="col">
                    <Link :href="`/dashboard/settings/delivery/zones/${item.id}/edit`" class="fs-5 text-decoration-none">
                        {{ item.name }}
                    </Link>
                    <div class="text-muted" v-html="item.description"></div>
                </div>
            </div>

            <hr />
        </div>

    </Layout>

</template>