<script setup>
import { defineProps } from 'vue'
import Alert from './../Alert.vue'

const props = defineProps([]);
</script>

<template>
    <Alert design="info">
        <slot />
    </Alert>
</template>