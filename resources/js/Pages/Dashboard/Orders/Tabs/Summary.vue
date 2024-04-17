<script setup>
import { defineProps } from 'vue';

const { data } = defineProps(['data']);
</script>

<template>
    <div class="row mb-2">
        <div class="col-2">
            Товары
        </div>
        <div class="col">
            {{ data?.cart_cost_format }}
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            Скидка
        </div>
        <div class="col">
            {{ data?.discount_format }}
        </div>
    </div>

    <div v-if="!data?.tax_rate">
        <div class="row mb-3">
            <div class="col fw-bolder">
                Без НДС
            </div>
        </div>
    </div>

    <div v-if="data?.tax_rate">
        <div class="row mb-3">
            <div class="col-2">
                НДС
            </div>
            <div class="col">
                {{ data?.tax_rate_format }}
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            Доставка
        </div>
        <div class="col">
            {{ data?.delivery_cost_format }}
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            ИТОГО
        </div>
        <div class="col">
            {{ data?.cost_format }}
        </div>
    </div>
</template>