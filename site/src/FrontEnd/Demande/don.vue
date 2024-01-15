
<template>
    <div id="don">
        <div class="container">


            <div class="page">
                <div class="home">
                    <div class="contain">
                        <h1 style="color: red;">"Souriez, donnez avec amour : votre don, une vie embellie."




                        </h1>
                        <p>Le don de sang sauve des vies en fournissant une ressource vitale pour les traitements médicaux
                            et les urgences. C'est un acte de générosité qui renforce la santé communautaire, unissant les
                            individus dans une solidarité essentielle pour le bien-être collectif.</p>

                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text">
                            <div class="image">
                                <img src="../../assets/images/map.png" alt="">
                            </div>
                            <div class="txt">
                                <h3>New to blood donate ?</h3>

                            </div>
                        </div>
                        <div class="col-md-8 form">
                            <form action="#" @submit.prevent="donateSave()">
                                <h2>Formulaire pour faire un don de sang</h2>
                                <hr>
                                <!-- <div class="mb-3">
                                    <label for="firstname" class="form-label"><strong>Votre groupe sanguin</strong></label>
                                    <input type="text" class="form-control" placeholder="A+" v-model="donate.blooGroop">
                                </div> -->
                                <div class="m-3">
                                    <label for="lastname" class="form-label"><strong>votre localisation</strong>
                                    </label><br>
                                    <input type="text" class="form-control" placeholder="Litoral/douala"
                                        v-model="donate.location">
                                </div>


                                <button type="submit" class="btn btn-success"> Prendre rendez vous</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: "donate",
    data() {
        return {
            donate: {
                location: "",


            },
            token: localStorage.getItem("token"),
        };
    },

    methods: {
        donateSave() {
            this.addDonate();
        },

        addDonate() {
            try {
                let url = "http://127.0.0.1:8000/api/donate/register";

                axios
                    .post(
                        url,
                        this.donate,
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

                        this.donate = {
                            location: "",

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
<style >
#don {

    background: #dee2e6;

    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0;
}

#don .container {

    width: 100%;
    height: 100%;
    background: #fff;
}



.page h1 {
    font-size: 2vw;
    font-weight: 600;
}

.page p {
    font-size: 16px;
    margin-bottom: 30px;
    color: #00002c !important;
}

.text p {
    font-size: 1rem;
    font-weight: 500;
}

.container form {
    border: 2px solid black;
    padding: 30px 20px;
}

sup {
    font-size: .5rem;
}



.page .home {
    width: 100%;
    background-image: url("../../../src/assets/images/Volunteer_Hero.jpeg");
    background-position: center;
    background-repeat: no-repeat;
    padding: 4rem 3.0vw;
    margin-bottom: 10vh;
}

.page .contain {
    width: 45%;
}

.image {
    width: 100%;
    height: 400px;
    padding: 10px;
}

.image img {
   width: 250px;
   height: 250px;
}
</style>