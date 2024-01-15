<template>
    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box droite yo">
                <div class="cadre">
                    <p style="color: #fff;padding:1rem;">
                    <h3>"</h3>
                    L'aide consiste à fournir des informations ou une assistance pour faciliter la compréhension, la
                    résolution de problèmes ou l'accomplissement de tâches.<h3 style="margin-left: 95%;">"</h3>
                    </p>
                </div>

            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-1" style="padding-right: 20%;">
                        <div class="lo "><img src="../../src/assets/img/user.png" alt=""></div>
                        <h3 style="display: flex; justify-content: center;padding-left: 3.5rem;">Se Connecter</h3>
                        <!-- <p style="display: flex;justify-content: center;padding-left:5rem ;text-align: center;">Veuillez correctement remplier vos informations </p> -->
                    </div>

                    <form action="" @submit.prevent="login()">
                        <div class="input-group mb-2">
                            <input type="email" class="form-control form-control-lg bg-light fs-6"  v-model="email" required
                                placeholder="Email address">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"  v-model="password" required
                                 placeholder="Password">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between" >
                            <div class="form-check">

                            </div>
                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                        </div>

                        <div class="row"> <button class="btn btn-lg btn-primary yw-100 fs-6" type="submit"
                                style="background: rgba(2, 15, 48, 0.794);  color: #fff;">Connexion</button>

                            <small>Vous n'avez pas de compete? <a href="#">S'incrire</a></small>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "connexion",
    data() {
        return { 
            
      email: '',
      password: '',
    };
  },
  methods: {
   login() {
           
            
                axios.post('http://127.0.0.1:8000/api/Dashboard/login', {
                    email: this.email,
                    password: this.password,
                }).then((response) => {
                    
                    localStorage.setItem('token', response.data)
                    console.log([this.email,this.password,response.data])
                    this.$router.push('/home')
           
                }).catch((errors) => {
                    console.log(errors)
                    this.errors = errors.response.data.errors
                })
        
        },
  },
}
</script>

<style setup>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    background: #ececec;
}

/*------------ Login container ------------*/

.box-area {
    width: 930px;
}

.yo {
    background-image: url(../assets/img/slideD.jpg);
    background-size: cover;
}

.lo {

    display: flex;
    align-items: end;

    justify-content: center;
    margin: -2.5rem 0 0.5rem 5rem;


}

.lo img {
    width: 170px;


}

/*------------ Right box ------------*/

.right-box {
    padding: 40px 30px 40px 40px;
}

/*------------ Custom Placeholder ------------*/

::placeholder {
    font-size: 16px;
}

.rounded-4 {
    border-radius: 20px;
}

.rounded-5 {
    border-radius: 30px;
}

.cadre {

    width: 105%;
    height: 50%;
    display: flex;
    justify-content: center;
    position: relative;
    top: 25%;
    background: linear-gradient(to top, rgba(2, 15, 48, 0.794) 60%, rgba(176, 64, 64, 0) 100%);
    border-radius: 10px;

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