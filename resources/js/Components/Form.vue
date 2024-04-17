<script setup>
import { defineProps } from 'vue'

const props = defineProps();
const { submit } = props;

</script>

<template>
    <form :class="props.class" @submit.prevent="submit">
        <slot />
    </form>
</template>