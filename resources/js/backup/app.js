import './bootstrap';
import '../css/app.css';

import { createApp } from 'vue';
import App from './App.vue'
import router from './router.js'

const app = createApp(App);
app.use(router).mount('#app')

app.directive('focus', {
    mounted(el) { 
        el.focus() 
    }
})
