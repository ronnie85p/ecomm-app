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

const { user } = defineProps(['user']);
const customerOrders = [
    {
        id: 1,
        num: '0238403809',
        created_at: '2343'
    },
    {
        id: 2,
        num: '0238403809'
    },
    {
        id: 3,
        num: '0238403809'
    }
];
</script>

<template>
        <div class="d-none_">
        <Row>
            <Col v-for="order in customerOrders" :key="order.id" 
                col="3" 
                class="mb-4">
                <div class="card">
                    <div class="card-body">
                        № {{ order.num }}
                    </div>
                </div>
            </Col>
        </Row>

        <Row>
            <Col>
                <a href="#">Перейти к заказам</a>
            </Col>
        </Row>
    </div>
</template>