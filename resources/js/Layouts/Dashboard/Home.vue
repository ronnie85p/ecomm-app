<script setup>
import { defineProps } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import Breadcrumbs from '@/Layouts/Breadcrumbs.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import Card from '@/Components/Card.vue'
import CardBody from '@/Components/Card/Body.vue'
import buildLinks from '../../Api/buildLinks'

import Container from '@/Layouts/Container.vue'

import Header from './Header.vue'
import Footer from './Footer.vue'
import Body from './Body.vue'

defineProps(['title', 'subtitle']);

const items = [
    {
        active: true,
        text: 'Заказы',
        uri: '/dashboard/orders',
        icon: ``
    },
    {
        text: 'Товары',
        uri: '/dashboard/products',
        icon: ``
    },
    {
        text: 'Категории',
        uri: '/dashboard/categories',
        icon: ``
    },
    {
        text: 'Производители',
        uri: '/dashboard/vendors',
        icon: ``
    },
    {
        text: 'Покупатели',
        uri: '/dashboard/orders',
        icon: ``
    },
];

const currentUri = document.location.pathname;
const links = buildLinks(items, currentUri);
</script>

<template>
    <Head>
        <title>{{ title }}</title>
    </Head>

    <main class="page">
        <Header />
        
        <Body>
            <div class="container">
                <Row>
                    <Col col="3">
                        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
                            <Link href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                                <span class="fs-4">Пупкин Иван Иваныч</span>
                            </Link>

                            <hr>

                            <ul class="nav flex-column mb-auto">
                                <li v-for="item in items" class="nav-item">
                                    <Link :href="item.uri" :class="['nav-link', {'fw-bolder': currentUri.indexOf(item.uri) !== -1}]" aria-current="page">
                                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                        {{ item.text }}
                                    </Link>
                                </li>
                            </ul>

                            <!-- <hr>
                            <div class="dropdown">
                            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>mdo</strong>
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                            </div> -->
                        </div>
                    </Col>

                    <Col>
                        <Breadcrumbs :links="links"/>
    
                        <h1 class="h3 mb-1">
                            <slot name="title">
                                {{ title }}
                            </slot>
                        </h1>
                        
                        <div v-if="subtitle" class="mb-2 text-muted">
                            <slot name="subtitle">{{ subtitle }}</slot>
                        </div>

                        <div class="my-4"></div>

                        <slot />
                    </Col>
                </Row>
            </div>
        </Body>

        <Footer />
    </main>

</template>