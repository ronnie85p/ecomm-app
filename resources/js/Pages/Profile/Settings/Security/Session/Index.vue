<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'

defineProps(['data']);
</script>

<template>
    <Layout title="История входа">

        <div class="row fw-bolder">
            <div class="col">Устройство / IP</div>
            <div class="col">Местоположение</div>
            <div class="col-2">Время доступа</div>
        </div>

        <hr />

        <div v-for="item in data" >
            <div :class="['row py-2', {'text-secondary': !item.active, 'fw-bolder bg-light': item.current}]">
                <div class="col">{{ item.device }} / {{ item.ip }}</div>
                <div class="col">{{ item.location }}</div>
                <div class="col-2">{{ item.timestamp }}</div>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col text-end">
                <button class="btn btn-outline-danger">Завершить все сессии</button>
            </div>
        </div>
    </Layout>   
</template>