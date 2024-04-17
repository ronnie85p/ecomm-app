<script setup>
// import AsideMenu from '@/Components/Layout/AsideMenu.vue'
</script>

<template>
    <AsideMenu>
        <div class="mb-4">
            <RouterLink to='/dashboard' class="mb-4">Профиль</RouterLink> / 
            <span class="text-muted">Категории</span>
        </div>

        <ul>
            <li>
                <RouterLink to='/dashboard/categories'>Все категории</RouterLink>
            </li>
            <li>
                <RouterLink to='/dashboard/categories/create'>Добавить категорию</RouterLink>
            </li>
        </ul>
    </AsideMenu>
</template>