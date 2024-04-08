<template>
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Actualites sur les derniers evenements</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="section_event_slide">
        <div class="swiper swiper-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide" v-for="(item, index) in event" :key="index">
              <div class="card">
                <div class="image">
                  <img :src="'http://127.0.0.1:8000/storage/' + item.image" alt="Event Image" >

                </div>
                <div class="content">
                  <a href="#">
                    <span class="title">
                  {{ item.theme }}
                    </span>
                  </a>
                  <div class="date"> <i class="fa-solid fa-calendar"></i> {{ item.started }}</div>
                  <p class="desc">
                 i{{ item.detail }}
                  </p>

                  <a class="action" href="#">
                  
                    {{ item.user.role==="HOSPITAL"? item.user.name:"ADMINITRATEUR" }}
                    <span aria-hidden="true">
                      
                    </span>
                  </a>
                </div>
              </div>
            </div>




          </div>
          <!-- Ajouter la pagination si nécessaire -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="d-flex justify-content-center w-100 py-5">
        <router-link to="/event" class="cta">
          <span class="span">VOIR PLUS</span>
         
        </router-link>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios'
import 'swiper/css';
export default {
  data() {
    return {
      slides: [],
      swiper: null,
      event: [],
      token: localStorage.getItem("token"),


    }
  },
  mounted() {
    this.swiper = new Swiper('.swiper-container', {
      // loop: true,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      effect: 'coverflow',
      centeredSlides: true,
      grabCursor: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination"
      }
    }),
      this.getEvent();
  },
  destroyed() {
    if (this.swiper) {
      this.swiper.destroy();
    }
  }, methods: {
    /**
     * AFFICHER LA LISTES DE EVENEMENTS
     */
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

  }
}
</script>

<style scoped>
/*--------------------------------------------------------------
  # Team
  --------------------------------------------------------------*/
h2,
p {
  color: #000 !important;
}

.team {
  padding-top: 100px;
  background: ghostwhite;
}

.swiper-container {
  width: 100%;
  height: 100%;
}

.section_event_slide {
  position: relative;
  width: 100%;

  min-height: 80vh;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.swiper-container {
  width: 100%;
  padding-top: 30px;
  padding-bottom: 30px;
}

.swiper-slide {
  box-shadow: 0 14px 26px rgba(0, 0, 0, 0.04);
  /* border: 1px solid #000; */
  /* border-radius: 5px; */
  /* padding: 10px; */
  background: #fff;
  background-position: center;
  background-size: cover;
  width: 550px;
  height: 650px;
}

/* card */
.card {
  max-width: 100%;
  border-radius: 0.5rem;
  border-radius: 8px !important;

  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  border: 1px solid transparent;
}

.date {
  background: #00002c;
  width: 120px;
  border-radius: 5px;
  padding: 0.8rem;
  color: #fff;
}

.card a {
  text-decoration: none;
  align-items: center;
  text-align: center;
}

.content {
  padding: 1.5rem;
  position: relative;
  margin-top: 20%;
  width: 70%;
  background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0);
  box-shadow: 0px 0px 32px 0 rgba(0, 0, 0, 0.1);
}

.image {
  object-fit: cover;
  width: 100%;
  height: 200px;
  background-color: rgb(239, 205, 255);
}

.image img {
  width: 100%;
  height: 650px;
  object-fit: cover;
  border-radius: 10px;
}

.title {
  color: #fff;
  font-size: 1.125rem;
  line-height: 1.75rem;
  font-weight: 600;
}

.desc {
  margin-top: 0.5rem;
  color: #6B7280;
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.action {
  display: inline-flex;
  margin-top: 1rem;
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 500;
  align-items: center;
  gap: 0.25rem;
  background-color: #2563EB;
  padding: 4px 8px;
  border-radius: 4px;
}

.action span {
  transition: .3s ease;
}

.action:hover span {
  transform: translateX(4px);
}

/* le button voir tout */

.cta {
  display: flex;
  padding: 11px 33px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-size: 25px;
  color: white;
  background: #6225E6;
  transition: 1s;
  box-shadow: 6px 6px 0 black;
  transform: skewX(-15deg);
  border: none;
}

.cta:focus {
  outline: none;
}

.cta:hover {
  transition: 0.5s;
  box-shadow: 10px 10px 0 #FBC638;
}

.cta .second {
  transition: 0.5s;
  margin-right: 0px;
}

.cta:hover .second {
  transition: 0.5s;
  margin-right: 45px;
}

.span {
  transform: skewX(15deg)
}

.second {
  width: 20px;
  margin-left: 30px;
  position: relative;
  top: 12%;
}

.one {
  transition: 0.4s;
  transform: translateX(-60%);
}

.two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.cta:hover .three {
  animation: color_anim 1s infinite 0.2s;
}

.cta:hover .one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.cta:hover .two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

@keyframes color_anim {
  0% {
    fill: white;
  }

  50% {
    fill: #FBC638;
  }

  100% {
    fill: white;
  }
}
</style>