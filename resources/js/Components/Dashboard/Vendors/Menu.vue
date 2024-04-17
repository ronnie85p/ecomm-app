<script setup>
// import AsideMenu from '@/Components/Layout/AsideMenu.vue'
</script>

<template>
    <AsideMenu>
        <div class="mb-4">
            <RouterLink to='/dashboard' class="mb-4">Профиль</RouterLink> / 
            <span class="text-muted">Производители</span>
        </div>

        <ul>
            <li>
                <RouterLink to='/dashboard/vendors'>Все производители</RouterLink>
            </li>
            <li>
                <RouterLink to='/dashboard/vendors/create'>Добавить производителя</RouterLink>
            </li>
        </ul>
    </AsideMenu>
</template>