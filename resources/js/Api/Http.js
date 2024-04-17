export default class Http {
    constructor(url) {
        if (! (url instanceof URL)) {
            url = new URL(url, window.location.href);
        }

        this.url = url;
    }

    setParams(params) {
        for (let param in params) {
            this.url.searchParams.append(param, params[param]);
        }
    }

    get(id) {
        return axios.get(`${this.url}/${id}`).then(({ data }) => data);
    }

    getMany (params) {
        this.setParams(params)
        return axios.get(this.url).then(({ data }) => data);
    }

    create (data) {
        return axios.post(this.url, data).then(({ data }) => data);
    }

    update (id, data) {
        const headers = { 'X-HTTP-Method-Override': 'PUT' };
        return axios.post(`${this.url}/${id}`, data, { headers }).then(({ data }) => data);
    }

    delete (id) {
        return axios.delete(`${this.url}/${id}`).then(({ data }) => data);
    }
}
