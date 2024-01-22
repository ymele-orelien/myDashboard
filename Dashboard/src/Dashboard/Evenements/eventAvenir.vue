<template>
    <div class="card" v-if="filteredEvent.length > 0">
        <div class="card-body pb-0">
            <h4 class="card-title"><span style="font-size: 19px;color: red;">   <i class="fa-solid fa-calendar-xmark"></i></span> Evenemnts refuser</h4>
            <div class="news" v-for="(item, index) in paginatedevent" :key="index">
                <RouterLink :to="{ path: '/event/' + item.id + '/detailsEvent' }" class="post-item clearfix">
                    <img :src="'http://127.0.0.1:8000/storage/' + item.image" alt="Event Image"
                                                   >
                    <h4><a href="#">{{ item.theme }}</a></h4>
                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </RouterLink>

            </div>
        </div>
    </div>
    <div class="card" v-else>
        <tr>

            <td colspan="7"><button class="btn btn" type="button" disabled=""
                    style="background-color: #00002E; color: #fff;"> <span class="spinner-border spinner-border-sm "
                        role="status" aria-hidden="true"></span>
                    Loading... </button></td>



        </tr>
        
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
      perPage: 5,
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
        .get("http://127.0.0.1:8000/api/list/event/Refuser", {
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