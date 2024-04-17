<script setup>
import { defineProps } from 'vue'

defineProps(['data']);
</script>

<template>
    <form class="">
        <div class="row mb-3">
            <div class="col-12">
                <label class="form-label fw-bolder" for="name">Название</label>
            </div>
            <div class="col">
                <input class="form-control" name="name" :value="data?.name" autocomplete="off" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label fw-bolder" for="weight">Грузоподьемность</label>
                <input class="form-control" name="weight" :value="data?.weight" autocomplete="off" >
            </div>
            <div class="col">
                <label class="form-label fw-bolder" for="length">Длина борта</label>
                <input class="form-control" name="length" :value="data?.length" autocomplete="off" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label class="form-label fw-bolder" for="description">Описание</label>
            </div>
            <div class="col">
                <textarea class="form-control" name="description" :value="data?.description" autocomplete="off"></textarea>
            </div>
        </div>

        <hr />

        <div class="row mb-2">
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Сохранить</button>
            </div>
        </div>
    </form>
</template>