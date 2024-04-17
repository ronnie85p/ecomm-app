<script setup>
import { defineProps } from 'vue';
import Row from './Row.vue'
import Col from './Col.vue'

const props = defineProps();
</script>

<template>
    <Row>
        <Col v-bind="props">
            <slot />
        </Col>
    </Row>
</template>