<template>
    <div class="pagetitle">
       <h1>Utilisateurs  & Autres</h1>
       <nav>
          <ol class="breadcrumb">
 
             <li class="breadcrumb-item">
                <RouterLink to="/users/list_admin">listes Des Utlisateurs</RouterLink>
             </li>
             <li class="breadcrumb-item active">Details Utilisateur</li>
          </ol>
       </nav>
    </div>
    <section class="section profile" id="details">
       <div class="row">
          <div class="col-xl-4">
             <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                   <img src="../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">{{}}
                   <h2>{{ users.name }}</h2>
                   <h3>{{ users.role }}</h3>
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
                            data-bs-target="#profile-edit">Modifier le profil</button></li>
                      <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#profile-settings">Parametres</button></li>
                      <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#profile-change-password">Changer le mot de passe</button></li>
                   </ul>
                   <div class="tab-content pt-2">
                      <div class="tab-pane fade show active profile-overview" id="profile-overview">
                         <h5 class="card-title">A Propos</h5>
                         <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                            temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam
                            autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
                         <h5 class="card-title"> Details du profil</h5>
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Nom d'utilisateur</div>
                            <div class="col-lg-9 col-md-8">{{ users.name }}</div>
                         </div>
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label">Adresse Email</div>
                            <div class="col-lg-9 col-md-8">{{ users.email }}</div>
                         </div>
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label">Localisation</div>
                            <div class="col-lg-9 col-md-8">{{ users.location }}</div>
                         </div>
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label">Description</div>
                            <div class="col-lg-9 col-md-8"> {{ users.description }}</div>
                         </div>
                        
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label">Numero De Telephone</div>
                            <div class="col-lg-9 col-md-8">(+237) 652959389</div>
                         </div>
                         <div class="row">
                            <div class="col-lg-3 col-md-4 label">Date de creation de compte</div>
                            <div class="col-lg-9 col-md-8">{{ users.created_at }}</div>
                         </div>
 
                      </div>
                      <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                         <form @submit.prevent="updateUsers">
                            <div class="row mb-3">
                               <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                               <div class="col-md-8 col-lg-9">
                                  <img src="../../assets/img/profile-img.jpg" alt="Profile">
                                  <div class="pt-2"> <a href="#" class="btn btn-primary btn-sm"
                                        title="Upload new profile image"><i class="bi bi-upload"></i></a> <a href="#"
                                        class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                           class="bi bi-trash"></i></a></div>
                               </div>
                            </div>
                            <div class="row mb-3">
                               <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom D'utilisateur</label>
                               <div class="col-md-8 col-lg-9"> <input name="fullName" type="text" class="form-control"
                                     id="fullName" v-model="name"></div>
                            </div>
                            <div class="row mb-3">
                               <label for="about" class="col-md-4 col-lg-3 col-form-label">A Propos</label>
                               <div class="col-md-8 col-lg-9"><textarea name="about" class="form-control" id="about"
                                     style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                               </div>
                            </div>
                            <div class="row mb-3">
                               <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                               <div class="col-md-8 col-lg-9"> <input name="email" type="email" class="form-control"
                                     id="Email" v-model="email"></div>
                            </div>
                            <div class="row mb-3">
                               <label for="Job" class="col-md-4 col-lg-3 col-form-label">Role</label>
                               <div class="col-md-8 col-lg-9"> <input name="job" type="text" class="form-control" id="Job"
                                     v-model="role"></div>
                            </div>
 
                            <div class="row mb-3">
                               <label for="Address" class="col-md-4 col-lg-3 col-form-label">Localisation</label>
                               <div class="col-md-8 col-lg-9"> <input name="address" type="text" class="form-control"
                                     id="Address" v-model="location"></div>
                            </div>
                            <div class="row mb-3">
                               <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Numero De Telephone</label>
                               <div class="col-md-8 col-lg-9"> <input name="phone" type="text" class="form-control"
                                     id="Phone" value="(436) 486-3538 x29071"></div>
                            </div>
                            <button class="from-control btn btn-success " 
                               type="button">Modifier</button>
 
                         </form>
                      </div>
                      <div class="tab-pane fade pt-3" id="profile-settings">
                         <form>
                            <div class="row mb-3">
                               <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                               <div class="col-md-8 col-lg-9">
                                  <div class="form-check"> <input class="form-check-input" type="checkbox" id="changesMade"
                                        checked> <label class="form-check-label" for="changesMade"> Changes made to your
                                        account </label></div>
                                  <div class="form-check"> <input class="form-check-input" type="checkbox" id="newProducts"
                                        checked> <label class="form-check-label" for="newProducts"> Information on new
                                        products and services </label></div>
                                  <div class="form-check"> <input class="form-check-input" type="checkbox" id="proOffers">
                                     <label class="form-check-label" for="proOffers"> Marketing and promo offers </label>
                                  </div>
                                  <div class="form-check"> <input class="form-check-input" type="checkbox"
                                        id="securityNotify" checked disabled> <label class="form-check-label"
                                        for="securityNotify"> Security alerts </label></div>
                               </div>
                            </div>
                            <div class="text-center"> <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                         </form>
                      </div>
                      <div class="tab-pane fade pt-3" id="profile-change-password">
                         <form>
                            <div class="row mb-3">
                               <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                  Password</label>
                               <div class="col-md-8 col-lg-9"> <input name="password" type="password" class="form-control"
                                     id="currentPassword"></div>
                            </div>
                            <div class="row mb-3">
                               <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                               <div class="col-md-8 col-lg-9"> <input name="newpassword" type="password"
                                     class="form-control" id="newPassword"></div>
                            </div>
                            <div class="row mb-3">
                               <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                  Password</label>
                               <div class="col-md-8 col-lg-9"> <input name="renewpassword" type="password"
                                     class="form-control" id="renewPassword"></div>
                            </div>
                            <div class="text-center"> <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
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
    name: 'details_admin',
    props: ['id'],
    el: '#details',
    data() {
       return {
          errolist: '',
          users: {
         
          },
          name: '',
          email: '',
          bloodGroup: '',
          location: ''
         
       }
    },
    mounted() {
       this.getUsers();
    
 
 
    },
 
 
    methods: {
 
 
       getUsers() {
 
          axios.get(`http://127.0.0.1:8000/api/details-users/${this.id}`).then(response => {
 
 
             this.users = response.data.users
 
 
          })
             .catch(error => {
                console.log('erreur:', error)
             });
 
       },
       updateUsers() {
          const updatedUsers = {
             name: this.name,
             email: this.email,
             location: this.location,
             role: this.role,
             description: this.description,
             
          };
          axios.put(`http://127.0.0.1:8000/api/update-users/${this.id}`, updatedUsers,
             {
                headers: {
                   'Content-Type': 'application/json'
                }
             }).then(res => {
                console.log(res.data.message);
              
                this.users = {
                   name: '',
                   email: '',
                   location: '',
                   role: '',
                   description: ''
                }
                alert(res.data.message);
                this.errolist = ''
             }).catch(
                error => {
                   console.log(error);
                });
       }
 
    }
 
 
 
 
 }
 </script>
 <style></style>
 