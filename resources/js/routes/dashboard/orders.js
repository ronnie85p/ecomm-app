export const routes = {
    path: 'orders', 
    children: [
        {
            path: '',
            component: () => import('@/Pages/Dashboard/Orders/Index.vue'),
        },
        {
            path: 'create', 
            component: () => import('@/Pages/Dashboard/Orders/Create.vue') 
        },
        {
            path: ':id/edit', 
            component: () => import('@/Pages/Dashboard/Orders/Edit.vue') 
        },
        {
            path: 'show', 
            component: () => import('@/Pages/Dashboard/Orders/Show.vue') 
        }
    ],
};