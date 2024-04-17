<script setup>
import ProductTypeOptions from './ProductType/Options.vue'
import ProductMaterialOptions from './ProductMaterial/Options.vue'
import BrandStrengthOptions from './BrandStrength/Options.vue'
</script>

<template>
    <div class="row mb-2">
        <div class="col-3">
            <label for="product_type">Тип товара</label>
        </div>
        <div class="col">
             <ProductTypeOptions />
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="product_material">Материал товара</label>
        </div>
        <div class="col">
            <ProductMaterialOptions />
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="brand_strength">Марка прочности</label>
        </div>
        <div class="col">
            <BrandStrengthOptions />
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="">Цвет</label>
        </div>
        <div class="col">
            <input class="form-control" name="color">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="">Размер, ШxВxД</label>
        </div>
        <div class="col">
            <input class="form-control" name="size">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="">Вес, кг</label>
        </div>
        <div class="col">
            <input class="form-control" name="weight">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="">На поддоне, кол-во</label>
        </div>
        <div class="col">
            <input class="form-control" name="pallet_qty">
        </div>
    </div>
</template>