<script setup>
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'

const items = [
    {
        text: 'Уведомления',
        uri: '/profile/settings/notifications',
        description: 'Уведомления'
    },
    {
        text: 'Изменить пароль',
        uri: '/profile/settings/security/password',
        description: 'Изменить пароль'
    },
    {
        text: 'История входа',
        uri: '/profile/settings/security/sessions',
        description: 'История входа'
    },
    {
        text: 'Настройки входа',
        uri: '/profile/settings/security/login',
        description: 'Двухфакторная аутентификация'
    },
];
</script>

<template>
    <Layout title="Настройки">
        
        <div v-for="item in items">

            <div class="row">
                <div class="col">
                    <Link :href="item.uri" class="text-decoration-none">
                        <div class="fs-5 text-dark">{{ item.text }}</div>

                        <div class="text-muted my-2">{{ item.description }}</div>
                        <div>Перейти</div>
                    </Link>
                </div>
            </div>

            <hr class="my-4" />
        </div>

        <div class="mt-4">
            <Link href="/profile/delete" class="text-danger">Удалить профиль</Link>
        </div>
    </Layout>   
</template>