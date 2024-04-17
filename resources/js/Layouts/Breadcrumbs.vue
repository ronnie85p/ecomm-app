<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'

defineProps(['links', 'unvisibleCurrent']);
</script>

<template>
    <nav v-if="links.length > 1 || links.length == 1 && !links[0].current" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li v-for="link in links" class="breadcrumb-item">
                <Link :href="link.uri" :class="['text-decoration-none', { 'disabled': link.current }]">
                    {{ link.text }}
                </Link>
            </li>
        </ol>
    </nav>
</template>

<style scoped>
a.disabled {
    color: var(--bs-nav-link-disabled-color);
    pointer-events: none;
    cursor: default;
}
</style>