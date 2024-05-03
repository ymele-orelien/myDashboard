<template>
  <div class="bottle">
    <div class="forms-bottle">
      <div class="signin-signup">
        <!-- FORMULAIRE D INSCRIPTION -->
        <form @submit.prevent="register" class="sign-in-form">
          <img src="../../assets/images/logos/logoheader.jpg" alt="" />

          <h2 class="title" style="color: #00002c; font-weight: 600;">
            S'inscrire
          </h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input
              type="text"
              placeholder="Nom && Prenom"
              name="name"
              v-model="users.name"
            />
          </div>
          <span class="error-message">{{ fieldErrors.name }}</span>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input
              type="email"
              placeholder="Email"
              name="email"
              v-model="users.email"
            />
          </div>
          <span class="error-message">{{ fieldErrors.email }}</span>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input
              type="password"
              placeholder="Mot De Passe"
              name="password"
              v-model="users.password"
            />
          </div>
          <span class="error-message">{{ fieldErrors.password }}</span>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input
              type="password"
              placeholder="Confirm Mot De Passe"
              name="confirmPassword"
              v-model="users.confirmPassword"
            />
          </div>
          <span class="error-message">{{ fieldErrors.confirmPassword }}</span>

          <div class="input-field">
            <i class="fa-solid fa-droplet"></i>
            <select name="" id="" v-model="users.bloodGroup"
              ><option value="">GROUPE SANGUIN</option>
              <option value="NC">NON CONNUE</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O-</option>
              <option value="O-">O-</option></select
            >
          </div>
          <!-- <span class="error-message">{{ fieldErrors.bloodGroup }}</span> -->

          <div class="input-field">
            <i class="fa-solid fa-location"></i>
            <input
              type="text"
              placeholder="Votre ville de résidence"
              name="location"
              v-model="users.location"
            />
          </div>
          <span class="error-message">{{ fieldErrors.location }}</span>

 

  <button class="button" type="submit" :disabled="spinner">
            <span v-if="!spinner">Inscription</span>
            <span v-else>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              <span class="visually-hidden">Chargement...</span>
            </span>
          </button>

        
        </form>
      </div>
    </div>

    <div class="panels-bottle">
      <div class="panel left-panel">
        <div class="content">
          <h3 style="color: #fff;">Un d'entre nous ?</h3>
          <p style="color:#fff">
            Super merci de vous connecter et consulter nos actualités,et d'aider
            un maximum de personnes.
          </p>
          <button class="button transparent" id="sign-in-button">
            <router-link to="/login">Se Connecter</router-link>
          </button>
        </div>
        <img
          src="../../assets/images/undraw_medicine_b-1-ol.svg"
          class="image"
          alt=""
        />
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "register",
  data() {
    return {
      users: {
        name: "",
        email: "",
        password: "",
        confirmPassword: "",
        bloodGroup: "",
        location: "",
      },
      fieldErrors: {
        name: "",
        email: "",
        password: "",
        confirmPassword: "",
        bloodGroup: "",
        location: "",
      },
      spinner: false, // Ajout de la propriété spinner

      successMessage: "",
      errorMessage: "",
    };
  },
  methods: {
    register() {
      if (this.validateForm()) {
        this.AddUser();
      }
    },
    validateForm() {
      this.resetFieldErrors();
      let isValid = true;

      if (!this.users.name) {
        this.fieldErrors.name = "Le nom est obligatoire.";
        isValid = false;
      } else if (this.users.name.length < 6) {
        this.fieldErrors.name = "Le nom doit avoir au moins 6 caractères.";
        isValid = false;
      }

      if (!this.users.email) {
        this.fieldErrors.email = "L'email est obligatoire.";
        isValid = false;
      }

      if (!this.users.password) {
        this.fieldErrors.password = "Le mot de passe est obligatoire.";
        isValid = false;
      } else if (this.users.password.length < 6) {
        this.fieldErrors.password = "Le mot de passe doit avoir au moins 6 caractères.";
        isValid = false;
      }

      if (!this.users.confirmPassword) {
        this.fieldErrors.confirmPassword = "La confirmation du mot de passe est obligatoire.";
        isValid = false;
      } else if (this.users.password !== this.users.confirmPassword) {
        this.fieldErrors.confirmPassword = "Les mots de passe ne correspondent pas.";
        isValid = false;
      }

      if (!this.users.bloodGroup) {
        this.fieldErrors.bloodGroup = "Le groupe sanguin est obligatoire.";
        isValid = false;
      }

      if (!this.users.location) {
        this.fieldErrors.location = "La ville de résidence est obligatoire.";
        isValid = false;
      }

      return isValid;
    },
    resetFieldErrors() {
      for (let field in this.fieldErrors) {
        this.fieldErrors[field] = "";
      }
    },
    AddUser() {
      let url = "http://127.0.0.1:8000/api/simpleUser/register";
      this.spinner = true; // Affichage du spinner

      axios
        .post(url, this.users)
        .then((response) => {
          console.log(response.data);
          this.successMessage = "Inscription réussie. Redirection vers la page de connexion.";
          this.users = {
            name: "",
            email: "",
            password: "",
            location: "",
            bloodGroup: "",
          };
          localStorage.setItem('token', response.data.token); // Assurez-vous que la réponse de l'API contient un champ 'token'
          this.$router.push('/code');
          this.$toast.success("COMPTE CRÉÉ");
        })
        .catch((error) => {
          if (error.response && error.response.status === 422) {
            this.$toast.warning("L'email existe déjà.");
          } else {
            this.errorMessage = "Une erreur s'est produite lors de l'inscription.";
            this.$toast.warning("Une erreur s'est produite lors de l'inscription.");
          }
        }).finally(() => {
          this.spinner = false; // Masquage du spinner
        });;
    },
  },
};
</script>


<style scoped></style>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.error-message {
  color: #00002c;
  font-weight: 750;
  font-size: 17px;
  width: 300px;
  max-width: 350px;
}
.error {
  border-radius: 4px;
  padding: 0.3rem;
  background: #00002c;
  color: #fff;
}

body,
input {
  font-family: "Poppins", sans-serif;
}

.bottle {
  position: relative;
  width: 100%;
  min-height: 100vh;
  overflow-x: hidden;
}

.forms-bottle {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  /* background: yellow; */
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
  z-index: 999;
  /* background-color: red; */
}

form {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0rem 15rem;
  transition: all 0.2s 0.7s;
  overflow: hidden;
  grid-column: 1 / 2;
  height: 1000px;
  max-height: 1000px;

  grid-row: 1 / 2;
  /* background: orange; */
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
  max-width: 380px;
  width: 100%;
  background-color: #f0f0f0;
  margin: 10px 0;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  align-items: center;
  padding: 0.2rem 0.4rem;
  position: relative;
}

.input-field i {
  text-align: center;
  line-height: 55px;
  color: #ff2770;
  transition: 0.5s;
  font-size: 1.1rem;
}

.input-field input,
select {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}

.input-field select {
  background: none !important;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}

/* .nice-select {
  background-color: #f2f2f2;
  width: 100% !important;
  height: 100% !important;
} */

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
  color: #ff2770;
  border-color: #ff2770;
}

.button {
  width: 150px;
  background-color: #ff2770;
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
  background-color: #680a2a;
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
  background: linear-gradient(#25252b, #ff2770, #25252b, #ff2770);
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

.button.transparent:hover {
  background: none;
}

.button.transparent:hover a {
  color: #fff;
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
    min-height: 150vh;
  }

  form {
    margin: 2rem 0 0 0;
  }

  .signin-signup {
    width: 100%;
    top: 120%;
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
