<template>
   
  <section class="blog section project_section layout_padding" id="blog">
      <!-- Breadcrumbs -->
  <div class="breadcrumbs overlay">
      <div class="container">
          <div class="bread-inner">
              <div class="row">
                  <div class="col-12">
                      <h2>Nos Evenements</h2>
                      <ul class="bread-list">
                          <li><a href="/">Acceuil</a></li>
                          <li><i class="fa-solid fa-chevron-right"></i></li>
                          <li class="active">Evenement</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Breadcrumbs -->
      <div class="container">     
          <div class="my-5">
              <!-- row -->
              <!-- col-lg-4 col-md-6 col-12 -->
              <div class="mb-4">
                  <!-- Single Blog -->
                  <div class="single-news">
                      <div class="news-head">
                          <img src="../../assets/images/slideA.jpg" alt="#">
                      </div>
                      <div class="news-body">
                          <div class="news-content">
                              <div class="date"><i class="fa-solid fa-calendar"></i> 22 Aug, 2020</div>
                              <h2>[MISE À JOUR 9/4/20] DON DE SANG, CONFINEMENT ET COVID 19 : QUE FAUT-IL SAVOIR ?</h2>
                              <p class="text">Vous êtes nombreux·ses à vouloir donner votre sang en cette période compliquée, et nous vous en remercions infiniment ! Mais qu’en est-il des mesures prises pour assurer la sécurité de tou·tes ? Voici les points à retenir.</p>
                          </div>
                      </div>
                  </div>
                  <!-- End Single Blog -->
              </div>
              <div class="mb-4">
                  <!-- Single Blog -->
                  <div class="single-news">
                      <div class="news-head">
                          <img src="../../assets/images/slide1.jpg" alt="#">
                      </div>
                      <div class="news-body">
                          <div class="news-content">
                              <div class="date"> <i class="fa-solid fa-calendar"></i> 15 Jul, 2020</div>
                              <h2>JOURNÉE MONDIALE DU DON DE Sang</h2>
                              <p class="text">Vous êtes nombreux·ses à vouloir donner votre sang en cette période compliquée, et nous vous en remercions infiniment ! Mais qu’en est-il des mesures prises pour assurer la sécurité de tou·tes ? Voici les points à retenir</p>
                          </div>
                      </div>
                  </div>
                  <!-- End Single Blog -->
              </div>
              
              <div class="">
                  <!-- Single Blog -->
                  <div class="single-news">
                      <div class="news-head">
                          <img src="../../assets/images/slideB.jpg" alt="#">
                      </div>
                      <div class="news-body">
                          <div class="news-content">
                              <div class="date"><i class="fa-solid fa-calendar"></i>  05 Jan, 2020</div>
                              <h2>We provide highly business soliutions.</h2>
                              <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                          </div>
                      </div>
                  </div>
                  <!-- End Single Blog -->
              </div>
          </div>
      </div>
  </section>
</template>
<script>
export default {
name: 'evenement',
}
</script>
<style scoped>
.single-news {
display: flex;
}

.blog .single-news .news-head {
width: 30%;
}
.blog .single-news .news-head img {
width: 100%;
height: 100%;
object-fit: cover;
}
.blog .single-news .news-body {
width: 60% ;
background: red !important;
}
.blog .single-news .news-content {
text-align: left;
background: #fff;
z-index: 99;
position: relative;
padding: 30px;
height: 100%;
left: 0;
z-index: 0;
}

.news-content p{
color: #00002c !important;
}
.news-content h2 {
text-transform: uppercase;
}
.layout_padding {
padding: 0 !important;
}

@media (max-width: 765px) {
.single-news {
  flex-direction: column;
}
.blog .single-news .news-head , .blog .single-news .news-body {
  width: 100%;
}
}
</style>