<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue'

defineProps(['text']);
</script>

<template>
    <Link href="/" class="fw-bolder d-flex align-items-center my-2 my-lg-0 me-lg-auto text-decoration-none fs-3 text-danger">
        <slot>
            {{ text }}
        </slot>
        <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg> -->
    </Link>
</template>