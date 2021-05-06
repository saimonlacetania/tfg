<template>
  <div id="registre">
    <div class="register-box">
      <div class="register-logo">
        <a href="/"><b>Mercat </b>Virtual</a>
      </div>

      <div class="card">
        <form>
          <div class="card-body register-card-body">
            <p class="login-box-msg">Crea la teva botiga!</p>

            <div class="input-group mb-3">
              <div class="input-group mb-3" v-if="errors.nom">
                <label class="col-form-label" for="number"
                  ><i class="far fa-times-circle"></i>
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
                  ><i class="far fa-times-circle"></i>
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
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group mb-3" v-if="errors.telefon">
                <label class="col-form-label" for="number"
                  ><i class="far fa-times-circle"></i>
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
                  ><i class="far fa-times-circle"></i>
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
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group mb-3" v-if="errors.cp">
                <label class="col-form-label" for="number"
                  ><i class="far fa-times-circle"></i> {{ errors.cp[0] }}</label
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
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group mb-3" v-if="errors.poblacio">
                <label class="col-form-label" for="number"
                  ><i class="far fa-times-circle"></i>
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
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group mb-3" v-if="errors.provincia">
                <label class="col-form-label" for="number"
                  ><i class="far fa-times-circle"></i>
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
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group mb-3" v-if="errors.email">
                <label class="col-form-label" for="number"
                  ><i class="far fa-times-circle"></i>
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
              <!-- /.col -->
              <div class="col text-center">
                <button
                  @click.prevent="saveForm"
                  type="submit"
                  class="btn btn-secondary"
                >
                  Crea!
                </button>
              </div>
              <!-- /.col -->
              <br />
            </div>
            <hr />
          </div>
          <!-- /.form-box -->
        </form>
      </div>
      <!-- /.card -->
    </div>
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
    axios.get("/api/user").then((res) => {
      this.user = res.data;
    });
  },

  methods: {
    saveForm() {
      let that = this;
      console.log(that.form);
      that.form.id_usuari = this.user.id;
      axios
        .post("/api/crearBotiga", that.form)
        .then(() => {
          console.log("saved");
          this.$router.push({ name: "Botiga" });
        })
        .catch((error) => {
          that.errors = error.response.data.errors;
          console.log(that.errors);
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