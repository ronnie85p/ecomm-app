<script setup>
import { ref } from 'vue'
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
const searchFormShown = ref(false);

</script>

<template>

    <Row v-if="!searchFormShown" class="mb-4">
        <Col>
            <Button design="light me-2" @click="searchFormShown = true">
                Добавить товар
            </Button>
        </Col>
    </Row>

    <Form :class="['mb-4']" v-if="searchFormShown">
        <Row>
            <Col>
                
                <InputGroup class="dropdown">
                    <Input name="customer_search" placeholder="Наименование товара" autocomplete="off" v-focus />
                    <Button design="light" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z"/>
                        </svg>                    
                    </Button>

                    <div :class="['dropdown-menu p-3', {}]">

                    </div>
                </InputGroup>
            </Col>

            <Col col="4 d-flex">
                <Input class="text-start" name="count" placeholder="Кол-во" value="1"/>
                <Button class="mx-4">Добавить</Button>

                <Button design="default border" @click="searchFormShown = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg mb-1" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
</svg>
                    </Button>
            </Col>
        </Row>
    </Form>

</template>