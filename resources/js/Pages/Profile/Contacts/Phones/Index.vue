<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'

defineProps(['data']);
</script>

<template>
    <Layout title="Телефон">
        Phones
    </Layout>   
</template>