<template>
    <div class="pagetitle">
       <h1> Details </h1>
       <nav>
          <ol class="breadcrumb">
 
             <li class="breadcrumb-item">
                <RouterLink to="/home">Accuiel</RouterLink>
             </li>
             <li class="breadcrumb-item active">
                <RouterLink to="/don">DON
                </RouterLink>
             </li>
             <li class="breadcrumb-item active">Details sur un evenement</li>
          </ol>
       </nav>
    </div>
    <section class="section profile" id="details">
       <div class="row">
          <div class="col-xl-4">
             <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                   <img src="../../../assets/img/user.png" alt="Profile">
 
                   <h2>{{ donate.auteur }}</h2>
                   <h3>Simple utilisateur</h3>
                   <div class="social-links mt-2"> <a href="#" class="twitter"><i class="fa-solid fa-donate"></i> </a> <a
                         href="#" class="facebook"><i class="fa-solid fa-hand-holding-droplet"></i></a></div>
                </div>
             </div>
          </div>
          <div class="col-xl-8">
             <div class="card">
                <div class="card-body pt-3">
                   <ul class="nav nav-tabs nav-tabs-bordered">
                      <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#profile-overview"> Informations</button></li>
                      <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#profile-edit">Traiter le don</button></li>
 
 
                   </ul>
                   <div class="tab-content pt-2">
                      <div class="tab-pane fade show active profile-overview" id="profile-overview">
                         <h5 class="card-title">Details sur l'evenement</h5>
                         <p class="small fst-italic">{{ donate.detail }}</p>
                         <h5 class="card-title"> Details du profil</h5>
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Auteur de l'evenement</div>
                            <div class="col-lg-9 col-md-8">{{ donate.auteur }}</div>
                         </div>
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label">Theme</div>
                            <div class="col-lg-9 col-md-8">{{ donate.theme }}</div>
                         </div>
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label">Date de debut</div>
                            <div class="col-lg-9 col-md-8">{{ donate.started }}</div>
                         </div>
 
 
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label">status</div>
                            <div class="col-lg-9 col-md-8">{{ donate.status }}</div>
                         </div>
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label">Date de creation de l'evenement</div>
                            <div class="col-lg-9 col-md-8">{{ donate.created_at }}</div>
                         </div>
 
                      </div>
                      <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                         <form @submit.prevent="updatedEvent">
                            <div class="row mb-3">
                               <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                               <div class="col-md-8 col-lg-9">
                                  <img :src="'http://127.0.0.1:8000/storage/' + donate.image" alt="Profile">
 
                               </div>
                            </div>
                            <div class="row mb-3">
                               <label for="fullName" class="col-md-4 col-lg-3 col-form-label">AUTEUR</label>
                               <div class="col-md-8 col-lg-9"> {{ donate.auteur }}</div>
                            </div>
                            <div class="row mb-3">
                               <label for="about" class="col-md-4 col-lg-3 col-form-label">THEME</label>
                               <div class="col-md-8 col-lg-9">
                                  {{ donate.theme }}
                               </div>
                            </div>
                            <div class="row mb-3">
                               <label for="Email" class="col-md-4 col-lg-3 col-form-label">date de debut</label>
                               <div class="col-md-8 col-lg-9">{{ donate.started }}</div>
                            </div>
                            <div class="row mb-3">
                               <label for="Job" class="col-md-4 col-lg-3 col-form-label">Details</label>
                               <div class="col-md-8 col-lg-9"> {{ donate.detail }}</div>
                            </div>
 
                            <div class="row mb-3">
                               <label for="Address" class="col-md-4 col-lg-3 col-form-label">Creer le</label>
                               <div class="col-md-8 col-lg-9">{{ donate.created_at }}</div>
                            </div>

                            <div class="row mb-3">
                               <label for="Address" class="col-md-4 col-lg-3 col-form-label">selectioner le centre hospiat</label>
                               <div class="col-md-8 col-lg-9"><select name="" id="" class="form-control">
                                <option value="">hospital generale</option>
                               </select></div>
                            </div>
                            <button class="from-control btn btn-danger  m-2" type="button" data-bs-toggle="modal"
                               data-bs-target="#basicModal">REFUSER</button>
                            <div class="modal fade" id="basicModal" tabindex="-1">
                               <div class="modal-dialog">
                                  <form class="modal-content">
                                     <div class="modal-header">
 
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                           aria-label="Close"></button>
                                     </div>
                                     <div class="modal-body">
                                        veuillez entrez le motif
                                     </div>
 
                                     <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                           Annulez
                                        </button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                           refuser
                                        </button>
                                     </div>
                                  </form>
                               </div>
                            </div>
                            <button class="from-control btn btn-success " type="button">ACCEPTER</button>
 
                         </form>
                      </div>
 
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
 </template>
 <script  >
 import axios from 'axios';
 
 export default {
    name: 'detailDonate',
    props: ['id'],
    el: '#details',
    data() {
       return {
          errolist: '',
          donate: [],
          token: localStorage.getItem('token'),
 
 
       }
    },
    mounted() {
       this.getDonate();
 
 
 
    },
 
 
    methods: {
 
 
       getDonate() {
 
          axios.get(`http://127.0.0.1:8000/api/donate-details/${this.id}`,
             {
                headers: {
 
                   "Accept": "application/json",
                   "Content-Type": "application/json",
                   Authorization: 'Bearer ' + this.token,
                }
             }).then(response => {
 
 
                this.donate = response.data.donate
 
 
             })
             .catch(error => {
                console.log('erreur:', error)
             });
 
       },
 
 
    }
 
 
 
 
 }
 </script>
 <style></style>
  