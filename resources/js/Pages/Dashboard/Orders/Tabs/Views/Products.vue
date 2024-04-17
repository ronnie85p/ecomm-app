<script setup>
import { ref, defineProps } from 'vue'
import Form from '@/Components/Form.vue'
import FormGroupRow from '@/Components/Form/FormGroupRow.vue'
import Label from '@/Components/Form/Label.vue'
import Input from '@/Components/Form/Input.vue'
import InputGroup from '@/Components/Form/InputGroup.vue'
import Checkbox from '@/Components/Form/Checkbox.vue'
import Button from '@/Components/Form/Button.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'

const { user } = defineProps(['user']);
const hasUserCompany = user?.company !== null;
const companyChecked = ref(hasUserCompany);

const products = [
    {
        name: 'item1'
    },
    {
        name: 'item2'
    },
    {
        name: 'item3'
    },
    {
        name: 'item4'
    }
];

</script>

<template>
    <div>{{ products.length }} товара</div>
</template>