<template>
	<!-- Slider Area -->
	<section class="slider" style=" height: 90vh;">
		<div class="hero-slider" style="height: 90vh;">
			<!-- Start Single Slider -->
			<div class="single-slider"
				style="background-image:url('../../../src/assets/images/slide1.jpg');height: 90vh !important;">
				<div class="container">
					<div class="row p-1">
						<div class="col-lg-7">
							<div class="text">
								<h1>Heureux de voir <span>Parmis Nous</span> Que voulez faire aujourd'hui <span>!</span>
								</h1>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non amet in, voluptates
									maxime libero vitae expedita cum repudiandae tenetur nam aliquam aperiam doloremque
									blanditiis officia incidunt voluptate distinctio aspernatur reprehenderit eveniet!
									Illo necessitatibus aut cum id. Totam necessitatibus provident exercitationem?</p>
								<div class="button">
									<RouterLink to="donate" class="btn btn-primary"> Faire un don</RouterLink>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider"
				style="background-image:url('../../../src/assets/images/slideA.jpg');height: 90vh !important;">
				<div class="container">
					<div class="row p-1">
						<div class="col-lg-7">
							<div class="text">
								<h1>Demandez des poche sang <span>Medical</span> Services That You Can <span>Trust!</span></h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl
									pellentesque, faucibus libero eu, gravida quam. </p>
								<div class="button">
									<RouterLink to="demande" class="btn btn-primary " style="background-color: #00002c;margin-left: 3rem;">DEMANDE EN POCHE</RouterLink>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Start End Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider"
				style="background-image:url('../../../src/assets/images/slideB.jpg') ;height: 90vh !important">
				<div class="container">
					<div class="row p-1">
						<div class="col-lg-7">
							<div class="text">
								<h1>Suivre notre  <span>Actualites </span> a travers nos evenements<span></span></h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl
									pellentesque, faucibus libero eu, gravida quam. </p>
								<div class="button">
									<a href="#" class="btn primary" style="background-color: #fff;color: #00002c;">Nos Evenements</a>
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
import "bootstrap";
import { RouterLink } from "vue-router";
export default {
	name: "sliderHome",
};
</script>
<style scoped>
.text h1 span {
	color: #fff;
}

.single-slider {
	height: 80vh !important;
}

.single-slider .text {
	position: relative;
	top: 25%;
	border: 1px solid red;
	padding: 1rem;
	background: linear-gradient(135deg,rgba(255));
	background: linear-gradient(135deg ,rgba(255,255,255,0.1),rgba(255,255,255,0));
backdrop-filter: blur(10px);
-webkit-backdrop-filter: blur(10px);
border: 1px solid rgba(255,255,255,0);
box-shadow: 0px 0px 32px 0 rgba(0, 0, 0, 0.1);
border-radius: 8px;

}

.hero-slider {
	height: 80vh;
}

.button {
	background: none !important;
}
.container{
	padding: 1rem;
}
</style>
