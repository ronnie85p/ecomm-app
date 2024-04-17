<script setup>
import { onMounted, ref, defineProps } from 'vue'
import useMaps from './useMaps'

const { config } = defineProps(['config', 'debug']);
const { ready, loading, error, success, maps } = useMaps(config);

onMounted(() => {
    ready();
})
</script>

<template>

    <slot v-if="loading" name="loading">
        <!-- loading... -->
    </slot>

    <slot v-else-if="error" name="error" :error="error">
        {{ error }}
    </slot>

    <slot v-else-if="success" name="default" :maps="maps"/>

</template>