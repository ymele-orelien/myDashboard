<template>
  <!-- Preloader -->
  <div class="preloader">
    <div class="loader">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>

      <div class="indicator">
        <img
          src="../../assets/images/logos/logoheader.jpg"
          alt=""
          width="24px"
        />
      </div>
   
    </div>
    <span color="#fff" style="font-size: 45px !;">yoyo</span>
  </div>
  <!-- End Preloader -->

  <!-- Get Pro Button -->
  <div class="pro-features"
   v-if="users ">
    <a class="get-pro" href="#" style="color: #ffff !important"
      >{{ users.name }}</a
    >
    <li class="big-title">{{ users.name }}</li>
    <li>{{ users.bloodGroup }}</li>
    <li>{{ users.email }}</li>
    <li>Color Plate With 12+ Colors</li>
    <li>Sticky Header / Sticky Filters</li>
    <li>Working Contact Form With Google Map</li>
    <div class="button">
      <a href="#" target="_blank" class="btn"
        ><i class="fa-solid fa-setting"></i> Parametre</a
      >
      <a
        href="#"
        target="_blank"
        class="btn btn-danger"
        style="background-color: red"
      >
        <i class="fa-solid fa-log-out"></i> Deconnection</a
      >
    </div>
  </div>
  <ul  v-else style="display: none">
   
  </ul> 
  <!--!

   End Topbar -->

  <!-- NAVBAR -->
  <header class="header">
 
    <!-- Header Inner -->
    <div class="header-inner">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
              <!-- Start Logo -->
              <div class="logo">
                <a
                  href="index.html"
                  style="align-items: center; text-align: center"
                  ><img
                    src="../../assets/images/logos/logoheader.jpg"
                    alt="#"
                    width="80px" />
                  <br />
                  <strong> </strong
                ></a>
              </div>
              <!-- End Logo -->
              <!-- Mobile Nav -->
              <div class="mobile-nav"></div>
              <!-- End Mobile Nav -->
            </div>
            <div class="col-lg-7 col-md-9 col-12">
              <!-- Main Menu -->
              <div class="main-menu">
                <nav class="navigation">
                  <ul class="nav menu">
                    <li class="active">
                      <RouterLink to='/'>Home <i class="icofont-rounded-down"></i></RouterLink>
                      <ul class="dropdown">
                        <li><a href="index.html">Demande</a></li>
                        <li><a href="index.html">Evenements</a></li>
                    
                      </ul>
                    </li>
                    <li>
                      <RouterLink to="/response" href="#">Reponses </RouterLink>
                    </li>
                    <li>
                      <RouterLink to="/urgence" href="#">Urgences </RouterLink>
                    </li>
                    <li>
                      <a href="#"
                        > A savoir <i class="icofont-rounded-down"></i
                      ></a>
                      <ul class="dropdown" style="border-left: 2px solid red">
                        <li><routerLink to="/about">A propos de nous</routerLink></li>
                        <li><a href="blog-single.html">Contact</a></li>
                        <li><a href="blog-single.html">Instagram</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <!--/ End Main Menu -->
            </div>
            <div
              class="col-lg-2 col-12 d-flex"
              style="justify-content: center"  v-if="this.users"
  >
           
              <div class="get-quote" >
                <div class="card-body">
                  <!-- Bouton pour déclencher le popup -->
                  <button
                    type="button"
                    class="btn btn-primary"
               
                    style="background-color: red;"
                  >
           <router-link to="/donate">
            Faire un Don
            </router-link>
                  </button>

               
                </div>
              </div>
              <div class="get-quote">
                <div class="card-body">
                  <RouterLink to="/demande"
                  
                    class="btn btn-primary"
                    style="background-color: #00002c"
                  >
                 
                    Faire une demande
           
    
                  </RouterLink>
                </div>
              </div>
          
            </div>
            <div
              class="col-lg-2 col-12 d-flex"
              style="justify-content: center"
              v-else
            >
              <div class="get-quote">
                <div class="card-body">
                  <RouterLink
                    to="register"
                    type="button"
                    class="btn btn-primary"
                    style="background: green"
                  >
                    S'Inscrire
                  </RouterLink>
                </div>
              </div>
              <div class="get-quote">
                <div class="card-body">
                  <RouterLink
                    to="/login"
                    type="button"
                    class="btn btn-primary"
                    style="background-color: #00002c"
                  >
                    Connexion
                  </RouterLink>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Header Inner -->
  </header>
  <!-- End Header Area -->
</template>
<script>
import axios from "axios";

export default {
  name: "login",
  data() {
    return {
      users: {},
      token: localStorage.getItem("token"),
    };
  },
  mounted() {
    this.getUsers();
  },
  methods: {
    getUsers() {
      axios
        .get(
          "http://127.0.0.1:8000/api/simpleUser/profile",

          {
            headers: {
              Accept: "application/json",
              "Content-Type": "application/json",
              Authorization: "Bearer " + this.token,
            },
          }
        )
        .then((res) => {
          console.log(res);
          this.users = res.data.users;
          console.log(this.users);
        });
    },
  },
};
</script>
<style>
/*===================
	Start Header CSS 
=====================*/
.header {
  background-color: none;
}

.header .navbar-collapse {
  padding: 0;
}

/* Topbar */
.header .topbar {
  background-color: #fff;
  border-bottom: 1px solid #eee;
}

.header .topbar {
  padding: 15px 0;
}

.header .top-link {
  float: left;
}

.header .top-link li {
  display: inline-block;
  margin-right: 15px;
}

.header .top-link li:last-child {
  margin-right: 0px;
}

.header .top-link li a {
  color: #2c2d3f;
  font-size: 14px;
  font-weight: 400;
}

.header .top-link li:hover a {
  color: #00002c;
}

.header .top-contact {
  float: right;
}

.header .top-contact li {
  display: inline-block;
  margin-right: 25px;
  color: #2c2d3f;
}

.header .top-contact li:last-child {
  margin-right: 0;
}

.header .top-contact li a {
  font-size: 14px;
}

.header .top-contact li a:hover {
  color: #00002c;
}

.header .top-contact li i {
  color: #00002c;
  margin-right: 8px;
}

.header .header-inner {
  background: #fff;

  z-index: 999;
  width: 100%;
  margin-left: 0%;
  margin-right: 0%;
}

.header .logo {
  float: left;
  margin-top: 18px;
}

.header .navbar {
  background: none;
  box-shadow: none;
  border: none;
  margin: 0;
  height: 0px;
  min-height: 0px;
}

.header .nav li {
  margin-right: 15px;
  float: left;
  position: relative;
}

.header .nav li:last-child {
  margin: 0;
}

.header .nav li a {
  color: #2c2d3f;
  font-size: 14px;
  font-weight: 500;
  text-transform: capitalize;
  padding: 25px 12px;
  position: relative;
  display: inline-block;
  position: relative;
}

.header .nav li a::before {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
  height: 3px;
  width: 0%;
  background: #00002c;
  border-radius: 5px 5px 0 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.header .nav li.active a:before {
  opacity: 1;
  visibility: visible;
  width: 100%;
}

.header .nav li.active a {
  color: #00002c;
}

.header .nav li:hover a:before {
  opacity: 1;
  width: 100%;
  visibility: visible;
}

.header .nav li:hover a {
  color: #00002c;
}

.header .nav li a i {
  display: inline-block;
  margin-left: 1px;
  font-size: 13px;
}

/* Middle Header */
.header.style2 .header-inner {
  border-top: 1px solid #eee;
}

.header.style2 .logo {
  margin-top: 6px;
}

.header .middle-header {
  background: #fff;
  padding: 20px 0px;
}

.header .widget-main {
  float: right;
}

.header.style2 .get-quote {
  margin-top: 0;
}

.header .single-widget {
  position: relative;
  float: left;
  margin-right: 30px;
  padding-left: 55px;
}

.header .single-widget:last-child {
  margin: 0;
}

.header .single-widget .logo {
  margin: 0;
  padding: 0;
  margin-top: 7px;
}

.header .single-widget i {
  position: absolute;
  left: 0;
  top: 6px;
  height: 40px;
  width: 40px;
  line-height: 40px;
  color: #fff;
  background: #00002c;
  border-radius: 4px;
  text-align: center;
  font-size: 15px;
}

.header .single-widget h4 {
  font-size: 15px;
  font-weight: 500;
}

.header .single-widget p {
  margin-bottom: 5px;
  text-transform: capitalize;
}

.header .single-widget.btn {
  margin-left: 0;
}

.contenu {
  padding: 0.2rem 0 0.4rem 1rem;
}

/* Dropdown Menu */
.header .nav li .dropdown {
  background: #fff;
  width: 220px;
  position: absolute;
  left: -20px;
  top: 100%;
  z-index: 999;
  -webkit-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 3px 5px #3333334d;
  transform-origin: 0 0 0;
  transform: scaleY(0.2);
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  opacity: 0;
  visibility: hidden;
  top: 74px;
  border-left: 3px solid #2889e4;
}

.header .nav li:hover .dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateY(0px);
}

.header .nav li .dropdown li {
  float: none;
  margin: 0;
  border-bottom: 1px dashed #eee;
}

.header .nav li .dropdown li:last-child {
  border: none;
}

.header .nav li .dropdown li a {
  padding: 12px 15px;
  color: #666;
  display: block;
  font-weight: 400;
  text-transform: capitalize;
  background: transparent;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

.header .nav li .dropdown li a:before {
  display: none;
}

.header .nav li .dropdown li:last-child a {
  border-bottom: 0px;
}

.header .nav li .dropdown li:hover a {
  color: #00002c;
}

.header .nav li .dropdown li a:hover {
  border-color: transparent;
}

/* Right Bar */
.header.style2 .main-menu {
  display: inline-block;
  float: left;
}

.header .right-bar {
  float: right;
}

.header .right-bar {
  padding-top: 20px;
}

.header .right-bar {
  display: inline-block;
}

.header .right-bar a {
  color: #fff;
  height: 35px;
  width: 35px;
  line-height: 35px;
  text-align: center;
  background: #00002c;
  border-radius: 4px;
  display: block;
  font-size: 12px;
}

.header .right-bar li a:hover {
  color: #fff;
  background: #27ae60;
}

.header .search-top.active .search i:before {
  content: "\eee1";
  font-size: 15px;
}

/* Search */
.header .search-form {
  position: absolute;
  right: 0;
  z-index: 9999;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  top: 74px;
  box-shadow: 0px 0px 10px #0000001c;
  border-radius: 4px;
  overflow: hidden;
  transform: scale(0);
}

.header .search-top.active .search-form {
  opacity: 1;
  visibility: visible;
  transform: scale(1);
}

.header .search-form input {
  width: 282px;
  height: 50px;
  line-height: 50px;
  padding: 0 70px 0 20px;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  border-radius: 3px;
  border: none;
  background: #fff;
  color: #2c2d3f;
}

.header .search-form button {
  position: absolute;
  right: 0;
  height: 50px;
  top: 0;
  width: 50px;
  background: #00002c;
  border: none;
  color: #fff;
  border-radius: 0 4px 4px 0;
  border-left: 1px solid transparent;
}

.header .search-form button:hover {
  background: #fff;
  color: #00002c;
  border-color: #e6e6e6;
}

/* Header Sticky */
.header.sticky .header-inner {
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  bottom: initial;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  animation: fadeInDown 0.5s both 0.1s;
  box-shadow: 0px 0px 13px #00000054;
}

/*=========================
	End Header CSS
===========================*/
</style>
