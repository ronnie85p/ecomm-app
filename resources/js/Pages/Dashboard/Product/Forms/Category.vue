<script setup>
import { defineProps } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import FormGroupLine from '@/Components/Form/FormGroupLine.vue'
import Input from '@/Components/Form/Input.vue'
import Form from '@/Components/Form.vue'
import Textarea from '@/Components/Form/Textarea.vue'

defineProps([]);
</script>

<template>
    <Form>
        <FormGroupLine
                name="category_id"
                label="Категория <span class='text-danger'>*</span>"
                labelCol="4"
                inputCol="4"
            />   

            <FormGroupLine
                name="vendor_id"
                label="Производитель <span class='text-danger'>*</span>"
                labelCol="4"
                inputCol="4"
            />

            <FormGroupLine
                name="trademark_id"
                label="Торговая марка <span class='text-danger'>*</span>"
                labelCol="4"
                inputCol="4"
            />

            <FormGroupLine
                name="country"
                label="Страна производства <span class='text-danger'>*</span>"
                labelCol="4"
                inputCol="4"
            />

            
    </Form>
</template>