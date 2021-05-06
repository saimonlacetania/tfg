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
                            <div class="card-body register-card-body">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <label for="nom_botiga">Nom</label>
                                            <input type="text" class="form-control" id="nom_botiga" placeholder="Nom" v-model="$data.form_botiga.nom">
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <label for="descripcio_botiga">Descripció</label>
                                            <input type="text" class="form-control" id="descripcio_botiga" placeholder="Descripció" v-model="$data.form_botiga.descripcio">
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <div class="input-group mb-3" v-if="errors.telf_1">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.telf_1[0] }}</label>
                                            </div>
                                            <label for="telf_1_botiga">Telèfon</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="telf_1_botiga" placeholder="Telèfon" v-model="$data.form_botiga.telf_1">                                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone" style="color:#ff6565;"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group mb-3" v-if="errors.telf_2">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.telf_2[0] }}</label>
                                            </div>
                                            <label for="telf_2_botiga">Telèfon</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="telf_2_botiga" placeholder="Telèfon" v-model="$data.form_botiga.telf_2">                                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone" style="color:#ff6565;"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3" v-if="errors.email">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.email[0] }}</label>
                                            </div>
                                            <label for="email_botiga">Email</label>
                                            <input type="email" class="form-control" id="email_botiga" placeholder="Email" v-model="$data.form_botiga.email">
                                        </div>
                                        <div class="col-md-1"></div>                                    
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3" v-if="errors.direccio">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.direccio[0] }}</label>
                                            </div>
                                            <label for="direccio_botiga">Direcció</label>
                                            <input type="text" class="form-control" id="direccio_botiga" placeholder="Direcció" v-model="$data.form_botiga.direccio">
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3" v-if="errors.cp">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.cp[0] }}</label>
                                            </div>
                                            <label for="cp_botiga">Codi postal</label>
                                            <input type="text" class="form-control" id="cp_botiga" placeholder="Codi postal" v-model="$data.form_botiga.cp">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group mb-3" v-if="errors.poblacio">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.poblacio[0] }}</label>
                                            </div>
                                            <label for="poblacio_botiga">Població</label>
                                            <input type="text" class="form-control" id="poblacio_botiga" placeholder="Població" v-model="$data.form_botiga.poblacio">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="input-group mb-3" v-if="errors.provincia">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.provincia[0] }}</label>
                                                </div>
                                                <label for="provincia_botiga">Província</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option>Barcelona</option>
                                                    <option>Girona</option>
                                                    <option>Tarragona</option>
                                                    <option>Lleida</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <div class="input-group mb-3" v-if="errors.cif">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.cif[0] }}</label>
                                            </div>
                                            <label for="cif_botiga">CIF</label>
                                            <input type="text" class="form-control" id="cif_botiga" placeholder="CIF" v-model="$data.form_botiga.cif">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group mb-3" v-if="errors.nif">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.nif[0] }}</label>
                                            </div>
                                            <label for="nif_botiga">NIF</label>
                                            <input type="text" class="form-control" id="nif_botiga" placeholder="NIF" v-model="$data.form_botiga.nif">
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <label for="instagram_botiga">Instagram</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="instagram_botiga" placeholder="@instagram" v-model="$data.form_botiga.instagram">                                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-instagram" style="color:#ff6565;"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="facebook_botiga">Facebook</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="facebook_botiga" placeholder="@facebook" v-model="$data.form_botiga.facebook">                                            
                                                <div class="input-group-append">
                                                    <div class="input-group-text" style="color:#ff6565;">
                                                        <span class="fab fa-facebook-f"></span>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="twitter_botiga">Twitter</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="twitter_botiga" placeholder="@twitter" v-model="$data.form_botiga.twitter">                                           
                                                <div class="input-group-append">
                                                    <div class="input-group-text" style="color:#ff6565;">
                                                        <span class="fab fa-twitter"></span>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <label for="img_perfil">Imatge de perfil</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input 
                                                        @change="fileSelected"
                                                        type="file" 
                                                        class="custom-file-input" 
                                                        id="img_perfil"
                                                    >
                                                    <label v-if="!files || !files.length" class="custom-file-label" for="img_perfil">Tria un fitxer</label>
                                                    <span v-else>
                                                        <label v-for="file in files" :key="file.name" class="custom-file-label" for="img_perfil">{{file.name}}</label>
                                                    </span>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-image"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="img_portada">Imatge de portada</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input 
                                                        @change="fileSelected2"
                                                        type="file" 
                                                        class="custom-file-input" 
                                                        id="img_portada"
                                                    >
                                                    <label v-if="!files2 || !files2.length" class="custom-file-label" for="img_portada">Tria un fitxer</label>
                                                    <span v-else>
                                                        <label v-for="file2 in files2" :key="file2.name" class="custom-file-label" for="img_portada">{{file2.name}}</label>
                                                    </span>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-image"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <button class="btn btn-block text-center mt-5 text-light zoom" style="background-color:#ff6565;"

                                            @click.prevent="saveBotiga"
                                            type="submit">                 

                                            Guardar
                                            </button>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
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
                                            @change="fileSelected3"
                                            type="file" 
                                            class="custom-file-input" 
                                            id="imatge"
                                        >
                                        <label v-if="!files3 || !files3.length" class="custom-file-label" for="imatge">Tria un fitxer</label>
                                        <span v-else>
                                            <label v-for="file3 in files3" :key="file3.name" class="custom-file-label" for="imatge">{{file3.name}}</label>
                                        </span>
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
            files: null,
            files2: null,
            files3: null,
            form_botiga: {
                id:"",
                nom:"",
                descripcio:"",
                telf_1:"",
                telf_2:"",
                direccio:"",
                cp:"",
                poblacio:"",
                provincia:"",
                email:"",
                instagram:"",
                facebook:"",
                twitter:"",
                nif:"",
                cif:"",
                img_perfil: null,
                img_portada: null,
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
            this.form_botiga["id"] = this.botiga.id;
            this.form_botiga["nom"] = this.botiga.nom;
            this.form_botiga["descripcio"] = this.botiga.descripcio;
            this.form_botiga["telf_1"] = this.botiga.telf_1;
            this.form_botiga["telf_2"] = this.botiga.telf_2;
            this.form_botiga["direccio"] = this.botiga.direccio;
            this.form_botiga["cp"] = this.botiga.cp;
            this.form_botiga["poblacio"] = this.botiga.poblacio;
            this.form_botiga["provincia"] = this.botiga.provincia;
            this.form_botiga["email"] = this.botiga.email;
            this.form_botiga["instagram"] = this.botiga.instagram;
            this.form_botiga["facebook"] = this.botiga.facebook;
            this.form_botiga["twitter"] = this.botiga.twitter;
            this.form_botiga["nif"] = this.botiga.nif;
            this.form_botiga["cif"] = this.botiga.cif;
            this.form_botiga["img_perfil"] = this.botiga.img_perfil;
            this.form_botiga["img_portada"] = this.botiga.img_portada;
        }));
    },

    methods: {
        fileSelected(e) {
        this.files = e.target.files
        console.log(this.files);
        },
        fileSelected2(e) {
        this.files2 = e.target.files2
        console.log(this.files2);
        },
        fileSelected3(e) {
        this.files3 = e.target.files3
        console.log(this.files3);
        },
        toastCorrecte() {
        // Use sweetalert2
        this.$swal({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Producte afegit correctament',
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
            title: 'Error al afegir el producte',
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
                this.toastCorrecte();
                location.reload();
                })
                .catch((error) => {
                that.errors = error.response.data.errors;
                this.toastIncorrecte();
                console.log(that.errors);
                });

            console.log(that.form);
            
        },
        saveBotiga() {
            let that = this;
            console.log(that.form_botiga);
            let formData = new FormData();

            if (document.getElementById("img_perfil").files[0]) {
                that.form_botiga["img_perfil"] = document.getElementById("img_perfil").files[0];
                formData.append("img_perfil", that.form_botiga["img_perfil"]);
            }
            if (document.getElementById("img_portada").files[0]) {
                that.form_botiga["img_portada"] = document.getElementById("img_portada").files[0];
                formData.append("img_portada", that.form_botiga["img_portada"]);
            }
            formData.append("id", that.form_botiga["id"]);
            formData.append("nom", that.form_botiga["nom"]);
            formData.append("descripcio", that.form_botiga["descripcio"]);
            formData.append("telf_1", that.form_botiga["telf_1"]);
            formData.append("telf_2", that.form_botiga["telf_2"]);
            formData.append("direccio", that.form_botiga["direccio"]);
            formData.append("cp", that.form_botiga["cp"]);
            formData.append("poblacio", that.form_botiga["poblacio"]);
            formData.append("provincia", that.form_botiga["provincia"]);
            formData.append("email", that.form_botiga["email"]);
            formData.append("instagram", that.form_botiga["instagram"]);
            formData.append("facebook", that.form_botiga["facebook"]);
            formData.append("twitter", that.form_botiga["twitter"]);
            formData.append("nif", that.form_botiga["nif"]);
            formData.append("cif", that.form_botiga["cif"]);

            axios
            .post("/api/modifyShop", formData, {               
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            }) 
            .then((res) => {
                console.log(res);
                this.toastCorrecte();
                location.reload();
                
            })
            .catch((error) => {
                that.errors = error.response.data.errors;
                console.log(that.errors);
                this.toastIncorrecte();
            });
        }
    }

};
</script>
<style>
    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Busca";
        visibility: hidden;
    }
</style>