import Http from '@/Api/Http'

const Base = {
    initialize() {
        this.http = new Http(
            new URL(this.uri, window.location.origin)
        );

        return this;
    },

    get(id) {
        return this.http.get(id);
    },

    getMany(params) {
        return this.http.getMany(params);
    },

    create(data) {
        return this.http.create(data);
    },

    createFromForm(form) {
        return this.create(new FormData(form));
    },

    update(id, data) {
        return this.http.update(id, data);
    },

    updateFromForm(id, form) {
        return this.update(id, new FormData(form));
    },


    delete(id) {
        return this.http.delete(id);
    },
};

export default Base;