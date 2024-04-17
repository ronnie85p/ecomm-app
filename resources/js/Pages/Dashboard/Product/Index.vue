<script setup>
import { defineProps } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'
import Button from '@/Components/Form/Button.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import Form from '@/Components/Form.vue'
import Input from '@/Components/Form/Input.vue'

defineProps([]);
</script>

<template>
    <Layout title="Товары" subtitle="Все товары">
        <Row class="mb-2">
            <Col col="6">
                <Form>
                    <Input placeholder="Искать в товарах..." />
                </Form>
            </Col>
            <Col class="text-end">
                <Link href="/dashboard/products/create" class="btn btn-primary">Добавить</Link>
            </Col>
        </Row>
        
        <div class="card card-body border" style="">
            <div class="text-muted text-center">
                Нет товаров
            </div>
        </div>
    </Layout>
</template>