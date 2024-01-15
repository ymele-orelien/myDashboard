<template>
    <div class="pagetitle">
        <h1>Utilisateurs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Accuiel</a></li>

                <li class="breadcrumb-item"><router-link to="/users/activites">Activites</router-link></li>
                <li class="breadcrumb-item active"> Toutes les activites des simples utilisateres</li>
            </ol>
        </nav>
    </div>
    <div class="card p-1 d-flex"
        style="background: #00002c; color: azure; display: flex !important;justify-content: space-between;text-align: center;">
        <div><strong>
                <h4>Rechercher par date</h4>
            </strong></div>
        <div ><input type="date" name="" id=""></div>
    </div>
    <div class="dat">
        <h3><strong>27/10/20023</strong></h3>
    </div>
   
                  <div class="card">
                     <div class="card-body">
                     
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> <div class="img"><img src="../../assets/img/user.png" alt="" width="90px"></div> <div class="user" style="color: blue;font-weight: 650;font-size: 20px;">Ymele orelein</div></button></h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                 <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                              </div>
                           </div>
                          
                          
                        </div>
                     </div>
                  </div>
                 
                  
             
</template>
<script>
</script>
<style setup></style>