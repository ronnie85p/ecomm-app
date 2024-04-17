<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'

defineProps(['items', 'title']);
</script>

<template>
    <div class="card card-body border-0 py-4 products-row mb-4">

        <div class="h3 text-center mb-4">{{ title }}</div>

        <Row>
            <Col v-for="item in items" class="col-3" :key="item.id">
                <Link :href="`/categories/${item.id}`" class="text-decoration-none text-dark">
                    <div class="card border-0 overflow-hidden">
                        <div class="d-flex align-items-center bg-white">
                            <img :src="item.image" width="100%" class="rounded"/>
                        </div>

                        <div class="card-body">
                            <div class="h5">{{ item.title }}</div>
                            <div class="fs-5">{{ item.price_format }} / {{ item.measure_unit }}</div>
                        </div>
                    </div>
                </Link>
            </Col>
        </Row>

    </div>
</template>

<style scoped>
.products-row .row .col:hover {
    color: blue
}
</style>