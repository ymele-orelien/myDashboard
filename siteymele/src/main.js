import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css'; // Assurez-vous d'importer le CSS

const app = createApp(App);

// Utilisation de vue-toast-notification comme propriété globale
app.use(VueToast);

// Utilisation du routeur
app.use(router);

// Montage de l'application sur l'élément HTML avec l'ID 'app'
app.mount('#app');
