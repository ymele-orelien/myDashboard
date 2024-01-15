<template>
    	<sliderHome /><!-- end slider section -->



<!-- service section -->
<scheckdule />
<!-- Start Feautes -->
<section class="Feautes section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Commenent sa ce passe</h2>
                    <i class="fa-solid fa-users"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class=" fa-solid fa-heart"></i>
                        </div>
                        <h3>Don de sang</h3>
                        <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class=" fa-solid fa-hospital"></i>
                        </div>
                        <h3>Nos hopitaux partenaires</h3>
                        <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features last">
                        <div class="signle-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h3>Donateur/Receveur</h3>
                        <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                    </div>
                    <!-- End Single features -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Feautes -->
<!-- end service section -->
<!-- Start service -->
<savoir/>
    <!--/ End service -->



    <!-- Start demande -->
    
    <!--/ End demande -->
    <!-- Start Fun-facts -->
    <funfact/>
    <!--/ End Fun-facts -->

    
    <!-- Start Why choose -->
<evenement></evenement>
    <!--/ End Why choose -->

    <!-- Start Blog Area -->
    
    <!-- End Blog Area -->
    
<conseil></conseil>

    
  
    </template>
    <script>
 
    import sliderHome from "../SleaderHome/slider.vue";
    import scheckdule from "../schecdule/schecdule.vue"

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