<script setup>
import { defineProps } from 'vue'

defineProps(['handleSubmit']);
</script>

<template>
    <div class="alert alert-warning mb-4">
        Введите Ваш новый пароль. Требования: 
    </div>

    <form @submit.prevent="handleSubmit">
        <div class="row">
            <div class="col-2">
                <label class="form-label mt-1">Новый пароль</label>
            </div>
            <div class="col-3">
                <input class="form-control" v-focus />
            </div>
            <div class="col">
                <button class="btn btn-primary" type="submit">Изменить</button>
            </div>
        </div>
    </form>
</template>