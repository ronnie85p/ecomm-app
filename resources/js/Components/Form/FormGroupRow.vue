<script setup>
import { defineProps } from 'vue'
import FormGroup from './FormGroup.vue'
import Row from './../Grid/Row.vue'

defineProps([]);
</script>

<template>
    <FormGroup>
        <Row>
            <slot />
        </Row>
    </FormGroup>

</template>

<style scoped>

</style>