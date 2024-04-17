export default apiRoutes = {
    v1: {
        path: '/api/v1/',
        dashboard: {
            path: 'dashboard/',
            get categories() {
                return apiRoutes.v1.path + apiRoutes.v1.dashboard.path + 'categories'
            }
        }
    },
};