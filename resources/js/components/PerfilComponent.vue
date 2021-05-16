<style>
.nav-link.active {
  background-color: #ff6565 !important;
  color: white !important;
}
.nav-link {
  text-decoration: none !important;
  color: white !important;
}
</style>

<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>El meu perfil</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-dark card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img
                    class="profile-user-img img-fluid img-circle"
                    :src="'/images/avatars/' + this.user.profile_pic"
                    alt="User profile picture"
                  />
                </div>

                <h3 class="profile-username text-left">
                  {{ this.user.nom }} {{ this.user.cognoms }}
                </h3>
                <p class="text-muted text-left">
                  <i class="far fa-envelope"></i>
                  {{ this.user.email }} <br />
                  <i class="fas fa-phone"></i>
                  {{ this.user.telefon }} <br />
                  <span v-if="this.user.poblacio" class="text-muted text-left">
                    <i class="fas fa-map-marker-alt"></i>
                    {{ this.user.poblacio }},
                    {{ this.user.provincia }}
                  </span>
                </p>
                <router-link
                  class="btn btn-secondary btn-block"
                  :to="'editarPerfil'"
                >
                  Configuració general</router-link
                >
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-dark">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      href="#activity"
                      data-toggle="tab"
                      >Les meves comandes</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab"
                      >Tornar a comprar</a
                    >
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->

              <!-- les meves comandes -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-12">
                          <div class="card-header">
                            <h3 class="card-title">Les meves comandes</h3>
                          </div>
                          <div class="card-body table-responsive">
                            <table class="table">
                              <thead class="">
                                <tr>
                                  <th>Id</th>
                                  <th>Estat</th>
                                  <th>Direcció d'enviament</th>
                                  <th class="text-right">Veure</th>
                                </tr>
                              </thead>
                              <tbody class="">
                                <tr v-for="comanda in orders" :key="comanda.id">
                                  <td>{{ comanda.id }}</td>
                                  <td v-if="comanda.enviat == 1">Enviat</td>
                                  <td v-else>Preparant l'enviament...</td>
                                  <td>
                                    {{ comanda.direccio }},
                                    {{ comanda.poblacio }}
                                  </td>
                                  <td class="text-right">
                                    <span
                                      ><button class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                      </button>
                                    </span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.les meves comandes -->

                  <!-- TIMELINE tornar a comprar -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <span v-for="order in ordersP" :key="order.index">
                      <div class="timeline timeline-inverse border">
                        <!-- timeline time label -->

                        <div class="time-label">
                          <span class="">
                            <i class="fas fa-shipping-fast"></i>
                            {{ "Ordre nº" + order[0].id_ordre }}
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div v-for="product in order" :key="product.index">
                          <i
                            class="fas fa-box-open text-white"
                            style="background-color: #ff6565"
                          ></i>
                          <div class="timeline-item">
                            <span class="time">
                              <i class="fas fa-store-alt"></i
                              ><router-link
                                style="color: #ff6565; text-decoration: none"
                                :to="{
                                  name: 'PerfilBotiga',
                                  params: { id: product.productes.botiga.id },
                                }"
                              >
                                {{ product.productes.botiga.nom }}</router-link
                              ></span
                            >
                            <h3 class="timeline-header">
                              {{ product.productes.nom }}
                            </h3>
                            <small class="timeline-body">{{
                              product.productes.descripcio
                            }}</small>
                          </div>
                        </div>

                        <!-- END timeline item -->
                      </div>
                    </span>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
</template>
<style>
.timeline::before {
  background-color: #ffffff;
}
</style>
<script>
export default {
  data() {
    return {
      user: "",
      wishlist: "",
      orders: "",
      ordersP: "",
    };
  },

  mounted() {
    axios.get("/api/user").then((res) => {
      this.user = res.data;
    });
    axios.get("/api/veureWishlist").then((res2) => {
      this.wishlist = res2.data;
      console.log(this.wishlist);
    });
    axios.get("/api/veureOrdreUser").then((res3) => {
      this.orders = res3.data;
      console.log(this.orders);
    });
    axios.get("/api/veureOrdreProcessadaUser").then((res4) => {
      this.ordersP = res4.data;
      console.log(this.ordersP);
    });
  },

  methods: {
    loginCorrecte() {
      // Use sweetalert2
      this.$swal({
        toast: true,
        position: "top-end",
        icon: "success",
        title: "Login correcte",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
    },
    eliminarWishlist(id) {
      axios.post("/api/eliminarWishlist/" + id).then((res) => {
        console.log(res);
      });
      axios.get("/api/veureWishlist").then((res) => {
        this.wishlist = res.data;
      });
    },
  },
};
</script>
