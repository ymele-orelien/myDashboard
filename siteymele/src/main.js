import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css'; // Assurez-vous d'importer le CSS
import AOS from 'aos';
import 'aos/dist/aos.css' 
const app = createApp(App);

// Utilisation de vue-toast-notification comme propriété globale
app.use(VueToast);

// Utilisation du routeur
app.use(router);

app.config.globalProperties.$aos = AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    mirror: false
  });

// Montage de l'application sur l'élément HTML avec l'ID 'app'
app.mount('#app');
