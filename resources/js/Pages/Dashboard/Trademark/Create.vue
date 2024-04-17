<script setup>
// import { onMounted, defineProps, watch } from 'vue'
// import Page from '@/Components/Layout/Page.vue'
// import AsideMenu from '@/Components/Dashboard/Vendors/Menu.vue'
// import AsideContent from '@/Components/Layout/AsideContent.vue'
// import Form from './Form/Index.vue'
// import Vendor from '@/Api/Controllers/Vendor'
// import Trademark from '@/Api/Controllers/Trademark'
// import { useRequest } from '@/Components/Hooks/Http'
// import { _getLog } from '@/Api/helpers'

// document.title = 'Новая торговая марка'

// const _log = _getLog('trademarks.create =>');
// const { route } = defineProps(['route']);
// const { process, loading, response, errors } = useRequest();
// const requestForm = useRequest();

// const submitForm = (e) => {
//     _log('form submitting...');

//     requestForm.process(() => 
//         Trademark.createFromForm(e.target))
// }

// const getVendor = (id) => {
//     if (!id) return;

//     _log(`getting vendor #${id}...`);
//     process(() => Vendor.get(id))
// };

// watch(() => route.query.vendor_id, getVendor, { immediate: true })

// onMounted(() => {
//     _log('mounted!');
// });
</script>

<template>
    <Page>
        <AsideMenu />

        <AsideContent>
                <h1>Новая торговая марка</h1>

                <div class="card">
                    <div class="card-body">

                        <div v-if="loading">
                            Loading
                        </div>

                        <div v-if="errors">
                            {{ errors }}
                        </div>

                        <div v-if="response">
                            <Form 
                                @submit="submitForm"
                                :request="requestForm"
                                :data="{'vendor': response.data}"
                            />
                        </div>
                    </div>
                </div>

        </AsideContent>
    </Page>
</template>

<style scoped>

</style>