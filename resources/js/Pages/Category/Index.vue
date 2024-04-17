<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import Layout from '@/Layouts/Home.vue'

defineProps(['data']);
</script>

<template>
    <Layout>
        <h1 class="h2">Категории</h1>

        <Row>
            <Col v-for="item in data" col="3 mb-4">
                <Link :href="`/categories/${item.id}`" class="text-decoration-none text-secondary">
                    <div class="card card-body shadow-sm border-0">
                        <div class="h5">{{ item.name }}</div>
                    </div>
                </Link>
            </Col>
        </Row>
    </Layout>
</template>