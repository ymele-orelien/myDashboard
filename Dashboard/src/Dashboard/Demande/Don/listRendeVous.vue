<template>
    <div>
      <!-- ... (Le reste du code HTML) ... -->
      <div class="pagetitle">
        <h1>Don</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <RouterLink to="/home">Accuiel</RouterLink>
            </li>
            <li class="breadcrumb-item active">
              <RouterLink to="/don">Don </RouterLink>
            </li>
            <li class="breadcrumb-item active">Rendez vous en attente</li>
          </ol>
        </nav>
      </div>
      <div class="card">
        <div class="card-header">
          <h4>
            <i class="fa-solid fa-calendar"></i> Rendez vous en attente
  
         
          </h4>
          <div class="form-group">
           
  
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Auteur</th>
                  <th scope="col">localistion</th>
                  <th scope="col">date </th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody v-if="filteredDonate.length > 0">
                <tr v-for="(item, index) in paginateddonate" :key="index">
                  <th scope="row">
                    {{ (currentPage - 1) * perPage + index + 1 }}
                  </th>
                  <td>{{ item.auteur }}</td>
                  <td>{{ item.location }}</td>
                  <td>{{ item.created_at }}</td>
                  <td>
                    <button class="btn btn-danger m-1">
                      <i class="fa-solid fa-trash"></i>
                    </button>
                    <router-link
                    :to="{ path: '/don/'+ item.id +'/detailsDon' }"

                     
                      class="btn btn-primary m-1"
                      style="color: #fff;"
                    >
                      <i class="bi bi-info-circle"></i>
                    </router-link>
                   
                  </td>
                </tr>
              </tbody>
              <tbody v-else>
                <tr>
                  <td colspan="5">
                    <button
                      class="btn btn"
                      type="button"
                      disabled=""
                      style="background-color: #00002e; color: #fff;"
                    >
                      <span
                        class="spinner-border spinner-border-sm"
                        role="status"
                        aria-hidden="true"
                      ></span>
                      Loading...
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
  
            <!-- Bootstrap Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item" :class="{ disabled: currentPage === 1 }">
                  <a
                    class="page-link"
                    @click="changePage(currentPage - 1)"
                    aria-label="Previous"
                  >
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li
                  v-for="page in pages"
                  :key="page"
                  class="page-item"
                  :class="{ active: page === currentPage }"
                >
                  <a class="page-link" @click="changePage(page)">{{ page }}</a>
                </li>
                <li
                  class="page-item"
                  :class="{ disabled: currentPage === totalPages }"
                >
                  <a
                    class="page-link"
                    @click="changePage(currentPage + 1)"
                    aria-label="Next"
                  >
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from "axios";
  
  export default {
    name: "list_admin",
    data() {
      return {
        donate: [],
        token: localStorage.getItem("token"),
        searchTerm: "",
        currentPage: 1,
        perPage: 5,
        selectedFilter: "all", // Ajout du filtre sélectionné
      };
    },
    computed: {
      filteredDonate() {
        return this.donate.filter((donate) => {
          const searchTermLower = this.searchTerm.toLowerCase();
          switch (this.selectedFilter) {
            case "auteur":
              return donate.location.toLowerCase().includes(searchTermLower);
            case "theme":
              return donate.theme.toLowerCase().includes(searchTermLower);
            case "theme":
              return donate.started.toLowerCase().includes(searchTermLower);
            default:
              return (
                donate.location.toLowerCase().includes(searchTermLower) ||
                donate.theme.toLowerCase().includes(searchTermLower) ||
                donate.started.toLowerCase().includes(searchTermLower)
              );
          }
        });
      },
      totalPages() {
        return Math.ceil(this.filteredDonate.length / this.perPage);
      },
      paginateddonate() {
        const start = (this.currentPage - 1) * this.perPage;
        const end = start + this.perPage;
        return this.filteredDonate.slice(start, end);
      },
      pages() {
        const pagesArray = [];
        for (let i = 1; i <= this.totalPages; i++) {
          pagesArray.push(i);
        }
        return pagesArray;
      },
    },
    methods: {
      getDonate() {
        axios
          .get("http://127.0.0.1:8000/api/list/Donate/Encour", {
            headers: {
              Accept: "application/json",
              "Content-Type": "application/json",
              Authorization: "Bearer " + this.token,
            },
          })
          .then((res) => {
            this.donate = res.data.donate;
          });
      },
     
      changePage(page) {
        if (page >= 1 && page <= this.totalPages) {
          this.currentPage = page;
        }
      },
    },
    watch: {
      currentPage() {
        this.getDonate();
      },
      searchTerm() {
        this.currentPage = 1; // Reset la page lorsqu'un filtre de recherche est appliqué
      },
      selectedFilter() {
        this.currentPage = 1; // Reset la page lorsqu'un filtre est changé
      },
    },
    mounted() {
      this.getDonate();
    },
  };
  </script>
  
  <style>
  /* Ajoutez vos styles CSS ici */
  </style>
  