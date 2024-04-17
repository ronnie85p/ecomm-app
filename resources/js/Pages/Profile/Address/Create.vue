<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'
import Form from './Forms/Index.vue'

defineProps(['data']);
</script>

<template>
    <Layout title="Новый адрес">
        <Form />
    </Layout>   
</template>