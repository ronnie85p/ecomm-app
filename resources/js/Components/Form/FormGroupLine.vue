<script setup>
import { defineProps } from 'vue'
import FormGroupRow from './FormGroupRow.vue'
import Label from './Label.vue'
import Input from './Input.vue'
import Row from './../Grid/Row.vue'
import Col from './../Grid/Col.vue'

const props = defineProps([
    'name', 
    'label', 
    'labelCol', 
    'labelProps', 
    'inputCol', 
    'inputProps',
    'component'
]);

const Component = props.component || Input;
</script>

<template>
    <FormGroupRow>
        <Col :col="labelCol">
            <Label :for="name" v-html="label" class="mt-1"></Label>
        </Col> 
        <Col :col="inputCol">
            <slot v-bind="props">
                <Component :name="name" v-bind="inputProps"/>     
            </slot>
        </Col>
    </FormGroupRow>
</template>