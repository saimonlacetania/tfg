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
                    v-if="this.user.profile_pic"
                    class="profile-user-img img-fluid img-circle"
                    :src="'/images/avatars/' + this.user.profile_pic"
                    alt="User profile picture"
                  />
                  <img
                    v-else
                    :src="'/images/botigues/default.jpg'"
                    class="profile-user-img img-fluid img-circle"
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
                  <li class="nav-item">
                    <a class="nav-link" href="#configuracio" data-toggle="tab"
                      >Configuració</a
                    >
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->

              <!-- les meves comandes -->
              <div class="card-body register-card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-12">
                          <div class="card-header">
                            <h3 class="card-title">Les meves comandes</h3>
                          </div>
                          <div v-if="this.orders.length>0" class="card-body table-responsive">
                            <table class="table">
                              <thead class="text-center">
                                <tr>
                                  <th>Id</th>
                                  <th>Estat</th>
                                  <th>Direcció d'enviament</th>
                                  <th>Entregada?</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <tr v-for="comanda in orders" :key="comanda.id">
                                  <td>{{ comanda.id }}</td>
                                  <td v-if="comanda.enviat == 1">Enviat</td>
                                  <td v-else>Preparant l'enviament...</td>
                                  <td>
                                    {{ comanda.direccio }},
                                    {{ comanda.poblacio }}
                                  </td>
                                  <td>
                                    <span
                                      ><button
                                        v-if="comanda.enviat == 1"
                                        v-on:click="ordreRebuda(comanda.id)"
                                        class="btn btn-success"
                                      >
                                        <i class="fas fa-check"></i>
                                      </button>
                                      <button
                                        v-else
                                        class="btn btn-secondary"
                                        disabled
                                      >
                                        <i class="fas fa-check"></i>
                                      </button>
                                    </span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div v-else class="card-body table-responsive">
                            <h4>No hi ha comandes.</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.les meves comandes -->

                  <!-- TIMELINE tornar a comprar -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <span v-if="this.ordersP.length>0">
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
                    </span>
                    <div v-else class="card-body table-responsive">
                      <h4>No hi ha comandes.</h4>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <!-- CONFIGURACIO tornar a comprar -->
                  <div class="tab-pane" id="configuracio">
                    <!-- The timeline -->
                    <div class="row">
                      <div class="col-lg-4 d-lg-flex align-items-stretch">
                        <div class="card card-dark card-outline w-100">
                          <div class="card-body d-flex flex-column">
                            <form>
                              <div class="form-group">
                                <div class="text-center">
                                  <img v-if="$data.form3.arxiu"
                                    class="profile-user-img img-fluid img-circle"
                                    :src="
                                      '/images/avatars/' + $data.form3.arxiu
                                    "
                                    alt="User profile picture"
                                  />
                                  <img v-else
                                    class="profile-user-img img-fluid img-circle"
                                    :src="
                                      '/images/botigues/default.jpg'"
                                    alt="User profile picture"
                                  />
                                </div>
                                <br />
                                <label for="arxiu">Foto de perfil</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input
                                      @change="fileSelected"
                                      type="file"
                                      class="custom-file-input"
                                      id="arxiu"
                                    />
                                    <label
                                      v-if="!files || !files.length"
                                      class="custom-file-label"
                                      for="arxiu"
                                      >Tria un fitxer</label
                                    >
                                    <span v-else>
                                      <label
                                        v-for="file in files"
                                        :key="file.name"
                                        class="custom-file-label"
                                        for="arxiu"
                                        >{{ file.name }}</label
                                      >
                                    </span>
                                  </div>
                                  <div class="input-group-append">
                                    <span class="input-group-text">
                                      <i class="fas fa-image"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="nom">Nom</label>

                                <input
                                  type="text"
                                  class="form-control"
                                  id="nom"
                                  name="nom"
                                  v-model="$data.form3.nom"
                                  required
                                />
                              </div>
                              <div class="form-group">
                                <label for="cognoms">Cognoms</label>

                                <input
                                  type="text"
                                  class="form-control"
                                  id="cognoms"
                                  v-model="$data.form3.cognoms"
                                  required
                                />
                              </div>
                            </form>
                            <div class="col text-center mt-auto">
                              <button
                                @click.prevent="modifyProfile"
                                type="submit"
                                class="btn btn-secondary zoom"
                                style="background-color: #ff6565; border: none"
                              >
                                Modifica perfil
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 d-lg-flex align-items-stretch">
                        <div class="card card-dark card-outline w-100">
                          <div class="card-body d-flex flex-column">
                            <form>
                              <div class="form-group">
                                <div
                                  class="input-group mb-3"
                                  v-if="errors2.password"
                                >
                                  <label class="col-form-label" for="number"
                                    ><i class="far fa-times-circle"></i>
                                    {{ errors2.password[0] }}</label
                                  >
                                </div>
                                <label for="password">Contrasenya actual</label>
                                <input
                                  type="password"
                                  class="form-control"
                                  id="password"
                                  name="password"
                                  v-model="$data.form2.password"
                                  required
                                />
                              </div>
                              <div class="form-group">
                                <div
                                  class="input-group mb-3"
                                  v-if="errors2.nova_contrasenya"
                                >
                                  <label class="col-form-label" for="number"
                                    ><i class="far fa-times-circle"></i>
                                    {{ errors2.nova_contrasenya[0] }}</label
                                  >
                                </div>
                                <label for="nova_contrasenya"
                                  >Nova contrasenya</label
                                >
                                <input
                                  type="password"
                                  class="form-control"
                                  id="nova_contrasenya"
                                  name="nova_contrasenya"
                                  v-model="$data.form2.nova_contrasenya"
                                  required
                                />
                              </div>
                              <div class="form-group">
                                <label for="nova_contrasenya_confirmation"
                                  >Torna a escriure la nova contrasenya</label
                                >
                                <input
                                  type="password"
                                  class="form-control"
                                  id="nova_contrasenya_confirmation"
                                  name="nova_contrasenya_confirmation"
                                  v-model="
                                    $data.form2.nova_contrasenya_confirmation
                                  "
                                  required
                                />
                              </div>
                            </form>
                            <div class="text-center mt-auto">
                              <button
                                @click.prevent="modifyPassword"
                                type="submit"
                                class="btn btn-xs btn-secondary zoom"
                                style="background-color: #ff6565; border: none"
                              >
                                Modifica contrasenya
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 d-lg-flex align-items-stretch">
                        <div class="card card-dark card-outline w-100">
                          <div class="card-body d-flex flex-column">
                            <form>
                              <div class="form-group">
                                <label for="provincia">Provincia</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="provincia"
                                  v-model="$data.form.provincia"
                                />
                              </div>
                              <div class="form-group">
                                <label for="poblacio">Població</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="poblacio"
                                  v-model="$data.form.poblacio"
                                />
                              </div>
                              <div class="form-group">
                                <label for="cp">Codi postal</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="cp"
                                  v-model="$data.form.cp"
                                />
                              </div>
                              <div class="form-group">
                                <label for="direccio">Direcció</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="direccio"
                                  v-model="$data.form.direccio"
                                  required
                                />
                              </div>
                            </form>
                            <div class="text-center mt-auto">
                              <button
                                @click.prevent="modifyUser"
                                type="submit"
                                class="btn btn-secondary zoom"
                                style="background-color: #ff6565; border: none"
                              >
                                Modifica direcció
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
      files: null,
      user: "",
      form: {
        id: "",
        provincia: "",
        poblacio: "",
        cp: "",
        direccio: "",
      },
      form2: {
        id: "",
        password: "",
        nova_contrasenya: "",
        nova_contrasenya_confirmation: "",
      },
      form3: {
        id: "",
        nom: "",
        cognoms: "",
        arxiu: null,
      },
      errors: [],
      errors2: [],
      errors3: [],
      ordersP: "",
    };
  },

  mounted() {
    this.loading();
    axios.get("/api/user").then((res) => {
      this.user = res.data;
      this.form["id"] = this.user.id;
      this.form2["id"] = this.user.id;
      this.form3["id"] = this.user.id;
      this.form3["nom"] = this.user.nom;
      this.form3["cognoms"] = this.user.cognoms;
      this.form3["arxiu"] = this.user.profile_pic;
      this.form["provincia"] = this.user.provincia;
      this.form["poblacio"] = this.user.poblacio;
      this.form["cp"] = this.user.cp;
      this.form["direccio"] = this.user.direccio;
    }).then(() => {
      axios.get("/api/user").then((res) => {
      this.user = res.data;
    });
    }).then(() => {
      axios.get("/api/veureWishlist").then((res2) => {
      this.wishlist = res2.data;
    });
    }).then(()=> {
      axios.get("/api/veureOrdreUser").then((res3) => {
      this.orders = res3.data;
    });
    }).then(()=> {
      axios.get("/api/veureOrdreProcessadaUser").then((res4) => {
      this.ordersP = res4.data;
    });
    }).then(()=> {
      Swal.fire({
        title:'<span style="color: #ff6565">Carregant...</span>', 
        timer:1000 ,
        showConfirmButton: false,
        showClass: {
        backdrop: 'swal2-noanimation', // disable backdrop animation
        popup: '',                     // disable popup animation
        icon: ''                       // disable icon animation
        },
        hideClass: {
          popup: '',                     // disable popup fade-out animation
        },
        didOpen: () => {
          Swal.showLoading()
        },});
    })
    
    
    
    
  },

  methods: {
    loading() {
      Swal.fire({
        title: '<span style="color: #ff6565">Carregant...</span>',
        customClass: 'swal-wide',
        showConfirmButton: false,
        showClass: {
          popup: '',
          icon: ''
        },
        hideClass: {
          popup: '',
        },
        didOpen: () => {
          Swal.showLoading()
        }
      })
    },
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
      });
      axios.get("/api/veureWishlist").then((res) => {
        this.wishlist = res.data;
      });
    },
    ordreRebuda(id) {
      axios.post("/api/ordreRebuda/" + id).then((res) => {
        this.rebut();
      });
      axios.get("/api/veureOrdreUser").then((res3) => {
        this.orders = res3.data;
      });
      axios.get("/api/veureOrdreProcessadaUser").then((res4) => {
        this.ordersP = res4.data;
      });
    },
    fileSelected(e) {
      this.files = e.target.files;
    },
    rebut() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "success",
        title: "Comanda rebuda!",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
    },
    toastCorrecte() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "success",
        title: "Canvi realitzat",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
    },
    toastIncorrecte() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "error",
        title: "Error al realitzar el canvi",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
    },
    modifyUser() {
      let that = this;
      axios
        .post("/api/modifyUser", that.form)
        .then((res) => {
          console.log(res);
          this.toastCorrecte();
        })
        .catch((error) => {
          that.errors = error.response.data.errors;
          console.log(that.errors);
          this.toastIncorrecte();
        });
    },
    modifyPassword() {
      let that = this;
      axios
        .post("/api/modifyPassword", that.form2)
        .then((res) => {
          this.toastCorrecte();
        })
        .catch((error) => {
          that.errors2 = error.response.data.errors;
          this.toastIncorrecte();
        });
    },
    modifyProfile() {
      let that = this;
      let formData = new FormData();
      if (document.getElementById("arxiu").files[0]) {
        that.form3["arxiu"] = document.getElementById("arxiu").files[0];
        formData.append("arxiu", that.form3["arxiu"]);
      }
      formData.append("id", that.form3["id"]);
      formData.append("nom", that.form3["nom"]);
      formData.append("cognoms", that.form3["cognoms"]);

      axios
        .post("/api/modifyProfile", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          this.$router.push({ name: "Productes" });
          this.toastCorrecte();
        })
        .catch((error) => {
          that.errors3 = error.response.data.errors;
          this.toastIncorrecte();
        });
    },
  },
};
</script>

<style>
.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Busca";
  visibility: hidden;
}
.custom-file-label::after {
  content: "Busca";
  visibility: hidden;
}

.footer {
  align-self: flex-end !important;
  flex: 1 1 auto;
}
</style>
