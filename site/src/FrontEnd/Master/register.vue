<template>

    <!-- Affichage des alertes -->
    <div v-if="successMessage" class="alert alert-success" role="alert">
      {{ successMessage }}
    </div>
    <div v-if="errorMessage" class="alert alert-danger" role="alert">
      {{ errorMessage }}
    </div>
  <div class="bottle">
    <div class="forms-bottle">
      <div class="signin-signup">
        <!-- FORMULAIRE D INSCRIPTION -->
        <form action="#" class="sign-in-form" @submit.prevent="register">
          <!-- En cas d erreur de connexion affiche moi ces erreurs -->
          <Error v-if="error" :error="error" />

          <h2 class="title" style="color: #00002c; font-weight: 600">
            S'inscrire
          </h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nom && Prenom" name="name" v-model="users.name" required />
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" placeholder="Email" name="email" v-model="users.email" />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mot De Passe" name="password" v-model="users.password" />
          </div>

          <!-- <div class="input-field">
            <i class="fas fa-lock"></i>
            <input
              type="password"
              placeholder="Confirm Mot De Passe"
              name="confirm_password"
              v-model="confirm_password"
            />
          </div> -->

          <div class="input-field">
            <i class="fa-solid fa-droplet"></i>
            <input type="text" placeholder="groupe sanguin" name="bloodGroup" v-model="users.bloodGroup" />
          </div>
          <div class="input-field">
            <i class="fa-solid fa-location"></i>
            <input type="text" placeholder="Votre ville de residence" name="bloodGroup" />
          </div>

          <input type="submit" class="button" value="Inscription" />

          <!-- LES LIENS POUR SE CONNECTER EN DEHORS DU FORMULAIRE -->
          <p class="social-text">
            Ou Connectez-vous avec les plateformes sociales
          </p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fa-brands fa-gmail"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-whatsapp"></i>
            </a>
          </div>
        </form>
        <!-- Utilisation de v-toaster pour afficher les alertes -->
    <v-toaster :default-style="{ zIndex: 1000 }"></v-toaster>

<!-- Affichage des alertes -->
<div v-if="successMessage" sty>
  <v-toaster
    :default-style="{ zIndex: 9999999999999 }"
    :settings="{ duration: 5000, success: true }"
  >
    {{ successMessage }}
  </v-toaster>
</div>
<div v-if="errorMessage">
  <v-toaster
    :default-style="{ zIndex: 999999999 }"
    :settings="{ duration: 5000, error: true }"
  >
    {{ errorMessage }}
  </v-toaster>
</div>
      </div>
    </div>

    <div class="panels-bottle">
      <div class="panel left-panel">
        <div class="content">
          <h3>Un d'entre nous ?</h3>
          <p>
            Super merci de vous connecter et consulter nos actualites,et d'aider
            un maximun de personne.
          </p>
          <button class="button transparent" id="sign-in-button">
            <router-link to="/login"> Se Connecter </router-link>
          </button>
        </div>
        <img src="../../assets/images/undraw_medicine_b-1-ol.svg" class="image" alt="" />
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import Error from "../../components/Error.vue";
// import Notifications from "vue-notification";
export default {
  name: "register",
  data() {
    return {
      error: "",

      users: {
        name: "",
        email: "",
        password: "",
        bloodGroup: "",
        location: '',
      },
      successMessage: "",
      errorMessage: "",
    };
  },
 
  methods: {
    register() {

      this.AddUsers();



    },
    AddUsers() {
      try {
        let url = "http://127.0.0.1:8000/api/simpleUser/register"
        axios.post(url, this.users).then((response) => {
          console.log(response)

          this.successMessage = "Inscription réussie. Redirection vers la page de connexion.";
          this.users = {
            name: '',
            email: '',
            password: '',
            location: '',
            bloodGroup: "",


          }
          // Utiliser v-toaster pour afficher le message de succès
     

          console.log("yme")

          this.$router.push({ name: 'login' },);

          this.$toast.success(this.successMessage);
        })
      } catch (error) {
        //Gérer les erreurs ici
        if (error.response && error.response.status === 403) {
          this.errorMessage = "L'email existe déjà.";
        } else {
          this.errorMessage = "Une erreur s'est produite lors de l'inscription.";
        }

        // Utiliser v-toaster pour afficher le message d'erreur
        this.$toast.error(this.errorMessage);
        console.log("error")

      }
    }
  }

};
</script>
<style>
body {
  overflow-x: hidden !important;
  height: 100vh;
}

h3,
p {
  color: #ffffffeb !important;
}

.bottle {
  position: relative;
  width: 100%;
  background-color: #fff;
  min-height: 100vh;
  /* overflow: hidden; */
}

.forms-bottle {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.signin-signup {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  left: 75%;
  width: 50%;
  transition: 1s 0.7s ease-in-out;
  display: grid;
  grid-template-columns: 1fr;
  z-index: 5;
}

form {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0rem 5rem;
  transition: all 0.2s 0.7s;
  /* overflow: hidden; */
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}

form.sign-up-form {
  opacity: 0;
  z-index: 1;
}

form.sign-in-form {
  z-index: 2;
}

.title {
  font-size: 2.2rem;
  color: #444;
  margin-bottom: 10px;
}

.input-field {
  max-width: 280px;
  width: 800%;
  background-color: #f0f0f0;
  margin: 10px 0;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
}

.input-field i {
  text-align: center;
  line-height: 55px;
  color: #acacac;
  transition: 0.5s;
  font-size: 1.1rem;
}

.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}

.input-field input::placeholder {
  color: #aaa;
  font-weight: 500;
}

.social-text {
  padding: 0.7rem 0;
  font-size: 1rem;
}

.social-media {
  display: flex;
  justify-content: center;
}

.social-icon {
  height: 46px;
  width: 46px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 0.45rem;
  color: #333;
  border-radius: 50%;
  border: 1px solid #333;
  text-decoration: none;
  font-size: 1.1rem;
  transition: 0.3s;
}

.social-icon:hover {
  color: #4481eb;
  border-color: #4481eb;
}

.button {
  width: 150px;
  background-color: #04354f;
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}

.button:hover {
  background-color: #4d84e2;
}

.panels-bottle {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.bottle:before {
  content: "";
  position: absolute;
  height: 2000px;
  width: 2000px;
  top: -10%;
  right: 48%;
  transform: translateY(-50%);
  background-image: linear-gradient(-45deg, #00002c 21%, #c70808 70%);
  transition: 1.8s ease-in-out;
  border-radius: 50%;
  z-index: 6;
}

.image {
  width: 100%;
  transition: transform 1.1s ease-in-out;
  transition-delay: 0.4s;
}

.panel {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: space-around;
  text-align: center;
  z-index: 6;
}

.left-panel {
  pointer-events: all;
  padding: 3rem 17% 2rem 12%;
}

.right-panel {
  pointer-events: none;
  padding: 3rem 12% 2rem 17%;
}

.panel .content {
  color: #fff;
  transition: transform 0.9s ease-in-out;
  transition-delay: 0.6s;
}

.panel h3 {
  font-weight: 600;
  line-height: 1;
  font-size: 1.5rem;
}

.panel p {
  font-size: 0.95rem;
  padding: 0.7rem 0;
}

.button.transparent {
  margin: 0;
  background: none;
  border: 2px solid #fff;
  width: 130px;
  height: 41px;
  font-weight: 600;
  font-size: 0.8rem;
}

.right-panel .image,
.right-panel .content {
  transform: translateX(800px);
}

/* ANIMATION */

.bottle.sign-up-mode:before {
  transform: translate(100%, -50%);
  right: 52%;
}

.bottle.sign-up-mode .left-panel .image,
.bottle.sign-up-mode .left-panel .content {
  transform: translateX(-800px);
}

.bottle.sign-up-mode .signin-signup {
  left: 25%;
}

.bottle.sign-up-mode form.sign-up-form {
  opacity: 1;
  z-index: 2;
}

.bottle.sign-up-mode form.sign-in-form {
  opacity: 0;
  z-index: 1;
}

.bottle.sign-up-mode .right-panel .image,
.bottle.sign-up-mode .right-panel .content {
  transform: translateX(0%);
}

.bottle.sign-up-mode .left-panel {
  pointer-events: none;
}

.bottle.sign-up-mode .right-panel {
  pointer-events: all;
}

@media (max-width: 870px) {
  .bottle {
    min-height: 800px;
    height: 100vh;
  }

  .signin-signup {
    width: 100%;
    top: 95%;
    transform: translate(-50%, -100%);
    transition: 1s 0.8s ease-in-out;
  }

  .signin-signup,
  .bottle.sign-up-mode .signin-signup {
    left: 50%;
  }

  .panels-bottle {
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 2fr 1fr;
  }

  .panel {
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    padding: 2.5rem 8%;
    grid-column: 1 / 2;
  }

  .right-panel {
    grid-row: 3 / 4;
  }

  .left-panel {
    grid-row: 1 / 2;
  }

  .image {
    width: 200px;
    transition: transform 0.9s ease-in-out;
    transition-delay: 0.6s;
  }

  .panel .content {
    padding-right: 15%;
    transition: transform 0.9s ease-in-out;
    transition-delay: 0.8s;
  }

  .panel h3 {
    font-size: 1.2rem;
  }

  .panel p {
    font-size: 0.7rem;
    padding: 0.5rem 0;
  }

  .button.transparent {
    width: 110px;
    height: 35px;
    font-size: 0.7rem;
  }

  .bottle:before {
    width: 1500px;
    height: 1500px;
    transform: translateX(-50%);
    left: 30%;
    bottom: 68%;
    right: initial;
    top: initial;
    transition: 2s ease-in-out;
  }

  .bottle.sign-up-mode:before {
    transform: translate(-50%, 100%);
    bottom: 32%;
    right: initial;
  }

  .bottle.sign-up-mode .left-panel .image,
  .bottle.sign-up-mode .left-panel .content {
    transform: translateY(-300px);
  }

  .bottle.sign-up-mode .right-panel .image,
  .bottle.sign-up-mode .right-panel .content {
    transform: translateY(0px);
  }

  .right-panel .image,
  .right-panel .content {
    transform: translateY(300px);
  }

  .bottle.sign-up-mode .signin-signup {
    top: 5%;
    transform: translate(-50%, 0);
  }
}

@media (max-width: 570px) {
  form {
    padding: 0 1.5rem;
  }

  .image {
    display: none;
  }

  .panel .content {
    padding: 0.5rem 1rem;
  }

  .bottle {
    padding: 1.5rem;
  }

  .bottle:before {
    bottom: 72%;
    left: 50%;
  }

  .bottle.sign-up-mode:before {
    bottom: 28%;
    left: 50%;
  }
}
</style>
