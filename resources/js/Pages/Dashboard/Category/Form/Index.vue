<script setup>
import { ref, onMounted, defineProps, defineEmits } from 'vue'
import LoadContent from '@/Components/LoadContent.vue'
import Category from '@/Api/Controllers/Category'
import { useRequest } from '@/Components/Hooks/Http'

defineProps(['data', 'submit']);

const requestCategories = useRequest();

// const Categories = {
//     request() {
//         return Category.getMany();
//     },

//     loading() {
//         return 'loading...';
//     },

//     failure() {
//         return 'failure.';
//     }
// };

const getCategories = () => {
    requestCategories.process(() => {
        return Category.getMany();
    })
}

onMounted(() => {
    getCategories();
})
</script>

<template>

<form @submit.prevent="submit">

    <div class="row mb-2">
        <div  class="col-3">
            <label for="">Категория</label>
        </div>
        <div class="col-4">
            <select class="form-control" name="category_id">
                <option value="0">Главное меню</option>
                <option v-for="item in requestCategories.response.value?.data" :value="item.id">
                    {{ item.name }}
                </option>
            </select>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="">Название</label>
        </div>
        <div class="col">
            <input class="form-control" name="name" :value="data?.name">
        </div>
    </div>

    <div class="row mb-4">
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