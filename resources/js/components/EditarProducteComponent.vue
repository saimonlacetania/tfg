<template>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <h1 style="color:#ff6565;">Editar <b class="text-secondary">Producte</b></h1>
            </div>
            <div class="col-md-3"></div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form>
                    <div class="card-body register-card-body">
                        <div class="form-group mb-3">
                            <label for="imatge">Imatge del Producte</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input 
                                    @change="fileSelected"
                                    type="file" 
                                    class="custom-file-input" 
                                    id="imatge"
                                >
                                <label v-if="!files || !files.length" class="custom-file-label" for="imatge">Tria un fitxer</label>
                                <span v-else>
                                    <label v-for="file in files" :key="file.name" class="custom-file-label" for="imatge">{{file.name}}</label>
                                </span>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-image" style="color:#ff6565;"></i>
                                </span>
                            </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group mb-3" v-if="errors.ref">
                                <label class="col-form-label" for="number"
                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
                                    {{ errors.ref[0] }}</label
                                >
                                <br />
                            </div>
                            <input
                                name="ref"
                                type="text"
                                class="form-control"
                                placeholder="producte.ref"
                                v-model="form.ref"
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-asterisk" style="color:#ff6565;"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group mb-3" v-if="errors.nom">
                                <label class="col-form-label" for="number"
                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
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

                        <label for="desc">Descripcio del producte</label><br />
                        <div class="form-group mb-3">
                            <div class="input-group mb-3" v-if="errors.desc">
                                <label class="col-form-label" for="number"
                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
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
                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
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
                                    <span class="fas fa-euro-sign" style="color:#ff6565;"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group mb-3" v-if="errors.stock">
                                <label class="col-form-label" for="number"
                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
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
                                    <span class="fas fa-layer-group" style="color:#ff6565;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col text-center">
                                <button
                                    @click.prevent="editarProducte"
                                    type="submit"
                                    class="btn btn-secondary zoom"
                                    style="background-color:#ff6565; border:none;"
                                >
                                    Edita producte
                                </button>
                            </div>
                            <!-- /.col -->
                            <br />
                        </div>
                    </div>
                    <!-- /.form-box -->
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
      </div>
    </section>
</div>
</template>

<script>

export default {
  mounted() {
    axios.get("/api/producte/" + this.$route.params.id).then((res) => {
            this.producte = res.data; 
            this.form["id"]=this.producte.id; 
            this.form["ref"]=this.producte.ref;
            this.form["nom"]=this.producte.nom;
            this.form["desc"]=this.producte.descripcio;
            this.form["preu"]=this.producte.preu;
            this.form["stock"]=this.producte.stock;
                
    }).then(()=> {
      Swal.fire({
        title:'<span style="color: #ff6565">Carregant...</span>', 
        timer:1000 ,
        showConfirmButton: false,
        showClass: {
        backdrop: 'swal2-noanimation', // disable backdrop animation
        popup: '',                     // disable popup animation
        icon: ''                       // disable icon animation
        },
        hideClass: {
          popup: '',                     // disable popup fade-out animation
        },
        didOpen: () => {
          Swal.showLoading()
        },});
    })
  },
  
  data() {
    return {
        files: null,
        categories: "",
        producte: "",
        form: {
            id: "",
            imatge: null,
            ref: "",
            nom: "",
            desc: "",
            preu: "",
            stock: "",
        },
        errors: [],
    };
    },
    methods: {
        loading() {
            Swal.fire({
                title: '<span style="color: #ff6565">Carregant...</span>',
                customClass: 'swal-wide',
                showConfirmButton: false,
                showClass: {
                popup: '',
                icon: ''
                },
                hideClass: {
                popup: '',
                },
                didOpen: () => {
                Swal.showLoading()
                }
            })
        },
        fileSelected(e) {
        this.files = e.target.files
        console.log(this.files);
        },
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
        editarProducte() {
            let that = this;
            let formData = new FormData();
            if (document.getElementById("imatge").files[0]) {
                that.form["imatge"] = document.getElementById("imatge").files[0];
                formData.append("imatge", that.form["imatge"]);
            }
            formData.append("id", that.form["id"]);
            formData.append("ref", that.form["ref"]);
            formData.append("nom", that.form["nom"]);
            formData.append("desc", that.form["desc"]);
            formData.append("preu", that.form["preu"]);
            formData.append("stock", that.form["stock"]);

            axios
                .post("/api/editarProducte", formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
                })
                .then((res) => {
                console.log(res);
                this.$router.push({ name: "Botiga" });
                this.toastCorrecte();
                })
                .catch((error) => {
                that.errors = error.response.data.errors;
                console.log(that.errors);
                this.toastIncorrecte();
                });

            console.log(that.form);
        }, 
    },
};
</script>
<style>
    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Busca";
        visibility: hidden;
    }
</style>
