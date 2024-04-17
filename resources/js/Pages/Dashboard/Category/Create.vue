<script setup>
// import { ref, onMounted, defineProps, defineEmits } from 'vue'
// import Page from '@/Components/Layout/Page.vue'
// import AsideMenu from '@/Components/Dashboard/Categories/Menu.vue'
// import AsideContent from '@/Components/Layout/AsideContent.vue'
// import Form from './Form/Index.vue'
// import Category from '@/Api/Controllers/Category'

// defineProps(['data', 'submit']);

// document.title = 'Новая категория'

// const submitForm = (e) => {
//     console.log('creating...')

//     Category.createFromForm(categoryId, e.target).then(data => {
//         console.log('updated', data)
//     }).catch(error => {
//         console.log('error', error)
//     });
// }

// onMounted(() => {
    
// });
</script>

<template>
    <Page>
        <AsideMenu />

        <AsideContent>
                <h1>Новая категория</h1>

                <div class="card">
                    <div class="card-body">

                        <Form @submit="submitForm" />

                    </div>
                </div>

        </AsideContent>
    </Page>
</template>

<style scoped>

</style>