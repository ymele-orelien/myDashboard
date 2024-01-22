<template>
    <div class="pagetitle">
        <h1> Ajouter Un Centre partenaire</h1>
        <nav>
            <ol class="breadcrumb">

                <li class="breadcrumb-item">
                    <RouterLink to="/home">Accuiel</RouterLink>
                </li>
                <li class="breadcrumb-item active">
                    <RouterLink to="/evenements">Centre partenaire
                    </RouterLink>
                </li>
                <li class="breadcrumb-item active">Ajouts un centre partenaire</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><strong>Procedure de creation d'un centre partenaire</strong></h3>
            <p>Le formulaire ci dessous est le formulaire de creation d'un Evenement,alors il est important de respecter
                certains disposition

                <code>l'image</code> chaque evenement cree doit etre accompagne dune image
                descriptifs,<code>email</code>:Qui va permetre de situe les utilisateurs sur le but de
                l'evenements,<code>la date de debut de l'evenement</code>:,<code>les passwords sur levenemets </code>
                sont obligatoire. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly
                different style of feedback.
            </p>
            <form class="row g-3 " @submit.prevent="usersSave()">
                <div class="col-md-4"> <label for="validationDefault04" class="form-label">Selectioner une image <span
                            style="color:red;">*</span></label>
                    <input type="file" class="form-control" id="validationDefault0" accept="image/*" ref="image"
                        @change="handleFileUpload()">
                </div>
                <div class="col-md-4"> <label for="validationDefault01" class="form-label"> Nom du centre <span
                            style="color:red;">*</span> </label> <input type="text" class="form-control"
                        id="validationDefault01" placeholder="La journee mondiale des ...." v-model="users.name" required>
                </div>
                <div class="col-md-4"> <label for="validationDefault01" class="form-label"> Votre email <span
                            style="color:red;">*</span> </label> <input type="email" class="form-control"
                        id="validationDefault01" placeholder="La journee mondiale des ...." v-model="users.email" required>
                </div>

                <div class="col-md-4"> <label for="validationDefault03" class="form-label">password
                        <span style="color:red;">*</span> </label> <input type="password" class="form-control"
                        id="validationDefault03"  v-model="users.password" required></div>


                <div class="col-md-3"> <label for="validationDefault05" class="form-label">detail sur le centre<span
                            style="color:red;">*</span></label>
                    <input  type="text" class="form-control" v-model="users.description"   >

    
                </div>

                <div class="col-md-3"> <label for="validationDefault05" class="form-label">detail sur le centre<span
                            style="color:red;">*</span></label>
                    <input  type="text" class="form-control" v-model="users.location"   >

    
                </div>

                <div class="col-12"> <button class="btn btn-success" type="submit">Creer</button></div>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            users: {
                name: '',
                email: '',
                password: "",
                description:"",
                location:"",

                image: "",
            },
            token: localStorage.getItem("token"),
        }
    },
    methods: {
        usersSave() {
            const formData = new FormData();
            formData.append('name', this.users.name);
            formData.append('email', this.users.email);
            formData.append('password', this.users.password);
            formData.append('description', this.users.description);
            formData.append('description', this.users.location);


            formData.append('image', this.users.image);
            axios.post('http://localhost:8000/api/hospital/register', this.users, {
                headers: {
                    Accept: "application/json",
                    "Content-Type": "multipart/form-data",
                    Authorization: "Bearer " + this.token,
                },
            })
                .then(response => {
                    console.log('Article ajouté avec succès:', response.data);
                    this.$router.push('/hospital')
                    // Réinitialiser le formulaire
                    this.resetForm();
                })
                .catch(error => {
                    console.error('Erreur lors de l\'ajout de l\'article:', error);
                });
        },
        handleFileUpload() {
            this.users.image = this.$refs.image.files[0]
        }
    }

}

</script>
<style></style>