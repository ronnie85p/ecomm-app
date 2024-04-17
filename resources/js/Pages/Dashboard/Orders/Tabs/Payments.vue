<script setup>
import { defineProps } from 'vue';
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'
import FormGroupRow from '@/Components/Form/FormGroupRow.vue'
import Button from '@/Components/Form/Button.vue'

const { data } = defineProps(['data']);

const payments = [
    {
        id: 1,
        name: 'Наличными'
    },
    {
        id: 2,
        name: 'Безнал'
    },
    {
        id: 3,
        name: 'Картой'
    },
];

</script>

<template>

    <div class="mb-4">

        <Row>
            <Col v-for="item in payments" :key="item.id" col="2">
                <div class="card card-body" style="height: 70px">
                    {{ item.name }}
                </div>
            </Col>
        </Row>
    </div>

</template>