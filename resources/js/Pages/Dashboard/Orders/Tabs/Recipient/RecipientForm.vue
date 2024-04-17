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
import CompanyForm from './CompanyForm.vue';

const { user } = defineProps(['user']);
const hasUser = user !== null;
const companyChecked = ref(false);
const filterOpened = ref(false);

</script>

<template>

    <Form >
        <FormGroupRow>
            <Col col="3" class="fw-bolder">
                Контактное лицо
            </Col>
            <Col>
            </Col>
        </FormGroupRow>

        <FormGroupRow>
            <Col col="3">
                <Label for="lastname">Фамилия</Label>
            </Col>
            <Col>
                <Input name="lastname" :value="user?.lastname"  />
            </Col>
        </FormGroupRow>

        <FormGroupRow>
            <Col col="3">
                <Label for="firstname">Имя</Label>
            </Col>
            <Col>
                <Input name="lastname" :value="user?.firstname"  />
            </Col>
        </FormGroupRow>

        <FormGroupRow>
            <Col col="3">
                <Label for="midname">Отчество</Label>
            </Col>
            <Col>
                <Input name="lastname" :value="user?.midname"  />
            </Col>
        </FormGroupRow>

        <FormGroupRow>
            <Col col="3">
                <Label for="phone">Телефон</Label>
            </Col>
            <Col>
                <Input name="phone" :value="user?.phone"  />
            </Col>
        </FormGroupRow>

        <FormGroupRow>
            <Col col="3">
                <Label for="email">Е-мэйл</Label>
            </Col>
            <Col>
                <Input name="email" :value="user?.email"  />
            </Col>
        </FormGroupRow>

        <FormGroupRow>
            <Col col="3" class="fw-bolder">
                <Label for="company-enabled">Организация</Label>
            </Col>
            <Col>
                <Checkbox 
                    name="company_enabled"
                    @change="companyChecked = !companyChecked" 
                    :checked="companyChecked"
                />
            </Col>
        </FormGroupRow>

        <CompanyForm v-if="companyChecked" :user="user"/>

    </Form>

</template>