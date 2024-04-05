<template>
<sliderHome /><!-- end slider section -->
    <scheckdule />
    <funfact />



    <savoir />




    <evenement></evenement>
   

    <conseil></conseil>



</template>
<script>

import sliderHome from "../SleaderHome/slider.vue";
import scheckdule from "../schecdule/schecdule.vue";
import funfact from "../funFact/funfact.vue"
import conseil from "../conseil/conseil.vue"
import evenement from "../evenements/evenements.vue"
import savoir from "../savoir/savoir.vue"
export default {
    name: "site",
    components: {

        sliderHome,
        scheckdule,

        funfact,
        conseil,
        evenement,
        savoir
    }

}
</script>