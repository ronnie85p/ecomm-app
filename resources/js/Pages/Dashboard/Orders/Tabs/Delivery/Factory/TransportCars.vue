<script setup>
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'

const cars = [
    {
        id: 1
    }
];
</script>

<template>
    <div class="fs-5 mb-2">Транспорт</div>

    <Row>
        <Col v-for="car in cars" :key="car.id" class="mb-2" col="2">
            <div class="card card-body">
                {{ car.name }}
            </div>
        </Col>
    </Row>
</template>