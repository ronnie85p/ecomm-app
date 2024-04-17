<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from './Layout.vue'
import RecipientForm from './Forms/Recipient.vue'

defineProps(['title', 'data']);
</script>

<template>
    <Layout :title="title" :data="data" page="">
        <template #content>
            <RecipientForm />
        </template>
    </Layout>
</template>