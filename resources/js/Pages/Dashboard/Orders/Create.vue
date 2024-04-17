<script setup>
// import { defineProps, ref } from 'vue'
// import { Head, Link } from '@inertiajs/vue3'
// import Layout from '@/Layouts/Home.vue'

// import Row from '@/Components/Grid/Row.vue'
// import Col from '@/Components/Grid/Col.vue'

// import RecipientTab from './Tabs/Recipient.vue'
// import DeliveryTab from './Tabs/Delivery.vue'
// import PaymentsTab from './Tabs/Payments.vue'
// import ProductsTab from './Tabs/Products.vue'

// import RecipientViewTab from './Tabs/Views/Recipient.vue'
// import DeliveryViewTab from './Tabs/Views/Delivery.vue'
// import ProductsViewTab from './Tabs/Views/Products.vue'


// defineProps(['order']);

// const fakeData = {
//     fio: 'Попков Федор Петрович',
//     phone: '+7 900 999 9999',
//     company: {
//         name: 'ООО ПОМИДОР-ЭКСПЕРТ',
//         inn: 111111111,
//         ogrn: 22222222,
//         kpp: 3333333,
//         address_line: 'Московская обл., г. Солнечногорск, ул. Баранова, 16, офис 2'
//     },

//     delivery: {
//         name: 'Самовывоз'
//     },

//     products: [],
//     cart_cost: 0.00,
//     cart_cost_format: '0.00 rub',
//     discount: 0.00,
//     discount_format: '0.00 rub',
//     delivery_cost: 0.00,
//     delivery_cost_format: '0.00 rub',
//     tax_rate: 0,
//     tax_cost: 0.00,
//     tax_cost_format: '0.00 rub',
//     cost: 0.00,
//     cost_format: '0.00 rub'
// };

// const data = fakeData;

// const currentTab = ref(0)

// const tabs = [
//     {
//         disabled: false,
//         title: 'Товары',
//         link: 'Выбрать',
//         view: ProductsViewTab,
//         component: ProductsTab
//     },
//     {
//         title: 'Получатель',
//         link: 'Выбрать',
//         view: RecipientViewTab,
//         component: RecipientTab
//     },
//     {
//         disabled: false,
//         title: 'Доставка',
//         link: 'Выбрать',
//         view: DeliveryViewTab,
//         component: DeliveryTab
//     },
//     {
//         disabled: false,
//         title: 'Оплата',
//         component: PaymentsTab
//     }
// ];
</script>

<template>
    <Layout>
        <!-- <AsideMenu /> -->

        <div class="row">
            <div class="col-2">
                <Menu />
            </div>

            <div class="col">
                <BreadCrumbs />

                <h1>Новый заказ</h1>

                <div class="card">
                    <div class="card-body">
                    
                    <!-- <Row> -->
                        <!-- <Col> -->
                        <div v-for="(tab, i) in tabs" :class="['mb-4', { 'mb-4' : currentTab == i}]">
                            <div class="h4 mb-3">
                                <a href="#" @click.prevent="currentTab = i" 
                                    class="text-dark text-decoration-none">{{ tab.title }}</a>
                            </div>

                            <component v-if="currentTab == i":is="tabs[currentTab]?.component"></component>

                            <div v-else>
                                <component :is="tabs[i]?.view" :user="data"></component>

                                <a href="javascript:" @click.prevent="currentTab = i">Изменить</a>
                            </div>

                            <hr class="my-4"/>
                        </div>

                        <nav class="nav mb-4 sticky-top bg-white py-2 d-none">
                            <a v-for="(tab, index) in tabs" 
                                :key="index"
                                :class="['nav-link', { 
                                    'fw-bolder border rounded active': currentTab == index, disabled: tab.disabled 
                                }]" 
                                @click="currentTab = index"
                                aria-current="page" href="javascript:">{{ tab.title }}</a>
                        </nav>
                            
                        <!-- <component :is="tabs[currentTab]?.component"></component> -->

                        <!-- </Col> -->
                        <!-- <Col col="4"> -->
                            <div class="card card-body sticky-top d-none" style="top: 15px">
                                <div class="h3 text-center">Сумма</div>
                                <hr />

                                <div class="row mb-2">
                                    <div class="col-6">
                                        Товары
                                    </div>
                                    <div class="col">
                                        {{ data?.cart_cost_format }}
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        Скидка
                                    </div>
                                    <div class="col">
                                        {{ data?.discount_format }}
                                    </div>
                                </div>

                                <div v-if="!data?.tax_rate">
                                    <div class="row mb-3">
                                        <div class="col fw-bolder">
                                            Без НДС
                                        </div>
                                    </div>
                                </div>

                                <div v-if="data?.tax_rate">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            НДС
                                        </div>
                                        <div class="col">
                                            {{ data?.tax_rate_format }}
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        Доставка
                                    </div>
                                    <div class="col">
                                        {{ data?.delivery_cost_format }}
                                    </div>
                                </div>

                                <div class="row mb-2 mt-2 fs-5">
                                    <div class="col-6">
                                        ИТОГО
                                    </div>
                                    <div class="col">
                                        {{ data?.cost_format }}
                                    </div>
                                </div>

                                <hr class="mb-4"/>

                                <div class="text-center d-flex">
                                    <button class="btn btn-primary btn-lg flex-fill" type="submit">Создать заказ</button>
                                </div>
                            </div>
                        <!-- </Col> -->
                    <!-- </Row> -->

                    
                </div>
            </div>

            </div>
        </div>

        <!-- </AsideContent> -->
    </Layout>
</template>