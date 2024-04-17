import { ref } from 'vue'
import { Map } from '@/Api/maps'

const useMap = (props) => {
    const { maps, options } = props;
    const initializing = ref(0);
    const error = ref(null);
    const success = ref(0);
    const map = new Map(maps, options);

    const setContainer = (container) => {
        map.setContainer(container);
    }

    const initialize = () => {
        error.value = null;
        success.value = 0;
        initializing.value = 1;

        try {
            map.initialize();
            success.value = 1;
        } catch (err) {
            error.value = err;
        } finally {
            initializing.value = 0;
        }
    }

    return { 
        setContainer, 
        initialize, 
        initializing, 
        error, 
        success, 
        map 
    }
}

export default useMap;