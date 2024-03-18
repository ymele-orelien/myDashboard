import { createRouter, createWebHistory } from "vue-router"
/**
 * IMPORTATION DES PAGES
 */
import Master from "../FrontEnd/Master/Master.vue";

import login from '../FrontEnd/Master/login.vue';
import register from '../FrontEnd/Master/register.vue';
import site from '../FrontEnd/Master/site.vue';
import reponse from '../FrontEnd/Reponse/reponse.vue';
import demande from "../FrontEnd/Demande/demande.vue";
import donate from "../FrontEnd/Demande/don.vue";
import about from "../FrontEnd/About/about.vue"
import urgence from "../FrontEnd/urgence/urgence.vue";
import profil from "../FrontEnd/Profil/profil.vue"
import event from "../FrontEnd/evenements/event.vue"
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
            name: "about",
            path: "/about",
            component: about
        },
        {
            name: "profil",
            path: "/profil",
            component: profil
        },

        ]
    },
    {
        name: "demande",
        path: "/demande",
        component: demande
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
]
const router = Router();

function loggedIn(){
    return localStorage.getItem('token')
}

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        // this route requires auth, check if logged in
        // if not, redirect to login page.
        if (!loggedIn()) {
            next({
            path: '/login',
            query: { redirect: to.fullPath }
            })
        } else {
            next()
        }
    } else if(to.matched.some(record => record.meta.guest)) {
        if (loggedIn()) {
            next({
            path: '/',
            query: { redirect: to.fullPath }
            })
        } else {
            next()
        }
    } else {
        next() // make sure to always call next()!
    }
})

export default router;
function Router() {
    const router = new createRouter({
        history: createWebHistory(),
        routes,
    });
    return router;
}