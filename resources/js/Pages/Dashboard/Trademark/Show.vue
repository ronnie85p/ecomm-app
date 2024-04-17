<script setup>
// import { onMounted, ref } from 'vue'
// import { useRoute } from 'vue-router'
// import Page from '@/Components/Layout/Page.vue'
// import AsideMenu from '@/Components/Dashboard/Vendors/Menu.vue'
// import AsideContent from '@/Components/Layout/AsideContent.vue'
// import Vendor from '@/Api/Controllers/Vendor'
// import { useRequest } from '@/Components/Hooks/Http'
// import VendorTrademarks from './VendorTrademarks.vue'

// document.title = 'Производитель'

// const route = useRoute();
// const request = useRequest();

// const getVendor = () => {
//     request.process(() => 
//         Vendor.get(route.params.id))
// };

// onMounted(() => {
//     getVendor();
// });
</script>

<template>
    <Page>
        <AsideMenu>
            Left Menu
        </AsideMenu>

        <AsideContent>
                <h1>Производитель</h1>

                <div class="card">
                    <div class="card-body">
                        <div v-if="request.loading.value">
                            Loading...
                        </div>

                        <div v-if="!request.loading.value">
                            <div v-if="!request.errors.value">
                                <h3>{{ request.response.value?.data?.name }}</h3>
                                <p>{{ request.response.value?.data?.description }}</p>

                                <div class="h4 mt-4">Торговые марки</div>

                                <VendorTrademarks :vendor_id="request.response.value?.data?.id"/>
                            </div>
                        </div>
                    </div>
                </div>
        </AsideContent>
    </Page>
</template>