
<template>
    <div id="don">
        <div class="container">


            <div class="page">
                <div class="home">
                    <div class="contain">
                        <h2>Trouver rapidement du sang en Solicitant de l'aide!</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eaque porro illum deleniti, expedita ab.
                            !</p>
                        
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text" style="display: block !important;">
                            <div class="image">
                                <img src="../../assets/images/image.png" alt="">
                            </div>
                            <div class="txt">
                                <h3 style="color: black !important; font-size: 18px !important;"></h3>

                            </div>
                        </div>
                        <div class="col-md-8 form">
                            <form action="#" @submit.prevent="demandeSave()">
                                <h2>Soliciter une demande en poche de sang</h2>
                                <hr>
                            


                                <div >
                                    <label for="lastname" class="form-label"><strong>Selectionner le groupe sangin <br> donc
                                            vous avez besoin <span style="color: red;">*</span></strong>
                                    </label><br>
                                    <input type="text" class="form-control" placeholder="Litoral/douala" style="padding: 1.5rem;"
                                        v-model="demande.bloodGroup">
                                </div>

                                <div class="m-3">
                                    <label for="lastname" class="form-label"><strong>Donnez la region/la ville <br> ou vous
                                            vous trouvez <span style="color: red;">*</span></strong>
                                    </label><br>
                                    <input type="text" class="form-control" placeholder="Litoral/douala" style="padding: 1.5rem;"
                                        v-model="demande.location">
                                </div>

                                <div class="m-3">
                                    <label for="lastname" class="form-label"><strong>Donnez nous un details de la <br> sitation qui neccesite le demande <span style="color: red;">*</span></strong>
                                    </label><br>
                                    <input type="text" class="form-control" placeholder="Litoral/douala" style="padding: 1.5rem;"
                                        v-model="demande.detail">
                                </div>


                                <button type="submit" class="btn btn-success" style="background-color: #00002c;"> Prendre rendez vous</button>

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
    name: "demande",
    data() {
        return {
            demande: {
                location: "",
                bloodGroup:"",
                 detail:""

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
                            bloodGroup:"",
                            detail:""

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

#bloc-image .image img {
    width: 90%;
}

.contain h2 {
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
    max-width: 100%;
    height: 100%;
}
</style>