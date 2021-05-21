<template>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid col-md-6">


                    
                    <div id="register-box">
                        <h2 class="mt-3 text-center text-secondary"><b style="color:#ff6565;">Mercat </b>Virtual</h2>

                        <div class="card">
                            <form>
                                <div class="card-body register-card-body">
                                    <p class="login-box-msg">Registra't aquí!</p>

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
                                        <div class="input-group mb-3" v-if="errors.cognoms">
                                            <label class="col-form-label" for="number"
                                                ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
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
                                        <div class="input-group mb-3" v-if="errors.data_naix">
                                            <label class="col-form-label" for="number"
                                                ><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i>
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
                                                class="btn btn-secondary zoom"
                                                style="background-color: #ff6565; border:none;"
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
                                        <router-link :to="'login'" style="color:#ff6565;">
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
        </section>
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
                data_naix: "",
                password: "",
                password_confirmation: ""
            },
            errors: []
            
        };
    },

    methods: {
        registreCorrecte() {
        // Use sweetalert2
        this.$swal({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Usuari creat correctament!',
            showConfirmButton: false,
            timer: 3000,
            didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        },

        registreIncorrecte() {
        // Use sweetalert2
        this.$swal({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Error al registrar usuari!',
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
            axios
                .post("/api/register", that.form)
                .then(() => {
                    this.$router.push({ name: "Login" });
                    this.registreCorrecte();
                    return false
                })
                .catch(error => {
                    that.errors = error.response.data.errors;
                    this.registreIncorrecte();
                    return false;
                });
        }
    }
};
</script>

