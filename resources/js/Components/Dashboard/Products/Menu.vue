<script setup>
// import AsideMenu from '@/Components/Layout/AsideMenu.vue'
</script>

<template>
    <AsideMenu>
        <div class="mb-4">
            <RouterLink to='/dashboard' class="mb-4">Профиль</RouterLink> / 
            <span class="text-muted">Товары</span>
        </div>

        <ul>
            <li>
                <RouterLink to='/dashboard/products'>Все товары</RouterLink>
            </li>
            <li>
                <RouterLink to='/dashboard/products/create'>Добавить товар</RouterLink>
            </li>
            <li>
                <RouterLink to='/dashboard/products/drafts'>Сохраненные</RouterLink>
            </li>
        </ul>
    </AsideMenu>
</template>