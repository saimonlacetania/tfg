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
                                <form @submit.prevent="modifyPassword">
                                    <div class="form-group">
                                        <label for="cognoms"
                                            >Foto de perfil</label
                                        >
                                        <div class="text-center">
                                            <img
                                                class="profile-user-img img-fluid img-circle"
                                                src="/images/user2-160x160.jpg"
                                                alt="User profile picture"
                                            />
                                        </div>
                                        <hr />
                                        <input
                                            type="file"
                                            class="form-control-file"
                                            id="arxiu"
                                            required
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nom"
                                            name="nom"
                                            v-model="$data.form.nom"
                                            required
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="cognoms">Cognoms</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="cognoms"
                                            v-model="$data.form.cognoms"
                                            required
                                        />
                                    </div>
                                    <div class="col text-center">
                                        <button
                                            type="submit"
                                            class="btn btn-secondary"
                                        >
                                            Modifica el meu avatar
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
                                        <label for="password"
                                            >Contrasenya actual</label
                                        >
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
                                        <label for="new_password"
                                            >Nova contrasenya</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="new_password"
                                            name="new_password"
                                            v-model="$data.form2.new_password"
                                            required
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password"
                                            >Torna a escriure la nova
                                            contrasenya</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="confirm_password"
                                            name="confirm_password"
                                            v-model="
                                                $data.form2.confirm_password
                                            "
                                            required
                                        />
                                    </div>
                                    <div class="col text-center">
                                        <button
                                            type="submit"
                                            class="btn btn-secondary"
                                        >
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
                                        <label for="nom">Nom</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nom"
                                            name="nom"
                                            v-model="$data.form.nom"
                                            required
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="cognoms">Cognoms</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="cognoms"
                                            v-model="$data.form.cognoms"
                                            required
                                        />
                                    </div>
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
                                        <button
                                            type="submit"
                                            class="btn btn-secondary"
                                        >
                                            Modifica les meves dades
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
        axios.get("/api/user").then(res => {
            this.user = res.data;
            this.form["id"] = this.user.id;
            this.form2["id"] = this.user.id;
            this.form["nom"] = this.user.nom;
            this.form["cognoms"] = this.user.cognoms;
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
                nom: "",
                cognoms: "",
                provincia: "",
                poblacio: "",
                cp: "",
                direccio: ""
            },
            form2: {
                id: "",
                password: "",
                new_password: "",
                confirm_password: ""
            }
        };
    },
    methods: {
        modifyUser() {
            let that = this;
            console.log(that.form);
            axios
                .post("/api/modifyUser", that.form)
                .then(res => {
                    console.log(res);
                    this.$router.push({ name: "Profile" });
                })
                .catch(error => {
                    that.errors = error.response.data.errors;
                    console.log(that.errors);
                });
        },
        modifyPassword() {
            let that = this;
            console.log(that.form2);
            axios
                .post("/api/modifyPassword", that.form2)
                .then(res => {
                    console.log(res);
                    this.$router.push({ name: "Profile" });
                })
                .catch(error => {
                    that.errors = error.response.data.errors;
                    console.log(that.errors);
                });
        }
    }
};
</script>
