<template>
    <div class="pagetitle">
        <h1>Bienvenue!</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Accueil</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtre</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Ajourd'hui</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"> Utilisateurs <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                        <span class="text-muted small pt-2 ps-1">Personnes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Partenaires <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i
                        class="fa-solid fa-handshake-angle"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>26</h6>
                                        <span class="text-muted small pt-2 ps-1">Accords</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Dons <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i
                        class="fa-solid fa-hand-holding-droplet"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-muted small pt-2 ps-1">Poches</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtre</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Statisques <span>/Aujourd'hui</span></h5>
                                <div id="reportsChart"></div>
                                <chartUn />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Activites sur les don de sang <span>| Today</span></h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">auteur</th>
                                            <th scope="col">groupe sanguin</th>
                                            <th scope="col">localisation</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td><a href="#" class="text-primary">A+</a></td>
                                            <td>Bepanda Opnisport</td>
                                            <td><span class="badge bg-success">Approuver</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2147</a></th>
                                            <td>Bridie Kessler</td>
                                            <td><a href="#" class="text-primary">B-</a></td>
                                            <td>Pk15</td>
                                            <td><span class="badge bg-secondary"> en cour</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2049</a></th>
                                            <td>Ashleigh Langosh</td>
                                            <td><a href="#" class="text-primary">O-</a></td>
                                            <td>Ndokoti</td>
                                            <td><span class="badge bg-success">Approuver</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2644</a></th>
                                            <td>Angus Grady</td>
                                            <td><a href="#" class="text-primar">O+</a></td>
                                            <td>Besengue</td>
                                            <td><span class="badge bg-danger">Refuser</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2644</a></th>
                                            <td>Raheem Lehner</td>
                                            <td><a href="#" class="text-primary">AB+</a></td>
                                            <td>$165</td>
                                            <td><span class="badge bg-success">Recue</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Activites sur les demandes en poche de sang <span>| Aujourd'hui</span></h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">auteur</th>
                                            <th scope="col">groupe sanguin</th>
                                            <th scope="col">localisation</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td><a href="#" class="text-primary">A+</a></td>
                                            <td>Bepanda Opnisport</td>
                                            <td><span class="badge bg-success">Approuver</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2147</a></th>
                                            <td>Bridie Kessler</td>
                                            <td><a href="#" class="text-primary">B-</a></td>
                                            <td>Pk15</td>
                                            <td><span class="badge bg-secondary"> en cour</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2049</a></th>
                                            <td>Ashleigh Langosh</td>
                                            <td><a href="#" class="text-primary">O-</a></td>
                                            <td>Ndokoti</td>
                                            <td><span class="badge bg-success">Approuver</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2644</a></th>
                                            <td>Angus Grady</td>
                                            <td><a href="#" class="text-primar">O+</a></td>
                                            <td>Besengue</td>
                                            <td><span class="badge bg-danger">Refuser</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2644</a></th>
                                            <td>Raheem Lehner</td>
                                            <td><a href="#" class="text-primary">AB+</a></td>
                                            <td>$165</td>
                                            <td><span class="badge bg-success">Recue</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Activites recentes <span>| Aujourd'hui</span></h5>
                        <div class="activity">
                            <div class="activity-item d-flex">
                                <div class="activite-label">13:21 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content"> Demade de don valider par <a href="#" class="fw-bold text-dark">hospital generale
                                        </a> </div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">17:56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content"> Demande de don Refuser par <a href="" class="fw-bold text-dark">Hospital generale de douala</a></div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">15:25 min</div>
                                <i class='bi bi-circle-fill activity-badge text-secondary align-self-start'></i>
                                <div class="activity-content"> Demande de don de <a href="" class="fw-bold text-dark">Nemso orei</a> en cour de traitement </div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">01:25 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content"> partenaire <a href="#"
                                        class="fw-bold text-dark">hospital de melong</a> bloquer</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content"> <a class="fw-bold text-dark"> ymel metago</a> bloquer</div>
                            </div>
                           
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                    <div class="card-body pb-0">
                        <h5 class="card-title">Evenemnts <span>| a venir</span></h5>
                        <div class="news">
                           <div class="post-item clearfix">
                             <img src="../../../src/assets/img/slide1.jpg" alt="">
                              <h4><a href="#">Journe mondial des don de sang</a></h4>
                              <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                           </div>
                           <div class="post-item clearfix">
                            <img src="../../../src/assets/img/slideA.jpg" alt="">
                              <h4><a href="#">Quidem autem et impedit</a></h4>
                              <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                           </div>
                           <div class="post-item clearfix">
                            <img src="../../../src/assets/img/slideB.jpg" alt="">
                              <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                              <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                           </div>
                           <div class="post-item clearfix">
                            <img src="../../../src/assets/img/slideA.jpg" alt="">
                              <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                              <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                           </div>
                           <div class="post-item clearfix">
                            <img src="../../../src/assets/img/slideB.jpg" alt="">
                              <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                              <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                           </div>
                        </div>
                     </div>
                </div>
            </div>

        </div>


    </section>
</template>
<script>
import Toastr from 'vue-toastr';
import chartUn from "../../assets/js/chartUn.vue"
</script>