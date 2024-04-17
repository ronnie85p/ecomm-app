<script setup>
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'
</script>

<template>
    <Layout title="Профиль" :buildLinksOptions="{ excludeCurrent: true }">
        Profile
    </Layout>   
</template>