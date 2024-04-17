<script setup>
import { ref, defineEmits, defineProps } from 'vue'
import Form from '@/Components/Form.vue'
import FormGroupRow from '@/Components/Form/FormGroupRow.vue'
import Label from '@/Components/Form/Label.vue'
import Input from '@/Components/Form/Input.vue'
import InputGroup from '@/Components/Form/InputGroup.vue'
import Checkbox from '@/Components/Form/Checkbox.vue'
import Button from '@/Components/Form/Button.vue'
import Row from '@/Components/Grid/Row.vue'
import Col from '@/Components/Grid/Col.vue'

const filterOpened = ref(false);
const props = defineProps(['click-close']);
const emits = defineEmits(['click-close']);

</script>

<template>

    <Form :class="['mb-4']">
        <Row>
            <Col class="d-flex">
                
                <InputGroup class="dropdown">
                    <Input name="customer_search" placeholder="Найти в базе" autocomplete="off" v-focus />
                    <Button design="light" @click="filterOpened = !filterOpened">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z"/>
                        </svg>                    
                    </Button>

                    <div :class="['dropdown-menu p-3', { show: filterOpened }]">
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Радио по умолчанию
                            </label>
                        </div> -->
                        <Row>
                            <Col>
                                <Checkbox label="По ФИО" checked />
                            </Col>
                        </Row>

                        <Row>
                            <Col>
                                <Checkbox label="По е-мэйл" checked />
                            </Col>
                        </Row>

                        <Row>
                            <Col>
                                <Checkbox label="По телефону" checked />
                            </Col>
                        </Row>
                    </div>
                </InputGroup>


                <Button design="default ms-4 border" @click="props.click-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg mb-1" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
</svg>
                    </Button>

            </Col>
        </Row>
    </Form>

</template>