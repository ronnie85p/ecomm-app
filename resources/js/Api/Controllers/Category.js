import Base from '@/Api/Controllers/Base'

const Category = Object.assign({}, Base, {
    uri: '/api/v1/dashboard/categories',
}).initialize();

export default Category;