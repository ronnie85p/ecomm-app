<script setup>
import { defineProps } from 'vue'

defineProps(['data', 'car', 'zones']);
</script>

<template>

    <div>
        {{ car.name }}
    </div>

    <form class="">
        <div class="row mb-3">
            <div class="col-12">
                <label class="form-label fw-bolder" for="zone_id">Зона</label>
            </div>
            <div class="col">
                <select class="form-control" name="zone_id">
                    <option v-for="item in zones" :selected="item.id == data?.zone_id">{{ item.name }}</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label fw-bolder" for="price">Цена</label>
                <input class="form-control" name="weight" :value="data?.price" autocomplete="off" >
            </div>
            <div class="col">
                <label class="form-label fw-bolder" for="minprice">Мин цена</label>
                <input class="form-control" name="length" :value="data?.minprice" autocomplete="off" >
            </div>
            <div class="col">
                <label class="form-label fw-bolder" for="maxprice">Макс цена</label>
                <input class="form-control" name="length" :value="data?.maxprice" autocomplete="off" >
            </div>
            <div class="col">
                <label class="form-label fw-bolder" for="fixprice">Фикс цена</label>
                <input class="form-control" name="length" :value="data?.fixprice" autocomplete="off" >
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