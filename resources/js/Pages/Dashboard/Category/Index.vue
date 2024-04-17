<script setup>
import { defineProps } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Products/Home.vue'

defineProps(['title']);
</script>

<template>
    <Layout :title="title">
        content
    </Layout>
</template>