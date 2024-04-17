export const routes = {
    path: 'categories', 
    children: [
        {
            path: '',
            component: () => import('@/Pages/Dashboard/Categories/Index.vue'),
        },
        {
            path: 'create', 
            component: () => import('@/Pages/Dashboard/Categories/Create.vue') 
        },
        {
            path: ':id/edit', 
            component: () => import('@/Pages/Dashboard/Categories/Edit.vue') 
        },
        {
            path: 'show', 
            component: () => import('@/Pages/Dashboard/Categories/Show.vue') 
        }
    ],
};