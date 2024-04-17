<script setup>
// import AsideMenu from '@/Components/Layout/AsideMenu.vue'
</script>

<template>
    <AsideMenu>
        <div class="mb-4">
            <RouterLink to='/dashboard' class="mb-4">Профиль</RouterLink> / 
            <span class="text-muted">Заказы</span>
        </div>

        <ul>
            <li>
                <RouterLink to='/dashboard/orders/create'>Создать заказ</RouterLink>
            </li>
            
            <li>
                <RouterLink to='/dashboard/orders'>Все заказы</RouterLink>
            </li>
        </ul>
    </AsideMenu>
</template>