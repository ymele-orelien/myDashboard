import { createRouter, createWebHistory } from "vue-router";

import connexion from "../Form-connexion/connexion.vue";
import dashboard from "../Dashboard/Master/Dashboard.vue";
import accuiel from "../Dashboard/Master/home.vue";
//USERSS
import users from "../Dashboard/Users/users.vue";
import allUserActivity from "../Dashboard/Users/all-activity-user.vue";
import users_details from "../Dashboard/Users/details-users.vue";
import users_activites from "../Dashboard/Users/users-activites.vue";
import create_users from "../Dashboard/Users/create-admin.vue";
import list_admin from "../Dashboard/Users/list-admin.vue";
import details_admin from "../Dashboard/Users/details-admin.vue";
//HOSPTALS
import hospital from "../Dashboard/Hopitaux/Hopitaux.vue";
import createHospital from "../Dashboard/Hopitaux/createHospital.vue";
import detailHospital from "../Dashboard/Hopitaux/detailHospital.vue";

//EVENTS
import evenements from "../Dashboard/Evenements/Evenements.vue";
import listEvent from "../Dashboard/Evenements/listEvent.vue";
import eventCreate from "../Dashboard/Evenements/eventCreate.vue";
import youEvent from "../Dashboard/Evenements/youEvent.vue";
import attentEvent from "../Dashboard/Evenements/attentEvent.vue";
import detailEvent from "../Dashboard/Evenements/detailEvent.vue";
//DEMANDES
import don from "../Dashboard/Demande/Don/Don.vue";
import listRendeVous from "../Dashboard/Demande/Don/listRendeVous.vue";
import detailDon from "../Dashboard/Demande/Don/detailDon.vue";
import donRefuser from "../Dashboard/Demande/Don/donRefuser.vue";


const routes = [
  {
    name: "connexion",
    path: "/",
    component: connexion,
    // meta: {guest: true}
  },
  {
    name: "Dashboard",
    path: "/accuiel",
    component: dashboard,
    meta: { requiresAuth: true },
    children: [
      {
        name: "local",
        path: "/home",
        component: accuiel,
      },
      //===========>USERS<==================\\
      {
        name: "usersList",
        path: "/users",
        component: users,
      },
      {
        name: "allUserActivity",
        path: "/allUserActivity",
        component: allUserActivity,
      },

      {
        path: "/users_details/:id/details",
        name: "connnexion",
        path: "/",
        component: connexion,
        meta: { guest: true },
      },
      {
        name: "list_admin",
        path: "/users/list_admin",
        component: list_admin,
      },
      {
        path: "/users/:id/details_admin",
        name: "/details_admin",
        component: details_admin,
        props: true,
      },

      {
        name: "create_users",
        path: "/users/create-admin",
        component: create_users,
      },
      {
        name: "users-activites",
        path: "/users/activites",
        component: users_activites,
      },
      //===========>EVENTS<==================\\
      {
        name: "Evenements",
        path: "/evenements",
        component: evenements,
      },
      {
        name: "eventCreate",
        path: "/eventCreate",
        component: eventCreate,
      },
      {
        name: "listEvent",
        path: "/listEvent",
        component: listEvent,
      },
      {
        name: "youEvent",
        path: "/youEvent",
        component: youEvent,
      },
      {
        name: "attentEvent",
        path: "/attentEvent",
        component: attentEvent,
      },
      {
        path: "/event/:id/detailsEvent",
        name: "detailEvent",
        component: detailEvent,
        props: true,
      },
      //===========>HOSPITALS<==================\\

      {
        name: "hospital",
        path: "/hospital",
        component: hospital,
      },
      {
        name: "createHospital",
        path: "/createHospital",
        component: createHospital,
      },
    {
        name:"hospitalDetail",
        path:"/hospital/:id/infoHospital",
        component:detailHospital,
        props: true,
   
    },

      //===========>don<==================\\
      {
        name: "don",
        path: "/don",
        component: don,
      },
      {
        name: "listDon",
        path: "/listRendeVous",
        component: listRendeVous,
      },
      {
        name: "detailDon",
        path: "/don/:id/detailsDon",
        component: detailDon,
        props: true,
      },
      {
        name: "donRefuser",
        path: "/donRefuser",
        component: donRefuser,
      },
    ],
  },
];

const router = Router();

function loggedIn() {
  return localStorage.getItem("token");
}

router.beforeEach((to, from, next) => {
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    if (!loggedIn()) {
      next({
        path: "/",
        query: { redirect: to.fullPath },
      });
    } else {
      next();
    }
  } else if (to.matched.some((record) => record.meta.guest)) {
    if (loggedIn()) {
      next({
        path: "/home",
        query: { redirect: to.fullPath },
      });
    } else {
      next();
    }
  } else {
    next(); // make sure to always call next()!
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
