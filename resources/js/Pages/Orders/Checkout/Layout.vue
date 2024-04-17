<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Home.vue'
import RecipientForm from './Forms/Recipient.vue'

defineProps(['title', 'data', 'page']);

const links = [
    {
        text: 'Получатель',
        page: ''
    },
    {
        text: 'Доставка',
        page: 'delivery'
    },
    {
        text: 'Оформление',
        page: 'ordering'
    },
];

</script>

<template>
    <Layout>
        <div class="row mb-4">
            <div class="col">
                <Link href="/cart">К корзине</Link>
            </div>
        </div>

        <h1 class="h2">Оформление заказа</h1>

        <div class="card card-body mb-2">
            <ul class="nav">
                <li v-for="link in links" class="nav-item me-3">
                    <Link :class="['text-dark text-decoration-none fs-5', {'fw-bolder': link.page == page}]"
                        :href="`/checkout/${link.page}`">
                        {{ link.text }}
                    </Link>
                </li>
            </ul>
        </div>

        <slot name="default">
            <div class="card card-body">
                <slot name="content" />
            </div>
        </slot>

    </Layout>
</template>