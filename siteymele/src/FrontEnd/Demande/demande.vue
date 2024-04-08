<template>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>DEMANDE</h2>
                        <ul class="bread-list">
                            <li>
                                <RouterLink to="/">Home</RouterLink>
                            </li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Demande en poche</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Us -->
    <section class="contact-us section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6"
                        style="background: url(../../../src/assets/images/slideB.jpg);background-size: cover;">
                        <div class="contact-us-left">
                            <!--Start Google-map -->
                            <div id="myMap"></div>
                            <!--/End Google-map -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <h2>DEMANDE EN POCHE</h2>
                            <p style="color: #00002c !important;">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Eligendi inventore accusantium obcaecati excepturi corrupti ea cum magni maiores
                                deserunt sequi. </p>
                            <!-- Form -->
                            <form class="form" action="mail/mail.php" @submit.prevent="register()">
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="form-label"> QUEL EST VOTRE LOCALISATION
                                            <span>*</span></label>

                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="LITTORAL/WOURI/DOUALA"
                                                 v-model="demande.location">
												<span class="error-message" >{{ fieldErrors.location }}</span>

                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <label for="" class="form-label"> QUEL EST LE GROUPE SANGUIN DONC VOUS AVEZ
                                            BESOINS?
                                            <span>*</span></label>
                                        <div class="form-group">
                                            <select name="" id="" class="form-control" v-model="demande.bloodGroup">
                                                <option value="">SECTIONNEZ UN GROUPE SANGUIN</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
												<span class="error-message">{{ fieldErrors.bloodGroup }}</span>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">COMBIEN DE POCHE AVEZ VOUS BESOINS?
                                            <span>*</span></label>

                                        <div class="form-group">
                                            <input type="number" name="name"  v-model="demande.quantite">
												<span class="error-message">{{ fieldErrors.quantite }}</span>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">DECRIVEZ NOUS LA SITUATIONS QUI NECESSITES DES
                                            POCHES
                                            <span>*</span></label>

                                        <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="10"
                                                v-model="demande.detail"></textarea>
												<span class="error-message">{{ fieldErrors.detail }}</span>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">ENVOYER</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <div class="row">
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="fa-solid fa-1"></i>
                            <div class="content">
                                <h3>Remplicez Correctement le formulaire </h3>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="fa-solid fa-2"></i>
                            <div class="content">
                                <h3>Attendez une date de Rendez vous</h3>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="fa-solid fa-3"></i>
                            <div class="content">
                                <h3>Aller au Rendez Vous Pour faire Le don de sang</h3>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->
</template>
<script>
import axios from 'axios';

export default {
  name: "demande",
  data() {
    return {
      demande: {
        location: "",
        bloodGroup: "",
        detail: "",
        quantite: ""
      },
      token: localStorage.getItem("token"),
      fieldErrors: {
        location: "",
        bloodGroup: "",
        detail: "",
        quantite: ""
      }
    };
  },
  methods: {
    register() {
      if (this.validateFrom()) {
        this.addDemande();
      }
    },
    validateFrom() {
      this.resetFieldErrors();
      let isValid = true;

      // Location
      if (!this.demande.location) {
        this.fieldErrors.location = "La locaslisation est obligatoire.";
        isValid = false;
      } else if (this.demande.location.length < 6) {
        this.fieldErrors.location = "La localisation doit avoir au moins 6 caractères.";
        isValid = false;
      } else if (/[*<>\/()]/.test(this.demande.location)) {
        this.fieldErrors.location = "La localisation ne peut pas contenir les caractères spéciaux * < > / ( ).";
        isValid = false;
      }

      // Blood Group
      if (!this.demande.bloodGroup) {
        this.fieldErrors.bloodGroup = "La date  est obligatoire.";
        isValid = false;
      }

      // Detail
      if (/[*<>\/()]/.test(this.demande.detail)) {
        this.fieldErrors.detail = "La description ne peut pas contenir les caractères spéciaux * < > / ( ).";
        isValid = false;
      }

      // Quantite
      if (!this.demande.quantite) {
        this.fieldErrors.quantite = "La Quantite est obligatoire.";
        isValid = false;
      }

      return isValid;
    },
    resetFieldErrors() {
      for (let field in this.fieldErrors) {
        this.fieldErrors[field] = "";
      }
    },
    addDemande() {
      try {
        let url = "http://127.0.0.1:8000/api/demande/register";

        axios.post(
          url,
          this.demande,
          {
            headers: {
              Accept: "application/json",
              "Content-Type": "application/json",
              Authorization: "Bearer " + this.token,
            },
          }
        ).then((response) => {
          console.log(response);
          this.demande = {
            location: "",
            bloodGroup: "",
            detail: "",
            quantite: ""
          };
          this.$toast.success('DEMANDE ENVOYER')
          this.$router.push({ name: "reponse" });
        }).catch((error) => {
          console.error("Error:", error);
        });
      } catch (error) {
        console.error("Exception:", error);
      }
    },
  },
};
</script>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

label {
    font-weight: 650;
}
.error-message {
  color: #ff2770;
  font-weight: 750;
  font-size: 17px;
  width: 300px;
  max-width: 350px;
}

label span {
    color: red;
    font-size: 22px;
}
</style>