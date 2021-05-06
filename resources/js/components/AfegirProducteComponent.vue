<template>
    <div class="content-wrapper" id="registre">
        <div class="register-box">
            <div class="register-logo">
                <h1>Afegir producte</h1>
            </div>

            <div class="card">
              <form>
                <div class="card-body register-card-body">

                    <div class="form-group mb-3">
                        <label for="imatge">Imatge del producte</label>
                            <input 
                                type="file" 
                                class="form-control-file" 
                                id="imatge" 
                            />
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
                                <span class=""></span>
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
            <!-- /.card -->
        </div>
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
                this.$router.push({ name: "Botiga" });
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
<style>
    #registre {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    input[type="date"]::-webkit-calendar-picker-indicator,
    input[type="date"]::-webkit-inner-spin-button {
        display: none;
    }
</style>