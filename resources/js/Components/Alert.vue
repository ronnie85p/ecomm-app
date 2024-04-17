<script setup>
import { defineProps } from 'vue'

const props = defineProps(['design']);
const design = props.design ? `alert-${props.design}` : ''
</script>

<template>
    <div :class="['alert', design ]">
        <slot />
    </div>
</template>