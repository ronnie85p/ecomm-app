<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'

const { title } = defineProps(['title']);

const options = {
    title, 
    menu: {
        items: [
            { text: 'Заказы', uri: '/dashboard/orders' },
            { text: 'Товары', uri: '/dashboard/products' },
            { text: 'Оплата', uri: '/dashboard/payments' },
            { text: 'Сообщения', uri: '/dashboard/messages' },
            { text: 'Настройки', uri: '/dashboard/settings' },
        ]
    },

    // breadcrumbs: [{text: 'Профиль', uri: '/dashboard'}]
}

const items = [
    { text: 'Доставка',  uri: '/dashboard/settings/deliveries' },
    { text: 'Методы оплаты',  uri: '/dashboard/settings/payments' },
    { text: 'Статусы заказа',  uri: '/dashboard/settings/orderstatus' }
];

</script>

<template>
    <Layout :options="options">
        <div v-for="item in items" :key="item">
            <Link :href="item.uri">{{ item.text }}</Link>

            <hr />
        </div>
    </Layout>
</template>