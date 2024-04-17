export const routes = {
    path: 'products', 
    children: [
        {
            path: '',
            component: () => import('@/Pages/Dashboard/Products/Index.vue'),
        },
        {
            path: 'create', 
            component: () => import('@/Pages/Dashboard/Products/Create.vue') 
        },
        {
            path: ':id/edit', 
            component: () => import('@/Pages/Dashboard/Products/Edit.vue') 
        },
        {
            path: 'show', 
            component: () => import('@/Pages/Dashboard/Products/Show.vue') 
        }
    ],
};