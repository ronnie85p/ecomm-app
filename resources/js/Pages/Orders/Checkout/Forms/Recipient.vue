<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import  PrivateForm from './Recipient/Private.vue'
import  CompanyForm from './Recipient/Company.vue'

const currentForm = ref(0);

const forms = [
    PrivateForm,
    CompanyForm
];

</script>

<template>

    <form>
        <div class="form-check form-switch mb-4">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" @change="currentForm = $event.target.checked ? 1 : 0">
            <label class="form-check-label" for="flexSwitchCheckDefault">Юридическое лицо</label>
        </div>

        <div class="row mb-2">
            <div class="col-2 fw-bolder">
                <label for="name">ФИО<span class="text-danger">*</span></label>
            </div>
            <div class="col-6">
                <input class="form-control" name="name" autocomplete="off">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-2 fw-bolder">
                <label for="mobilephone">Телефон</label>
            </div>
            <div class="col-2">
                <input class="form-control" name="mobilephone" autocomplete="off">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-2 fw-bolder">
                <label for="email">E-mail<span class="text-danger">*</span></label>
            </div>
            <div class="col-6">
                <input class="form-control" name="email" autocomplete="off">
                <span class="form-text">Нужен для регистрации</span>
            </div>
        </div>

        <component :is="forms[currentForm]" />

        <hr />

        <div class="text-end">
            <Link href="/checkout/delivery" class="btn btn-primary">Продолжить</Link>
        </div>

    </form>

</template>