<template>
    <!-- titre de page -->
    <div class="pagetitle">
        <h1>Evenements</h1>
        <nav>
            <ol class="breadcrumb">
                <RouterLink to="/home" class="breadcrumb-item"><a href="index.html">Accuiel</a></RouterLink>

                <li class="breadcrumb-item active"> Evenements</li>
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
                                <h5 class="card-title"> Total Evenements<span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-square-poll-vertical"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>205</h6>
                                        <span class="text-muted small pt-2 ps-1">Cree</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Evenements Accepter <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-calendar-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>26</h6>
                                        <span class="text-muted small pt-2 ps-1">Valides</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Evenements rejeter <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-calendar-xmark"></i>
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
                                <h4 class="card-title"> <span style="color: rgb(108, 205, 98);font-size: 19px;"><i class="fa-solid fa-calendar-check"></i></span>
                                  Evnements valides 

                                    <span>|voir tout</span>

                                </h4>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Auteur</th>
                                            <th scope="col">image</th>

                                            <th scope="col">Date de debut</th>
                                            <th scope="col">theme</th>

                                            <th scope="col">status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody v-if="filteredEvent.length > 0">
                                        <tr v-for="(item, index) in paginatedevent" :key="index">
                                            <th scope="row">
                                                {{ (currentPage - 1) * perPage + index + 1 }}
                                            </th>
                                            <td>{{ item
                                                .auteur }}</td>
                                            <td>
                                                <img :src="'http://127.0.0.1:8000/storage/' + item.image" alt="Event Image"
                                                    style="max-width: 50px;">
                                            </td>
                                            <td>{{ item.started }}</td>

                                            <td>{{ item
                                                .theme }}</td>



                                            <td style="font-weight: 650;">{{ item
                                                .status }}</td>
                                            <!-- <td>{{ item.location }}</td> -->

                                            <td>


                                                <RouterLink :to="{ path: '/event/' + item.id + '/detailsEvent' }"
                                                    class=" btn btn-primary m-1" style="color: #fff;"><i
                                                        class="bi bi-info-circle"></i></RouterLink>

                                            </td>
                                        </tr>

                                    </tbody>
                                    <tbody v-else>
                                        <tr>

                                            <td colspan="7"><button class="btn btn" type="button" disabled=""
                                                    style="background-color: #00002E; color: #fff;"> <span
                                                        class="spinner-border spinner-border-sm " role="status"
                                                        aria-hidden="true"></span>
                                                    Loading... </button></td>



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
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <!-- option sur les evenements  -->

                    <div class="card-body">
                        <h5 class="card-title">Options sur les evenements </h5>
                        <div class="">
                            <router-link to='eventCreate' class="option m-2">
                                <div class="name">Cree un evenements</div>
                                <div class="chevron">
                                    <div class="fa-solid fa-chevron-right"></div>
                                </div>
                            </router-link>
                            <router-link to="/listEvent" class="option m-2">
                                <div class="name"> Listes des Evenements</div>
                                <div class="chevron">
                                    <div class="fa-solid fa-chevron-right"></div>
                                </div>
                            </router-link>
                            <router-link to="/youEvent" class="option m-2">
                                <div class="name">Vos evenements</div>
                                <div class="chevron">
                                    <div class="fa-solid fa-chevron-right"></div>
                                </div>
                            </router-link>
                            <router-link to="attentEvent" class="option m-2">
                                <div class="name">Evenements en attentes</div>
                                <div class="chevron">
                                    <div class="fa-solid fa-chevron-right"></div>
                                </div>
                            </router-link>
                        </div>

                    </div>
                </div>

                <!-- Evenement en attente  -->
                <Avenir />

            </div>
        </div>


    </section>
</template>
<script>
import axios from "axios";
import Avenir from "../Evenements/eventAvenir.vue"
export default {
    name: "list_admin",
    components: {
        Avenir

    },
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
                .get("http://127.0.0.1:8000/api/list/event/Accepter", {
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
.option {
    border: 1px solid #00002E;
    border-radius: 4px;
    display: flex;
    justify-content: space-between;
    padding: 1rem;

}

.option .name {
    font-weight: 650;
}
</style>