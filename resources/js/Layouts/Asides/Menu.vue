<script setup>
import { defineProps } from 'vue'
import { Head, Link } from '@inertiajs/vue3'

defineProps(['items', 'title']);
</script>

<template>
    <div v-if="title" class="h3">
        {{ title }}
    </div>

    <ul class="dashboard-menu">
        <li v-for="item in items">
            <Link :href="item.uri">{{ item.text }}</Link>
        </li>
    </ul>
</template>