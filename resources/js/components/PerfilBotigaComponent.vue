<template>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div v-if="this.botiga.img_portada"
                class="widget-user-header text-white"
                id="portada"
                :style="
                  'background: url(/images/botigues/' +
                  this.botiga.img_portada +
                  ');'
                "
              >
                <h3 class="widget-user-username text-right">
                  {{ this.botiga.nom }}
                </h3>
                <h5 class="widget-user-desc text-right">{{ this.user.nom }}</h5>
              </div>

              <div v-else
                class="widget-user-header text-white"
                id="portada"
                :style="
                  'background: url(/images/botigues/unnamed.jpg);'"
              >
                <h3 class="widget-user-username text-right">
                  {{ this.botiga.nom }}
                </h3>
                <h5 class="widget-user-desc text-right">{{ this.user.nom }}</h5>
              </div>


              <div class="widget-user-image pt-5">
                <img
                  v-if="this.botiga.img_perfil"
                  class="img-circle border-4 elevation-2"
                  :src="'/images/botigues/' + this.botiga.img_perfil"
                  alt="Shop profile picture"
                  style="
                    height: 200px;
                    width: 200px;
                    margin-top: 25%;
                    margin-left: -30%;
                  "
                />
                <img
                  v-else
                  class="img-circle border-4"
                  :src="'/images/botigues/default.jpg'"
                  alt="Shop profile picture"
                  style="
                    height: 200px;
                    width: 200px;
                    margin-top: 25%;
                    margin-left: -30%;
                  "
                />
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">{{ this.visites }}</h5>
                      <span class="description-text">VISITES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4"></div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">
                        {{ this.productes.length }}
                      </h5>
                      <span class="description-text">PRODUCTES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-md-5">
                    <hr />
                  </div>
                  <div class="col-md-2">
                    <h4 class="text-center">{{ this.botiga.nom }}</h4>
                  </div>
                  <div class="col-md-5">
                    <hr />
                  </div>
                </div>
                <br />
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <h5 class="text-center">
                      {{ this.botiga.descripcio }}
                    </h5>
                  </div>
                  <div class="col-md-1"></div>
                </div>
                <br />
                <div class="row">
                  <div class="col-md-4 text-center">
                    <h5>
                      <li class="fab fa-instagram mr-1"></li>
                      {{ this.botiga.instagram }}
                    </h5>
                  </div>
                  <div class="col-md-4 text-center">
                    <h5>
                      <li class="fab fa-facebook mr-1"></li>
                      {{ this.botiga.facebook }}
                    </h5>
                  </div>
                  <div class="col-md-4 text-center">
                    <h5>
                      <li class="fab fa-twitter mr-1"></li>
                      {{ this.botiga.twitter }}
                    </h5>
                  </div>
                </div>
                <hr />
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="content w-100">
        <div class="container-fluid">
          <div class="row">
            <div
              :class="'col-md-4 card-deck mb-4 ml-2'"
              v-for="producte in productes"
              :key="producte.id"
            >
              <div :class="'card card-primary text-center zoom bg-light'">
                <img
                  :class="'card-img-top p-3'"
                  :src="'/images/productes/' + producte.imatge"
                />
                <div :class="'card-body'">
                  <div class="row">
                    <div class="col-md-1"></div>
                    <div
                      :class="'card-title font-weight-bold text-uppercase col-md-10 text-center align-middle'"
                    >
                      {{ producte.nom }}
                    </div>
                    <div class="col-md-1"></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div
                      :class="'col-md-4 badge badge-sm align-middle text-center'"
                      style="background-color: #ff6565; color: white"
                    >
                      Queden:
                      {{ producte.stock }}
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                  <br />
                  <div class="row" style="margin-bottom: -10%">
                    <div class="col-md-1"></div>
                    <div :class="'card-text col-md-10 text-justify'">
                      {{ producte.descripcio }}
                    </div>
                    <div class="col-md-1"></div>
                  </div>
                </div>
                <br />
                <div :class="'card-footer bg-light'" style="border: none">
                  <router-link
                    :to="{ name: 'Producte', params: { id: producte.id } }"
                    :class="'btn btn-outline-secondary btn-icon-right'"
                  >
                    <span>Saber més</span>
                  </router-link>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-md-6 card-deck-->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
    </section>
  </div>
</template>

<style>
.zoom {
  transition: transform 0.2s; /* Animation */
}
#portada {
  background-size: cover !important;
  background-position: center !important;
  height: 300px;
  background-repeat: no-repeat !important;
}
</style>

<script>
export default {
  data() {
    return {
      visites: 0,
      productes: "",
      botiga: "",
      id: "",
      user: "",
    };
  },
  mounted() {
    this.loading();

    axios
      .get("/api/perfil/" + this.$route.params.id)
      .then((res) => {
        this.id = res.data.id;
      })
      .then(() => {
        axios
          .get("/api/productesBotiga/" + this.$route.params.id)
          .then((res) => {
            this.productes = res.data;
            this.productes.forEach((producte) => {
              this.visites += parseInt(producte.visites);
            });
            console.log(this.visites);
          });
      })
      .then(() => {
        axios.get("/api/perfilBotiga/" + this.$route.params.id).then((res) => {
          this.botiga = res.data[0];
        });
      })
      .then(() => {
        axios.get("/api/user/" + this.$route.params.id).then((res) => {
          this.user = res.data[0];
        });
      })
      .then(() => {
        Swal.fire({
          title: '<span style="color: #ff6565">Carregant...</span>',
          timer: 1000,
          showConfirmButton: false,
          showClass: {
            backdrop: "swal2-noanimation", // disable backdrop animation
            popup: "", // disable popup animation
            icon: "", // disable icon animation
          },
          hideClass: {
            popup: "", // disable popup fade-out animation
          },
          didOpen: () => {
            Swal.showLoading();
          },
        });
      });
  },
  methods: {
    loading() {
      Swal.fire({
        title: '<span style="color: #ff6565">Carregant...</span>',
        customClass: "swal-wide",
        showConfirmButton: false,
        showClass: {
          popup: "",
          icon: "",
        },
        hideClass: {
          popup: "",
        },
        didOpen: () => {
          Swal.showLoading();
        },
      });
    },
  },
};
</script>