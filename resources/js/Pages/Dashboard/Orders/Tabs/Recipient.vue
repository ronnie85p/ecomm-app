<script setup>
import { ref } from 'vue'
import Form from '@/Components/Form.vue'
import FormGroupRow from '@/Components/Form/FormGroupRow.vue'
import Label from '@/Components/Form/Label.vue'
import Input from '@/Components/Form/Input.vue'
import InputGroup from '@/Components/Form/InputGroup.vue'
import Checkbox from '@/Components/Form/Checkbox.vue'
import Button from '@/Components/Form/Button.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import CustomerSearchForm from './Recipient/CustomerSearchForm.vue'
import CustomerView from './Recipient/CustomerView.vue'
import RecipientForm from './Recipient/RecipientForm.vue'
import User from '@/Api/User'

const userData = {
    username: 'U8080808',
    firstname: 'Пупкин',
    lastname: 'Федор',
    midname: 'Михалыч',
    email: 'user@example.com',
    phone: '+7 900 990 9090',
    company: {
        name: 'OOO ПОМИДОР-ЭКСПЕРТ',
        ogrn: 230283028,
        inn: 2343,
        kpp: 23434,
        phone: '',
        address_country: 'Россия',
        address_region: 'Московская область',
        address_city: 'г. Солнечногорск',
        address_street: 'ул. Баранова',
        address_corpus: '',
        address_building: '16',
        address_office: '2'
    },
    company_: null
};

const _user = new User(userData);
_user.fullname = _user.getFullName();
_user.company.full_text = _user.getCompanyFullText();
_user.company.address_line = _user.getCompanyAddressLine();

const user = null;//_user;

const hasUser = user !== null;
const hasUserCompany = user?.company !== null;
const companyChecked = ref(hasUserCompany);
const searchFormShown = ref(false);

</script>

<template>
    <Row class="mb-4">
        <Col class="">
            <Button design="light me-2" @click="searchFormShown = true" v-if="!searchFormShown">
                Выбрать получателя
            </Button>

            <Button design="light" @click="" v-if="user">
                Новый получатель
            </Button>
        </Col>
    </Row>

    <CustomerSearchForm v-if="searchFormShown" @click-close="searchFormShown = false"/>

    <!-- <Col v-if="user" class="text-start">
        <a href="#">Новый клиент</a>
    </Col> -->

    <!-- <hr class="mt-2 mb-4" /> -->

    <CustomerView v-if="user" :user="user" />

    <RecipientForm v-else />

</template>