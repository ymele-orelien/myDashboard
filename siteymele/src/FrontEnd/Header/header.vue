<template>
  <!-- Preloader -->
  <div class="preloader">
    <div class="loader">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>

      <div class="indicator">
        <img src="../../assets/images/logos/logoheader.jpg" alt="" width="24px" />
      </div>
    </div>
    <!-- <span color="#fff" style="font-size: 45px !">yoyo</span> -->
  </div>
  <!-- End Preloader -->
  <ul class="pro-features" >
    <a class="get-pro" style="color: #ffff !important">
      <i class="fa-regular fa-user" style="font-size: 22px;"></i> Compte
    </a>
    <li class="big-title">{{ users.name }}</li>
    <li class="title"></li>
    <li>{{ users.bloodGroup !=="NC"?users.bloodGroup:"Groupe sanguin non connue" }}</li>
    <li>{{ users.email }}</li>
    <li>{{ users.location }}</li>

    <!-- <li>Color Plate With 12+ Colors</li>
    <li>Sticky Header / Sticky Filters</li>
    <li>Working Contact Form With Google Map</li> -->
    <div class="buttons d-flex">
      <RouterLink to="/profil"  class="btn btn-seconadry" style="background-color: #00002c;"> <i
          class="fa-solid fa-user"></i> Profil</RouterLink>
      <button href="#" target="_blank" class="btn btn-danger" @click="logout()" style="background-color: red">
        <i class="fa-solid faout"></i> Deconnection</button>
    </div>
  </ul>
  <div class="hearder">
    <div class="nav">
      <nav>
        <div class="imag">
          <img src="../../assets/images/logos/logoheader.jpg" alt=""> <span>BLOOD <br>DONATE</span>
        </div>
        <div class="lien" id="lien">
          <span><router-link to="/">Accuiel</router-link></span>
          <span class="disnone"><router-link to="response" v-if="isLoggedIn">Reponse</router-link>
            <ul v-else style="display: none;visibility: none;"></ul>
          </span>

          <span class="disnone"><router-link to="help" v-if="isLoggedIn">Centre d'aide </router-link>
            <ul v-else style="display: none;"></ul>
          </span>

          <span><router-link to="about">A propos de nous</router-link></span>
        </div>
        <div class="buttons" v-if="isLoggedIn">
          <routerLink to="/donate" class="btn btn-danger" style="color: #ffff;"><span class="span-none-res">Faire un Don</span> </routerLink>
          <routerLink to="/demande" class="btn" style="background: #00002c;color:#ffff;"><span class="span-none-res">Faire une demande</span> </routerLink>
        </div>
        <div class="buttons" v-else>
          <routerLink to="/register" class="btn btn-danger" style="background: green;">
            <i class="fas fa-circle-user mr-md-2"></i> 
            <span class="span-none-res">S'inscrire</span>
          </routerLink>
          <routerLink to="/login" class="btn" style="background: #00002c;color:#ffff;">
            <i class="fas fa-key mr-md-2"></i> 
            <span class="span-none-res">Se connecter</span>
          </routerLink>
        </div>
        <div class="toggle-nav" id="toggleBtn">
          <span class="tiret"></span>
          <span class="tiret"></span>
          <span class="tiret"></span>
        </div>
      </nav>
    </div>

  </div>

</template>
<script>
import axios from "axios";

export default {
  name: "login",
  data() {
    return {
      users: {},
      token: localStorage.getItem("token"),
      isLoggedIn: false
    };
  },
  mounted() {
    window.addEventListener("scroll", this.handleScroll);
    this.getUsers();
    this.getAuthCheck();
  },
  methods: {
    handleScroll() {
      var nav = document.querySelector("nav");
      nav.classList.toggle("sticky", window.scrollY > 0);
    },
    getUsers() {
      axios
        .get("http://127.0.0.1:8000/api/simpleUser/profile", {
          headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
            Authorization: "Bearer " + this.token,
          },
        })
        .then((res) => {
          console.log(res);
          this.users = res.data.users;
          console.log(this.users);
        });
    },
    getAuthCheck() {
      axios
        .get("http://127.0.0.1:8000/api/authUser", {
          headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
            Authorization: "Bearer " + this.token,
          },
        })
        .then((res) => {
          console.log(res);
          this.isLoggedIn = res.data.auth;
          console.log(this.isLoggedIn);
        });
    },
    logout() {
      axios
        .post(
          "http://127.0.0.1:8000/api/logout",
          {},
          {
            headers: {
              Authorization: "Bearer " + localStorage.getItem("token"),
            },
          }
        )
        .then((response) => {
          this.$toast.success("Déconnexion réussie");
          localStorage.removeItem("token");
          this.$router.push("/login");
        })
        .catch((error) => {
          console.error("Erreur lors de la déconnexion :", error);
          this.$toast.error("Erreur lors de la déconnexion");
        });
    },
  },
};
</script>

<style scoped>
.hearder {
  width: 100%;
  margin: 0;
}

.nav {
  width: 100%;
  display: flex;
  justify-content: center;
  /* padding-top: 1.5rem; */

}

nav {
  height: 70px;
  width: 90%;
  border-radius: 5px;
  padding: 0.5rem;
  display: flex;
  color: #fff !important;
  justify-content: space-between;
  transition: 0.5s ease;
  position: fixed;
  z-index: 10000 !important;
  background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0);
  box-shadow: 0px 0px 32px 0 rgba(0, 0, 0, 0.1);
}

nav.sticky {
  position: fixed;
  width: 100%;
  background: #fff;
  top: 0;
  border-radius: 0;
  transition: 0.5s ease;
  right: 0;
  left: 0;
  z-index: 999999;
  box-shadow: 5px 1px rgba(0, 0, 0, 0.1);
}

nav.sticky {
  color: #000;
}

.imag {
  width: 200px;
  display: flex;
  justify-content: center;
  align-items: center;
}

nav .imag img {
  width: 60px !important;
  height: 100%;
}

nav .imag span {
  font-weight: 600;
  color: #fff;
  height: 100% !important;
  margin-left: 0.2rem;
  padding-top: 0.6rem;
  font-size: 16px;
}

.lien {
  display: flex;
  justify-content: center;
  padding: 0.6rem;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  color: #fff !important;
  list-style: none;
}

.lien span {
  margin-left: 1rem;
  font-size: 15px;
  color: #fff;
  font-weight: 450;

}

.sticky .lien span {
  color: #000;
}

.buttons .btn {
  margin: 0.3rem;
}

.containair {
  min-height: 85%;
  height: 85%;
  z-index: 9999;
  position: relative;
}



.toggle-nav {
  /* background: red; */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  display: none;
  visibility: none;
}

.toggle-nav span.tiret {
  width: 1.5rem;
  height: 3px;
  background: #fff;
  display: block;
  margin-bottom: 5px;
}

.sticky .imag span {
  color: #000;
  padding-top: 0rem;
}
@media screen and (max-width: 1025px) {
  nav {
    width: 90%;
  }
  .imag {
    width: auto;
  }
  .span-none-res {
    display: inline-block
  }
}
@media screen and (max-width: 885px) {
  nav {
    width: 100%;
  }
  nav.sticky .toggle-nav span.tiret {
  background: #000;
}

nav.sticky .lien a {
  color: #fff;
}
  .toggle-nav {
    display: flex;
  }
  .lien {
    /* display: flex; */
    display: none;
    flex-direction: column;
    position: absolute;
    top: 100%;
    left: 0;
    background: #151418;
    width: 100%;
  }
  .lien.hidden {
    display: flex;
  }
  .lien span {
    /* background: yellow; */
    margin-bottom: 3px;
    /* padding: 10px; */
  }
  .lien span:hover {
    background: #9e9494;
  }
}

@media screen and (max-width: 439px) {
  .span-none-res {
    display: none
  }
}

@media screen and (max-width: 310px) {
  nav .imag img {
    width: 40px !important;
    height: 40px;
  }
  .imag span {
    display: none;
  }
}
</style>