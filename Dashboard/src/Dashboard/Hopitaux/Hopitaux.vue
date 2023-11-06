<template>
    <div class="pagetitle">
        <h1>Centres Hospitaliers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accuiel</a></li>
                <li class="breadcrumb-item">Nos hospitaux</li>
                <li class="breadcrumb-item active">listes des centres hospitaliers</li>
            </ol>
        </nav>
    </div>
    <div class="card-header">
        <h4><i class="fa-solid fa-hospital"></i> Hopitaux</h4>
        <div class="card-body">
            <div class="dataTable-search m-2"><input class="dataTable-input" placeholder="Search..." type="text"></div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom du centre</th>
                        <th scope="col">adresse</th>
                        <th scope="col">email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody v-if="this.parteners.length > 0">
                    <tr v-for="(item, index) in this.parteners" :key="index">
                        <th scope="row">{{ item.id }}</th>
                        <td>{{ item.name }}</td>
                        <td>{{ item.email }}</td>
                        <td>{{ item.location }}</td>
                        <td>{{ item.usersable
                            .type }}</td>


                        <td>
                            <button class=" btn btn-danger m-1"><i class="bi bi-exclamation-octagon"></i></button>

                            <button class=" btn btn-warning m-1" style="color: #fff;"><i
                                    class="bi bi-info-circle"></i></button>
                        </td>
                    </tr>

                </tbody>
                <tbody v-else>
                    <tr>

                        <td colspan="7"><button class="btn btn" type="button" disabled="" style="background-color: #00002E; color: #fff;"  > <span 
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
    name: 'hospitaux',
    data() {
        return {
            parteners: []
        }
    },
    mounted() {
        this.getParteners();

    },
    methods: {

        getParteners() {

            axios.get('http://127.0.0.1:8000/api/index-parterners').then(res => {
                console.log(res);
                this.parterners = res.data.parterners
                console.log(this.parterners)
            });
        }
    },

}

</script>
<style>
/* <!-- <div class="hospitaux">
        <h4><i class="fa-solid fa-hospital"></i> Hospitaux
        </h4>
        <div class="partie">
            <div class="pa">
                <div class="pa1">
                    <div class="image">
                        <img src="../../assets/img/card.jpg" alt="">
                        <b class="name-hopital">Hopital generale de douala</b>
                    </div>
                    <div class="wrapper">
                        <div class="icon phone">
                            <div class="tootltip">+237652959389</div>
                            <span><i class="fa-solid fa-phone  "></i></span>
                        </div>
                        <div class="icon twitter">
                            <div class="tootltip">twitter</div>
                            <span><i class="fa-brands fa-at  "></i></span>
                        </div>
                        <div class="icon instagram">
                            <div class="tootltip ">117-pk14</div>
                            <span><i class="fa-solid fa-location-dot"></i></span>
                        </div>
                        <div class="icon youtube">
                            <div class="tootltip">02/06/2003</div>
                            <span><i class="fa-solid fa-calendar"></i></span>
                        </div>
                        <div class="icon github">
                            <div class="tootltip"> Github</div>
                            <span><i class="fa-brands fa-github"></i></span>
                        </div>
                    </div>
                </div>
                <div class="disc-activite">
                    <div class="disc">
                        <div class="fa-regular fa-comments"> Ecrire un message</div>
                    </div>
                </div>
            </div>
            <div class="pb">
                dsfdsfsd
            </div>

        </div>
    </div> --> */
.card-header {
    background: #fff;
    height: 100vh;
}
</style>