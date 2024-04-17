<script setup>
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Home.vue'
</script>

<template>
    <Layout>
        <div class="row">
            <div class="col-8 m-auto">
                <div class="card card-body border-0 shadow">

                   <form>

                        <div class="row">
                            <div class="col-4 fw-bolder">
                                <h1 class="h3">Регистрация</h1>
                            </div>
                            <div class="col">
                                <div class="form-check form-switch float-end fs-5 text-muted">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Компания</label>
                                </div>
                            </div>
                        </div>

                        <hr class="border mb-4"/>

                        <div class="row mb-1">
                            <div class="col-4 fw-bolder text-end">Полное имя (ФИО)</div>
                            <div class="col">
                                <input class="form-control" name="fullname" />
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-4 fw-bolder text-end">Е-мэйл</div>
                            <div class="col">
                                <input class="form-control" name="fullname" />
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4 fw-bolder text-end">Телефон</div>
                            <div class="col">
                                <input class="form-control" name="fullname" />
                            </div>
                        </div>
<!-- 
                        <hr class="border" />

                        <div class="row mb-2">
                            <div class="col-4 fw-bolder text-end">Организация</div>
                            <div class="col">
                                <input class="form-control" name="fullname" />
                            </div>
                        </div> -->

                        
                        <div class="row mb-1">
                            <div class="col-4 text-muted text-end"></div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Я согласен со условиями пользовательского соглашения
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-1 mt-4">
                            <div class="col-4"></div>
                            <div class="col text-start">
                                <button class="btn btn-primary">Зарегистрироваться</button>
                            </div>
                        </div>
                   </form>

                   <hr class="border" />

                   <Link href="/auth/signin">Авторизоваться</Link>
                </div>
            </div>
        </div>
    </Layout>
</template>