
import { RouterLink } from 'vue-router';
<template>
   <!-- Breadcrumbs -->
   <div class="breadcrumbs overlay">
      <div class="container" style="border: none !important;">
         <div class="bread-inner">
            <div class="row">
               <div class="col-12">
                  <h2>Vos reponses</h2>
                  <ul class="bread-list">
                     <li><RouterLink to="/">Accueil</RouterLink></li>
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
      <div class="col-xl-8">
         <div class="card">
            <div class="card-body pt-3">
               <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab"
                        data-bs-target="#profile-overview">Tout</button></li>
                  <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Don
                        de sang</button></li>
                  <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                        data-bs-target="#profile-settings">Demande En poche</button></li>
               </ul>
               <div class="tab-content pt-2">
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                     <div class="res">
                        <div class="un" style="display: flex;justify-content: space-between;">
                           <div class="una" style="display: flex; justify-content: space-around;">
                              <div class="icon" style="background: red;"><i
                                    class="fa-solid fa-hand-holding-droplet"></i></div>
                              <div class="bloc">
                                 <h3 style="font-size: 19px; color: red !important;"> Don de sang</h3>
                              </div>
                           </div>
                           <div class="status">
                              <button class="btn btn-primary" style="background-color: gray;"> EN COUR ..</button>
                           </div>


                        </div>
                        <div class="repons" style="margin: 0.5rem;">REPONSE: <strong>EN ATTENTE...</strong></div>
                     </div>
                     <div class="res">
                        <div class="un" style="display: flex;justify-content: space-between;">
                           <div class="una" style="display: flex; justify-content: space-around;">
                              <div class="icon" style="background: #00002c;"><i
                                    class="fa-solid fa-hand-holding-hand"></i></div>
                              <div class="bloc">
                                 <h3 style="font-size: 19px; color: #00002c !important;margin-left: 0.9rem;"> Demande en
                                    poche </h3>
                              </div>
                           </div>
                           <div class="status">
                              <button class="btn btn-primary" style="background-color: gray;"> EN COUR ..</button>
                           </div>


                        </div>
                        <div class="repons">REPONSE: <strong>EN ATTENTE...</strong> </div>
                     </div>
                  </div>
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                     <div class="res">
                        <div class="un" style="display: flex;justify-content: space-between;">
                           <div class="una" style="display: flex; justify-content: space-around;">
                              <div class="icon" style="background: red;"><i
                                    class="fa-solid fa-hand-holding-droplet"></i></div>
                              <div class="bloc">
                                 <h3 style="font-size: 19px; color: red !important;"> Don de sang</h3>
                              </div>
                           </div>
                           <div class="status">
                              <button class="btn btn-primary" style="background-color: gray;"> EN COUR ..</button>
                           </div>


                        </div>
                        <div class="repons" style="margin: 0.5rem;">REPONSE: <strong>EN ATTENTE...</strong></div>
                     </div>
                  </div>
                  <div class="tab-pane fade pt-3" id="profile-settings">
                     <div class="res">
                        <div class="un" style="display: flex;justify-content: space-between;">
                           <div class="una" style="display: flex; justify-content: space-around;">
                              <div class="icon" style="background: #00002c;"><i
                                    class="fa-solid fa-hand-holding-hand"></i></div>
                              <div class="bloc">
                                 <h3 style="font-size: 19px; color: #00002c !important;margin-left: 0.9rem;"> Demande en
                                    poche </h3>
                              </div>
                           </div>
                           <div class="status">
                              <button class="btn btn-primary" style="background-color: gray;"> EN COUR ..</button>
                           </div>


                        </div>
                        <div class="repons">REPONSE: <strong>EN ATTENTE...</strong> </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<style scoped>
.reponse {

   min-height: 30vh;
   background-color: rgb(250, 250, 250);
   display: flex;
   justify-content: center;
   align-items: center;
   padding: 1rem;
}

.res {
   box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1);
   margin: 1rem;
   padding: 1rem;
}

.un {}

.una {
   min-width: 200px;
   display: flex;
   justify-content: center;
   align-items: center;
}

.status {

   align-items: center;
   text-align: center;
}

.icon {
   font-size: 20px;
   padding: 1rem;
   color: #fff;
}
</style>
