<script setup>
import { defineProps } from 'vue'

defineProps(['text']);
</script>

<template>
    <label class="form-label fw-bolder"> 
        <slot>
            {{ text }}
        </slot>
    </label>
</template>