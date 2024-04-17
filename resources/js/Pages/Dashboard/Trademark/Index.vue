<script setup>
// import { onMounted } from 'vue'
// import Page from '@/Components/Layout/Page.vue'
// import AsideMenu from '@/Components/Dashboard/Vendors/Menu.vue'
// import AsideContent from '@/Components/Layout/AsideContent.vue'
// import Vendor from '@/Api/Controllers/Vendor'
// import { useRequest } from '@/Components/Hooks/Http'

// document.title = 'Производители'

// const request = useRequest();
// const getVendors = async () => {
//     request.process(() => {
//         return Vendor.getMany();
//     });
// }

// onMounted(async () => {
//     getVendors();
// });
</script>

<template>
    <Page>
        <AsideMenu />

        <AsideContent>
                <h1>Производители</h1>

                <div class="card">
                    <div class="card-body">

                        <div v-if="request.loading.value">
                            Loading...
                        </div>

                        <div v-if="!request.loading.value">
                            <div v-for="item in request.response.value?.data">
                                <RouterLink :to="'/dashboard/vendors/' + item.id" :key="item.id">
                                    <div class="row">
                                        <div class="col">{{ item.name }}</div>
                                        <div class="col text-end">{{ item.created_at }}</div>
                                    </div>
                                </RouterLink>
                                <hr />
                            </div>
                        </div>

                    </div>
                </div>
        </AsideContent>
    </Page>
</template>

<style scoped>

</style>