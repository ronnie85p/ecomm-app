import {routes as ProductsRoutes} from './dashboard/products.js'
import {routes as CategoriesRoutes} from './dashboard/categories.js'
import {routes as VendorsRoutes} from './dashboard/vendors.js'
import {routes as TrademarksRoutes} from './dashboard/trademarks.js'
import {routes as OrdersRoutes} from './dashboard/orders.js'

export const routes = [
    { 
        path: '/dashboard', 
        children: [
            {
                path: '',
                component: () => import('@/Pages/Dashboard/Index.vue'),
            },
            ProductsRoutes,
            CategoriesRoutes,
            TrademarksRoutes,
            VendorsRoutes,
            OrdersRoutes
        ],
    },
    {
        path: '/dashboard/settings/delivery/cars', 
        children: [
            {
                path: '',
                name: 'dashboard.settings.delivery.cars.index',
                component: () => import('@/Pages/Dashboard/Settings/Delivery/Cars/Index.vue'),
            },
            {
                path: 'create', 
                name: 'dashboard.settings.delivery.cars.create',
                component: () => import('@/Pages/Dashboard/Settings/Delivery/Cars/Create.vue') 
            },
            {
                path: ':id/edit', 
                name: 'dashboard.settings.delivery.cars.edit',
                component: () => import('@/Pages/Dashboard/Settings/Delivery/Cars/Edit.vue'),
            },
            {
                path: ':id', 
                name: 'dashboard.settings.delivery.cars.show',
                component: () => import('@/Pages/Dashboard/Settings/Delivery/Cars/Show.vue'),
            }
        ],
    }
];

