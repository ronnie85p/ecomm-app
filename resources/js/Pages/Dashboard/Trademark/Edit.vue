<script setup>
// import { onMounted, defineProps, watch } from 'vue'
// import Page from '@/Components/Layout/Page.vue'
// import AsideMenu from '@/Components/Dashboard/Vendors/Menu.vue'
// import AsideContent from '@/Components/Layout/AsideContent.vue'
// import Form from './Form/Index.vue'
// import Trademark from '@/Api/Controllers/Trademark'                                 
// import { useRequest } from '@/Components/Hooks/Http'
// import { _getLog } from '@/Api/helpers'

// document.title = 'Торговая марка'

// const _log = _getLog('trademarks.edit =>');
// const { route } = defineProps(['route']);
// const { process, loading, response, errors } = useRequest();
// const requestForm = useRequest();

// const submitForm = (e) => {
//     requestForm.process(() => 
//         Trademark.updateFromForm(route.params.id, e.target));
// }

// const getTrademark = (id) => {
//     process(() => Trademark.get(id))
// }

// watch(() => route.params.id, getTrademark, { immediate: true })

// onMounted(() => {
//     _log('mounted!')
// });
</script>

<template>
    <Page>
        <AsideMenu />

        <AsideContent>
                <h1>Торговая марка</h1>

                <div class="card">
                    <div class="card-body">

                        <div v-if="loading">
                            Loading ...
                        </div>

                        <div v-if="errors">
                            {{ errors }}
                        </div>

                        <Form 
                            :data="response?.data" 
                            :request="requestForm"
                            @submit="submitForm" 
                        />

                    </div>
                </div>

        </AsideContent>
    </Page>
</template>

<style scoped>

</style>