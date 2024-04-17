<script setup>
import { onMounted, ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import AddressForm from './AddressForm.vue'


const addresses = [
    {
        address_fulltext: 'Московская обл., г. Солнечногорск, ул. Баранова, 16, офис 2',
        checked: true,
        recipient: {
            fullname: 'Иванов Иван Иваныч',
            phone: '+7 898 8980 8080',
            company: {
                fulltext: 'ООО Помидор ИНН ОГРН(ИП) КПП'
            }
        }
    },
    // {
    //     address_fulltext: 'Московская обл., г. Солнечногорск, ул. Баранова, 16, офис 2',
    //     recipient: {
    //         fullname: 'Иванов Иван Иваныч',
    //         phone: '+7 898 8980 8080',
    //         company: {
    //             fulltext: 'ООО Помидор ИНН ОГРН(ИП) КПП'
    //         }
    //     }
    // }
];
</script>

<template>

    <!-- <AddressForm /> -->

    <div class="row mb-4">
        <div v-for="(addr, idx) in addresses" class="col">
            <div class="card card-body">
                <!-- <div class="form-check">
                    <input class="form-check-input" type="radio" name="address_id" :value="addr.id" :id="`address-${$idx}`" :checked="addr.checked">
                    <label class="form-check-label" :for="`address-${$idx}`"></label>
                </div> -->

                <div><span class="fw-bolder">Получатель</span> {{ addr.recipient.company.fulltext  }}</div>
                <div><span class="fw-bolder">Контактное лицо</span> {{ addr.recipient.fullname }}</div>
                <div><span class="fw-bolder">Телефон</span> {{ addr.recipient.phone }} <i class="text-muted">(Whatsapp, Telegram)</i></div>
                <div class="mb-2"><span class="fw-bolder">Адрес доставки</span> {{ addr.address_fulltext }}</div>

                <div class="d-flex">
                    <!-- <Link href="" class="me-2">Изменить</Link> -->
                    <Link href="">Показать на карте</Link>
                </div>
            </div>
        </div>
    </div>

    <Link href="">Мои адреса</Link>

</template>