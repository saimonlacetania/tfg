<template>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="register-box col-md-6">
                  <h2 class="mt-3 text-center text-secondary"><b style="color:#ff6565;">Mercat </b>Virtual</h2>

                  <div class="card">
                    
                    <form>
                      <div class="card-body register-card-body">
                        <p class="text-center">Alta de proveïdor</p>
                        <div class="input-group mb-3">
                          <div class="input-group mb-3" v-if="errors.nom">
                            <label class="col-form-label" for="number"
                              ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
                              {{ errors.nom[0] }}</label
                            >
                            <br />
                          </div>
                          <input
                            name="nom"
                            type="text"
                            class="form-control"
                            placeholder="Nom"
                            v-model="form.nom"
                          />
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-user"></span>
                            </div>
                          </div>
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group mb-3" v-if="errors.descripcio">
                            <label class="col-form-label" for="number"
                              ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
                              {{ errors.descripcio[0] }}</label
                            >
                            <br />
                          </div>
                          <input
                            name="descripcio"
                            type="text"
                            class="form-control"
                            placeholder="Descripcio"
                            v-model="form.descripcio"
                          />
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-feather-alt"></span>
                            </div>
                          </div>
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group mb-3" v-if="errors.telefon">
                            <label class="col-form-label" for="number"
                              ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
                              {{ errors.telefon[0] }}</label
                            >
                            <br />
                          </div>
                          <input
                            type="number"
                            class="form-control"
                            placeholder="Telèfon"
                            name="telefon"
                            v-model="form.telefon"
                          />
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-phone"></span>
                            </div>
                          </div>
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group mb-3" v-if="errors.direccio">
                            <label class="col-form-label" for="number"
                              ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
                              {{ errors.direccio[0] }}</label
                            >
                            <br />
                          </div>
                          <input
                            name="direccio"
                            type="text"
                            class="form-control"
                            placeholder="Direccio"
                            v-model="form.direccio"
                          />
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-map-marker-alt"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-group mb-3 col-md-6">
                            <div class="input-group mb-3" v-if="errors.cp">
                              <label class="col-form-label" for="number"
                                ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i> {{ errors.cp[0] }}</label
                              >
                              <br />
                            </div>
                            <input
                              name="cp"
                              type="text"
                              class="form-control"
                              placeholder="CP"
                              v-model="form.cp"
                            />
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-location-arrow"></span>
                              </div>
                            </div>
                          </div>

                          <div class="input-group mb-3 col-md-6">
                            <div class="input-group mb-3" v-if="errors.poblacio">
                              <label class="col-form-label" for="number"
                                ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
                                {{ errors.poblacio[0] }}</label
                              >
                              <br />
                            </div>
                            <input
                              name="poblacio"
                              type="text"
                              class="form-control"
                              placeholder="Poblacio"
                              v-model="form.poblacio"
                            />
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-globe-europe"></span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group mb-3" v-if="errors.provincia">
                            <label class="col-form-label" for="number"
                              ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
                              {{ errors.provincia[0] }}</label
                            >
                            <br />
                          </div>
                          <input
                            name="provincia"
                            type="text"
                            class="form-control"
                            placeholder="Provincia"
                            v-model="form.provincia"
                          />
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-map-marked-alt"></span>
                            </div>
                          </div>
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group mb-3" v-if="errors.email">
                            <label class="col-form-label" for="number"
                              ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
                              {{ errors.email[0] }}</label
                            >
                            <br />
                          </div>
                          <input
                            type="email"
                            class="form-control"
                            placeholder="Email"
                            name="email"
                            v-model="form.email"
                          />
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-envelope"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3"></div>
                            <div class="col-md-6">
                              <button
                                @click.prevent="saveForm"
                                type="submit"
                                class="btn btn-secondary btn-block zoom"
                                style="background-color: #ff6565; border:none;"
                              > 
                              <i class="fas fa-gift"></i>&nbsp;
                                Crea!
                              </button>
                            </div>
                          <div class="col-md-3"></div>
                        </div>

                      </div>
                      <!-- /.form-box -->
                    </form>
                  </div>
                  <!-- /.card -->
                </div>
                <div class="col-md-3"></div>
              </div>
              </div> 
        </section>
    </div>
</template>
<script>
export default {
  data() {
    return {
      form: {
        nom: "",
        descripcio: "",
        telefon: "",
        direccio: "",
        cp: "",
        poblacio: "",
        provincia: "",
        email: "",
        id_usuari: "",
      },
      errors: [],
      user: "",
    };
  },
  mounted() {
    this.loading();
    axios.get("/api/user").then((res) => {
      this.user = res.data;
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
    toastCorrecte() {
      // Use sweetalert2
      this.$swal({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'Botiga creada correctament',
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });
    },
    toastIncorrecte() {
      // Use sweetalert2
      this.$swal({
        toast: true,
        position: 'top-end',
        icon: 'error',
        title: 'Error al crear la botiga',
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });
    },
    saveForm() {
      let that = this;
      that.form.id_usuari = this.user.id;
      axios
        .post("/api/crearBotiga", that.form)
        .then(() => {
          this.$router.push({ name: "Botiga" });
          this.toastCorrecte();
        })
        .catch((error) => {
          that.errors = error.response.data.errors;
          this.toastIncorrecte();
        });
    },
  },
};
</script>
<style>
#registre {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

input[type="date"]::-webkit-calendar-picker-indicator,
input[type="date"]::-webkit-inner-spin-button {
  display: none;
}
</style>