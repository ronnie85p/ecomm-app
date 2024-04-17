import { ref } from 'vue'

const useRequest = (props) => {
    const { action } = props || {};

    const response = ref(null);
    const errors = ref(null);
    const loading = ref(0);

    const process = async (callback) => {
        errors.value = response.value = null;

        loading.value = true;
        try {
            const respond = await callback();

            response.value = respond;
        } catch (e) {
            errors.value = e;
        } finally {
            loading.value = false;
        }
    }

    const send = async (options) => {
        errors.value = response.value = null;

        loading.value = true;
        try {
            const respond = await action(options);

            response.value = respond;
        } catch (e) {
            errors.value = e;
        } finally {
            loading.value = false;
        }
    }

    return { process, send, response, loading, errors };
}

export { useRequest }