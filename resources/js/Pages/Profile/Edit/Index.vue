<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'
import Button from '@/Components/Form/Button.vue'
import Label from '@/Components/Form/Label.vue';
import Input from '@/Components/Form/Input.vue';
import Col from '@/Components/Grid/Col.vue';
import RowLine from '@/Components/Grid/RowLine.vue';
import FormGroupRow from '@/Components/Form/FormGroupRow.vue'

defineProps(['data']);
</script>

<template>
    <Layout title="Профиль" subtitle="Редактирование" 
        :buildLinksOptions="{ excludeCurrent: true }">
        
        <FormGroupRow>
            <Col :as="Label" for="fullname" text="Полное имя (ФИО)" col="2" class="mt-1" />

            <Col>
                <Input name="fullname" />
            </Col>
        </FormGroupRow>
<!-- 
        <FormGroupRow>
            <Col :as="Label" for="fullname" text="Fullname" col="2" class="mt-1" />

            <Col>
                <Input name="fullname" />
            </Col>
        </FormGroupRow> -->

        <!-- <FormGroupRow 
            labelCol="2"

            :labelProps="{
                for: 'company[name]',
                text: 'Организация'
            }"

            :inputProps="{
                name: 'company[name]'
            }"                
        />

        <FormGroupRow 
            labelCol="2"
            inputCol="3"

            :labelProps="{
                for: 'company[inn]',
                text: 'ИНН'
            }"

            :inputProps="{
                name: 'company[inn]'
            }"                
        />

        <FormGroupRow 
            labelCol="2"
            inputCol="3"

            :labelProps="{
                for: 'company[ogrn]',
                text: 'ОГРН(ИП)'
            }"

            :inputProps="{
                name: 'company[ogrn]'
            }"                
        />

        <FormGroupRow 
            labelCol="2"
            inputCol="3"

            :labelProps="{
                for: 'company[kpp]',
                text: 'КПП'
            }"

            :inputProps="{
                name: 'company[kpp]'
            }"                
        />

        <FormGroupRow 
            labelCol="2"

            :labelProps="{
                for: 'company[address][fulltext]',
                text: 'Адрес'
            }"

            :inputProps="{
                name: 'company[address][fulltext]'
            }"                
        />

        <FormGroupRow>
            <Label class="col" />
        </FormGroupRow> -->

        <hr />

        <FormGroupRow>
            <Col col="2"></Col>
            <Col>
                <Button text="Сохранить" />
            </Col>
        </FormGroupRow>

    </Layout>   
</template>