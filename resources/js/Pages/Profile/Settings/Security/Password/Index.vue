<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'
import CurrentPasswordForm from './Forms/CurrentPassword.vue';
import NewPasswordForm from './Forms/NewPassword.vue'

const currentFormIdx = ref(0);

const forms = [
    {
        component: CurrentPasswordForm,
        handleSubmit() {
            currentFormIdx.value = 1;
        }
    },
    {
        component: NewPasswordForm,
        handleSubmit() {
            currentFormIdx.value = 0;
        } 
    }
];
</script>

<template>
    <Layout title="Изменить пароль">

        <component 
            :is="forms[currentFormIdx].component" 
            :handleSubmit="forms[currentFormIdx].handleSubmit" />

    </Layout>   
</template>