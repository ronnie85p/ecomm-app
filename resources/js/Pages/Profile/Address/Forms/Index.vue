<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'

defineProps(['data']);
</script>

<template>

        <form>

            <div class="row mb-4">
                <div class="col text-muted fst-italic text-decoration-underline">
                    Россия, Московская область
                </div>
            </div>

            <!-- <div class="row mb-4">
                <div class="col text-muted fst-italic text-decoration-underline">
                    Россия, Московская область
                </div>
            </div> -->

            <div class="row mb-2">
                <div class="col-3">
                    <label class="form-label fw-bolder" for="city">Населенный пункт</label>
                </div>
                <div class="col">
                    <input class="form-control" name="city" :value="data?.city" autocomplete="off"/>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-3">
                    <label class="form-label fw-bolder" for="street">Улица / Дом</label>
                </div>
                <div class="col">
                    <input class="form-control" name="street" :value="data?.street" autocomplete="off"/>
                </div>
                <div class="col-2">
                    <input class="form-control" name="building" :value="data?.building" autocomplete="off"/>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-3">
                    <label class="form-label fw-bolder" for="comment">Подробности</label>
                </div>
                <div class="col">
                    <textarea class="form-control" name="comment">{{ data?.comment }}</textarea>
                </div>
            </div>

            <hr class="border my-4" />

            <!-- <div class="fs-5 mb-2">Получатель</div>
            <div class="row mb-2">
                <div class="col-3 fw-bolder">
                    Организация
                </div>
                <div class="col">
                    {{ data.recipient.company.fulltext }}
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-3 fw-bolder">
                    Контакты
                </div>
                <div class="col">
                    {{ data.recipient.fullname }}, {{ data.recipient.phone }}
                </div>
            </div>

            <div class="row mb-2 mt-4">
                <div class="col-3"></div>
                <div class="col">
                    <Link href="/profile/edit" class="me-4">Изменить данные</Link>
                    <Link href="">Новый получатель</Link>
                </div>
            </div> -->

            <!-- <hr class="border my-4" /> -->

            <div class="row mb-2 mt-4">
                <div class="col-3"></div>
                <div class="col">
                    <button class="btn btn-primary" type="submit">Сохранить</button>
                </div>
            </div>
        </form>
</template>