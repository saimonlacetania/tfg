<template>
    <div id="registre">
        <div class="register-box">
            <div class="register-logo">
                <a href="../../index2.html"><b>Mercat </b>Virtual</a>
            </div>

            <div class="card">
              <form>
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Accedeix aquí!</p>

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

                    <div class="row">
                        <!-- /.col -->
                        <div class="col text-center">
                            <button
                                @click.prevent="loginUser"
                                type="submit"
                                class="btn btn-secondary"
                            >
                                Accedir!
                            </button>
                        </div>
                        <!-- /.col -->
                        <br />
                    </div>
                    <hr />
                    <p class="text-center">
                        Encara no tens un compte creat? Fes click
                        <router-link :to="'register'">
                            aquí!
                        </router-link>
                    </p>
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
                email: "",
                password: ""
            },
            errors: []
        };
    },
    methods: {
        loginUser() {
            axios
                .post("/api/login", this.form)
                .then(res => {
                    this.$router.push({ name: "Productes" });
                    location.reload();
                    return false;
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                    location.reload();
                    return false;
                });
        }
    }
};
</script>
