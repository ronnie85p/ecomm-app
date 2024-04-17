<script setup>
// import { onMounted, ref, defineProps, watch } from 'vue'
// import { useRoute } from 'vue-router'
// import Page from '@/Components/Layout/Page.vue'
// import AsideMenu from '@/Components/Dashboard/Vendors/Menu.vue'
// import AsideContent from '@/Components/Layout/AsideContent.vue'
// import Vendor from '@/Api/Controllers/Vendor'
// import { useRequest } from '@/Components/Hooks/Http'
// import VendorTrademarks from './VendorTrademarks.vue'
// import { _getLog } from '@/Api/helpers'

// document.title = 'Производитель'

// const _log = _getLog('vendors.show =>');
// const { route } = defineProps(['route']);
// const { loading, response, errors, process } = useRequest();

// const getVendor = (id) => {
//     _log(`getting vendor #${id}...`);
//     process(() => Vendor.get(id))
// };

// watch(() => route.params.id, getVendor, { immediate: true })

// onMounted(() => {
//     _log('mounted!');
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
                    <div v-if="loading">
                        Loading...
                    </div>

                    <div v-if="errors">
                        errors
                    </div>

                    <div v-if="response">
                        <h3>{{ response.data?.name }}</h3>
                        <p>{{ response.data?.description }}</p>

                        <div class="h4 mt-4">Торговые марки</div>

                        <VendorTrademarks :route="route" />
                    </div>
                </div>
            </div>
        </AsideContent>
    </Page>
</template>