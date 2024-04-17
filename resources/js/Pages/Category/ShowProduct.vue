<script setup>
import { defineProps } from 'vue';
import Layout from '@/Layouts/Home.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import Button from '@/Components/Form/Button.vue'

defineProps(['data']);
</script>

<template>
    <Layout>
        <Row class="mb-2">
            <Col>
                <h1 class="h3">{{ data.title }}</h1>
            </Col>
        </Row>

        <Row class="mb-4">
            <Col col="5">
                <div class="card card-body overflow-hidden border-0 shadow-sm " style="height: 450px">
                    <img :src="data.image" />
                </div>
            </Col>
            <Col>
                <div class="card card-body border-0 shadow-sm">
                    <div class="h4">Характеристики</div>
                    <Row>
                        <Col class="text-muted">Артикул</Col>
                        <Col></Col>
                    </Row>
                    <Row>
                        <Col class="text-muted">Материал</Col>
                        <Col>-</Col>
                    </Row>
                    <Row>
                        <Col class="text-muted">Цвет</Col>
                        <Col></Col>
                    </Row>
                    <Row>
                        <Col class="text-muted">Размер</Col>
                        <Col></Col>
                    </Row>
                    <Row>
                        <Col class="text-muted">Вес</Col>
                        <Col></Col>
                    </Row>
                    <Row>
                        <Col class="text-muted">Производитель</Col>
                        <Col></Col>
                    </Row>
                    <Row>
                        <Col class="text-muted">Страна</Col>
                        <Col></Col>
                    </Row>

                    <a href="">Перейти к описанию</a>

                </div>
            </Col>

            <Col col="3">
                <div class="card card-body border-0 shadow sticky-top_">
                    <div class="fw-bolder mb-2">
                        <span class="fs-2">1 343 rub</span> / <i class="text-muted">шт.</i>
                    </div>
                    
                    <div>
                        <strike class="text-muted">96.26 ₽ </strike><span class="text-danger">(-1.31%)</span>
                    </div>

                    <hr class="border" />

                    <div>Поддон 150руб (залог)</div>
                    <div>Мин. заказ от 1 шт.</div>

                    <hr class="border" />

                    <form class="d-flex">
                        <Button design="danger" class="btn-lg flex-fill">Добавить в корзину</Button>
                    </form>
                </div>
            </Col>
        </Row>

        <Row>
            <Col col="12">
                <div class="card card-body border-0 shadow-sm">

                    <div class="h4">Доставка</div>
                    <div>
                        <p>Доставка транспортом компании или Самовывоз по адресу производства.</p>
                        <b>Сроки получения</b>
                        <p>
                            В день заказа - если заказ сделан до 14:00, на следующий рабочий день - если заказ сделан после 14:00.
                            В связи с загруженностью производства могут увеличиваться сроки изготовления на отдельные виды изделий до 6-9 дней.
                        </p>
                    </div>

                    <div class="h4">Описание</div>
                    <div v-html="data.content"></div>

                    <div class="h4">Преимущества</div>
                    <div v-html="data.benefits"></div>

                    <div class="h4">Отзовы</div>
                    <div>
                        Еще нет отзывов
                    </div>
                </div>
            </Col>
            <Col></Col>
        </Row>

        <div class="">Другие товары этой категории</div>
        <Row>
            <Col></Col>
        </Row>
    </Layout>
</template>