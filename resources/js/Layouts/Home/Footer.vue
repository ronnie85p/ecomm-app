<script setup>
import { Link } from '@inertiajs/vue3'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
</script>

<template>
    <div class="container p-2">
        <Row>
            <Col>
                <div class="h5">О нас</div>

                <ul class="list-unstyled">
                    <li class="first">
                        <a href="about-us/about-company">О компании</a>
                    </li>
                    <li>
                        <a href="about-us/job">Карьера и Вакансии</a>
                    </li>
                    <li>
                        <a href="about-us/our-works">Наши работы</a>
                    </li>
                    <li>
                        <a href="about-us/partners">Партнёры</a>
                    </li>
                    <li>
                        <a href="about-us/employee-reviews">Отзывы Сотрудников</a>
                    </li>
                    <li class="last">
                        <a href="about-us/customer-reviews">Отзывы Покупателей</a>
                    </li>
                </ul>            
            </Col>

            <Col>
                <div class="h5">Контакты</div>

                <ul class="list-unstyled">
                    <li class="first">
                        <a href="contacts/address">Адрес производства</a>
                    </li>
                    <li>
                        <a href="contacts/support">Служба поддержки клиентов</a>
                    </li>
                    <li>
                        <a href="contacts/collaboration">Сотрудничество</a>
                    </li>
                    <li>
                        <a href="contacts/wholesales">Оптовые продажи</a>
                    </li>
                    <li>
                        <a href="contacts/office">Офис</a>
                    </li>
                    <li class="last">
                        <a href="contacts/press">Пресс-служба</a>
                    </li>
                </ul>            
            </Col>

            <Col>
                <div class="h5">Покупателям</div>
                <ul class="list-unstyled">
                    <li class="first">
                        <a href="buyers/sertifikatyi-i-liczenzii">Сертификаты и лицензии</a>
                    </li>
                    <li>
                        <a href="buyers/compositions">Индивидуальные составы</a>
                    </li>
                    <li>
                        <a href="buyers/coloring">Колорирование изделий</a>
                    </li>
                    <li>
                        <a href="buyers/payments">Любая форма оплаты</a>
                    </li>
                    <li>
                        <a href="buyers/delivery">Доставка и Самовывоз</a>
                    </li>
                    <li>
                        <a href="buyers/research">Лабораторные исследования</a>
                    </li>
                    <li>
                        <a href="buyers/return">Возврат</a>
                    </li>
                    <li>
                        <a href="buyers/guarantees">Наши гарантии</a>
                    </li>
                    <li>
                        <a href="buyers/user-agreement">Пользовательское соглашение</a>
                    </li>
                    <li class="last">
                        <a href="buyers/privacy-policy">Политика конфиденциальности</a>
                    </li>
                </ul>           
            </Col>

            <Col>
                <div class="h5">Мы  в соцсетях</div>
                <ul class="list-unstyled">
                    <li class="first">
                        <a href="https://www.facebook.com/lateres.ru/"><i class="socicon-facebook"></i> Facebook</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Lateres_Sale"><i class="socicon-twitter"></i> Twitter</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/lateres.ru/"><i class="socicon-instagram"></i> Instagram</a>
                    </li>
                    <li class="last">
                        <a href="https://vk.com/lateres"><i class="socicon-vkontakte"></i> Vkontakte</a>
                    </li>
                </ul>
            </Col>
        </Row>
    </div>


    <div class="text-center">
        Copyright © 2024 «LATERES.RU» WealFull, Inc or its affiliates - CA, USA. All rights reserved. by WealFull, Inc
    </div>
</template>