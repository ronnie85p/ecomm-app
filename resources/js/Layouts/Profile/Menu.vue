<script setup>
import { Link } from '@inertiajs/vue3'
import linksMap from './linksMap';

const itemGroups = [
    [
        {
            text: 'Мои заказы',
            uri: '/profile/orders'
        },
        {
            text: 'Мои адреса',
            uri: '/profile/addresses'
        },
        {
            text: 'Мои контакты',
            uri: '/profile/contacts'
        },
        {
            text: 'Мои карты',
            uri: '/profile/cards',
            visible: false
        },
    ], [
        {
            text: 'Настройки',
            uri: '/profile/settings'
        },
    ]
];
</script>

<template>
    <ul class="nav flex-column mb-4">
        <li class="nav-item">
            <Link href="/profile" class="nav-link">
                Профиль
            </Link>
        </li>

        <li class="nav-item">
            <Link href="/profile/edit" class="nav-link">
                Редактировать
            </Link>
        </li>
    </ul>

    <ul v-for="(items, idx) in itemGroups" class="nav flex-column">
        <li v-for="item in items" class="nav-item">
            <Link v-if="item.visible !== false" :href="item.uri" class="nav-link">
                {{ item.text }}
            </Link>
        </li>

        <hr v-if="(idx < items.length)" class="border my-2" />
    </ul>
</template>