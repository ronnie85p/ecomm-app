<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Profile/Home.vue'

defineProps(['data']);
</script>

<template>
    <Layout title="Email">
        
        <div class="alert alert-warning mb-4">
            Для изменения Вашего почтового адреса отправьте код на указанный емэйл
        </div>

        <form>
            <div class="row mb-2">
                <div class="col-1">
                    <label class="form-label mt-1" for="email">Email</label>
                </div>

                <div class="col">
                    <input class="form-control" name="email" :value="data?.email" type="email" autocomplete="off" />
                </div>

                <div class="col">
                    <button class="btn btn-primary" type="submit">Отправить код</button>
                </div>
            </div>
        </form>

        <div class="row d-none">
            <div class="col">
                <form>
                    <div class="row">
                        <div class="col-2 text-center m-auto">
                            <label class="form-label">Ваш код</label>
                            <input class="form-control text-center" name="code" />
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </Layout>   
</template>