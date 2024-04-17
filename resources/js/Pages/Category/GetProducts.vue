<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import Layout from '@/Layouts/Home.vue'
import Breadcrumbs from '@/Layouts/Breadcrumbs.vue'

defineProps(['categories', 'subcategories', 'category', 'links', 'data']);
</script>

<template>
    <Layout>

        <Row>
            <Col col="3">
                <div class="h4">Категории</div>

                <ul> 
                    <li v-for="item in categories">
                        <span v-if="item.categories" class="fw-bolder">{{ category.name }}</span>
                        <Link v-else :href="`/categories/${item.id}`">{{ item.name }}</Link>
                        
                        <ul v-if="item.categories">
                            <li v-for="item in item.categories">
                                <Link :href="`/categories/${item.id}`">{{ item.name }}</Link>
                            </li>
                        </ul>
                    </li>               
                </ul>

            </Col>

            <Col>
                <Breadcrumbs :links="links" />

                <h1 class="h3">{{ category.name }}</h1>

                <div class="row">
                    <div v-for="item in data" class="col-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="d-flex bg-white" style="height: 200px; background: #dddddd">
                                <img :src="item.image"j class="m-auto" height="100%"/>
                            </div>
                            <div class="card-body">
                                <div class="h5">
                                    <Link :href="`/categories/${item.category_id}/${item.id}`" class="text-decoration-none text-dark">
                                        {{ item.title }}
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </Col>
        </Row>

    </Layout>
</template>