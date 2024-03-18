<template>
  	<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>A PROPOS DE NOUS</h2>
							<ul class="bread-list">
								<li><a href="index.html">Accueil</a></li>
								<li><i class="fa-solid fa-chevron-right"></i></li>
								<li class="active">A PROPOS DE NOUS</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
	
		<!-- Start Portfolio Details Area -->
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							<div class="image-slider">
								<div class="">
									<img src="../../assets/images/enf-hospitalise.jpg" alt="#">
							
									
									
								</div>
							</div>
							<div class="date" style="border: 1px solid red;background: #00002c;color: #fff; height: 80px; padding: 2rem;">
								<ul style="display: flex; justify-content: space-between; text-align: center;">
									<li><span>Category :</span> Heart Surgery</li>
									<li><span>Date :</span> April 20, 2019</li>
									<li><span>Client :</span> Suke Agency</li>
									<li><span>Ags :</span> Typo</li>
								</ul>
							</div>
							<div class="body-text">
								<h3 style="color: #00002c !important;">Here is the name of this project here</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor a ti incididunt ut labore et dolore to in magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna aliqua uis nostrud.Lorem ipsum dolor sit amet, in a in to in a consectetur.ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna in a aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod</p>
								<p>ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna to in aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod.ncididunt ut labore et dolore magna aliqua. </p>
								<p>ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna a aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod.ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod. dolor sit amet, in aed do eiusmod.ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna aliqua uis nostrud.</p>
								<div class="share" style="display: flex;">
									<h4>Suivez nous sur -</h4>
									<ul style="display: flex;justify-content: space-evenly;font-size: 25px;width: 200px;">
										<li><a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio Details Area -->
  </template>
  
  <script>
  
  </script>
  
  <style scoped>
p{
  color: #00002c !important;
}

	
.breadcrumbs .bread-inner{
	z-index:22;
	text-align:center;
}
.breadcrumbs h2{
	color: #fff;
	text-transform:capitalize;
	font-size: 38px;
	font-weight: 700;
	margin: 0;
	padding: 0;
}
.breadcrumbs .bread-list {
	display: inline-block;
	margin-top: 20px;
}
.breadcrumbs ul li{
	display: inline-block;
	position: relative;
	color: #fff;
	font-size: 15px;
	font-weight: 500;
	text-transform: capitalize;
}
.breadcrumbs ul li i {
	margin: 0px 10px;
	font-size: 14px;
	font-weight: 600;
	color:#fff;
}
.breadcrumbs ul li a {
	color: #fff;
	font-size: 15px;
	font-weight: 500;
	text-transform: capitalize;
	margin:0;
	padding:0;
}
.breadcrumbs ul li a:hover{
	color:#2C2D3F;
}
.breadcrumbs ul li.active a {
	color: #fff;
	display: inline-block;
}
/* Slider Nav */
.pf-details .image-slider .owl-nav{
	margin: 0;
    position: absolute;
    top: 50%;
    width: 100%;
	margin-top:-25px;
}
.pf-details .image-slider .owl-carousel .owl-nav div {
	height: 50px;
	width: 50px;
	line-height: 45px;
	background: #fff;
	color: #1A76D1;
	position: absolute;
	margin: 0;
	border-radius: 100%;
	font-size: 20px;
	text-align: center;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	box-shadow: 0px 0px 10px #0000001a;
}
.pf-details .image-slider .owl-carousel .owl-nav div:hover{
	color:#fff;
	background:#1A76D1;
}
.pf-details .image-slider .owl-carousel .owl-controls .owl-nav .owl-prev{
	left:20px;
}
.pf-details .image-slider .owl-carousel .owl-controls .owl-nav .owl-next{
	right:20px;
}
.pf-details .image-slider{
	border-radius:8px 8px 0 0;
}
.pf-details .image-slider img{
	height:100%;
	width:100%;
}
.pf-details .date{
	background: #1a76d1;
	display: block;
	padding: 20px;
	text-align: center;
	border-radius: 0;
	border: none;
	margin: 0;
	margin-top: -1px;
}
.pf-details .date ul li{
	font-size:16px;
	color:#fff;
	display:inline-block;
	margin-right:60px;
}
.pf-details .date ul li:last-child{
	margin:0;
}
.pf-details .date ul li span{
	font-weight:500;
	display:inline-block;
	margin-right:5px;
}
.pf-details .body-text{}
.pf-details .body-text h3 {
	font-size: 30px;
	font-weight: 600;
	color: #333;
	margin-top: 40px;
}
.pf-details .body-text p{
	margin-top:20px;
}
.pf-details .body-text .share{
	margin-top:40px;
}
.pf-details .body-text .share h4 {
	font-size: 15px;
	font-weight: 500;
	display: inline-block;
}
.pf-details .body-text .share ul{
	display:inline-block;
	margin-left:12px;
}
.pf-details .body-text .share ul li{
	display:inline-block;
	margin-right:10px;
}
.pf-details .body-text .share ul li:last-child{
	margin-right:0;
}
.pf-details .body-text .share ul li a{
	height:35px;
	width:35px;
	line-height:35px;
	text-align:center;
	border:1px solid #C8C8C8;
	color:#757575;
	display:block;
	border-radius:50%;
}
.pf-details .body-text .share ul li a:hover{
	color:#fff;
	border-color:transparent;
	background:#1A76D1;
}
/*==========================
	End Portfolio CSS
============================*/
  </style>
  