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
            <div class="my-5" v-if="filteredEvent.length > 0">
                <!-- row -->
                <!-- col-lg-4 col-md-6 col-12 -->
                <div class="mb-4" >
                    <!-- Single Blog -->
                    <div class="single-news" v-for="(item, index) in paginatedevent" :key="index">
                        <div class="news-head">
                            <img :src="'http://127.0.0.1:8000/storage/' + item.image" alt="Event Image" >
                                                   
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date"><i class="fa-solid fa-calendar"></i> {{ item.started }}</div>
                                <h2>{{ item.theme }}
                                </h2>
                                <p class="text">{{ item.detail }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
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
            <div v-else> Aucun Evenement Disponible</div>
        </div>
    </section>
</template>
<script>
import axios from "axios";

export default {
  name: "Avenir",
  data() {
    return {
      event: [],
      token: localStorage.getItem("token"),
      searchTerm: "",
      currentPage: 1,
      perPage: 10,
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
    width: 60%;
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

.news-content p {
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

    .blog .single-news .news-head,
    .blog .single-news .news-body {
        width: 100%;
    }
}
</style>