export const routes =  [
    { 
        path: '/:pathMatch(.*)*', 
        component: () => import('@/Pages/Errors/NotFound.vue') 
    },
];