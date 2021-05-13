<template>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="register-box col-md-4 mt-5">
                    <h2 class="mt-3 text-center text-secondary"><b style="color:#ff6565;">Mercat </b>Virtual</h2>

                    <div class="card">
                      <form>
                        <div class="card-body register-card-body">
                          <p class="login-box-msg">Accedeix aquí!</p>

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

                          <div class="input-group mb-3">
                            <div class="input-group mb-3" v-if="errors.password">
                              <label class="col-form-label" for="number"
                                ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
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

                          <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 text-center">
                              <button
                                @click.prevent="loginUser"
                                type="submit"
                                class="btn btn-secondary zoom btn-block"
                                style="background-color: #ff6565; border:none;"
                              >
                                Accedir!
                              </button>
                            </div>
                            <div class="col-md-3"></div>
                            <br>
                          </div>

                          <hr />
                          <div class="text-center">
                            Encara no tens un compte creat? Fes click
                            <router-link :to="'register'" style="color:#ff6565;"> aquí! </router-link>
                          </div>
                        </div>
                        <!-- /.form-box -->
                      </form>
                    </div>
                    <!-- /.card -->
                  </div>
                <div class="col-md-4"></div>

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
        email: "",
        password: "",
      },
      errors: [],
    };
  },
  methods: {
    loginCorrecte() {
      // Use sweetalert2
      this.$swal({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'Login correcte',
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });
    },
    loginIncorrecte() {
      // Use sweetalert2
      this.$swal({
        toast: true,
        position: 'top-end',
        icon: 'error',
        title: 'Login incorrecte',
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });
    },
    loginUser() {
      axios
        .post("/api/login", this.form)
        .then((res) => {
          this.$router.push({ name: "Productes" });
          this.loginCorrecte();
          return false;
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
          this.loginIncorrecte();
          return false;
        });
    },
  },
};
</script>
