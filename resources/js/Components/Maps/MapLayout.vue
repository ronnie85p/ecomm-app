<script setup>
import { onMounted, ref, defineProps } from 'vue'
import useMap from './useMap'

const props = defineProps(['maps', 'options', 'height', 'style', 'class', 'ready']);
const { maps, options, height, style, ready } = props;
const defaultHeight = height  || '400px';

const mapRef = ref(null);
const { initialize, initializing, success, error, setContainer, map } = useMap({
    maps,
    options
});
    
const mapInit = async () => {
    const container = mapRef.value;
    setContainer(container);
    initialize();
}

const prop = 'prop'

onMounted(() => {
    mapInit();
})
</script>

<template>
    <div class="map-layout" ref="mapRef"
        :class="['border bg-sliver', 'overflow-hidden', props.class]" 
        :style="[{ height }, style]">

        <slot v-if="initializing" name="initializing" />
        
        <slot v-else-if="error" name="error" :error="error">
            {{ error }}
        </slot>

        <slot v-else-if="success" name="default" :map="map"></slot>
    </div>
</template>