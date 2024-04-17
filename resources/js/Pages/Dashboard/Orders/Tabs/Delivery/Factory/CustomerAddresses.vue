<script setup>
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'

const customerAddresses = [
    {
        id: 1,
    },
    {
        id: 2,
    },
    {
        id: 3,
    },
];

</script>

<template>
    <div class="h5 mb-2">Адреса</div>

    <Row>
        <Col v-for="address in customerAddresses" :key="address.id" class="mb-2">
            <div class="card card-body">
                {{ address.address_line }}
            </div>
        </Col>
    </Row>

    <hr />
</template>