<script setup>
import { useRouter } from 'vue-router';
import Request from './Request.vue';
import { onMounted } from 'vue';

const router = useRouter();
router.beforeEach((to, from) => {
  // instead of having to check every route record with
  // to.matched.some(record => record.meta.requiresAuth)
  return true;
  if (to.meta.isTest) {
    return {
      path: '/dashboard',
      component: () => import('@/Pages/Dashboard/Vendors/Index.vue'),
    }
  }
  return {
      path: '/login',
      // save the location we were at to come back later
      query: { redirect: to.fullPath },
    }

  return false;
  if (to.meta.requiresAuth && !auth.isLoggedIn()) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    return {
      path: '/login',
      // save the location we were at to come back later
      query: { redirect: to.fullPath },
    }
  }
})

onMounted(() => {
  
});
</script>

<template>
  <RouterView v-slot="{ Component, route }">
    <component :is="Component" :route="route" />
  </RouterView>
</template>

<style scoped>

</style>