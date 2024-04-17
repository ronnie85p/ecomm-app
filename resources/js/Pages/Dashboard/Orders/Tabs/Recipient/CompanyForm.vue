<script setup>
import { ref, defineProps } from 'vue'
import FormGroupRow from '@/Components/Form/FormGroupRow.vue'
import Label from '@/Components/Form/Label.vue'
import Input from '@/Components/Form/Input.vue'
import Checkbox from '@/Components/Form/Checkbox.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import CompanyAddressForm from './CompanyAddressForm.vue';

const addressChecked = ref(false);
const { user } = defineProps(['user']);
</script>

<template>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[name]">Наименование</Label>
        </Col>
        <Col>
            <Input name="company[name]" :value="user?.company?.name" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[inn]">ИНН</Label>
        </Col>
        <Col>
            <Input name="company[inn]" :value="user?.company?.inn" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[ogrn]">ОГРH</Label>
        </Col>
        <Col>
            <Input name="company[ogrn]" :value="user?.company?.ogrn" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[kpp]">КПП</Label>
        </Col>
        <Col>
            <Input name="company[kpp]" :value="user?.company?.kpp" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[phone]">Телефон</Label>
        </Col>
        <Col>
            <Input name="company[phone]" :value="user?.company?.phone" />
        </Col>
    </FormGroupRow>


    <FormGroupRow>
        <Col col="3" class="fw-bolder">
            <Label for="address-enabled">Юридический адрес</Label>
        </Col>
        <Col>
            <Checkbox 
                name="address_enabled"
                @change="addressChecked = !addressChecked" 
                :checked="addressChecked"
            />
        </Col>
    </FormGroupRow>

    <CompanyAddressForm v-if="addressChecked" :user="user" />
    
</template>