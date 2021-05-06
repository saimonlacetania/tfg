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
        <!--<h1>Component botiga</h1>
        <h2>{{this.botiga.nom}}</h2>
        <h2>{{this.botiga.descripcio}}</h2>-->

        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-navy card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                :src="'/images/avatars/' + this.user.profile_pic"
                                alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{this.user.nom}}</h3>
                        <p class="text-muted text-center">{{this.botiga.descripcio}}</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> {{this.botiga.poblacio}}</strong>
                                <div class="text-muted">{{this.botiga.direccio}}</div>  
                                <small><p class="text-muted">{{this.botiga.provincia}}</p></small>                                 
                            </li>
                            <li class="list-group-item">
                                <strong><i class="far fa-address-card mr-1"></i> Contacte</strong>
                                <div class="text-muted">{{this.botiga.email}}</div>  
                                <small><p class="text-muted">{{this.botiga.telf_1}}</p></small>  
                            </li>
                            <li class="list-group-item">
                                <i class="fab fa-instagram mr-1"></i> {{this.botiga.instagram}}<br>
                                <i class="fab fa-facebook mr-1"></i> {{this.botiga.facebook}}<br>
                                <i class="fab fa-twitter mr-1"></i> {{this.botiga.twitter}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-navy card-outline">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#mod_perfil" data-toggle="tab" style="color:#0a0421 !important;">Modificar perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#puja_producte" data-toggle="tab" style="color:#0a0421 !important;">Pujar productes</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-header -->

                <!-- les meves comandes -->
                <div class="card-body">
                    <div class="tab-content">
                    <div class="active tab-pane" id="mod_perfil">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <label for="nom_botiga">Nom</label>
                                        <input type="text" class="form-control" id="nom_botiga" placeholder="Nom">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <label for="descripcio_botiga">Descripció</label>
                                        <input type="text" class="form-control" id="descripcio_botiga" placeholder="Descripció">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <label for="telf_1_botiga">Telèfon</label>
                                        <input type="text" class="form-control" id="telf_1_botiga" placeholder="Telèfon">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="telf_2_botiga">Telèfon</label>
                                        <input type="text" class="form-control" id="telf_2_botiga" placeholder="Telèfon">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                    </div>
                    <!-- /.les meves comandes -->

                    <!-- Pujar producte -->
                    <div class="tab-pane" id="puja_producte">
                        <form>
                            <div class="card-body register-card-body">

                                <div class="form-group mb-3">
                                    <label for="imatge">Imatge del Producte</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input 
                                            type="file" 
                                            class="custom-file-input" 
                                            id="imatge"
                                        >
                                        <label class="custom-file-label" for="imatge">Tria un fitxer</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-image"></i>
                                        </span>
                                    </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group mb-3" v-if="errors.ref">
                                        <label class="col-form-label" for="number"
                                            ><i class="far fa-times-circle"></i>
                                            {{ errors.ref[0] }}</label
                                        >
                                        <br />
                                    </div>
                                    <input
                                        name="ref"
                                        type="text"
                                        class="form-control"
                                        placeholder="Ref"
                                        v-model="form.ref"
                                    />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-asterisk"></span>
                                        </div>
                                    </div>
                                </div>

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
                                            <span class=""></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="categoria">Categoria</label>
                                    <select 
                                        class="form-control" 
                                        id="categoria"
                                        v-model="form.categoria">
                                            <option v-for="categoria in categories" :key="categoria.id" :value="categoria.id">
                                                {{categoria.nom}}
                                            </option>
                                    </select>
                                </div>

                                <label for="desc">Descripcio del producte</label><br />
                                <div class="form-group mb-3">
                                    <div class="input-group mb-3" v-if="errors.desc">
                                        <label class="col-form-label" for="number"
                                            ><i class="far fa-times-circle"></i>
                                            {{ errors.desc[0] }}</label
                                        >
                                        <br />
                                    </div>
                                    
                                    <textarea 
                                        class="form-control" 
                                        type="text"
                                        id="desc" 
                                        name="desc"
                                        v-model="form.desc"
                                        rows="3">
                                    </textarea>
                                    
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group mb-3" v-if="errors.preu">
                                        <label class="col-form-label" for="number"
                                            ><i class="far fa-times-circle"></i>
                                            {{ errors.preu[0] }}</label
                                        >
                                        <br />
                                    </div>
                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="Preu"
                                        name="preu"
                                        v-model="form.preu"
                                    />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-euro-sign"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group mb-3" v-if="errors.stock">
                                        <label class="col-form-label" for="number"
                                            ><i class="far fa-times-circle"></i>
                                            {{ errors.stock[0] }}</label
                                        >
                                        <br />
                                    </div>
                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="Stock"
                                        name="stock"
                                        v-model="form.stock"
                                    />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-layer-group"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input 
                                        class="form-check-input"   
                                        type="checkbox" 
                                        value="0" 
                                        id="actiu"
                                        v-model="form.actiu">
                                    <label class="form-check-label" for="actiu">
                                        Producte actiu
                                    </label>
                                </div>

                                <br>
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col text-center">
                                        <button
                                            @click.prevent="saveForm"
                                            type="submit"
                                            class="btn btn-secondary"
                                        >
                                            Puja producte
                                        </button>
                                    </div>
                                    <!-- /.col -->
                                    <br />
                                </div>
                            </div>
                            <!-- /.form-box -->
                            </form>
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

<script>
export default {
    data() {
        return {
            form: {
                imatge: null,
                ref: "",
                id_botiga: "",
                nom: "",
                desc: "",
                preu: "",
                stock: "",
                actiu: "",
                categoria: "",
                visites: "0",
            },
            errors: [],
            categories: "",
            botiga: "",
            user: ""
            
        };
    },
    mounted() {
        axios.get("/api/categories").then((res) => {
                this.categories = res.data;
            });
        axios.get("/api/user").then((res) => {
                this.user = res.data;
            }).then(
        axios.get("/api/botiga").then(res2 => {
            for (let b in res2.data) {
                if (res2.data[b].id_usuari==this.user.id) {
                    this.botiga = res2.data[b];
                    this.form.id_botiga = this.user.id;
                }
            }
        }));
    },

    methods: {
        saveForm() {
            let that = this;
            console.log(that.form);
            let formData = new FormData();
            if (document.getElementById("imatge").files[0]) {
                that.form["imatge"] = document.getElementById("imatge").files[0];
                formData.append("imatge", that.form["imatge"]);
            }
            formData.append("ref", that.form["ref"]);
            formData.append("id_botiga", that.form["id_botiga"]);
            formData.append("nom", that.form["nom"]);
            formData.append("desc", that.form["desc"]);
            formData.append("preu", that.form["preu"]);
            formData.append("stock", that.form["stock"]);
            formData.append("actiu", that.form["actiu"]);
            formData.append("categoria", that.form["categoria"]);
            formData.append("visites", that.form["visites"]);


            
            axios
                .post("/api/afegirProducte", formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
                })
                .then((res) => {
                console.log(res);
                location.reload();
                })
                .catch((error) => {
                that.errors = error.response.data.errors;
                console.log(that.errors);
                });

            console.log(that.form);
            
        }
    }

};
</script>