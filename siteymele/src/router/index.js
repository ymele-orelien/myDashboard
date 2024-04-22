import { createRouter, createWebHistory } from "vue-router"
/**
 * IMPORTATION DES PAGES
 */
import Master from "../FrontEnd/Master/Master.vue";

import login from '../FrontEnd/Master/login.vue';
import passwordForget from '../FrontEnd/Master/passwordForget.vue';
import code_passwordForget from '../FrontEnd/Master/code_passwordForget.vue';
import newPassword from '../FrontEnd/Master/newpassword.vue';

import register from '../FrontEnd/Master/register.vue';
import site from '../FrontEnd/Master/site.vue';
import reponse from '../FrontEnd/Reponse/reponse.vue';
import demande from "../FrontEnd/Demande/demande.vue";
import donate from "../FrontEnd/Demande/don.vue";
import about from "../FrontEnd/About/about.vue"
import urgence from "../FrontEnd/urgence/urgence.vue";
import code from "../FrontEnd/Master/code.vue";
import profil from "../FrontEnd/Profil/profil.vue"
import event from "../FrontEnd/evenements/event.vue"
import errorfound from '../FrontEnd/404found.vue'
/**
 * ROUTE DES PAGES
 */
const routes = [
    {
        name: "home",
        path: "/home",
        component: Master,
        children:[
            {
                name: "site",
                path: "/",
                component: site
            },
            {
                name: "reponse",
                path: "/response",
                component: reponse
            },
            {
                name: "urgence",
                path: "/urgence",
                component: urgence
            },
            {
                name: "about",
                path: "/about",
                component: about
            },
            {
                name: "event",
                path: "/event",
                component: event
            },
            {
                name: "donate",
                path: "/donate",
                component: donate
            },
            {
                name: "profil",
                path: "/profil",
                component: profil
            },
            {
                name: "demande",
                path: "/demande",
                component: demande
            },
            { 
                path: '/:catchAll(.*)', // Chemin wildcard
                component: errorfound // Composant de la page 404
            }
        ],
    },
    {
        path: '/login',
        name: 'login',
        component: login
    },
    {
        path: '/register',
        name: 'register',
        component: register
    },
    {
        path: '/code',
        name: 'code',
        component: code
    },
    {
        path: '/passwordForget',
        name: 'passwordForget',
        component: passwordForget
    },
    {
        path: '/code_passwordForget',
        name: 'code_passwordForget',
        component: code_passwordForget
    },
    {
        path: '/newPassword',
        name: 'newPassword',
        component: newPassword
    },

    
];

function loggedIn(){
    return localStorage.getItem('token')
}

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        // cette route nécessite une authentification, vérifiez si l'utilisateur est connecté
        // sinon, redirigez vers la page de connexion.
        if (!loggedIn()) {
            next({
                path: '/',
                query: { redirect: to.fullPath }
            });
        } else {
            next();
        }
    } else if (to.matched.some(record => record.meta.guest)) {
        // cette route est réservée aux invités, vérifiez si l'utilisateur est connecté
        // si oui, redirigez-le vers la page d'accueil
        if (loggedIn()) {
            next({
                path: '/',
                query: { redirect: to.fullPath }
            });
        } else {
            next();
        }
    } else {
        // assurez-vous toujours d'appeler next()!
        next(); // toujours appeler next() pour permettre la navigation normale
    }
});

export default router;
