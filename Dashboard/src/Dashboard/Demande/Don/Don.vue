<template>
  <!-- titre de page -->
  <div class="pagetitle">
    <h1>Don De Sang</h1>
    <nav>
      <ol class="breadcrumb">
        <RouterLink to="/home" class="breadcrumb-item"
          ><a href="index.html">Accuiel</a></RouterLink
        >

        <li class="breadcrumb-item active">Don</li>
      </ol>
    </nav>
  </div>
  <section class="section dashboard">
    <div class="row">
      <!-- tableau statistique -->

      <div class="col-lg-8">
        <div class="row">
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Total De Prelevement<span></span></h5>
                <div class="d-flex align-items-center">
                  <div
                    class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                  >
                    <i class="fa-solid fa-square-poll-vertical"></i>
                  </div>
                  <div class="ps-3">
                    <h6>205</h6>
                    <span class="text-muted small pt-2 ps-1">Prelevements</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Prelevements Accepter <span></span></h5>
                <div class="d-flex align-items-center">
                  <div
                    class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                  >
                    <i class="fa-solid fa-heart-circle-check"></i>
                  </div>
                  <div class="ps-3">
                    <h6>26</h6>
                    <span class="text-muted small pt-2 ps-1"> Acceptes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-12">
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Prelevements Rejeter <span></span></h5>
                <div class="d-flex align-items-center">
                  <div
                    class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                  >
                    <i class="fa-solid fa-heart-circle-xmark"></i>
                  </div>
                  <div class="ps-3">
                    <h6>13</h6>
                    <span class="text-muted small pt-2 ps-1">Refuser</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card p-2">
                <h4 class="card-title">
                  <span style="color: rgb(108, 205, 98); font-size: 19px;">
                    <i class="fa-solid fa-heart-circle-check"></i
                  ></span>
                  Donates Recu

                  <span>|voir tout</span>
                </h4>

                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Auteur</th>
                      <th scope="col">groupe sanguin</th>

                      <th scope="col">Centre de prelevement</th>
                      <th scope="col">nombre de poches</th>

                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody v-if="filteredDonate.length > 0">
                    <tr v-for="(item, index) in paginatedDonate" :key="index">
                      <th scope="row">
                        {{ (currentPage - 1) * perPage + index + 1 }}
                      </th>
                      <td>{{ item.auteur }}</td>

                      <td>{{ item.bloodGroup }}</td>
                      
                      <td>{{ item.centre }}</td>

                      <td>{{ item.poche }}</td>

                      <td>
                        <RouterLink
                          :to="{ path: '/donate/' + item.id + '/detailsEvent' }"
                          class="btn btn-primary m-1"
                          style="color: #fff;"
                          ><i class="bi bi-info-circle"></i
                        ></RouterLink>
                      </td>
                    </tr>
                  </tbody>
                  <tbody v-else>
                    <tr>
                      <td colspan="7">
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
                    <li
                      class="page-item"
                      :class="{ disabled: currentPage === 1 }"
                    >
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
                      <a class="page-link" @click="changePage(page)">{{
                        page
                      }}</a>
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
      </div>
      <div class="col-lg-4">
        <div class="card">
          <!-- option sur les Donate  -->

          <div class="card-body">
            <h5 class="card-title">Options sur les Donate</h5>
            <div class="">
            

              <router-link to="listRendeVous" class="option m-2">
                <div class="name">Rendez vous soliciter</div>
                <div class="chevron">
                  <div class="fa-solid fa-chevron-right"></div>
                </div>
              </router-link>
              <router-link to="donRefuser" class="option m-2">
                <div class="name">Prelevement refuser</div>
                <div class="chevron">
                  <div class="fa-solid fa-chevron-right"></div>
                </div>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import axios from "axios";

export default {
  name: "donate",

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
          case "location":
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
    paginatedDonate() {
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
        .get("http://127.0.0.1:8000/api/list/Donate/Accepter", {
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
.option {
  border: 1px solid #00002e;
  border-radius: 4px;
  display: flex;
  justify-content: space-between;
  padding: 1rem;
}

.option .name {
  font-weight: 650;
}
</style>
