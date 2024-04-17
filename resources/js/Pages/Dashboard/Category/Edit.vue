<script setup>
// import { onMounted, ref } from 'vue'
// import { useRoute } from 'vue-router'
// import Page from '@/Components/Layout/Page.vue'
// import AsideMenu from '@/Components/Dashboard/Categories/Menu.vue'
// import AsideContent from '@/Components/Layout/AsideContent.vue'
// import Form from './Form/Index.vue'
// import Category from '@/Api/Controllers/Category'
// import { useRequest } from '@/Components/Hooks/Http'

// document.title = 'Категория'

// const route = useRoute();
// const requestForm = useRequest();
// const requestCategory = useRequest();

// const submitForm = (e) => {
//     requestForm.process(() => 
//         Category.updateFromForm(route.params.id, e.target));
// }

// const getCategory = () => {
//     requestCategory.process(() => 
//         Category.get(route.params.id))
// };

// onMounted(() => {
//     getCategory();
// });
</script>

<template>
    <Page>
        <AsideMenu />

        <AsideContent>
                <h1>Категория</h1>

                <div class="card">
                    <div class="card-body">

                        <div v-if="requestCategory.loading.value">
                            Loading ...
                        </div>

                        <Form 
                            :data="requestCategory.response.value?.data" 
                            @submit="submitForm" 
                        />

                    </div>
                </div>

        </AsideContent>
    </Page>
</template>

<style scoped>

</style>