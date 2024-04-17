export const routes = {
    path: 'trademarks', 
    children: [
        {
            path: '',
            component: () => import('@/Pages/Dashboard/Trademarks/Index.vue'),
        },
        {
            path: 'create', 
            component: () => import('@/Pages/Dashboard/Trademarks/Create.vue') 
        },
        {
            path: ':id/edit', 
            component: () => import('@/Pages/Dashboard/Trademarks/Edit.vue') 
        },
        {
            path: ':id', 
            component: () => import('@/Pages/Dashboard/Trademarks/Show.vue') 
        }
    ],
};