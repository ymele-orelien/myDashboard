<template>
	<!-- Slider Area -->
	<section class="slider" style="max-height: 80vh !important; ">
		<div class="hero-slider">
			<!-- Start Single Slider -->
			<div class="single-slider slide1">
				<div class="bg-color">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Heureux de <span> vous revoir</span> Que voulez vou faire
										<span>Aujourd'hui!</span>
									</h1>
									<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque consequatur quod,
										tempora quisquam officiis quaerat aperiam nisi vel tempore cupiditate. ed nisl
										pellentesque, faucibus libero eu, gravida quam. </p>
										<div v-if="isLoggedIn"  class="button" >
										
										<router-link to="donate" class="btn">Faire un don</router-link>
											<router-link to="demande" class="btn primary"
												style="background-color: #00002c;">Faire une demande</router-link>
										</div>
									<div v-else class="button" >
										<router-link to="donate" class="btn" style="background:green;">S'inscrire</router-link>
										<router-link to="demande" class="btn primary"
											style="background-color: #00002c;">Se connecter
										
									</router-link>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider slide2">
				<div class="bg-color">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>POURQUOI FAIRE<span style="color: red !important;;">DON DE SANG?</span> </h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolor
										laboriosam voluptas facilis! Consequatur praesentium, ex laboriosam nam minima
										aliquam similique provident ullam maiores quod.</p>
									<div class="button">
										<router-link to="donate" class="btn">Faire un don</router-link>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Start End Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider slide3">
				<div class="bg-color">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>DEMANDER DES POCHES<span> POUR AIDER VOS PROCHES !</span> </h1>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem esse repudiandae
										culpa eaque beatae dolorem voluptatibus assumenda ipsam blanditiis, laboriosam
										minima est. Fuga modi id ut tempore rem, quos recusandae!</p>
									<div class="button">
										<router-link to="demande" class="btn">Demander</router-link>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
		</div>
	</section>
	<!--/ End Slider Area -->
</template>
<script>
import axios from 'axios';

export default {
	
  data() {
    return {
      users: {},
      token: localStorage.getItem("token"),
      isLoggedIn: false
    };
  },
  mounted() {
    this.$nextTick(() => {
        const slider = document.querySelector('.slider');
        if (slider) {
            slider.classList.remove('slider-hidden');
        }
    });
	this.getAuthCheck();

},
methods:{
	getAuthCheck() {
      axios
        .get("http://127.0.0.1:8000/api/authUser", {
          headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
            Authorization: "Bearer " + this.token,
          },
        })
        .then((res) => {
          console.log(res);
          this.isLoggedIn = res.data.auth;
          console.log(this.isLoggedIn);
        });
    },
}
}
</script>
<style scoped>
h1,
p {
	color: #fff !important;
}

.single-slider {
	height: 80vh;

}

.slide1 {
	background-image: url('../../assets/images/slide1.jpg');
}

.slide2 {
	background-image: url('../../assets/images/slideA.jpg');
}

.slide3 {
	background-image: url('../../assets/images/slideB.jpg')
}

.text div {
	display: block !important;
}

.single-slider .text {
	/* position: relative;
	top: 50%; */
	/* border: 1px solid red; */
	padding: 1rem;
	background: linear-gradient(135deg, rgba(255));
	background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
	backdrop-filter: blur(10px);
	-webkit-backdrop-filter: blur(10px);
	border: 1px solid rgba(255, 255, 255, 0);
	box-shadow: 0px 0px 32px 0 rgba(0, 0, 0, 0.1);
	border-radius: 8px;
	margin-top: 15rem;
}
.slider-hidden {
    display: none !important; /* Masquer le slider initialement */
}
</style>