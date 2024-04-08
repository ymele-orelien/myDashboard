import { RouterLink } from 'vue-router';
<template>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Profil</h2>
                        <ul class="bread-list">
                            <li>
                                <RouterLink to="/">Home</RouterLink>
                            </li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Profil</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <!-- News Head -->
                                <div class="news-head">
                                    <img src="../../assets/images/slideA.jpg" alt="#">
                                </div>
                                <!-- News Title -->
                                <h1 class="news-title"><a href="news-single.html">{{ users.name }}</a></h1>
                                <!-- Meta -->
                                <div class="meta">
                                    <div class="meta-left">
                                        <span class="author"><a href="#"><i class="fa-regular fa-circle-user"
                                                    style="font-size: 30px;"></i> Compte cree le</a></span>
                                        <span class="date"><i class="fa-regular fa-clock"></i>{{ users.created_at
                                            }}</span>
                                    </div>
                                    <div class="meta-right">
                                        <span class="comments"><a href="#"><i class="fa fa-hand-holding-droplet"></i>05
                                                Donations</a></span>
                                        <span class="views"><i class="fa fa-hand-holding-hand"></i>33 Demandes</span>
                                    </div>
                                </div>
                                <!-- News Text -->
                                <div class="news-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis
                                        ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus
                                        commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor
                                        quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium
                                        pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis
                                        maximus, interdum metus vel, tincidunt diam.</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque
                                        ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla.
                                        Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum
                                        metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit
                                        nulla, viverra non commod</p>
                                    <div class="image-gallery">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="../../assets/images/enf-hospitalise.jpg" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="../../assets/images/medecin-aide-humanitaire-afrique-prenant-soin-patient_23-2149117859.avif"
                                                        alt="#">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis
                                        ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus
                                        commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor
                                        quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium
                                        pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis
                                        maximus, interdum metus vel, tincidunt diam.</p>
                                    <blockquote class="overlay" style="border: none !important;;">
                                        <p style="color: #fff !important;">Aliquam nec lacus pulvinar, laoreet dolor
                                            quis, pellentesque ante. Cras nulla
                                            orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse
                                            porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus
                                            vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit
                                            nulla, viverra non commodo et, sodales</p>
                                    </blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis
                                        ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus
                                        commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor
                                        quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium
                                        pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis
                                        maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula
                                        egestas. Sed velit nulla, viverra non commodo et, sodales id dui.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis
                                        ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus
                                        commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor
                                        quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium
                                        pretium nulla. Suspendisse</p>
                                </div>
                                <div class="blog-bottom">
                                    <!-- Social Share -->
                                    <ul class="social-share">
                                        <li class="facebook"><a href="#"><i
                                                    class="fa-brands fa-facebook"></i><span>Facebook</span></a></li>
                                        <li class="twitter"><a href="#"><i
                                                    class="fa-brands fa-twitter"></i><span>Twitter</span></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa-brands fa-google-plus"></i></a>
                                        </li>
                                        <li class="linkedin"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">


                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Vos Informations</h3>
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="image">
                                    <i class="fa-regular fa-user"></i><strong>{{ users.name }}</strong>
                                </div>
                                <div class="image">
                                    <i class="fa-solid fa-droplet"></i><strong>{{ users.bloodGroup }}</strong>
                                </div>
                                <div class="image">
                                    <i class="fa-regular fa-at"></i><strong>{{ users.email }}</strong>
                                </div>
                                <div class="image">
                                    <i class="fa-solid fa-location-dot"></i><strong>{{ users.location }}</strong>
                                </div>

                            </div>
                            <!-- End Single Post -->


                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Modifier vos informations</h3>
                            <!-- Single Post -->
                            <div class="single-post">
                                <form class="single-post" @submit.prevent="update()">
                                    <div class="image">
                                        <i class="fa-regular fa-user"></i><strong><input type="text"
                                                class="form-control" style="width: 200px;height: 50px;"
                                                v-model="users.name"></strong>

                                    </div>
                                    <span class="error-message">{{ fieldErrors.name }}</span>

                                    <div class="image">
                                        <i class="fa-solid fa-droplet"></i><strong><select name="" id=""
                                                class="form-control " style="width: 200px;height: 50px;"
                                                v-model="users.bloodGroup">
                                                <option value="">A+</option>
                                                <option value="">A-</option>
                                                <option value="">B+</option>
                                                <option value="">B-</option>
                                                <option value="">AB+</option>
                                                <option value="">AB-</option>
                                                <option value="">O+</option>
                                                <option value="">O-</option>
                                            </select></strong>

                                    </div>

                                    <div class="image">
                                        <i class="fa-solid fa-location-dot"></i><strong><input type="text"
                                                class="form-control" placeholder="localisation"
                                                style="width: 200px;height: 50px;" v-model="users.location"></strong>

                                    </div>
                                    <span class="error-message">{{ fieldErrors.location }}</span>

                                    <button type="submit" class="btn btn-success"
                                        style="background: green; margin: 0.2rem;"> Modifier</button>

                                </form>

                                <!-- End Single Post -->
                            </div>


                        </div>

                        <div class="single-widget recent-post">
                            <h3 class="title">Changer Mot de passe</h3>
                            <!-- Single Post -->
                            <form class="single-post" @submit.prevent="updatePass()">
                                <div class="single-post">
                                    <div class="image">
                                        <i class="fa-solid fa-lock-open"></i><strong><input type="password"
                                                class="form-control" v-model="currentPassword"
                                                style="width: 200px;height: 50px;"
                                                placeholder="Mot de passe actuel"></strong>

                                    </div>
                                    <div class="error-message">{{ fieldErrors.currentPassword }}</div>

                                    <div class="image">
                                        <i class="fa-solid fa-unlock-keyhole"></i><strong><input type="password"
                                                class="form-control" style="width: 200px;height: 50px;"
                                                placeholder="Nouveau Mot passe" v-model="newPassword"></strong>
                                    </div>
                                    <div class="error-message">{{ fieldErrors.newPassword }}</div>


                                    <div class="image">
                                        <i class="fa-solid fa-unlock-keyhole"></i><strong><input type="password"
                                                class="form-control" placeholder="Confirm Mot Passe"
                                                style="width: 200px;height: 50px;" v-model="confirmPassword"></strong>
                                    </div>
                                    <div class="error-message">{{ fieldErrors.confirmPassword }}</div>

                                    <button type="submit" class="btn btn-success"
                                        style="background: green; margin: 0.2rem;"> Modifier</button>

                                </div>
                                <!-- End Single Post -->
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Single News -->
</template>
<script>
import axios from "axios";

const PROFILE_URL = "http://127.0.0.1:8000/api/simpleUser/profile";
const UPDATE_USER_URL = "http://127.0.0.1:8000/api/updateUser";
const UPDATE_PASSWORD_URL = "http://127.0.0.1:8000/api/updatePasseword";

export default {
    name: "detailsUserConnect",
    data() {
        return {
            users: {},
            token: localStorage.getItem("token"),
            currentPassword: "",
            newPassword: "",
            confirmPassword: "",
            fieldErrors: {
                name: "",

                location: "",
            currentPassword: "",

                newPassword:"",
                confirmPassword:""

            }
        };
    },
    mounted() {
        this.getUsers();
    },
    methods: {
        //AFFICHER LES INFORMATIONS DE LUTILISATEURS

        getUsers() {
            axios
                .get(PROFILE_URL, {
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                        Authorization: "Bearer " + this.token,
                    },
                })
                .then((res) => {
                    console.log(res);
                    this.users = res.data.users;
                })
                .catch((error) => {
                    console.error("Error fetching user profile:", error);
                    // Gérez les erreurs ici (ex: afficher un message à l'utilisateur)
                });
        },
        update() {
            if (this.validateForm()) {
                this.updateUsers();
            }
        },
        updatePass(){
            if(this.validateFormPass()){
this.changePassword();
            }
        },
        validateForm() {
            this.resetFieldErrors();

            let isValid = true;
            if (this.users.name.length < 6) {
                this.fieldErrors.name = "Le nom doit avoir au moins 6 caractères.";
                isValid = false;
            } else if (/[*<>\/()]/.test(this.users.name)) {
                this.fieldErrors.name =
                    "Le nom ne peut pas contenir les caractères spéciaux * < > / ( ).";
                isValid = false;
            }

            if (/[*<>\/()]/.test(this.users.location)) {
                this.fieldErrors.location =
                    "La Localisation ne peut pas contenir les caractères spéciaux * < > / ( ).";
                isValid = false;
            }
            return isValid;
        },
        validateFormPass() {
    this.resetFieldErrors();

    let isValid = true;
    if (!this.currentPassword) {
        this.fieldErrors.currentPassword = "Le champ est obligatoire";
        isValid = false;
    } else if (this.currentPassword.length < 6) {
        this.fieldErrors.currentPassword = "Le mot de passe actuel doit avoir au moins 6 caractères.";
        isValid = false;
    }

    if (!this.newPassword) {
        this.fieldErrors.newPassword = "Le champ est obligatoire.";
        isValid = false;
    } else if (this.newPassword.length < 6) {
        this.fieldErrors.newPassword = "Le Nouveau Mot de Passe doit avoir au moins 6 caractères.";
        isValid = false;
    }

    if (!this.confirmPassword) {
        this.fieldErrors.confirmPassword = "Le champ est obligatoire.";
        isValid = false;
    } else if (this.confirmPassword !== this.newPassword) {
        this.fieldErrors.confirmPassword = "La confirmation du mot de passe est différente.";
        isValid = false;
    }

    return isValid;
},

        resetFieldErrors() {
            for (let field in this.fieldErrors) {
                this.fieldErrors[field] = "";
            }
        },
        //MODIFIERS
        updateUsers() {
    const updatedUser = {
        name: this.users.name,
        role: this.users.role,
        location: this.users.location,
        description: this.users.description
    };

    axios.put(UPDATE_USER_URL, updatedUser, {
        headers: {
            Authorization: "Bearer " + this.token,
        },
    })
    .then((res) => {
        console.log(res.data);
        this.$toast.success('Modification réussie');
    })
    .catch((error) => {
        console.error("Error updating user:", error);
        this.$toast.error('Échec de la modification');
    });
},
        //CHANGER LE MOTS DE PASSE
        changePassword() {
            const requestData = {
                current_password: this.currentPassword,
                new_password: this.newPassword,
                confirm_password: this.confirmPassword
            };

            axios.post(UPDATE_PASSWORD_URL, requestData, {
                headers: {
                    Accept: "application/json",
                    "Content-Type": "application/json",
                    Authorization: "Bearer " + this.token,
                },
            })
                .then((res) => {
                    console.log(res);
                    this.$toast.success('Modification du mot de passe réussie');
                })
                .catch((error) => {
                    if(error.response && error.response.status === 403){
this.$toast.warning("L'ancien mot de passe est incorecte")
                    }
                    if(error.response && error.response.status === 422){
                        this.$toast.error('Verifier les champs mot de passe et nouveau mot de passe');

                    }
                    console.error("Error updating password:", error);
                });
        },
    },
};

</script>
<style scoped>
p,
h3 {
    color: #000 !important;
}

.image {
    margin: 0.31rem;
    display: flex;
}

.image i {
    padding: 1rem;
    background: #00002c;
    color: #fff;
    margin-right: 0.5rem;
    font-size: 20px;
    width: 50px !important;
    text-align: center;
    align-items: center;
    border-radius: 5px;
}

.single-post {
    margin-top: -5%;
}
.error-message {
  color: #ff2770;
  font-weight: 750;
  font-size: 17px;
  width: 300px;
  max-width: 350px;
}
</style>