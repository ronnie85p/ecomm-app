<script setup>
// import Page from '@/Components/Layout/Page.vue'
// import AsideMenu from '@/Components/Dashboard/Vendors/Menu.vue'
// import AsideContent from '@/Components/Layout/AsideContent.vue'
// import Form from './Form/Index.vue'
// import Vendor from '@/Api/Controllers/Vendor'
// import { useRequest } from '@/Components/Hooks/Http'

// document.title = 'Новая категория'

// const request = useRequest();
// const submitForm = (e) => {
//     request.process(() => Vendor.createFromForm(e.target))
// }

</script>

<template>
    <Page>
        <AsideMenu />

        <AsideContent>
                <h1>Новый производитель</h1>

                <div class="card">
                    <div class="card-body">

                        <Form 
                            @submit="submitForm"
                            :request="request"
                        />

                    </div>
                </div>

        </AsideContent>
    </Page>
</template>

<style scoped>

</style>