<script setup>
import { defineProps } from 'vue'

const props = defineProps(['class']);
</script>

<template>
    <div :class="['input-group', props.class]">
        <slot />
    </div>
</template>