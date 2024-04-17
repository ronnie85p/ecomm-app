<script setup>
import { ref } from 'vue'
import CompanyAddress from './CompanyAddress.vue'

const addressIs = ref(0);
</script>

<template>
    <hr class="border" />

    <div class="h4 mb-4">Организация</div>

    <div class="row mb-2">
        <div class="col-2 fw-bolder">
            <label for="company[name]">Наименование</label>
        </div>
        <div class="col-6">
            <input class="form-control" name="company[name]">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2 fw-bolder">
            <label for="company[inn]">ИНН</label>
        </div>
        <div class="col-2">
            <input class="form-control" name="company[name]">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2 fw-bolder">
            <label for="company[ogrn]">ОГРН</label>
        </div>
        <div class="col-2">
            <input class="form-control" name="company[ogrn]">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2 fw-bolder">
            <label for="company[kpp]">КПП</label>
        </div>
        <div class="col-2">
            <input class="form-control" name="company[kpp]">
        </div>
    </div>

    <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" @change="addressIs = $event.target.checked">
        <label class="form-check-label" for="flexCheckDefault">
            Заполнить адрес
        </label>
    </div>

    <CompanyAddress v-if="addressIs"/>

</template>