<template>
   <!-- Breadcrumbs -->
   <div class="breadcrumbs overlay">
      <div class="container" style="border: none !important;">
         <div class="bread-inner">
            <div class="row">
               <div class="col-12">
                  <h2>Vos reponses</h2>
                  <ul class="bread-list">
                     <li>
                        <RouterLink to="/">Accueil</RouterLink>
                     </li>
                     <li><i class="fa-solid fa-chevron-right"></i></li>
                     <li class="active">REPONSE</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End Breadcrumbs -->
   <div class="reponse">
      <div class="col-xl-8" style="margin: auto;">
         <div class="card">
            <div class="card-body pt-3">
               <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                     <button class="nav-link active" data-bs-toggle="tab"
                        data-bs-target="#profile-overview">Tout</button>
                  </li>
                  <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Don
                        de sang</button></li>
                  <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                        data-bs-target="#profile-settings">Demande En poche</button></li>
               </ul>
               <div class="tab-content pt-4">
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                     <div class="res" v-for="(item, index) in reponse" :key="index">
                        <div class="un">
                           <div class="una">
                              <div class="bloc">
                                 <div class="icon icon-red">
                                    <i class="fa-solid fa-hand-holding-droplet"></i>
                                 </div>
                                 <h3 class="text-danger"> Don de sang</h3>
                              </div>
                              <div class="repons" style="margin: 0.5rem;">REPONSE: <strong>EN ATTENTE...</strong></div>
                           </div>
                           <div class="status">
                              <button class="btn btn-primary" style="background-color: gray;"
                                 v-if="response.status === 'ENCOUR'"> EN COUR ..</button>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="res">
                        <div class="un">
                           <div class="una">
                              <div class="bloc">
                                 <div class="icon icon-black"><i class="fa-solid fa-hand-holding-hand"></i></div>
                                 <h3 class="text-sombre"> Demande en poche </h3>
                              </div>
                              <div class="repons">REPONSE: <strong>EN ATTENTE...</strong> </div>
                           </div>
                           <div class="status">
                              <button class="btn btn-primary" style="background-color: gray;"> EN COUR ..</button>
                           </div>


                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                     <div class="res">
                        <div class="un">
                           <div class="una">
                              <div class="bloc">
                                 <div class="icon" style="background: red;">
                                    <i class="fa-solid fa-hand-holding-droplet"></i>
                                 </div>
                                 <h3 style="font-size: 19px; color: red !important;"> Don de sang</h3>
                              </div>
                              <div class="repons" style="margin: 0.5rem;">REPONSE: <strong>EN ATTENTE...</strong></div>
                           </div>
                           <div class="status">
                              <button class="btn btn-primary" style="background-color: gray;"> EN COUR ..</button>
                           </div>
                        </div>
                     </div>
                     <hr>
                  </div>
                  <div class="tab-pane fade pt-3" id="profile-settings">
                     <div class="res">
                        <div class="un">
                           <div class="una">
                              <div class="bloc">
                                 <div class="icon" style="background: #00002c;">
                                    <i class="fa-solid fa-hand-holding-hand"></i>
                                 </div>
                                 <h3 style="font-size: 19px; color: #00002c !important;margin-left: 0.9rem;">
                                    Demande en poche
                                 </h3>
                              </div>
                              <div class="repons">REPONSE: <strong>EN ATTENTE...</strong> </div>
                           </div>
                           <div class="status">
                              <button class="btn btn-primary" style="background-color: gray;"> EN COUR ..</button>
                           </div>

                        </div>
                     </div>
                     <hr>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
import axios from 'axios';
export default {
   data() {
      return {
         reponse: {},
         token: localStorage.getItem("token"),
      }
   },
   mounted() {

   },
   methods: {
      getReponse() {
         axios
            .get(
               "http://127.0.0.1:8000/api/listDonDemande",

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
               this.reponse = res.data.reponse;
               console.log(this.reponse);
            });
      },
   }
}
</script>
<style scoped>
h3 {
   font-size: 19px;
}

.text-sombre {
   color: #00002c;
}

.icon {
   width: 50px;
   height: 50px;
   display: flex;
   justify-content: center;
   align-items: center;
   color: #fff;
   border-radius: 5px;
}

.icon-black {
   background: #00002c;
}

.icon-red {
   background-color: red;
}

.reponse {
   padding: 40px 0;
}

.un {
   display: flex;
   flex-direction: row;
   /* background: yellow; */
   margin-bottom: 20px;
   justify-content: space-between;
}

.bloc {
   /* background: #fff; */
   display: flex;
   align-items: center;
   margin-bottom: 20px;
}

.bloc h3 {
   width: 100px;
   margin-left: 10px;
}

@media screen and (max-width: 370px) {
   .un {
      flex-direction: column;
   }
}
</style>
