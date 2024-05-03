<template>
   <!-- Breadcrumbs -->
   <div class="breadcrumbs overlay">
      <div class="container" style="border: none !important;">
         <div class="bread-inner">
            <div class="row">
               <div class="col-12">
                  <h2>Vos réponses</h2>
                  <ul class="bread-list">
                     <li><router-link to="/">Accueil</router-link></li>
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
                        data-bs-target="#profile-edit">Donation</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Demande En
                        poche</button>
                  </li>
               </ul>
               <div class="tab-content pt-4">

                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                     <!-- Contenu de la tab Don de sang -->
                     <div v-if="donate.length > 0">
                        <div class="un" v-for="(item, index) in donate" :key="index">
                           <div class="una">
                              <div class="bloc">
                                 <div class="icon icon-red">
                                    <i class="fa-solid fa-hand-holding-droplet"></i>
                                 </div>
                                 <h3 class="text-danger">Don de Sang</h3>
                              </div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'ENCOUR'">
                                 REPONSE: <strong class="text-secondary fw-650">EN ATTENTE</strong></div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'TRANSMIS'">
                                 REPONSE: <strong style="color: aqua;">EN ATTENTE DE RENDEZ VOUS</strong>
                              </div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'ATTENTE'">
                                 REPONSE: <strong class="text-secondary fw-650">CHERS DONATEUR (ICE) VEUILLER S'IL VOUS
                                    PLAIT VOUS RENDRE A <span style="font-weight: 650;color: blue;">{{ item.centre_name
                                       }}</span> Le
                                    {{ item.date }} POUR EFFECTUER LE DON.</strong>
                              </div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'EFFECTUER'">
                                 REPONSE: <p> <strong style="color: green; font-weight: 650;">CHERS DONATEUR(ICE) NOUS
                                       VOUS REMERCION POUR
                                       VOTRE DON </strong></p>
                              </div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'REFUSER'">
                                 REPONSE: <strong > CHERS DONATEUR(ICE) VOTRE DONATION A ETE REJETER
                                    POUR : <span style="color: red;">{{ item.motifs }} </span></strong>
                              </div>
                           </div>

                           <div class="status" v-if="item.status === 'ENCOUR'">
                              <button class="btn btn-primary" style="background-color: gray;"> EN COUR ..</button>

                           </div>

                           <div class="status" v-if="item.status === 'TRANSMIS'">
                              <button class="btn btn-primary" style="background-color: aqua;"> TRANSMIS</button>

                           </div>
                           <div class="status" v-if="item.status === 'ATTENTE'">
                              <button class="btn btn-primary" style="background-color: blue;"> ATTENTE</button>

                           </div>
                           <div class="status" v-if="item.status === 'EFFECTUER'">
                              <button class="btn btn-primary" style="background-color: green;"> EFFECTUER</button>

                           </div>
                           <div class="status" v-if="item.status === 'REFUSER'">
                              <button class="btn btn-primary" style="background-color: red;"> REJETER</button>
                              <hr>

                           </div>
                        </div>
                     </div>
                     <div v-else style=" font-size: 25px;color: gray;"> 
                        AUCUNE DONATION TROUVER
                     </div>
                  </div>
                  <div class="tab-pane fade pt-3" id="profile-settings">
                     <!-- Contenu de la tab Demande En poche -->
                     <div v-if="demande.length > 0" style="width: 100%; font-weight: 650;">
                        <div class="un" v-for="(item, index) in demande" :key="index">
                           <div class="una">
                              <div class="bloc">
                                 <div class="icon icon-red" style="background-color: #00002c">
                                    <i class="fa-solid fa-hand-holding-hand"></i>
                                 </div>
                                 <h3 class="text-secondary">Demande en poche</h3>
                              </div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'ENCOUR'">
                                 REPONSE: <strong>EN ATTENTE</strong></div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'TRANSMIS'">
                                 REPONSE: <strong>EN ATTENTE DE RENDEZ VOUS</strong>
                              </div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'ATTENTE'">
                                 REPONSE: <strong>CHERS DONATEUR (ICE) VEUILLER S'IL VOUS PLAIT VOUS RENDRE A <span
                                       style="font-weight: 650;color: blue;">{{ item.centre_name }}</span> Le
                                    {{ item.date }} POUR EFFECTUER LE DON.</strong>
                              </div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'ACCEPTER'">
                                 REPONSE: <strong style="color: green;">CHERS DEMANDEUR(SE) VOUS AVEZ RECU {{
                        item.quantite }} poche </strong>
                              </div>
                              <div class="repons" style="margin: 0.5rem;" v-if="item.status === 'REFUSER'">
                                 REPONSE: <strong style="color: red;">CHERS DEMANDEUR(SE) VOTRE DEMANDE A ETE REJETER
                                    POUR :{{ item.motifs }} </strong>
                              </div>
                           </div>

                           <div class="status" v-if="item.status === 'ENCOUR'">
                              <button class="btn btn-primary" style="background-color: gray;"> EN COUR ..</button>

                           </div>

                           <div class="status" v-if="item.status === 'TRANSMIS'">
                              <button class="btn btn-primary" style="background-color: yellowgreen;"> TRANSMIS</button>

                           </div>
                           <div class="status" v-if="item.status === 'ATTENTE'">
                              <button class="btn btn-primary" style="background-color: blue;"> ATTENTE</button>

                           </div>
                           <div class="status" v-if="item.status === 'ACCEPTER'">
                              <button class="btn btn-primary" style="background-color: green;"> EFFECTUER</button>

                           </div>
                           <div class="status" v-if="item.status === 'REFUSER'">
                              <button class="btn btn-primary" style="background-color: red;"> REJETER</button>

                           </div>
                           <hr>
                        </div>
                     </div>
                     <div v-else  style=" font-size: 25px;color: gray; font-weight: 650;" > AUCUNE DEMANDE TROUVER
                     </div>
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
         donate: [],
         demande: [],
         token: localStorage.getItem("token")
      };
   },
   mounted() {
      this.getDonate();
      this.getDmd();

   },
   methods: {
      getDonate() {
         axios.get("http://127.0.0.1:8000/api/listDonateUserConnect", {
            headers: {
               Accept: "application/json",
               "Content-Type": "application/json",
               Authorization: "Bearer " + this.token
            }
         })
            .then((res) => {
               this.donate = res.data.donate;
            })
            .catch((error) => {
               console.error("Erreur lors de la récupération des données :", error);
            });
      },
      getDmd() {
         axios.get("http://127.0.0.1:8000/api/listrequestUserConnect", {
            headers: {
               Accept: "application/json",
               "Content-Type": "application/json",
               Authorization: "Bearer " + this.token
            }
         })
            .then((res) => {
               this.demande = res.data.demande;
            })
            .catch((error) => {
               console.error("Erreur lors de la récupération des données :", error);
            });
      }
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
   justify-content: space-between;
   /* background: yellow; */
   margin-bottom: 20px;
   width: 100%;

}
.un{
   border-bottom: 1px solid gray;

}

.una {
   max-width: 1100px;
   width: 1100px;
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

.status {}

@media screen and (max-width: 370px) {
   .un {
      flex-direction: column;
   }
}
</style>