<template>
    <div class="pagetitle">
        <h1>Utilisateurs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accuiel</a></li>
                <li class="breadcrumb-item">Utilisateurs</li>
                <li class="breadcrumb-item active"> activites des utilisateurs</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">




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
                                <h5 class="card-title">Activites Simple utilisateurs<span>| <router-link to="/allUserActivity"><a href="">Voir plus</a>
                                            tout</router-link></span></h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom d'utilisateur</th>
                                            <th scope="col">Operation</th>
                                            <th scope="col">Date & Heure</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#">1</a></th>
                                            <td>Ymele orelien</td>
                                            <td><a href="#" class="text-primary">c'est t'incrire</a></td>
                                            <td>10/12/2023 a 14h30</td>
                                            <td>
                                                <RouterLink to="/allUserActivity" class=" btn btn-primary m-1"
                                                    style="color: #fff;"><i class="bi bi-info-circle"></i></RouterLink>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">2</a></th>
                                            <td>Bridie Kessler</td>
                                            <td><a href="#" class="text-primary">Demande de don de sang</a></td>
                                            <td>13/12/2023 a 14h10</td>
                                            <td>
                                                <RouterLink to="/allUserActivity" class=" btn btn-primary m-1"
                                                    style="color: #fff;"><i class="bi bi-info-circle"></i></RouterLink>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">3</a></th>
                                            <td>Ashleigh Langosh</td>
                                            <td><a href="#" class="text-primary">Don de sang </a></td>
                                            <td>30/11/ 2023</td>
                                            <td>
                                                <RouterLink to="/allUserActivity" class=" btn btn-primary m-1"
                                                    style="color: #fff;"><i class="bi bi-info-circle"></i></RouterLink>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">4</a></th>
                                            <td>Angus Grady</td>
                                            <td><a href="#" class="text-primar">C'est inscrire</a></td>
                                            <td>29/11/2023</td>
                                    <td>
                                                <RouterLink to="/allUserActivity" class=" btn btn-primary m-1"
                                                    style="color: #fff;"><i class="bi bi-info-circle"></i></RouterLink>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
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
                                <h5 class="card-title">Centres hospitaliers <span>| <router-link to="">Voir
                                            tout</router-link></span></h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom du centre</th>
                                            <th scope="col">Operation</th>
                                            <th scope="col">date & heure</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#">1</a></th>
                                            <td>Hospital generale de deido</td>
                                            <td><a href="#" class="text-primary">Valider une demande de don de sang</a></td>
                                            <td>10/12/2023 a 14h30</td>
                                            <td> <button class=" btn btn-primary "><i
                                                        class="bi bi-info-circle"></i></button></td>

                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">2</a></th>
                                            <td>Hospital laqintinie de Douala</td>
                                            <td><a href="#" class="text-primary">Refuser une demande de don de sang</a></td>
                                            <td>13/12/2023 a 14h10</td>

                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">3</a></th>
                                            <td>Centre regional de Bafoussam</td>
                                            <td><a href="#" class="text-primary">Soumit un nouveau evenement </a></td>
                                            <td>30/11/ 2023 a 14h15</td>
                                            <td> <button class=" btn btn-primary "><i
                                                        class="bi bi-info-circle"></i></button></td>

                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">4</a></th>
                                            <td>Centre la perceverence de douala</td>
                                            <td><a href="#" class="text-primar"> a ete ajouter</a></td>
                                            <td>29/11/2023 a 17 h30</td>
                                            <td> <button class=" btn btn-primary "><i
                                                        class="bi bi-info-circle"></i></button></td>

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
                        <h5 class="card-title">Activites Administrateur <span>| <router-link to="">Voir
                                    tout</router-link></span></h5>
                        <div class="activity">
                            <div class="activity-item d-flex">
                                <div class="activite-label">13:21 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content"> Don de sang par <a href="#" class="fw-bold text-dark">Ymel
                                        orelien</a> </div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">17:56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content"> Don financier de 13000FCFA par yoyo cree</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">15:25 min</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content"> Voluptates corrupti molestias voluptatem</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">01:25 min</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content"> Tempore autem saepe <a href="#"
                                        class="fw-bold text-dark">occaecati voluptatem</a> tempore</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content"> Est sit eum reiciendis exercitationem</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content"> Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>


</section></template>
<script>
</script>
<style></style>