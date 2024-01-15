import './assets/main.css'
import 'vue3-toastify/dist/index.css'; // Assurez-vous d'importer le fichier CSS

import { createApp } from 'vue'
import App from './App.vue';
// Utilisez le plugin vue3-toastify
import Toast from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';
import router from "./router"
const app= createApp(App)
app.use(router)
app.use(Toast);

app.mount('#app')
