<template>
 <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="log"> <a href="#" class="logo d-flex align-items-center"> <img src="../../assets/img/logoD.png" alt=""
                    class="A">
                <img src="../../assets/img/logoE.png" alt="" class="E"> <span class="d-none d-lg-block">BLOOD
                    <br>DONATE</span>
            </a>
        </div>
        <i class="bi bi-list toggle-sidebar-btn"></i>
        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text" name="query"
                    placeholder="Rechercher" title="Enter search keyword"> <button type="submit" title="Search"><i
                        class="bi bi-search"></i></button></form>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none"> <a class="nav-link nav-icon search-bar-toggle " href="#"> <i
                            class="bi bi-search"></i> </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-bell"
                            style="color: #00002E;"></i> <span class="badge bg-danger badge-number">2</span> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header"> You have 4 new notifications <a href="#"><span
                                    class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-secondary"></i>
                            <div>
                                <h4>Don de sang</h4>
                                <p>MR/Mme <a href="3" class="fw-bold text-dark">palmi </a> solicite a faire un don de sang</p>
                                <p>Il ya 40min</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Rejetert</h4>
                                <p>le partenaires <a href="3" class="fw-bold text-dark"> Hospiatal genrale</a>  a rejeter la demande en don de sang de <a href="3" class="fw-bold text-dark">palmi </a></p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer"> <a href="#">Show all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-chat-left-text"
                            style="color: #00002E;"></i>
                        <span class="badge bg-danger badge-number">3</span> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header"> You have 3 new messages <a href="#"><span
                                    class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item">
                            <a href="#">
                                <img src="../../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4> Orelien</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item">
                            <a href="#">
                                <img src="../../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Ymele orelien</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item">
                            <a href="#">
                                <img src="../../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Orelien</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer"> <a href="#">Show all messages</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img
                            src="../../assets/img/profile-img.jpg" alt="Profile" style="border-radius: 10px;widows: 50px;">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Orelien</span> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Orelien</h6>
                            <span>Administrator</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i
                                    class="bi bi-person"></i> <span>Mon ompte</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i
                                    class="bi bi-gear"></i> <span>Parametre</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="pages-faq.html"> <i
                                    class="bi bi-question-circle"></i> <span>Aider?</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <button class="dropdown-item d-flex align-items-center" href="#" @click="logout()"> <i
                                    class="bi bi-box-arrow-right"></i> <span>Deconnexion</span> </button></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
</template>
<script>
import axios from 'axios';
export default {
	name: 'headr',
    data(){
        return {
            users:{},
            token: localStorage.getItem('token')
        }
        

        },
        mounted(){

        },
        methods:{
            getinfo(){
                const token =localStorage.getItem('token')
                if(token){
                     axios.get('http://127.0.0.1:8000/api/users', {
          headers: {
            Authorization: `Bearer ${token}`,
          },
        });
                }
            }   ,


            logout() {
                const token =localStorage.getItem('token')
            axios.post('http://127.0.0.1:8000/api/Dashboard/logout',).then((response) => {
                console.log(token)
                // localStorage.removeItem(token,response.data)
          
                this.$router.push('/')
            }).catch((errors) => {
                console.log(errors)
            })
        }
        },
        
    }
 

</script>
<style>
</style>