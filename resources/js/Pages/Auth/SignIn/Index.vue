<script setup>
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Home.vue'
</script>

<template>
    <Layout>
        <div class="row">
            <div class="col-5 m-auto">
                <div class="card card-body border-0 shadow">
                    <h1 class="h3">Авторизация</h1>
                    <hr class="border mb-4"/>

                   <form>

                        <div class="row mb-1">
                            <div class="col-4 fw-bolder text-end">Е-мэйл</div>
                            <div class="col">
                                <input class="form-control" name="fullname" />
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4 fw-bolder text-end">Пароль</div>
                            <div class="col">
                                <input class="form-control" name="fullname" />
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-4"></div>
                            <div class="col text-start">
                                <button class="btn btn-primary">Войти в систему</button>
                            </div>
                        </div>
                   </form>

                   <hr class="border" />

                   <div class="row">
                        <div class="col">
                            <Link href="/auth/signup" class="display-inline">Регистрация</Link>
                        </div>
                        <div class="col text-end">
                            <Link href="/auth/pswd-forgot" class="display-inline">Забыли пароль?</Link>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </Layout>
</template>