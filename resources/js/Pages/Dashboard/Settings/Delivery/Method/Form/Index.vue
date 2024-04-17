<script setup>
import { defineProps } from 'vue'

defineProps(['data']);
</script>

<template>

    <form>
        <div class="row mb-3">
            <div class="col-12">
                <label class="form-label fw-bolder" for="name">Название</label>
            </div>
            <div class="col">
                <input class="form-control" name="name" :value="data?.name" autocomplete="off" >
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12">
                <label class="form-label fw-bolder" for="description">Описание</label>
            </div>
            <div class="col">
                <textarea class="form-control" name="description" :value="data?.description" autocomplete="off"></textarea>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label class="form-label fw-bolder" for="price">Цена</label>
                <input class="form-control" name="price" :value="data?.price" autocomplete="off" > 
            </div>
            <div class="col">
                <label class="form-label fw-bolder" for="distance_price">Цена, за км</label>
                <input class="form-control" name="distance_price" :value="data?.distance_price" autocomplete="off"> 
            </div>
            <div class="col">
                <label class="form-label fw-bolder" for="distance_price">Бесплатно от (суммы заказа)</label>
                <input class="form-control" name="distance_price" :value="data?.distance_price" autocomplete="off"> 
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