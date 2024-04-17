<script setup>
import { defineProps } from 'vue'

defineProps(['handleSubmit']);
</script>

<template>
    <div class="alert alert-warning mb-4">
        Введите текущий пароль для подтверждения Вашей учетной записи.
    </div>

    <form @submit.prevent="handleSubmit">
        <div class="row">
            <div class="col-2">
                <label class="form-label mt-1">Текущий пароль</label>
            </div>
            <div class="col-3">
                <input class="form-control" />
            </div>
            <div class="col">
                <button class="btn btn-primary" type="submit">Продолжить</button>
            </div>
        </div>
    </form>
</template>