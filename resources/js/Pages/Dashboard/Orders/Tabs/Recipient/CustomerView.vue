<script setup>
import { ref, defineProps } from 'vue'
import Form from '@/Components/Form.vue'
import FormGroupRow from '@/Components/Form/FormGroupRow.vue'
import Label from '@/Components/Form/Label.vue'
import Input from '@/Components/Form/Input.vue'
import InputGroup from '@/Components/Form/InputGroup.vue'
import Checkbox from '@/Components/Form/Checkbox.vue'
import Button from '@/Components/Form/Button.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import CustomerOrders from './CustomerOrders.vue'

const { user } = defineProps(['user']);
const hasUserCompany = user?.company !== null;
const companyChecked = ref(hasUserCompany);

</script>

<template>

    <FormGroupRow class="mt-4">
        <Col class="">
            <a href="#" class="text-decoration-none text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
                {{ user.username }}
            </a>
        </Col>
        <Col class="text-end">
            <a class="text-decoration-none d-none" href="">Новый клиент</a>
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col class="fw-bolder">
            {{ hasUserCompany ? 'Компания' : 'Частное лицо' }}
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="2" class="text-muted">
            Контактное лицо
        </Col>
        <Col>
            {{ user.fullname }}
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="2" class="text-muted">
            Телефон
        </Col>
        <Col>
            {{ user.phone }} (есть Whatsapp)
        </Col>
    </FormGroupRow>

    <div class="customer-company" v-if="hasUserCompany">
        <FormGroupRow>
            <Col col="2" class="text-muted">
                Организация
            </Col>
            <Col>
                {{ user.company.full_text }}
            </Col>
        </FormGroupRow>

        <FormGroupRow v-if="user.company.address_line">
            <Col col="2" class="text-muted">
                Адрес
            </Col>
            <Col>
                {{ user.company.address_line }}
            </Col>
        </FormGroupRow>
    </div>

    <FormGroupRow>
        <Col>
            <a  href="">Изменить данные</a>
        </Col>
    </FormGroupRow>

    <hr class="my-4 border" />

    <div class="h5 mb-4">Последние заказы</div>
    <CustomerOrders :user="user" />

</template>