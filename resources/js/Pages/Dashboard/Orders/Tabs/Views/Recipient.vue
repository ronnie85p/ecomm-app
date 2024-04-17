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

</script>

<template>
        <FormGroupRow>
        <Col class="fw-bolder">
            {{ hasUserCompany ? 'Компания' : 'Частное лицо' }}
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="2" class="text-muted">
            Контактное лицо
        </Col>
        <Col>
            {{ user.fullname }}
        </Col>
    </FormGroupRow>

    <FormGroupRow>
        <Col col="2" class="text-muted">
            Телефон
        </Col>
        <Col>
            {{ user.phone }} (есть Whatsapp)
        </Col>
    </FormGroupRow>

    <div class="customer-company" v-if="hasUserCompany">
        <FormGroupRow>
            <Col col="2" class="text-muted">
                Организация
            </Col>
            <Col>
                {{ user.company.full_text }}
            </Col>
        </FormGroupRow>

        <FormGroupRow v-if="user.company.address_line">
            <Col col="2" class="text-muted">
                Адрес
            </Col>
            <Col>
                {{ user.company.address_line }}
            </Col>
        </FormGroupRow>
    </div>
</template>