import Base from '@/Api/Controllers/Base'

const Vendor = Object.assign({}, Base, {
    uri: '/api/v1/dashboard/trademarks',
}).initialize();

export default Vendor;