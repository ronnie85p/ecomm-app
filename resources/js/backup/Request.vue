<script setup>
import { defineProps, onMounted } from 'vue';
import { useRequest } from './Components/Hooks/Http';

const props = defineProps(['route']);
const request = useRequest();

onMounted(() => {
    console.log('request', props.route);
    if (props.route && props.route.meta?.request) {
        request.process(() => props.route.meta.request(props.route));
    }
});
</script>

<template>

    <div v-if="request.loading.value">
        loading...
    </div>

    <div v-if="!request.loading.value">
        <slot />
    </div>
</template>