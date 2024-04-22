<template>
    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100" style="margin-top: 10rem;">
        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex a1 justify-content-center align-items-center flex-column left-box droite">
                <video src="../../assets/video/lock.mp4" muted autoplay></video>
            </div>
            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h1><i class="fas fa-unlock-keyhole"></i></h1>
                        <h3>Changer votre mot de passe</h3>
                        <p>Changer votre mot de passe en remplissant ces champs</p>
                    </div>
                    <form @submit.prevent="changer()">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                v-model="users.password" placeholder="nouveau mot de passe">
                        </div>
                        <span class="error-message">{{ fieldErrors.password }}</span>

                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                v-model="users.confirmPassword" placeholder="confirmer mot de passe">
                        </div>
                        <span class="error-message">{{ fieldErrors.confirmPassword }}</span>

                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-secondary w-100 fs-6" type="submit" style="background: #00002c;">Changer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="log">
            <img src="../../assets/images/logos/logoheader.jpg" alt="" />
            <span style="margin-top: 1.9rem;"><strong style="font-size: 25px;">BLOOD <br>DONATE</strong></span>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name: "connexion",
    data() {
        return {
            users: {
                confirmPassword: "",
                password: ""
            },
            token: localStorage.getItem("token") || "",
            fieldErrors: {
                password: "",
                confirmPassword: "",
            },
        }
    },
    methods: {
        changer() {
            if (this.validateForm()) {
                this.updatePassword();
            }
        },
        validateForm() {
            this.resetFieldErrors();
            let isValid = true;

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

            return isValid;
        },
        resetFieldErrors() {
            for (let field in this.fieldErrors) {
                this.fieldErrors[field] = "";
            }
        },
        updatePassword() {
            axios.post("http://127.0.0.1:8000/api/updatePasswordForget", this.users, {
                headers: {
                    Accept: "application/json",
                    "Content-Type": "application/json",
                    Authorization: "Bearer " + this.token,
                },
            })
            .then(response => {
                if (response.data && response.data.status === 200) {
                    this.$toast.success("Mot de passe changé avec succès");
                    this.$router.push('/login');
                } else {
                    this.$toast.warning("UNE ERREUR S'EST PRODUITE !!!");
                }
            })
            .catch(error => {
                console.error(error);
                this.$toast.error("UNE ERREUR S'EST PRODUITE SVP REESSAYER !!!");
            });
        }
    }
}
</script>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    background: #ececec;
}

/*------------ Login container ------------*/

.box-area {
    width: 930px;
}

video {
    width: 100%;
}

.log {
    display: flex;
    margin-bottom: -60rem;
    position: absolute;
    margin-left: 5rem;
}

/*------------ Right box ------------*/

.right-box {
    padding: 40px 30px 40px 40px;
}

/*------------ Custom Placeholder ------------*/

::placeholder {
    font-size: 16px;
}

.a1 {
    background: #f2f3f4;

}

.rounded-4 {
    border-radius: 20px;
}

.rounded-5 {
    border-radius: 30px;
}

.error-message {
    color: #00002c;
    font-weight: 750;
    font-size: 17px;
    width: 300px;
    max-width: 350px;
}

/*------------ For small screens------------*/

@media only screen and (max-width: 768px) {

    .box-area {
        margin: 0 10px;

    }

    .left-box {
        height: 100px;
        overflow: hidden;
    }

    .right-box {
        padding: 20px;
    }

    .droite {
        display: none;
    }
}
</style>