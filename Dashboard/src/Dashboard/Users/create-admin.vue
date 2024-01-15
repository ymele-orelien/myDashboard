<template>
   <div class="pagetitle">
      <h1> Utilisateurs</h1>
      <nav>
         <ol class="breadcrumb">

            <li class="breadcrumb-item">
               <RouterLink to="/users">listes des Administrateurs</RouterLink>
            </li>
            <li class="breadcrumb-item active">Ajouts des Administrateus & Autres</li>
         </ol>
      </nav>
   </div>
   <div class="col-lg-20">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Procedure de creation d'un Administrateurs ou autres</h5>
            <p>Le formulaire ci dessous est le formulaire de creation d'un utilisateur,ses utilsateur auront acces aux
               tableaux de bord.certains champ comme le
               <code>Nom d'utilisateurs</code>,<code>l'email</code>,<code>Mot de passe</code>,<code>la localisation </code>
               sont obligatoire. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly
               different style of feedback.
            </p>
            <form class="row g-3" @submit.prevent="save">

               <div class="col-md-4"> <label for="validationDefault01" class="form-label"> Nom d'utilisateur</label> <input
                     type="text" class="form-control" id="validationDefault01" v-model="users.name" placeholder="Ymele"
                     required>
               </div>
               <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Email</label>
                  <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                     <input type="email" class="form-control" id="validationDefaultUsername" v-model="users.email"
                        placeholder="Orelien@gmail.com" aria-describedby="inputGroupPrepend2" required>
                  </div>
               </div>
               <div class="col-md-4"> <label for="validationDefault02" class="form-label">Mot de passe</label> <input
                     type="password" class="form-control" id="validationDefault02" v-model="users.password" required></div>
               <!-- <div class="col-md-4"> <label for="validationDefault04" class="form-label">Confirmez Mot de passe</label>
                  <input type="password" class="form-control" id="validationDefault0" required></div> -->
               <div class="col-md-6"> <label for="validationDefault03" class="form-label">Localisation</label> <input
                     type="text" class="form-control" id="validationDefault03" placeholder="201-pk19"
                     v-model="users.location" required></div>
               <div class="col-md-4"> <label for="validationDefault04" class="form-label">selectioner une photo</label>
                  <input type="file" class="form-control" id="validationDefault0" placeholder="Orelien" >
               </div>
               <div class="col-md-3">
                  <label for="validationDefault04" class="form-label">Role</label>

                  <select class="form-select" id="validationDefault04">
                     <option selected disabled value="">Choisisais...</option>
                     <option >...</option>
                  </select>
               </div>
               <div class="col-md-3"> <label for="validationDefault05" class="form-label">role</label> <input
                     type="text" class="form-control" id="validationDefault05" v-model="users.role"></div>
               <div class="col-md-3"> <label for="validationDefault05" class="form-label">Description</label> <input
                     type="text" class="form-control" id="validationDefault05" v-model="users.description"></div>

               <div class="col-12"> <button class="btn btn-success" @click="saveUsers" type="submit">Creer</button></div>
            </form>
         </div>
      </div>
   </div>
</template>
<script>
import axios from 'axios';
export default {



   data() {
      return {
         result: {},


         users: {
            
            name: "",
            email: "",
            password: "",
            location: "",
            description: "",
            role: "",

         }  ,
         token: localStorage.getItem('token')
      }

   },
   mounted() {

      console.log("component mounted")
   },

   methods: {
      save()
           {
            
                this.AddUsers();
            
                 
 
           },
      AddUsers() {
         let url="http://127.0.0.1:8000/api/user/register"
      axios.post(url, this.users).then((response) => {
            console.log(response)


            this.users = {
               name: '',
               email: '',
               password: '',
               location: '',
            
               description: '',
               role: '',
            }

            this.$router.push({ name: 'list_admin' }, );

           
         })
      }
   }

}

</script>
<style></style>