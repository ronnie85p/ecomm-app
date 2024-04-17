<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue'

defineProps([]);
</script>

<template>
    <form class="flex-fill col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto me-4" role="search">
        <input type="search" class="form-control rounded-start-0" placeholder="Search..." aria-label="Search" style="">
    </form>
</template>