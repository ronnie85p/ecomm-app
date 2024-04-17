<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Home.vue'

defineProps(['title', 'data']);
</script>

<template>
    <Layout :options="{ title }">
        <h1 class="h2">{{ title }}</h1>

        <div class="row">
            <div class="col">
                <div class="row mb-2">
                    <div class="col">
                        <input class="form-control" placeholder="Search product(s)"/>
                    </div>
                </div>

                <div class="card card-body">

                    <div class="card-header bg-white">
                        <input type="checkbox">Выбрать все
                    </div>

                    <div class="card-body">
                        <div v-for="item in data.items" class=" mb-2">
                            <div class="row">
                                <div class="col-2">
                                    <div class="border rounded" style="height: 50px">
                                        {{ item.image }}
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="fs-5">{{ item.name }}</div>
                                </div>

                                <div class="col -2 text-end">
                                    <div>Price: {{ item.price }}</div>
                                    <div><input class="form-control" :value="item.count" /></div>
                                    <div class="fw-bolder">{{ item.cost }}</div>
                                </div>
                            </div>

                            <hr />
                        </div>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col">
                        <Link href="" class="btn btn-secondary">Рассчитать доставку</Link>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-body sticky-top">
                    <div class="h3 mb-4">Сумма</div>
                      
                    <div class="row mb-2">
                        <div class="col">Товары</div>
                        <div class="col">{{ data.total.cart_cost }}</div>
                    </div>

                    <div class="row mb-2" v-if="data.total.discount_value">
                        <div class="col">Скидка</div>
                        <div class="col text-danger">-{{ data.total.discount_value }}</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">НДС</div>
                        <div class ="col">
                            <span v-if="data.total.tax_cost">{{ data.total.tax_cost}}</span>
                            <span v-else>Без НДС</span>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">Итого</div>
                        <div class="col">{{ data.total.cost }}</div>
                    </div>

                    <hr />
                    <div class="d-flex">
                        <Link href="/checkout" class="btn btn-primary btn-lg flex-fill">Сделать заказ</Link>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>