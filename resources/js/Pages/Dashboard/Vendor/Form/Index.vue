<script setup>
import { defineProps } from 'vue';

defineProps(['data', 'submit', 'request']);

</script>

<template>
    <form @submit.prevent="submit">
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
            <div class="col-3">
                <label for="country">Страна</label>
            </div>
            <div class="col">
                <select class="form-control" name="country">
                    <option>Russia</option>
                </select>                                
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-3">
                <label for="email">Е-мэйл</label>
            </div>
            <div class="col">
                <input class="form-control" name="email" :value="data?.email">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-3">
                <label for="phone">Телефон</label>
            </div>
            <div class="col">
                <input class="form-control" name="phone" :value="data?.value">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-3">
                <label for="fax">Факс</label>
            </div>
            <div class="col">
                <input class="form-control" name="fax" :value="data?.fax">
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