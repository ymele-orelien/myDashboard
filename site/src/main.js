

import { createApp } from 'vue';
import App from './App.vue';
import Toaster from 'v-toaster';



//imporytation de la route
import router from "./router";
const app = createApp(App);
app.use(router);
app.mount('#app');
app.use(Toaster)
