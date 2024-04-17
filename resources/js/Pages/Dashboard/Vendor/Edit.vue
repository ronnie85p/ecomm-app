<script setup>
// import { onMounted, ref } from 'vue'
// import { useRoute } from 'vue-router'
// import Page from '@/Components/Layout/Page.vue'
// import AsideMenu from '@/Components/Dashboard/Vendors/Menu.vue'
// import AsideContent from '@/Components/Layout/AsideContent.vue'
// import Form from './Form/Index.vue'
// import Vendor from '@/Api/Controllers/Vendor'
// import { useRequest } from '@/Components/Hooks/Http'

// document.title = 'Производитель'

// const route = useRoute();
// const requestForm = useRequest();
// const requestVendor = useRequest();

// const submitForm = (e) => {
//     requestForm.process(() => 
//         Vendor.updateFromForm(route.params.id, e.target));
// }

// const getVendor = () => {
//     requestVendor.process(() => 
//         Vendor.get(route.params.id))
// };

// onMounted(() => {
//     getVendor();
// });
</script>

<template>
    <Page>
        <AsideMenu />

        <AsideContent>
                <h1>Производитель</h1>

                <div class="card">
                    <div class="card-body">

                        <div v-if="requestVendor.loading.value">
                            Loading ...
                        </div>

                        <Form 
                            :data="requestVendor.response.value?.data" 
                            @submit="submitForm" 
                        />

                    </div>
                </div>

        </AsideContent>
    </Page>
</template>

<style scoped>

</style>