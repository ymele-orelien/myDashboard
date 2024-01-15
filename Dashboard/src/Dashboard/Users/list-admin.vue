<template>
      <div class="pagetitle">
        <h1>Utilisateurs  & Autres</h1>
      <nav>
         <ol class="breadcrumb">


            <li class="breadcrumb-item active">Liste des Administrateurs</li>
         </ol>
      </nav>
   </div>
    <div class="card-header">
        <h4><i class="fa-solid fa-users"></i>  Administarteurs et autres

            <RouterLink to="/users/create-admin" class="btn  float-end m-2" style="background-color: #00002E;color: #fff;">
       Ajouter un Admin
            </RouterLink>

        </h4>


        <div class="card-body">
            <div class="dataTable-search m-2"><input class="dataTable-input" placeholder="Search..." type="text"></div>
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
                <tbody v-if="this.users.length > 0">
                    <tr v-for="(item, index) in this.users" :key="index">
                        <th scope="row">{{ index + 1 }}</th>
                        <td>{{ item.name }}</td>
                        <td>{{ item.email }}</td>
                        <td>{{ item
                            .role }}</td>
                        <!-- <td>{{ item.location }}</td> -->
                   
                        <td>
                            <button class=" btn btn-danger m-1"><i class="bi bi-exclamation-octagon"></i></button>

                            <RouterLink :to="{path:'/users/'+item.id+'/details_admin'}"  class=" btn btn-primary m-1" style="color: #fff;"><i
                                    class="bi bi-info-circle"></i></RouterLink>
                        </td>
                    </tr>

                </tbody>
                <tbody v-else>
                    <tr>

                        <td colspan="7"><button class="btn btn" type="button" disabled=""
                                style="background-color: #00002E; color: #fff;"> <span
                                    class="spinner-border spinner-border-sm " role="status" aria-hidden="true"></span>
                                Loading... </button></td>



                    </tr>

                </tbody>
            </table>
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
            token: localStorage.getItem('token')
        }
    },
    mounted() {
        this.getUsers();

    },
    methods: {

        getUsers() {

            axios.get('http://127.0.0.1:8000/api/users/listAdmin',
            
            {
                headers: {
                   
                    "Accept":"application/json",
                    "Content-Type": "application/json",
                    Authorization: 'Bearer ' + this.token,
                }
            }

).then(res => {
                console.log(res);
                this.users = res.data.users
                console.log(this.users)
            });
        }
    },

}

</script>
<style>
.link {
    display: flex;
    text-align: center;
    align-items: center;
}

.dataTable-search {
    width: 100.5%;

    display: flex;
    justify-content: end;
}

.link span {
    font-weight: 650;
    font-size: 20px;

}</style>