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
                            <form class="form" action="mail/mail.php" @submit.prevent="demandeSave()">
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="form-label"> QUEL EST VOTRE LOCALISATION
                                            <span>*</span></label>

                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="LITTORAL/WOURI/DOUALA"
                                                required="" v-model="demande.location">
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <label for="" class="form-label"> QUEL EST LE GROUPE SANGUIN DONC VOUS AVEZ BESOINS?
                                            <span>*</span></label>
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="" >SECTIONNEZ UN GROUPE SANGUIN</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">COMBIEN DE POCHE AVEZ VOUS BESOINS?
                                            <span>*</span></label>

                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="LITTORAL/WOURI/DOUALA"
                                                required="" v-model="demande.quantite">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">DECRIVEZ NOUS LA SITUATIONS QUI NECESSITES DES POCHES
                                            <span>*</span></label>

                                        <div class="form-group">
                                          <textarea name="" id="" cols="30" rows="10" v-model="demande.detail"></textarea>
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
                detail: ""

            },
            token: localStorage.getItem("token"),
        };
    },

    methods: {
        demandeSave() {
            this.addDemande();
        },

        addDemande() {
            try {
                let url = "http://127.0.0.1:8000/api/demande/register";

                axios
                    .post(
                        url,
                        this.demande,
                        {
                            headers: {
                                Accept: "application/json",
                                "Content-Type": "application/json",
                                Authorization: "Bearer " + this.token,
                            },
                        }
                    )
                    .then((response) => {
                        console.log(response);

                        this.demande = {
                            location: "",
                            bloodGroup: "",
                            detail: ""

                        };

                        console.log("Success!");

                        this.$router.push({ name: "reponse" });
                    })
                    .catch((error) => {
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

label{
    font-weight: 650;
}
label span{
    color: red;
    font-size: 22px;
}
</style>