import { RouterLink } from 'vue-router';
<template>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Profil</h2>
                        <ul class="bread-list">
                            <li>
                                <RouterLink to="/">Home</RouterLink>
                            </li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="active">Profil</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <!-- News Head -->
                                <div class="news-head">
                                    <img src="../../assets/images/slideA.jpg" alt="#">
                                </div>
                                <!-- News Title -->
                                <h1 class="news-title"><a href="news-single.html">YMELE METAGO ORELIEN</a></h1>
                                <!-- Meta -->
                                <div class="meta">
                                    <div class="meta-left">
                                        <span class="author"><a href="#"><i class="fa-regular fa-circle-user"
                                                    style="font-size: 30px;"></i> Compte cree le</a></span>
                                        <span class="date"><i class="fa-regular fa-clock"></i>03 Feb 2019</span>
                                    </div>
                                    <div class="meta-right">
                                        <span class="comments"><a href="#"><i class="fa fa-hand-holding-droplet"></i>05
                                                Donations</a></span>
                                        <span class="views"><i class="fa fa-hand-holding-hand"></i>33 Demandes</span>
                                    </div>
                                </div>
                                <!-- News Text -->
                                <div class="news-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis
                                        ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus
                                        commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor
                                        quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium
                                        pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis
                                        maximus, interdum metus vel, tincidunt diam.</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque
                                        ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla.
                                        Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum
                                        metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit
                                        nulla, viverra non commod</p>
                                    <div class="image-gallery">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="../../assets/images/enf-hospitalise.jpg" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="../../assets/images/medecin-aide-humanitaire-afrique-prenant-soin-patient_23-2149117859.avif"
                                                        alt="#">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis
                                        ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus
                                        commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor
                                        quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium
                                        pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis
                                        maximus, interdum metus vel, tincidunt diam.</p>
                                    <blockquote class="overlay" style="border: none !important;;">
                                        <p style="color: #fff !important;">Aliquam nec lacus pulvinar, laoreet dolor
                                            quis, pellentesque ante. Cras nulla
                                            orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse
                                            porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus
                                            vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit
                                            nulla, viverra non commodo et, sodales</p>
                                    </blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis
                                        ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus
                                        commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor
                                        quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium
                                        pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis
                                        maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula
                                        egestas. Sed velit nulla, viverra non commodo et, sodales id dui.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis
                                        ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus
                                        commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor
                                        quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium
                                        pretium nulla. Suspendisse</p>
                                </div>
                                <div class="blog-bottom">
                                    <!-- Social Share -->
                                    <ul class="social-share">
                                        <li class="facebook"><a href="#"><i
                                                    class="fa-brands fa-facebook"></i><span>Facebook</span></a></li>
                                        <li class="twitter"><a href="#"><i
                                                    class="fa-brands fa-twitter"></i><span>Twitter</span></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa-brands fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                    </ul>
                               
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">


                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Vos Informations</h3>
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="image">
                                    <i class="fa-regular fa-user"></i><strong>Ymele Orelien</strong>
                                </div>
                                <div class="image">
                                    <i class="fa-solid fa-droplet"></i><strong>A+</strong>
                                </div>
                                <div class="image">
                                    <i class="fa-regular fa-at"></i><strong>Orelienymele@gmail.com</strong>
                                </div>
                                <div class="image">
                                    <i class="fa-solid fa-location-dot"></i><strong>douala</strong>
                                </div>
                                
                            </div>
                            <!-- End Single Post -->


                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Modifier vos informations</h3>
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="single-post">
                                    <div class="image">
                                        <i class="fa-regular fa-user"></i><strong><input type="text"
                                                class="form-control" style="width: 200px;height: 50px;"
                                                placeholder="Ymele orelien"></strong>
                                    </div>
                                    <div class="image">
                                        <i class="fa-solid fa-droplet"></i><strong><select name="" id=""
                                                class="form-control " style="width: 200px;height: 50px;">
                                                <option value="">A+</option>
                                                <option value="">A-</option>
                                                <option value="">B+</option>
                                                <option value="">B-</option>
                                                <option value="">AB+</option>
                                                <option value="">AB-</option>
                                                <option value="">O+</option>
                                                <option value="">O-</option>
                                            </select></strong>
                                    </div>

                                    <div class="image">
                                        <i class="fa-solid fa-location-dot"></i><strong><input type="text"
                                                class="form-control" placeholder="localisation"
                                                style="width: 200px;height: 50px;"></strong>
                                    </div>
<button type="submit" class="btn btn-success" style="background: green; margin: 0.2rem;"> Modifier</button>

                                </div>
                                
                                <!-- End Single Post -->
                            </div>


                        </div>

                        <div class="single-widget recent-post">
                            <h3 class="title">Changer Mot de passe</h3>
                            <!-- Single Post -->
                            <form class="single-post">
                                <div class="single-post">
                                    <div class="image">
                                        <i class="fa-solid fa-lock-open"></i><strong><input type="text"
                                                class="form-control" style="width: 200px;height: 50px;"
                                                placeholder="Mot de passe actuel"></strong>
                                    </div>
                                    <div class="image">
                                        <i class="fa-solid fa-unlock-keyhole"></i><strong><input type="text"
                                                class="form-control" style="width: 200px;height: 50px;"
                                                placeholder="Nouveau Mot passe"></strong>
                                    </div>

                                    <div class="image">
                                        <i class="fa-solid fa-unlock-keyhole"></i><strong><input type="text"
                                                class="form-control" placeholder="Confirm Mot Passe"
                                                style="width: 200px;height: 50px;"></strong>
                                    </div>
<button type="submit" class="btn btn-success" style="background: green; margin: 0.2rem;"> Modifier</button>

                                </div>
                                <!-- End Single Post -->
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Single News -->
</template>
<style scoped>
p,
h3 {
    color: #000 !important;
}

.image {
    margin: 0.31rem;
    display: flex;
}

.image i {
    padding: 1rem;
    background: #00002c;
    color: #fff;
    margin-right: 0.5rem;
    font-size: 20px;
    width: 50px !important;
    text-align: center;
    align-items: center;
    border-radius: 5px;
}

.single-post {
    margin-top: -5%;
}
</style>