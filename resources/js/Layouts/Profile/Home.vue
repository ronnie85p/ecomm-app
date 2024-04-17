<script setup>
import { defineProps, ref, onMounted, onBeforeMount } from 'vue'
import { Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Home.vue'
import Breadcrumbs from '../Breadcrumbs.vue'
import Menu from './Menu.vue'
import linksMap from './linksMap'
import buildLinks from '@/Api/buildLinks'

const { buildLinksOptions } = defineProps(['title', 'subtitle', 'buildLinksOptions'])
let links = ref(null);


onBeforeMount(() => {
    links.value = buildLinks(linksMap, buildLinksOptions)
});
</script>

<template>
    <Layout>
        <div class="row">
            <div class="col-2">

                <!-- <div class="card card-body mb-2" style="height: 100px">
                    <img src="" />
                </div> -->

                <!-- <div class="card card-body"> -->

                    <Menu />
                <!-- </div> -->

            </div>

            <div class="col">
                <Breadcrumbs :links="links"/>

                <slot name="title">
                    <h1 v-if="title" class="h3">{{ title }}</h1>

                    <slot name="subtitle">
                        <div v-if="subtitle" class="text-muted">
                            {{ subtitle }}
                        </div>
                    </slot>
                </slot>

                <div class="mb-2">
                    <slot name="panel" />
                </div>

                <div class="card card-body border p-4">
                    <slot />
                </div>
            </div>
        </div>
    </Layout>   
</template>