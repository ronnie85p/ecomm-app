import { createWebHistory, createRouter } from 'vue-router'
import { routes as SiteRoutes } from '@/routes/site.js'
import { routes as ErrorsRoutes } from '@/routes/errors.js'
import { routes as DashboardRoutes } from '@/routes/dashboard.js'
  
export default createRouter({
    history: createWebHistory(),
    routes: [
        ...SiteRoutes,
        ...DashboardRoutes,
        ...ErrorsRoutes
    ],
});