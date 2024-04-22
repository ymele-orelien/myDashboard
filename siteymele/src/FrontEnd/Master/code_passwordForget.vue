<template>
    <div class="container">
        <div class="content">
            <div class="img-box">
                <img src="../../assets/images/deblocage.jpg" alt="">
            </div>
            <div class="otp">
                <div class="center-opt">
                    <div class="text">
                        <h4>Entrer le code de vérification</h4>
                        <p>Un code de vérification a été envoyé à l'adresse <strong>{{ users.name }}</strong></p>
                    </div>
                    <form @submit.prevent="submitOTP">
                        <div class="input-field">
                            <input v-model="otpInput[0]" type="number" maxlength="1">
                            <input v-model="otpInput[1]" type="number" maxlength="1" disabled>
                            <input v-model="otpInput[2]" type="number" maxlength="1" disabled>
                            <input v-model="otpInput[3]" type="number" maxlength="1" disabled>
                        </div>
                        <p class="text-danger" :style="{ display: showError ? 'block' : 'none' }"><strong>Code incorrect</strong></p>
                        <button class="btn" :class="{ active: isButtonActive }" type="submit">Soumettre le code</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

const PROFILE_URL = "http://127.0.0.1:8000/api/simpleUser/profile";
const VALIDATE_CODE_URL = "http://127.0.0.1:8000/api/validateCode";

export default {
    data() {
        return {
            users: {},
            token: localStorage.getItem("token"),
            otpInput: ['', '', '', ''],
            showError: false,
        };
    },
    mounted() {
        this.token = localStorage.getItem("token");
        console.log("Token:", this.token);
        this.getUsers();
        this.addInputListeners();
    },
    computed: {
        isButtonActive() {
            return this.otpInput.every(input => input !== '');
        },
    },
    methods: {
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
                    if (res.data.users && res.data.users.length > 0) {
                        this.users = res.data.users[0];
                    }
                })
                .catch((error) => {
                    console.error("Error fetching user profile:", error);
                });
        },
        addInputListeners() {
            const inputs = document.querySelectorAll(".input-field input");

            inputs.forEach((input, index) => {
                input.addEventListener("input", (e) => {
                    const currentInput = input,
                          nextInput = inputs[index + 1],
                          prevInput = inputs[index - 1];

                    if (e.inputType === "deleteContentBackward" && prevInput) {
                        currentInput.value = "";
                        prevInput.focus();
                    }

                    if (currentInput.value && nextInput) {
                        nextInput.removeAttribute("disabled");
                        nextInput.focus();
                    }

                    this.showError = false;
                });
            });

            window.addEventListener("load", () => inputs[0].focus());
        },
        async submitOTP() {
            const otp = this.otpInput.join('');

            try {
                const response = await axios.post(VALIDATE_CODE_URL, { code: otp }, {
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                        Authorization: "Bearer " + this.token,
                    },
                });

                if (response.status === 200) {
                    console.log(response.data);
                    this.$router.push('/newPassword'); // Redirige vers la page de connexion après succès
                }
            } catch (error) {
                console.error("Error submitting OTP:", error);
                if(error.response && error.response.status === 401){
                    this.showError = true; // Affiche le message d'erreur

                }else{
                    this.$toast.warning("une erreur c'est produite!")

                }
                
            }
        },
    },
};
</script>

<style scoped>
.content {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.img-box {
    position: relative;
    height: 500px;
    flex: 1;
}

img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.otp {
    flex: 1;
    display: grid;
    place-items: center;
}

.center-opt {
    background: #fff;
    width: 400px;
    padding: 30px;
    box-shadow: 4px 10px 45px -3px #000;
}

.input-field {
    justify-content: center;
}

.input-field input {
    height: 55px;
    width: calc((100% - 2*30px)/4);
    font-size: 1.2rem;
    border-radius: 6px;
    outline: none;
    text-align: center;
    border: 1px solid #000;
    margin-right: 15px;
}

button {
    display: inline-block;
    width: 100%;
    height: 50px;
    background: blue;
    color: #fff;
    margin-top: 20px;
    cursor: pointer;
}

.text {
    margin-bottom: 30px;
}

.text-danger {
    display: none;
}

.active {
    background-color: darkblue;
}
</style>
