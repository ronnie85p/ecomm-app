<script setup>
import { defineProps } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import FormGroupLine from '@/Components/Form/FormGroupLine.vue'
import Input from '@/Components/Form/Input.vue'
import Textarea from '@/Components/Form/Textarea.vue'

defineProps([]);
</script>

<template>
            <FormGroupLine
                name="name"
                label="Наименование <span class='text-danger'>*</span>"
                labelCol="4"
                inputCol="8"
            />

            <FormGroupLine
                name="short_description"
                label="Краткое описание <span class='text-danger'>*</span>"
                labelCol="4"
                inputCol="8"
                :component="Textarea"
            />

            <FormGroupLine
                name="description"
                label="Полное описание <span class='text-danger'>*</span>"
                labelCol="4"
                inputCol="8"
                :component="Textarea"
            />

            <FormGroupLine
                name="benefits"
                label="Преимущества"
                labelCol="4"
                inputCol="8"
                :component="Textarea"
            />
</template>