export const routes = {
    path: 'vendors', 
    children: [
        {
            path: '',
            component: () => import('@/Pages/Dashboard/Vendors/Index.vue'),
        },
        {
            path: 'create', 
            component: () => import('@/Pages/Dashboard/Vendors/Create.vue') 
        },
        {
            path: ':id/edit', 
            component: () => import('@/Pages/Dashboard/Vendors/Edit.vue'),
            meta: {
                request: (route) => {
                    return axios.get('/api/v1/dashboard/vendors/' + route.params.id + '/edit');
                } 
            }
        },
        {
            path: ':id', 
            component: () => import('@/Pages/Dashboard/Vendors/Show.vue'),
            meta: {
                isTest: 1
            }
        }
    ],
};