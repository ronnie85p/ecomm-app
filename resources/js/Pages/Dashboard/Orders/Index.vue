<script setup>
import { defineProps } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Orders/Home.vue'

defineProps(['title']);
</script>

<template>
    <Layout :title="title">
        content
    </Layout>
</template>