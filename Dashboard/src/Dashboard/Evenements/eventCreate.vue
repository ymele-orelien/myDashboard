<template>
    <div class="pagetitle">
        <h1> Evenements</h1>
        <nav>
            <ol class="breadcrumb">

                <li class="breadcrumb-item">
                    <RouterLink to="/evenement">Nos evenements</RouterLink>
                </li>
                <li class="breadcrumb-item active">Ajouts des d'un evenements</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><strong>Procedure de creation d'un Evenement ou autres</strong></h3>
            <p>Le formulaire ci dessous est le formulaire de creation d'un utilisateur,ses utilsateur auront acces aux
                tableaux de bord.certains champ comme le
                <code>Nom d'utilisateurs</code>,<code>l'email</code>,<code>Mot de passe</code>,<code>la localisation </code>
                sont obligatoire. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly
                different style of feedback.
            </p>
            <form class="row g-3 " @submit.prevent="eventSave()">
                <div class="col-md-4"> <label for="validationDefault04" class="form-label">Selectioner une image <span
                            style="color:red;">*</span></label>
                    <input type="file" class="form-control" id="validationDefault0" accept="image/*" ref="image"
                        @change="handleFileUpload()">
                </div>
                <div class="col-md-4"> <label for="validationDefault01" class="form-label"> Votre Theme <span
                            style="color:red;">*</span> </label> <input type="text" class="form-control"
                        id="validationDefault01" placeholder="La journee mondiale des ...." v-model="event.theme" required>
                </div>


                <div class="col-md-4"> <label for="validationDefault03" class="form-label">Date de debut de l'evenement
                        <span style="color:red;">*</span> </label> <input type="date" class="form-control"
                        id="validationDefault03" placeholder="14/12/2023" v-model="event.started" required></div>


                <div class="col-md-3"> <label for="validationDefault05" class="form-label">Detail sur l'evenement<span
                            style="color:red;">*</span></label>
                    <textarea name="" id="" cols="30" rows="5" v-model="event.detail">

            </textarea>
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
            event: {
                started: '',
                theme: '',
                detail: "",
                image: "",
            },
            token: localStorage.getItem("token"),
        }
    },
    methods: {
        eventSave() {
            const formData = new FormData();
        formData.append('started', this.event.started);
        formData.append('theme', this.event.theme);
        formData.append('detail', this.event.detail);
        formData.append('image', this.event.image);
            axios.post('http://localhost:8000/api/event/register', event, {}, {
                headers: {
                    Accept: "application/json",
                    "Content-Type": "multipart/form-data",
                    Authorization: "Bearer " + this.token,
                },
            })
                .then(response => {
                    console.log('Article ajouté avec succès:', response.data);
                    // Réinitialiser le formulaire
                    this.resetForm();
                })
                .catch(error => {
                    console.error('Erreur lors de l\'ajout de l\'article:', error);
                });
        },
        handleFileUpload(){
            this.event.image=this.$refs.image.files[0]
        }
    }

}

</script>
<style></style>