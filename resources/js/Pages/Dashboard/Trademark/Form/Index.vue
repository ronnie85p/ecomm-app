<script setup>
import { defineProps } from 'vue';

defineProps(['data', 'submit', 'request']);

</script>

<template>
    <form @submit.prevent="submit">

        <input type="hidden" name="vendor_id" :value="data?.vendor?.id" />

        <div class="row mb-4">
            <div class="col-3">
                <label for="name">Производитель</label>
            </div>
            <div class="col">
                <div>{{ data?.vendor?.name }}</div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-3">
                <label for="name">Название</label>
            </div>
            <div class="col">
                <input class="form-control" name="name" :value="data?.name">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-3">
                <label for="description">Описание</label>
            </div>
            <div class="col">
                <textarea class="form-control" name="description">{{ data?.description }}</textarea>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-3"></div>
            <div class="col">
                <button class="btn btn-primary" type="submit">Сохранить</button>
            </div>
        </div>

    </form>
</template>