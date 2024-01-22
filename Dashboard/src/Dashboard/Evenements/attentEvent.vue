<template>
    <div>
        <!-- ... (Le reste du code HTML) ... -->
        <div class="pagetitle">
            <h1>Evenements</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <RouterLink to="/home">Accuiel</RouterLink>
                    </li>
                    <li class="breadcrumb-item active">
                        <RouterLink to="/evenements">Evenements </RouterLink>
                    </li>
                    <li class="breadcrumb-item active">EVenements en attentse</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>
                    <i class="fa-solid fa-calendar"></i> Liste des evenements en attenetes

                    <RouterLink to="/eventCreate" class="btn float-end m-2" style="background-color: #00002e; color: #fff;">
                        Cree un evenements
                    </RouterLink>
                </h4>
                <div class="form-group">


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Auteur</th>
                                <th scope="col">theme</th>
                                <th scope="col">date de debut</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody v-if="filteredEvent.length > 0">
                            <tr v-for="(item, index) in paginatedevent" :key="index">
                                <th scope="row">
                                    {{ (currentPage - 1) * perPage + index + 1 }}
                                </th>
                                <td>{{ item.auteur }}</td>
                                <td>{{ item.theme }}</td>
                                <td>{{ item.started }}</td>
                                <td>
                                    <router-link to="#" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#basicModal">
                                        <i class="fa-solid fa-trash"></i>
                                    </router-link>
                                    <div class="modal fade" id="basicModal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                 
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                 voulez vous vraimenent supprimez cette evenement?
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Non
                                                    </button>
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                                oui
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <router-link :to="{ path: '/event/' + item.id + '/detailsEvent' }" class="btn btn-primary m-1"
                                        style="color: #fff;">
                                        <i class="bi bi-info-circle"></i> Traiter
                                    </router-link>

                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else>
                            <tr>
                                <td colspan="5">
                                    <button class="btn btn" type="button" disabled=""
                                        style="background-color: #00002e; color: #fff;">
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
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
                                <a class="page-link" @click="changePage(currentPage - 1)" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li v-for="page in pages" :key="page" class="page-item"
                                :class="{ active: page === currentPage }">
                                <a class="page-link" @click="changePage(page)">{{ page }}</a>
                            </li>
                            <li class="page-item" :class="{ disabled: currentPage === totalPages }">
                                <a class="page-link" @click="changePage(currentPage + 1)" aria-label="Next">
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
            event: [],
            token: localStorage.getItem("token"),
            searchTerm: "",
            currentPage: 1,
            perPage: 5,
            selectedFilter: "all", // Ajout du filtre sélectionné
        };
    },
    computed: {
        filteredEvent() {
            return this.event.filter((event) => {
                const searchTermLower = this.searchTerm.toLowerCase();
                switch (this.selectedFilter) {
                    case "auteur":
                        return event.auteur.toLowerCase().includes(searchTermLower);
                    case "theme":
                        return event.theme.toLowerCase().includes(searchTermLower);
                    case "theme":
                        return event.started.toLowerCase().includes(searchTermLower);
                    default:
                        return (
                            event.auteur.toLowerCase().includes(searchTermLower) ||
                            event.theme.toLowerCase().includes(searchTermLower) ||
                            event.started.toLowerCase().includes(searchTermLower)
                        );
                }
            });
        },
        totalPages() {
            return Math.ceil(this.filteredEvent.length / this.perPage);
        },
        paginatedevent() {
            const start = (this.currentPage - 1) * this.perPage;
            const end = start + this.perPage;
            return this.filteredEvent.slice(start, end);
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
        getEvent() {
            axios
                .get("http://127.0.0.1:8000/api/list/encour", {
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                        Authorization: "Bearer " + this.token,
                    },
                })
                .then((res) => {
                    this.event = res.data.event;
                });
        },
        getEventById() {
            axios
                .get(`http://127.0.0.1:8000/api/getEventBy/${this.id}`, {
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                        Authorization: "Bearer " + this.token,
                    },
                })
                .then((res) => {
                    this.event = res.data.event;
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
            this.getEvent();
        },
        searchTerm() {
            this.currentPage = 1; // Reset la page lorsqu'un filtre de recherche est appliqué
        },
        selectedFilter() {
            this.currentPage = 1; // Reset la page lorsqu'un filtre est changé
        },
    },
    mounted() {
        this.getEvent();
    },
};
</script>
  
<style>
/* Ajoutez vos styles CSS ici */
</style>
  