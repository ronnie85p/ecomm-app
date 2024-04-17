<script setup>
import { defineProps } from 'vue'
import Alert from './../Alert.vue'

const props = defineProps([]);
</script>

<template>
    <Alert design="success">
        <slot />
    </Alert>
</template>