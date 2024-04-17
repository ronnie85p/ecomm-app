<script setup>
// import AsideMenu from '@/Components/Layout/AsideMenu.vue'
</script>

<template>
    <AsideMenu>
        <div class="mb-4">
            <h4>Romulus Molis</h4>
            <RouterLink to='/dashboard/profile/edit'>Редактировать</RouterLink>
        </div>

        <hr />

        <ul class="">
            <li>
                <RouterLink to='/dashboard/orders'>Заказы</RouterLink>
            </li>
        </ul>

        <ul>
            <li>
                <RouterLink to='/dashboard/products'>Товары</RouterLink>
            </li>
            <li>
                <RouterLink to='/dashboard/categories'>Категории</RouterLink>
            </li>
            <li>
                <RouterLink to='/dashboard/vendors'>Производители</RouterLink>
            </li>
            <li>
                <RouterLink to='/dashboard/delivery'>Доставка</RouterLink>
            </li>
            <li>
                <RouterLink to='/dashboard/payments'>Платежи</RouterLink>
            </li>
        </ul>

        <ul>
            <li>
                <RouterLink to='/dashboard/messages'>Сообщения</RouterLink>
            </li>
        </ul>

        <ul>
            <li>
                <RouterLink to='/dashboard/profile/settings'>Настройки</RouterLink>
            </li>
        </ul>
    </AsideMenu>
</template>