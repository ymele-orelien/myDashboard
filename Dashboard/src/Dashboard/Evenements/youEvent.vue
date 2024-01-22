<template>
    <div>
        <!-- ... (Le reste du code HTML) ... -->
        <div class="pagetitle">
            <h1> Evenements</h1>
            <nav>
                <ol class="breadcrumb">

                    <li class="breadcrumb-item">
                        <RouterLink to="/home">Accuiel</RouterLink>
                    </li>
                    <li class="breadcrumb-item active">
                        <RouterLink to="/evenements">Evenements
                        </RouterLink>
                    </li>
                    <li class="breadcrumb-item active">Vos evenements</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-header">
                <h4><i class="fa-solid fa-calendar"></i> Vos Evenements

                    <RouterLink to="/eventCreate" class="btn  float-end m-2"
                        style="background-color: #00002E;color: #fff;">
                     Cree un evenements
                    </RouterLink>
                    

                </h4>
                <div class="form-group">
                    <label for="filterSelect">Trie par :</label>
                    <select v-model="selectedFilter" id="filterSelect" class="form-control">
                        <option value="all">Tous</option>
                        <option value="name">Encour</option>
                        <option value="email">Accepter</option>
                        <option value="role">Refuser</option>
                    </select>


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom d'utilisateur</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody v-if="filteredUsers.length > 0">
                            <tr v-for="(item, index) in paginatedUsers" :key="index">
                                <th scope="row">{{ (currentPage - 1) * perPage + index + 1 }}</th>
                                <td>{{ item.name }}</td>
                                <td>{{ item.email }}</td>
                                <td>{{ item.role }}</td>
                                <td>
                                    <button class="btn btn-danger m-1">
                                        <i class="bi bi-exclamation-octagon"></i>
                                    </button>
                                    <router-link :to="{ path: '/users/' + item.id + '/details_admin' }"
                                        class="btn btn-primary m-1" style="color: #fff;">
                                        <i class="bi bi-info-circle"></i>
                                    </router-link>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else>
                            <tr>
                                <td colspan="5">
                                    <button class="btn btn" type="button" disabled=""
                                        style="background-color: #00002E; color: #fff;">
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
                            <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                                <a class="page-link" @click="changePage(currentPage - 1)" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li v-for="page in pages" :key="page" class="page-item"
                                :class="{ 'active': page === currentPage }">
                                <a class="page-link" @click="changePage(page)">{{ page }}</a>
                            </li>
                            <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
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
import axios from 'axios';

export default {
    name: 'list_admin',
    data() {
        return {
            users: [],
            token: localStorage.getItem('token'),
            searchTerm: '',
            currentPage: 1,
            perPage: 5,
            selectedFilter: 'all', // Ajout du filtre sélectionné
        };
    },
    computed: {
        filteredUsers() {
            return this.users.filter(user => {
                const searchTermLower = this.searchTerm.toLowerCase();
                switch (this.selectedFilter) {
                    case 'name':
                        return user.name.toLowerCase().includes(searchTermLower);
                    case 'email':
                        return user.email.toLowerCase().includes(searchTermLower);
                    case 'role':
                        return user.role.toLowerCase().includes(searchTermLower);
                    default:
                        return (
                            user.name.toLowerCase().includes(searchTermLower) ||
                            user.email.toLowerCase().includes(searchTermLower) ||
                            user.role.toLowerCase().includes(searchTermLower)
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
        getUsers() {
            axios.get('http://127.0.0.1:8000/api/users/listAdmin', {
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json",
                    Authorization: 'Bearer ' + this.token,
                },
            }).then(res => {
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
            this.getUsers();
        },
        searchTerm() {
            this.currentPage = 1; // Reset la page lorsqu'un filtre de recherche est appliqué
        },
        selectedFilter() {
            this.currentPage = 1; // Reset la page lorsqu'un filtre est changé
        },
    },
    mounted() {
        this.getUsers();
    },
};
</script>
  
<style>/* Ajoutez vos styles CSS ici */</style>
  