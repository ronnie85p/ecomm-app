<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from './Layout.vue'

defineProps(['title', 'data', 'payments']);

const _data = {
    delivery_id: 1,
    payment_id: 1,
    delivery: {
        name: 'Доставка завода "Латерес"'
    },
    delivery_datetime: '12.09.2024 12:30',
    address_id: 1,
    address: {
        fulltext: 'Московская обл., г. Солнечногорск, ул. Баранова, 16',
        recipient: {
            fullname: 'Pupkin Ivan Ivanovich',
            phone: '+7 900 899 4563',
            // messengers: [
            //     {
            //         name: 'Whatsapp',
            //         url: ''
            //     },
            //     {
            //         name: 'Telegram',
            //         url: ''
            //     }
            // ],
            company: {
                fulltext: 'ООО ПОМИДОР-ЭКСПЕРТ ИНН ОГРН КПП'
            }
        }
    }
};
</script>

<template>
    <Layout :data="data" page="ordering">

        <form>

            <div class="row">
                <div class="col">
                    <div class="card card-body mb-2">
                        <div class="fs-5 fw-bolder mb-2">{{ _data.delivery.name }}</div>

                        <div class="row mb-1">
                            <div class="col-4 fw-bolder text-muted">
                                Получатель
                            </div>
                            <div class="col">
                                {{  _data.address.recipient.company.fulltext }}
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-4 fw-bolder text-muted">
                                Контактное лицо
                            </div>
                            <div class="col">
                                {{ _data.address.recipient.fullname }}
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-4 fw-bolder text-muted">
                                Телефон
                            </div>
                            <div class="col">
                                {{ _data.address.recipient.phone }} <i class="text-muted">(Whatsapp, Telegram)</i>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-4 fw-bolder text-muted">
                                Адрес доставки
                            </div>
                            <div class="col">
                                {{ _data.address.fulltext }}
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-4 fw-bolder text-muted">
                                Дата и время получения
                            </div>
                            <div class="col">
                                {{ _data.delivery_datetime }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <Link href="/checkout/delivery">Изменить</Link>
                            </div>
                        </div>

                        <hr class="my-4"/>

                        <div class="fs-5 fw-bolder mb-1">Оплата</div>
                        <div class="row mb-4">
                            <div class="col">
                                <div v-for="(item, index) in payments" class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="delivery_id" :id="`payment-${item.id}`" 
                                        :checked="item.id == data.payment_id"
                                        @change="currentIndex = index">
                                    <label class="form-check-label" :for="`payment-${item.id}`">
                                        {{ item.name }}
                                    </label>
                                </div>
                            </div>
                        </div> 

                    </div>

                    <div class="row">
                        <div class="col text-end">
                            <button class="btn btn-secondary" type="button">Коммерческое предложение</button>
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
                            <div class="col">Доставка</div>
                            <div class ="col">
                                {{ data.delivery_cost }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">Итого</div>
                            <div class="col">{{ data.total.cost + data.delivery_cost }}</div>
                        </div>

                        <hr />
                        <div class="d-flex">
                            <button class="btn btn-primary btn-lg flex-fill" type="submit">Сделать заказ</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </Layout>
</template>