<template>
    <!-- titre de page -->
    <div class="pagetitle">
        <h1>Centre hospitalier</h1>
        <nav>
            <ol class="breadcrumb">
                <RouterLink to="/home" class="breadcrumb-item"><a href="index.html">Accuiel</a></RouterLink>

                <li class="breadcrumb-item active"> centres hospitaliers</li>
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
                                <h5 class="card-title"> Total des centres partenaires<span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-square-poll-vertical"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>205</h6>
                                        <span class="text-muted small pt-2 ps-1">centres</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Poches recoltes <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-hospital-user"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>26</h6>
                                        <span class="text-muted small pt-2 ps-1">Poches</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Evenements organises <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-calendar-plus"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>13</h6>
                                        <span class="text-muted small pt-2 ps-1">Evenements</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card p-2">
                                <h4 class="card-title"> <span style="color: rgb(198, 31, 89);font-size: 19px;"><i
                                            class="fa-solid fa-hospital"></i></span>
                          CENTRE 

                                    <span>|voir tout</span>

                                </h4>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom du centre</th>
                                            <th scope="col">image</th>

                                            <th scope="col">adresse email</th>
                                            <th scope="col">localisation</th>

                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody v-if="filteredUsers.length > 0">
                                        <tr v-for="(item, index) in paginatedUsers" :key="index">
                                            <th scope="row">
                                                {{ (currentPage - 1) * perPage + index + 1 }}
                                            </th>
                                            <td>{{ item
                                                .name }}</td>
                                            <td>
                                                <img :src="'http://127.0.0.1:8000/storage/' + item.image" alt="Event Image"
                                                    style="max-width: 50px;">
                                            </td>
                                            <td>{{ item.email }}</td>

                                            <td>{{ item
                                                .location }}</td>
                                            <td>
                                                <RouterLink :to="{ path: '/hospital/' + item.id + '/infoHospital' }"
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
                            <router-link to='createHospital' class="option m-2">
                                <div class="name">Ajouter un centres hospitalier</div>
                                <div class="chevron">
                                    <div class="fa-solid fa-chevron-right"></div>
                                </div>
                            </router-link>


                            <router-link to="attentEvent" class="option m-2">
                                <div class="name">Recents activites</div>
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
    name: "list_admin",

    data() {
        return {
            users: [],
            token: localStorage.getItem("token"),
            searchTerm: "",
            currentPage: 1,
            perPage: 5,
            selectedFilter: "all", // Ajout du filtre sélectionné
        };
    },
    computed: {
        filteredUsers() {
            return this.users.filter((users) => {
                const searchTermLower = this.searchTerm.toLowerCase();
                switch (this.selectedFilter) {
                    case "name":
                        return users.name.toLowerCase().includes(searchTermLower);
                    case "email":
                        return users.email.toLowerCase().includes(searchTermLower);
                    case "location":
                        return users.location.toLowerCase().includes(searchTermLower);
                    default:
                        return (
                            users.name.toLowerCase().includes(searchTermLower) ||
                            users.email.toLowerCase().includes(searchTermLower) ||
                            users.location.toLowerCase().includes(searchTermLower)
                        );
                }
            });
        },
        totalPages() {
            return Math.ceil(this.filteredUsers.length / this.perPage);
        },
        paginatedUsers() {
            const start = (this.currentPage - 1) * this.perPage;
            const end = start + this.perPage;
            return this.filteredUsers.slice(start, end);
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
                .get("http://127.0.0.1:8000/api/listHospital", {
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                        Authorization: "Bearer " + this.token,
                    },
                })
                .then((res) => {
                    this.users = res.data.users;
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