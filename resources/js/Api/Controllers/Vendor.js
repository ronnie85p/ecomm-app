import Base from '@/Api/Controllers/Base'

const Vendor = Object.assign({}, Base, {
    uri: '/api/v1/dashboard/vendors',

    getTrademarks(id) {
        return this.http.get(id + '/trademarks');
    }
}).initialize();

export default Vendor;