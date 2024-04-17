<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'

defineProps(['data']);
</script>

<template>
    <Layout title="Мои адреса">

        <template #panel>
            <div class="row">
                <div class="col">
                    <input class="form-control" />
                </div>
                <div class="col text-end">
                    <Link href="/profile/addresses/create" class="btn btn-primary" type="button">Добавить</Link>
                </div>
            </div>
        </template>
       
        <div v-for="item in data"  class="">
            <div class="row">
                <div class="col">
                    <Link :href="`/profile/addresses/${item.id}/edit`" class="text-decoration-none mb-2 fs-5 d-block">
                        {{ item.fulltext }}
                    </Link>

                    <div>Получатель: {{ item.recipient.company.fulltext }}</div>
                    <div>Контакты: {{ item.recipient.fullname }}, {{ item.recipient.phone }}</div>

                    <div class="row mt-2">
                        <div class="col">
                            <span v-if="item.by_default" class="text-warning">По умолчанию</span>
                            <a v-else href="" class="text-secondary">Сделать по умолчанию</a>       
                        </div>
                    </div>
                </div>
                <div class="col-2 text-end">
                    <a href="" class="text-danger">Удалить</a>    
                </div>
            </div>

            <hr class="my-4 border"/>
        </div>

    </Layout>   
</template>