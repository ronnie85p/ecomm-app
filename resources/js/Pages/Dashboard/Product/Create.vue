<script setup>
import { defineProps } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Dashboard/Home.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import FormGroupLine from '@/Components/Form/FormGroupLine.vue'
import Input from '@/Components/Form/Input.vue'
import Textarea from '@/Components/Form/Textarea.vue'
import CategoryForm from './Forms/Category.vue'
import DescriptionForm from './Forms/Description.vue'
import FeaturesForm from './Forms/Features.vue'
import MediaForm from './Forms/Media.vue'

defineProps([]);
</script>

<template>
    <Layout title="Новый товар" subtitle="New product">

        <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Категория</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Описание</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Характеристики</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Фото</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Цены</a>
                </li>
            </ul>

        <div class="card card-body border border-top-0 rounded-left-top-0" style="border-top-left-radius: 0">

            <CategoryForm />
            <!-- <DescriptionForm />
            <FeaturesForm />
            <MediaForm /> -->

        </div>
    </Layout>
</template>