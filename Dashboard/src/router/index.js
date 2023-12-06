import { createRouter, createWebHistory } from "vue-router";


import dashboard from '../Dashboard/Master/Dashboard.vue';
import accuiel from '../Dashboard/Master/home.vue';
import users from '../Dashboard/Users/users.vue'
import users_details from '../Dashboard/Users/details-users.vue'
import users_activites from '../Dashboard/Users/users-activites.vue'
import create_users from "../Dashboard/Users/create-admin.vue"
import list_admin from "../Dashboard/Users/list-admin.vue"
import details_admin from "../Dashboard/Users/details-admin.vue"

import evenements from "../Dashboard/Evenements/Evenements.vue"
import connexion from "../Form-connexion/connexion.vue"

const routes = [
    {
        name: 'Dashboard',
        path: '/accuiel',
        component: dashboard,
        children: [

            {
                name: 'usersList',
                path: '/users',
                component: users

            },
            {
                name: "local",
                path: "/home",
                component: accuiel
            },

            {
                path: '/users_details/:id/details',
                name: '/users_details',
                component: users_details,
                props: true

            },
            {
                name: 'list_admin',
                path: '/users/list_admin',
                component: list_admin

            },
            {
                path: '/users/:id/details_admin',
                name: '/details_admin',
                component: details_admin,
                props: true

            },

            {
                name: 'create_users',
                path: '/users/create-admin',
                component: create_users

            },
            {
                name: 'users-activites',
                path: '/users/activites',
                component: users_activites

            }, {
                name: 'Evenements',
                path: '/evenements',
                component: evenements

            }


        ]


    }, {
        name: "connnexion",
        path: "/",
        component: connexion
    }


];

const router = Router();
router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
      if (!localStorage.getItem('token')) {
        // Si l'utilisateur n'est pas authentifié, redirigez-le vers la page de connexion
        next({ path: '/' });
      } else {
        // Vérifiez si le token est valide côté serveur (facultatif mais recommandé)
        axios.get('http://127.0.0.1:8000/api/users')
          .then(response => {
            // Si l'utilisateur est authentifié, continuez la navigation
            next();
          })
          .catch(error => {
            // Si le token est invalide, redirigez l'utilisateur vers la page de connexion
            console.error('Token invalide', error);
            next({ path: '/' });
          });
      }
    } else {
      // Si la route ne nécessite pas d'authentification, continuez la navigation
      next();
    }
  });
export default router;
function Router() {
    const router = new createRouter({
        history: createWebHistory(),
        routes,
    });
    return router;
}

  
  