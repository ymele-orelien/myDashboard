import { createRouter, createWebHistory } from "vue-router";


import dashboard from '../Dashboard/Master/Dashboard.vue';
import accuiel from '../Dashboard/Master/home.vue';
import users from '../Dashboard/Users/users.vue';
import allUserActivity from '../Dashboard/Users/all-activity-user.vue';
import users_details from '../Dashboard/Users/details-users.vue';
import users_activites from '../Dashboard/Users/users-activites.vue';
import create_users from "../Dashboard/Users/create-admin.vue";
import list_admin from "../Dashboard/Users/list-admin.vue";
import details_admin from "../Dashboard/Users/details-admin.vue";
import list_hospitaux from "../Dashboard/Hopitaux/Hopitaux.vue";
import stocke_hospitaux from "../Dashboard/Hopitaux/stockeHospitaux.vue";
import evenements from "../Dashboard/Evenements/Evenements.vue";
import connexion from "../Form-connexion/connexion.vue";
import eventCreate from "../Dashboard/Evenements/eventCreate.vue"

const routes = [
    {
        name: "connexion",
        path: "/",
        component: connexion,
        // meta: {guest: true}
    },
    {
        name: 'Dashboard',
        path: '/accuiel',
        component: dashboard,
        meta: {requiresAuth: true},
        children:
         [ {
            name: "local",
            path: "/home",
            component: accuiel,
            
        },
//===========>USERS<==================\\
            {
                name: 'usersList',
                path: '/users',
                component: users

            },
            {
                name: 'allUserActivity',
                path: '/allUserActivity',
                component: allUserActivity

            },
           

            {
                path: '/users_details/:id/details', 
                    name: "connnexion",
                    path: "/",
                    component: connexion,
                    meta: {guest: true}
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

            },
            //===========>EVENTS<==================\\ 
            {
                name: 'Evenements',
                path: '/evenements',
                component: evenements

            },
            {
                name: 'eventCreate',
                path: '/eventCreate',
                component: eventCreate

            }
            ,
            //===========>HOSPITALS<==================\\ 

             {
                name: 'list_hospitaux',
                path: '/listHospitaux',
                component:  list_hospitaux

            }
            , {
                name: 'stocke_hospitaux',
                path: '/stockeHospitaux',
                component:  stocke_hospitaux

            }



        ]


    }, 
    


];

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
            path: '/',
            query: { redirect: to.fullPath }
            })
        } else {
            next()
        }
    } else if(to.matched.some(record => record.meta.guest)) {
        if (loggedIn()) {
            next({
            path: '/home',
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

  
  