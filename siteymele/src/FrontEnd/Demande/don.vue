<template>

	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Faire Un Don</h2>
						<ul class="bread-list">
							<li>
								<RouterLink to="/">Home</RouterLink>
							</li>
							<li><i class="fa-solid fa-chevron-right"></i></li>
							<li class="active">Donation</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact Us -->
	<section class="contact-us section">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-6"
						style="background: url(../../../src/assets/images/slideB.jpg);background-size: cover;">
						<div class="contact-us-left">
							<!--Start Google-map -->
							<div id="myMap"></div>
							<!--/End Google-map -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact-us-form">
							<h2>DON DE SANG</h2>
							<p style="color: #00002c !important;font-size: 19px;">Lorem ipsum dolor sit amet consectetur
								adipisicing elit. Rem doloremque repellat unde quis. Deleniti, at.</p>
							<!-- Form -->
							<form class="form" action="mail/mail.php" @submit.prevent="donateSave()">
								<div class="row">
									<div class="col">
										<label for="" class="form-label"> QUEL EST VOTRE LOCALISATION
											<span>*</span></label>

										<div class="form-group">
											<input type="text" name="name" placeholder="LITTORAL/WOURI/DOUALA"
												required="" v-model="donate.location">
										</div>
									</div>



									<div class="col-lg-12">
										<label for="" class="form-label"> Quels jours serez vous libre?
											<span>*</span></label>
										<div class="form-group">
											<input type="text" name="name" placeholder="LUNDI/MARDI" required=""
												v-model="donate.date">

										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<button class="btn" type="submit">ENVOYER</button>
										</div>

									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
			<div class="contact-info">
				<div class="row">
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="fa-solid fa-1"></i>
							<div class="content">
								<h3>Remplicez Correctement le formulaire </h3>
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="fa-solid fa-2"></i>
							<div class="content">
								<h3>Attendez une date de Rendez vous</h3>
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="fa-solid fa-3"></i>
							<div class="content">
								<h3>Aller au Rendez Vous Pour faire Le don de sang</h3>
							</div>
						</div>
					</div>
					<!--/End single-info -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Contact Us -->
</template>

<script>
import axios from 'axios';
import { RouterLink } from 'vue-router';
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

						this.$router.push('/response')
						this.$toast.success('Donation réussie !');


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
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

label {
	font-size: 16px;
	font-weight: 600;
}

label span {
	color: red;
}
</style>
