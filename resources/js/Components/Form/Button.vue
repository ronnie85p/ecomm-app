<script setup>
import { defineProps } from 'vue'

defineProps(['design', 'text']);
</script>

<template>
    <button 
        :class="['btn', 'btn-' + (design || 'primary')]" 
        type="button'">
        <slot>{{ text }}</slot>
    </button>
</template>