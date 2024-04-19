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
							<form class="form" action="mail/mail.php" @submit.prevent="register()">
								<div class="row">
									<div class="col">
										<label for="" class="form-label"> QUEL EST VOTRE LOCALISATION
											<span>*</span></label>

										<div class="form-group">
											<input type="text" name="name" placeholder="LITTORAL/WOURI/DOUALA"
												v-model="donate.location">
											<span class="error-message">{{ fieldErrors.location }}</span>

										</div>

									</div>



									<div class="col-lg-12">
										<label for="" class="form-label"> Quels jours serez vous libre?
											<span>*</span></label>
										<div class="form-group">
											<input type="date" name="name" placeholder="LUNDI/MARDI"
												v-model="donate.detail">
											<span class="error-message">{{ fieldErrors.detail }}</span>

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
				detail: ""


			},
			token: localStorage.getItem("token"),
			fieldErrors: {
				location: "",
				detail: "",

			},
		};
	},

	methods: {
		register() {
			if (this.validateFrom()) {
				this.addDonate();
			}
		},
		validateFrom() {
			this.resetFieldErrors();
			let isValid = true;
			if (!this.donate.location) {
				this.fieldErrors.location = "La locaslisation est obligatoire.";
				isValid = false;
			} else if (this.donate.location.length < 2) {
				this.fieldErrors.location = "La locaslisation doit avoir au moins 6 caractères.";
				isValid = false;
			} else if (/[*<>\/()]/.test(this.donate.location)) {
				this.fieldErrors.location =
					"La locaslisation ne peut pas contenir les caractères spéciaux * < > / ( ).";
				isValid = false;
			}
			if (!this.donate.detail) {
				this.fieldErrors.detail = "La date  est obligatoire.";
				isValid = false;
			}
			return isValid;

		}
		, resetFieldErrors() {
			for (let field in this.fieldErrors) {
				this.fieldErrors[field] = "";
			}
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
							detail: ""

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

.error-message {
	color: #ff2770;
	font-weight: 750;
	font-size: 17px;
	width: 300px;
	max-width: 350px;
}
</style>
