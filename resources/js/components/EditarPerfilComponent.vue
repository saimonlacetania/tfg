<template>
    <div class="content-wrapper">
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nom"
                        name="nom"
                        v-model="$data.form.nom"
                    />
                </div>
                <div class="form-group">
                    <label for="cognoms">Cognoms</label>
                    <input
                        type="text"
                        class="form-control"
                        id="cognoms"
                        v-model="$data.form.cognoms"
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
                    />
                </div>
                <div class="col text-center">
                <button
                  @click.prevent="modifyUser"
                  type="submit"
                  class="btn btn-secondary"
                >
                  Modifica les meves dades
                </button>
              </div>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
    <!-- /.card -->
</template>

<script>
export default {
    mounted() {
        axios.get("/api/user").then(res => {
            this.user = res.data;
            this.form["id"] = this.user.id;
            this.form["nom"] = this.user.nom;
            this.form["cognoms"] = this.user.cognoms;
            this.form["provincia"] = this.user.provincia;
            this.form["poblacio"] = this.user.poblacio;
            this.form["cp"] = this.user.cp;
            this.form["direccio"] = this.user.direccio;
            console.log(this.user);
        });
        
    },
    data () {  
        return {
            user: "",
            form: {
                id:"",
                nom: "",
                cognoms: "",
                provincia: "",
                poblacio: "",
                cp: "",
                direccio: ""
            },
        };
    },
    methods: {
        modifyUser() {
            let that = this;
            console.log(that.form);
            axios
                .post("/api/modifyUser", that.form)
                .then((res) => {
                    console.log(res);
                    
                })
                .catch(error => {
                    that.errors = error.response.data.errors;
                    console.log(that.errors);
                });
        }
    }
};
</script>
