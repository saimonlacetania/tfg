<template>
  <div class="content-wrapper" id="contingut">
    <section class="content pt-3">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="col-12">
                    <img
                      :src="'/images/productes/' + $data.producte.imatge"
                      class="product-image"
                      alt="Product Image"
                    />
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h3 class="my-3">
                    {{ $data.producte.nom }}
                  </h3>
                  <p>{{ $data.producte.descripcio }}</p>

                  <hr />

                  <div class="bg-light py-2 px-3 mt-4" style="border-radius:7px;">
                    <h2 class="mb-0">{{ $data.producte.preu }} €</h2>
                    <h4 v-if="$data.producte.stock == 1">
                      Queda {{ $data.producte.stock }} unitat!
                    </h4>
                    <h5 v-else>Queden {{ $data.producte.stock }} unitats!</h5>
                  </div>

                  <div class="mt-4" style="color:#ff6565;">
                    <div
                      class="btn btn-primary btn-lg btn-flat btn-block zoom"
                      v-on:click="afegirCistella"
                      v-if="this.producte.stock > 0"
                      style="background-color:#ff6565; border:none; border-radius:7px;"
                    >
                      <i class="fas fa-gift fa-lg mr-2"></i>
                      Afegir a la cistella
                    </div>
                    <div class="btn btn-secondary btn-lg btn-flat disabled btn-block bg-light" v-else>
                      <i class="fas fa-cart-plus fa-lg mr-2"></i>
                      Afegir a la cistella
                    </div>

                    <div
                      class="btn btn-default btn-lg btn-flat btn-block bg-light zoom"
                      v-on:click="afegirWishlist"
                      style="color: #ff6565 !important; border-radius:7px;"
                    >
                      <i class="fas fa-heart fa-lg mr-2" style="color:#ff6565;"></i>
                      Afegir a la llista de desitjos
                    </div>
                  </div>


                  
                    <div class="row mt-4 product-share">
                      <div class="col-md-4">
                        <a href="#" class="text-secondary">
                          <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <a href="#" class="text-gray">
                          <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <a href="#" class="text-gray">
                          <i class="fab fa-instagram-square fa-2x"></i>
                        </a>
                      </div>
                    </div>



                </div>
              </div>
              <div class="row mt-4">
                <nav class="ml-4">
                  <div class="nav nav-tabs btn-group" id="product-tab" role="tablist">
                    <a class="btn btn-secondary active" style="background-color:#ff6565; border:none;" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripció</a>
                    <a class="btn btn-secondary" style="background-color:#ff6565; border:none;" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comentaris</a>
                  </div>
                </nav>
                <div class="tab-content p-3 w-100" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> {{$data.producte.descripcio}} </div>
                  <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> 
                    <!-- Comentaris -->
                    <div class="content w-100">
                      <div class="container-fluid">
                        <div v-if="comentaris.length>0" class="row">
                          <div
                            :class="'col-md-12'"
                            v-for="comentari in comentaris"
                            :key="comentari.id"
                          >
                          <div class="row mb-3">
                            <div class="user-panel d-flex">
                              <img
                                class="img-circle "
                                :src="'/images/avatars/' + comentari.user.profile_pic"
                                alt="User profile picture"
                              />
                              <div class="info font-weight-bold">
                                {{ comentari.user.nom }}
                              </div>
                              <div v-for="index in 5" :key="index"> 
                                <small v-if= "index <= comentari.valoracio"><i class="fas fa-star mt-2" style="color:#ff6565;"></i></small>
                                <small v-else><i class="far fa-star mt-2" style="color:#ff6565;"></i></small>
                              </div>
                            </div>
                          </div>
                              <div class="row">
                                {{comentari.descripcio}}
                              </div>
                              <br>
                          </div>
                        </div>
                        <div v-else class="row">
                          <div class="col-md-12 text-left">
                            <h4>Encara no hi ha comentaris...</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Comentaris -->
                    <!-- Escriure comentari -->
                    <form v-if="user.nom">    
                          <!-- textarea -->
                          <div class="form-group">
                            <label>Escriu un comentari</label>
                            <textarea v-model="form.descripcio" class="form-control" rows="3" style="min-width: 100%;" placeholder="Escriu aqui..."></textarea>
                          </div>
                          <div class="rating"> 
                            <input v-model="form.valoracio" type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                            <input v-model="form.valoracio" type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                            <input v-model="form.valoracio" type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                            <input v-model="form.valoracio" type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                            <input v-model="form.valoracio" type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                          </div>
                          <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <button
                                @click.prevent="pujarComentari"
                                type="submit"
                                class="btn btn-block text-center text-light zoom"
                                style="background-color: #ff6565"
                              >
                                Enviar
                              </button>
                            </div>
                            <div class="col-md-4"></div>
                          </div>
                        
                    </form>
                    <!-- /Escriure comentari -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
      </div>
    </section>
  </div>
</template>
<style>

.rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 1em;
    font-size: 4vw;
    color: #FF6565;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}

</style>


<script>
export default {
  data() {
    return {
      producte: "",
      comentaris: "",
      user: "",
      form: {
        id_usuari: "",
        id_producte: "",
        descripcio: "",
        valoracio: "",
      }
    };
  },
  mounted() {
    this.loading();

    axios.get("/api/producte/" + this.$route.params.id).then((res) => {
      console.log("beep");
      console.log(res.data);
      console.log("boop");
      if (res.data == false) {
        this.$router.push({ name: "Productes" });
      } else {
        this.producte = res.data;
      }
    }).then(()=>{
      axios.get("/api/comentaris/" + this.$route.params.id).then((res) => {
      console.log(res);
      this.comentaris = res.data;
      });
    }).then(()=>{
      axios.get("/api/user").then((res) => {
        this.user = res.data;
      });
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
  methods: {
    pujarComentari() {
      this.form.id_usuari = this.user.id;
      this.form.id_producte = this.producte.id;
      let that = this;
      if(this.form.descripcio==null) {
        this.form.descripcio="";
      }
      axios
        .post("/api/pujarComentari", that.form)
        .then((res) => {
          console.log(res);
          this.$router.push({ name: "Producte", params: {id: this.producte.id} });
          location.reload();
          this.toastCorrecteComentari();
        })
        .catch((error) => {
          that.errors2 = error.response.data.errors;
          console.log(that.errors2);
          this.toastIncorrecteComentari();
        });
    },
    toastCorrecte() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "success",
        title: "Producte afegit correctament",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
    },
    toastIncorrecte() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "error",
        title: "Error al afegir el producte",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
    },
    toastCorrecteComentari() {
        // Use sweetalert2
        Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'Comentari enviat correctament',
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });
    },
    toastIncorrecteComentari() {
      // Use sweetalert2
      Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'error',
          title: 'Error al enviar comentari',
          showConfirmButton: false,
          timer: 3000,
          didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
      });
    },
    afegirCistella() {
      axios
        .post("/api/afegirCistella/" + this.producte.id)
        .then((res) => {
          this.toastCorrecte();
          setTimeout(() => { this.$router.push({ name: "Productes" }); }, 1000);
          return false;
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
          this.toastIncorrecte();
          return false;
        });
    },
    afegirWishlist() {
      axios
        .post("/api/afegirWishlist/" + this.producte.id)
        .then((res) => {
          console.log(res);
          this.toastCorrecte();
          return false;
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
          this.toastIncorrecte();
          return false;
        });
    },
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
  },
};
</script>