<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'

defineProps(['data']);

const items = [
    {
        text: 'Телефон',
        uri: '/profile/contacts/phones',
        value: '+8 838 830 8450'
    },

    {
        text: 'Е-мэйл',
        uri: '/profile/contacts/email',
        value: 'user@domain.com'
    }
];
</script>

<template>
    <Layout title="Мои контакты">
        
        <div v-for="item in items">

            <div class="row">
                <div class="col">
                    <Link :href="item.uri" class="text-decoration-none">
                        <div class="fs-5 text-dark">{{ item.text }}</div>

                        <div class="text-muted my-2">{{ item.value }}</div>
                        <div>Изменить</div>
                    </Link>
                </div>
            </div>

            <hr class="my-4" />
        </div>

    </Layout>   
</template>