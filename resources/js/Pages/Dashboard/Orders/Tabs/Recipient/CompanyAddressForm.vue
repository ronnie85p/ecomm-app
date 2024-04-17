<script setup>
import FormGroupRow from '@/Components/Form/FormGroupRow.vue'
import Label from '@/Components/Form/Label.vue'
import Input from '@/Components/Form/Input.vue'
import Checkbox from '@/Components/Form/Checkbox.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
</script>

<template>
    <FormGroupRow>
        <Col col="3">
            <Label for="company[address_country]">Страна</Label>
        </Col>
        <Col>
            <Input name="company[address_country]" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[address_region]">Регион</Label>
        </Col>
        <Col>
            <Input name="company[address_region]" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[address_city]">Населенный пункт</Label>
        </Col>
        <Col>
            <Input name="company[address_city]" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[address_street]">Улица</Label>
        </Col>
        <Col>
            <Input name="company[address_street]" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[address_building]">Строение</Label>
        </Col>
        <Col col="2">
            <Input name="company[address_building]" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[address_corpus]">Корпус</Label>
        </Col>
        <Col col="2">
            <Input name="company[address_corpus]" />
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="3">
            <Label for="company[address_office]">Офис</Label>
        </Col>
        <Col col="2">
            <Input name="company[address_office]" />
        </Col>
    </FormGroupRow>

</template>