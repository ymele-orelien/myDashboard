<template >
    <div class="containe">
        <div class="response">
            <div class="titr">
                <h2><strong>Reponses</strong></h2>
                <p style="color: #00002c !important; margin-top:  1rem;border: ;">
                    Ceci est la page reponse ou vous pouvez voir vos
                    <br>
                    different demande
                </p>
            </div>

            <div class="contain" style="margin-bottom:2rem ;">
                <!-- <div class="date">13 Dec 2023</div> -->
                <div ref="dropdown" class="dropdown wrapper" style="border: 1px solid red;">
                    <button class="dropdown-label toggle" @click="show = !show">
                        <span>
                            <strong>Demande de poche de sang</strong><span>:</span><span> En cour</span>
                        </span>
                    </button>
                    <div class="dropdown-content" v-if="show" style="color: #00002c !important;">
                    <div>
                        <strong>Date de demande</strong>: 13 Dec 2013
                    </div>
                    <div>
                        <strong>Status </strong>: Encour de traitement
                    </div>
                    <div>
                        <strong>Reponses</strong>en attente
                    </div>
                    </div>
                </div>
              
              
            </div>
        </div>
    </div>
</template>
<style>
.containe {
    display: flex;
    justify-content: center;
    border: 1px solid red;
    /* height: 100vh; */
    background: #dee2e6;
}

.response {

    border: 1px solid green;
    ;
    background: #ffffff;
    max-width: 1000px;
    padding: 2.5rem;
    width: 80%;
}

.wrapper {
    width: 100%;
    border-radius: 15px;
    background-color: #e0e0e0;
    margin-bottom: 20px;
    padding: 15px 40px;
    border-radius: 5px;
    box-shadow: 0 15px 25px rgba(0, 0, 50, 0.2);
}

.response .toggle {
    width: 100%;

    background-color: transparent;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 16px;
    color: #111130;
    font-weight: 500;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 15px 0;
}

.response .content {
    height: 0;
    overflow: hidden;
    transition: all 1.2s;
}
</style>
<script setup>
import { ref, onMounted } from "vue"
import autoAnimate from "@formkit/auto-animate"

const dropdown = ref() // we need a DOM node
const show = ref(false)

onMounted(() => {
    autoAnimate(dropdown.value) // thats it!
})
</script>
