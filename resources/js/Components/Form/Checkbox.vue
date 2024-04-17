<script setup>
import { defineProps } from 'vue'
import Label from './Label.vue'

const props = defineProps(['class', 'name', 'label', 'checked', 'disabled']);
const { name, label, checked, disabled } = props;

</script>

<template>
    <div :class="['form-check', props.class]">

        <input
            class="form-check-input" 
            type="checkbox" 
            :id="name" 
            :name="name"
            :checked="checked"
            :disabled="disabled"
            value="1"
        />

        <Label v-if="label" :for="name">{{ label }}</Label>

    </div>
</template>