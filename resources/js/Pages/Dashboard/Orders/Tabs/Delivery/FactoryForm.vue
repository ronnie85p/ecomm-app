<script setup>
import { defineProps } from 'vue'
import CustomerAddresses from './Factory/CustomerAddresses.vue'
import AddressForm from './Factory/AddressForm.vue'
import TransportCars from './Factory/TransportCars.vue'

const { data } = defineProps(['data']);
</script>

<template>

    <!-- <CustomerAddresses /> -->
    <AddressForm />

    <hr class="my-4"/>

    <TransportCars />


    <!-- <div>Стоимость</div>
    <div class="card card-body mb-4" style="height: 100px"></div> -->

</template>