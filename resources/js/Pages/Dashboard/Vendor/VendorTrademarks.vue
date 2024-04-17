<script setup>
// import { onMounted, defineProps, watch } from 'vue'
// import Vendor from '@/Api/Controllers/Vendor'
// import { useRequest } from '@/Components/Hooks/Http'
// import { _getLog } from '@/Api/helpers'

// const _log = _getLog('vendor.trademarks =>');
// const { route } = defineProps(['route']);
// const { process, loading, response, errors } = useRequest();

// const getVendorTrademarks = (id) => {
//     _log(`getting vendor #${id} trademarks...`);
//     process(() => Vendor.getTrademarks(id))
// };

// watch(() => route.params.id, getVendorTrademarks, { immediate: true });

// onMounted(() => {
//     _log('mounted!');
// });
</script>

<template>
    <RouterLink 
        :to="'/dashboard/trademarks/create?vendor_id=' + route.params.id" 
        class="btn btn-primary">
        Добавить торговую марку
    </RouterLink>

    <hr />

    <div v-if="loading">
        Loading...
    </div>

    <div v-if="errors">
        errors
    </div>

    <div v-if="response">
        <div v-for="item in response.data">
            <RouterLink :to="'/dashboard/trademarks/' + item.id + '/edit'">
                <div class="row">
                    <div class="col">
                        {{ item.name }}
                    </div>
                    <div class="col text-end">
                        {{ item.created_at }}
                    </div>
                </div>
            </RouterLink>
        </div>
    </div>
</template>