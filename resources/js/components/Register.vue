<template >
  <div id="registre">
    <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><b>Mercat </b>Virtual</a>
      </div>

      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Registra't aquí!</p>

          <div class="input-group mb-3">
            <div class="input-group mb-3" v-if="errors.nom">
              <label class="col-form-label" for="number"
                ><i class="far fa-times-circle"></i> {{ errors.nom[0] }}</label
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
            <div class="input-group mb-3" v-if="errors.cognoms">
              <label class="col-form-label" for="number"
                ><i class="far fa-times-circle"></i>
                {{ errors.cognoms[0] }}</label
              >
              <br />
            </div>
            <input
              name="cognoms"
              type="text"
              class="form-control"
              placeholder="Cognoms"
              v-model="form.cognoms"
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
            <div class="input-group mb-3" v-if="errors.provincia">
              <label class="col-form-label" for="number"
                ><i class="far fa-times-circle"></i>
                {{ errors.provincia[0] }}</label
              >
              <br />
            </div>
            <input
              type="text"
              class="form-control"
              placeholder="Provincia"
              name="provincia"
              v-model="form.provincia"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-city"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <span class="w-full text-red-500" v-if="errors.cp">{{
              errors.cp[0]
            }}</span>
            <input
              type="text"
              class="form-control"
              placeholder="Codi postal"
              name="cp"
              v-model="form.cp"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-map-marked"></span>
              </div>
            </div>
            <span>&nbsp;&nbsp;</span>
            <span class="w-full text-red-500" v-if="errors.poblacio">{{
              errors.poblacio[0]
            }}</span>
            <input
              type="text"
              class="form-control"
              placeholder="Població"
              name="poblacio"
              v-model="form.poblacio"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-building"></span>
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
              type="text"
              class="form-control"
              placeholder="Direcció"
              name="direccio"
              v-model="form.direccio"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group mb-3" v-if="errors.data_naix">
              <label class="col-form-label" for="number"
                ><i class="far fa-times-circle"></i>
                {{ errors.data_naix[0] }}</label
              >
              <br />
            </div>
            <input
              type="date"
              id="dateInput"
              class="form-control unstyled"
              placeholder="Data de naixament"
              name="data_naix"
              v-model="form.data_naix"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-calendar"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group mb-3" v-if="errors.password">
              <label class="col-form-label" for="number"
                ><i class="far fa-times-circle"></i>
                {{ errors.password[0] }}</label
              >
              <br />
            </div>
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="Contrasenya"
              v-model="form.password"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input
              type="password"
              class="form-control"
              placeholder="Repeteix la contrasenya"
              v-model="form.password_confirmation"
              name="password_confirmation"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
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
                Registra'm!
              </button>
            </div>
            <!-- /.col -->
            <br />
          </div>
          <hr />
          <p class="text-center">
            Ja tens un compte creat? Fes click
            <a href="login.html" class="text-center">aquí!</a>
          </p>
        </div>

        <!-- /.form-box -->
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
        cognoms: "",
        email: "",
        telefon: "",
        direccio: "",
        cp: "",
        poblacio: "",
        provincia: "",
        data_naix: "",
        password: "",
        password_confirmation: "",
      },
      errors: [],
    };
  },

  methods: {
    saveForm() {
      let that = this;
      console.log(that.form);
      axios
        .post("/api/register", that.form)
        .then(() => {
          console.log("saved");
          this.$router.push({ name: "Login" });
        })
        .catch((error) => {
          that.errors = error.response.data.errors;
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
.register-box {
  width: 30%;
}
input[type="date"]::-webkit-calendar-picker-indicator,
input[type="date"]::-webkit-inner-spin-button {
  display: none;
}
</style>