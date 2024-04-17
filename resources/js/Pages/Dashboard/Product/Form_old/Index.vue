<script setup>
import FormCategory from './Category.vue'
import FormDescription from './Description.vue'
import FormMedia from './Media.vue'
import FormFeatures from './Features.vue'
import FormPrices from './Prices.vue'

import { useRequest } from '@/Components/Hooks/Http'

</script>

<template>
    <form>
        <FormCategory />
        <FormDescription />

        <hr class="border-0 my-4" />

        <FormMedia />

        <hr class="border-0 my-4" />

        <FormFeatures />

        <hr class="border-0 my-4" />

        <FormPrices />

        <hr class="my-4" />

        <div class="row">
            <div class="col-3"></div>
            <div class="col">
                <button class="btn btn-primary" type="submit">Сохранить</button>
            </div>
        </div>
    </form>
</template>