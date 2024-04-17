<script setup>
import { ref, onMounted, defineProps, defineEmits } from 'vue'
import { useRequest } from '@/Components/Hooks/Http'

defineProps(['setup']);

const request = useRequest();

onMounted(() => {
    console.log('setup', setup)
    if (setup.request) {
        request.process(setup.request);
    }
});
</script>

<template>
    <div v-if="request.loading.value">
        {{ setup.loading && setup.loading(request) }}
    </div>

    <div v-if="!request.loading.value">
        <div v-if="!request.errors.value">
            {{ setup.loaded && setup.loaded(request.response.value, request) }}
            <slot />
        </div>

        <div v-if="request.errors.value">
            {{ setup.failure && setup.failure(request.errors.value, request) }}
        </div>
    </div>
</template>