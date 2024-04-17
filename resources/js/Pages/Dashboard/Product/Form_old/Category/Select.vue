<script setup>
import { onMounted, ref, watch, defineProps } from 'vue';
import { useRequest } from '@/Components/Hooks/Http'
import Categories from '@/Api/Controllers/Category'
import { _getLog } from '@/Api/helpers'

const { 
    placeholder, 
    autocomplete,
    name,
    loadingText, 
    requestProps 
} = defineProps(['placeholder', 'name', 'autocomplete', 'loadingText', 'requestProps']);

const focusIn = ref(0);
const inputRef = ref({ value: null, id: 0 });
const { process, send, loading, response, errors } = useRequest(
    requestProps
);

const handleFocusIn = (e) => {
    console.log('focused in');
    focusIn.value = 1;
}

const handleFocusOut = (e) => {
    console.log('focused out');
    setTimeout(() => focusIn.value = 0, 100);
}

const handleInput = (e) => {
    console.log('input');
}

const handleItemClick = (e, item) => {
    console.log('handleItemClick', e, item);
    inputRef.value.value = item.name;
    inputRef.value.id = item.id;
    // inputRef.value = item;
}

watch(() => focusIn, (focusIn) => focusIn && send(), { immediate: true })
onMounted(() => {
    
});
</script>

<template>
    <input 
        class="form-control form-select" 
        :placeholder="placeholder" 
        :autocomplete="autocomplete || 'off'"
        :name="name"
        :data-value="inputRef.id"
        :value="inputRef.value"
        @focus="handleFocusIn" 
        @blur="handleFocusOut" 
        @input="handleInput"
    />

    <div v-if="errors">
        {{ errors }}
    </div>

    <div class="dropdown">
        <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink" :class="{ show: focusIn }">
            <div v-if="loading" class="fw-bolder">
                {{ loadingText }}
            </div>

            <a 
                v-for="item in response?.data" 
                :key="item.id" 
                @click="handleItemClick(event, item)"
                href="javascript:" class="dropdown-item">
                {{ item.name }}
            </a>
        </div>
    </div>
</template>