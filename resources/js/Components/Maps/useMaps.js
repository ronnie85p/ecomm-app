import { ref } from 'vue'
import Maps from '@/Api/maps'

const useMaps = (props) => {
    const maps = new Maps(props);
    const loading = ref(0);
    const success = ref(0);
    const error = ref(null);

    const ready = async () => {
        let ymaps;
        error.value = null;
        success.value = 0;
        loading.value = 1;
    
        try {
            ymaps = await maps.ready();
            success.value = 1;
        } catch (err) {
            error.value = err;
        } finally {
            loading.value = 0;
        }
    }

    return { ready, error, loading, success, maps }
}

export default useMaps;