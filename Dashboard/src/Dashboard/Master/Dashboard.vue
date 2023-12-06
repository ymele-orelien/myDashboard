

<template>
    <body>
        
 
  <headr/>

    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"> <router-link to="/home">
                    <a class="nav-link active" href="index.html"><i class="bi bi-grid"></i>
                        <span>Dashboard</span>

                    </a> </router-link>

            </li>
            <li class="nav-item">
              
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"><i
                            class="fa-solid fa-users"></i><span > Utilisateurs</span> <i
                            class="bi bi-chevron-down ms-auto"></i>

                    </a>
                    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <RouterLink to="/users">
                                <i class="bi bi-circle"></i><span>Nos simple Utilisateurs</span>
                            </RouterLink>
                        </li>
                        <li>
                            <RouterLink to="/users/list_admin">
                                <i class="bi bi-circle"></i><span>liste des Administrateurs</span>
                            </RouterLink>
                        </li>
                        <li>
                            <RouterLink to="/users/create-admin">
                                <i class="bi bi-circle"></i><span>Creer un Administrateurs</span>
                            </RouterLink>
                        </li>
                        <li>
                            <RouterLink to="/users/activites"><i class="bi bi-circle"></i><span>Activites</span>
                            </RouterLink>
                        </li>

                    </ul>
              
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i
                        class="fa-solid fa-hospital"></i><span>Hopitaux</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <RouterLink to="/hospitaux"> <i class="bi bi-circle"></i><span>Nos hospitaux</span> </RouterLink>
                    </li>

                    <li>
                        <RouterLink to="/hospitaux/activites"> <i class="bi bi-circle"></i><span>stockes et activites</span>
                        </RouterLink>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i
                        class="fa-solid fa-handshake-angle"></i><span>Partenaires</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="tables-general.html"> <i class="bi bi-circle"></i><span>Nos partenaires </span> </a></li>
                    <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Ajouter un partenaire </span> </a>
                    </li>
                    <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Activites des partenaires </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"> <a class="nav-link collapsed" href="#"> <i class="fa-solid fa-bell"></i>
                    <span>Alertes</span>
                </a></li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"> <i
                        class="fa-solid fa-hand-holding-droplet"></i><span>Don</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="icons-bootstrap.html"> <i class="bi bi-circle"></i><span>Don de sang</span> </a></li>
                    <li> <a href="icons-remix.html"> <i class="bi bi-circle"></i><span>Demande de Don</span> </a></li>

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="" data-bs-toggle="collapse" href="#"> <i
                        class="bi bi-bar-chart"></i><span>Bilan</span></a>

            </li>
            <li class="nav-item">
             
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i
                        class="fa-solid fa-calendar"></i><span>Evenements</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>    <RouterLink to="/evenements"><i class="bi bi-circle"></i><span>Listes des evenements</span> </RouterLink>
                    </li>
                    <li> <a href="charts-apexcharts.html"> <i class="bi bi-circle"></i><span>Creer un evenemenet</span> </a>
                    </li>
                    
                </ul>
         
            </li>
        </ul>
    </aside>
    <main id="main" class="main">
        <router-view>

        </router-view>


    </main> 
</body>
</template>
<style>
*{
    text-decoration: none !important;
    
}
a{
    text-decoration: none;

}
.nav-item {
    color: #fff !important;
}
</style>
<script>
import headr from "../Master/header.vue"
export default {
	name: "Master",
    components:{
        headr

    }
    }
</script>
