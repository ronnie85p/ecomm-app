<script setup>
import { defineProps } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Home.vue'

defineProps(['order']);
</script>

<template>
    <Head title="Order" />

    <Layout>
        <div class="row">
            <div class="col-2">

            </div>

            <div class="col">
                <h1>Order</h1>

                <div class="card">
                    <div class="card-body">



                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>