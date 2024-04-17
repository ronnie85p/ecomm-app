<script setup>
import { defineProps } from 'vue'

defineProps(['data']);
</script>

<template>
        <!-- 'polygon' => 0,
        'polygon_coords' => [], 
        'polygon_options' => [],
        'polygon_properties' => '{}',
        'active' =>1, -->
    <form class="">
        <div class="row mb-3">
            <div class="col-12">
                <label class="form-label fw-bolder" for="name">Зона</label>
            </div>
            <div class="col">
                <input class="form-control" name="name" :value="data?.name" autocomplete="off" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label fw-bolder" for="distanceof">Расстояние от, км</label>
                <input class="form-control" name="distanceof" :value="data?.distanceof" autocomplete="off" >
            </div>
            <div class="col">
                <label class="form-label fw-bolder" for="distanceup">Расстояние до, км</label>
                <input class="form-control" name="distanceup" :value="data?.distanceup" autocomplete="off" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label class="form-label fw-bolder" for="description">Описание</label>
            </div>
            <div class="col">
                <textarea class="form-control" name="description">{{ data?.description }}</textarea>
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