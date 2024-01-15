<template>
    <div>
  
  
      <!-- Formulaire pour ajouter un article -->
      <form @submit.prevent="addArticle">
        <div>
          <label for="started">date de debut :</label>
          <input v-model="formData.started" type="text" required>
        </div>
        <div>
          <label for="theme">theme :</label>
          <textarea v-model="formData.theme" required></textarea>
        </div>
        <div>
          <label for="detail">detail :</label>
          <textarea v-model="formData.detail" required></textarea>
        </div>
        <div>
            
          <label for="image">Image :</label>
          <input type="file" @change="handleFileChange" accept="image/*">
        </div>
        <div>
          <button type="submit" class="btn btn-primary">cree</button>
        </div>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  import Upload from 'vue-upload-component';
  
  export default {
    components: {
      Upload,
    },
    data() {
      return {
        formData: {
          started: '',
          theme: '',
          detail:"",
          image: null,
        },
        token: localStorage.getItem("token"),
      };
    },
    methods: {
      addArticle() {
        const formData = new FormData();
        formData.append('started', this.formData.started);
        formData.append('theme', this.formData.theme);
        formData.append('detail', this.formData.detail);
        formData.append('image', this.formData.image);
  
        // Envoyer les données du formulaire à l'API
        axios.post('http://localhost:8000/api/event/register', formData,{
            headers: {
                                Accept: "application/json",
                                "Content-Type": "application/json",
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
      handleFileChange(event) {
        // Mettre à jour le champ image dans formData avec le fichier sélectionné
        this.formData.image = event.target.files[0];
      },
      resetForm() {
        // Réinitialiser le formulaire
        this.formData.started = '';
        this.formData.theme = '';
        this.formData.image = null;
      },
    },
  };
  </script>
  