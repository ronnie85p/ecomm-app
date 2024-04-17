<script setup>
import { defineProps } from 'vue'

const { as } = defineProps(['col', 'as']);
const Component =  as || 'div';
</script>

<template>
    <Component :class="[
        'col' + (col ? '-' + col : '')
    ]">
        <slot />
    </Component>
</template>