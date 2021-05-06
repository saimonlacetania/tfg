<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Configura el teu perfil</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-dark card-outline">
              <div class="card-body">
                <form @submit.prevent="modifyProfile">
                  <div class="form-group">
                    <label for="cognoms">Foto de perfil</label>
                    <div class="text-center">
                      <img
                        class="profile-user-img img-fluid img-circle"
                        :src="'/images/avatars/' + $data.form3.arxiu"
                        alt="User profile picture"
                      />
                    </div>
                    <br />

                    <input type="file" class="form-control-file" id="arxiu" />
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
                  <div class="col text-center">
                    <button type="submit" class="btn btn-secondary">
                      Modifica el meu perfil
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-dark card-outline">
              <div class="card-body">
                <form @submit.prevent="modifyPassword">
                  <div class="form-group">
                    <div class="input-group mb-3" v-if="errors2.password">
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
                    <label for="nova_contrasenya">Nova contrasenya</label>
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
                      v-model="$data.form2.nova_contrasenya_confirmation"
                      required
                    />
                  </div>
                  <div class="col text-center">
                    <button type="submit" class="btn btn-secondary">
                      Modifica la meva contrasenya
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-dark card-outline">
              <div class="card-body">
                <form @submit.prevent="modifyUser">
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
                  <div class="col text-center">
                    <button type="submit" class="btn btn-secondary">
                      Modifica la meva direcció
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- /.card-body -->
      </div>
    </section>
  </div>
  <!-- /.card -->
</template>

<script>
export default {
  mounted() {
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
      console.log(this.user);
    });
  },
  data() {
    return {
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
    };
  },
  methods: {
    toastCorrecte() {
      // Use sweetalert2
      this.$swal({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'Canvi realitzat',
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
        title: 'Error al realitzar el canvi',
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });
    },
    modifyUser() {
      let that = this;
      console.log(that.form);
      axios
        .post("/api/modifyUser", that.form)
        .then((res) => {
          console.log(res);
          this.$router.push({ name: "Profile" });
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
      console.log(that.form2);
      axios
        .post("/api/modifyPassword", that.form2)
        .then((res) => {
          console.log(res);
          this.$router.push({ name: "Profile" });
          this.toastCorrecte();
        })
        .catch((error) => {
          that.errors2 = error.response.data.errors;
          console.log(that.errors2);
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
          console.log(res);
          this.$router.push({ name: "Profile" });
          this.toastCorrecte();
        })
        .catch((error) => {
          that.errors3 = error.response.data.errors;
          console.log(that.errors3);
          this.toastIncorrecte();
        });

      console.log(that.form3);
    },
  },
};
</script>
