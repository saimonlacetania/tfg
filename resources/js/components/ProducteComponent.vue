<template>
  <div class="content-wrapper" id="contingut">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Producte nº {{ $data.producte.id }}</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
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
              <p>Referencia: {{ $data.producte.ref }}</p>

              <hr />

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">{{ $data.producte.preu }} €</h2>
                <h4 v-if="$data.producte.stock == 1">
                  Queda {{ $data.producte.stock }} unitat!
                </h4>
                <h4 v-else>Queden {{ $data.producte.stock }} unitats!</h4>
              </div>

              <div class="mt-4">
                <div
                  class="btn btn-primary btn-lg btn-flat"
                  v-on:click="afegirCistella"
                >
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Afegir a la cistella
                </div>

                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-heart fa-lg mr-2"></i>
                  Afegir a la llista de desitjos
                </div>
              </div>

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-instagram-square fa-2x"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a
                  class="nav-item nav-link active"
                  id="product-desc-tab"
                  data-toggle="tab"
                  href="#product-desc"
                  role="tab"
                  aria-controls="product-desc"
                  aria-selected="true"
                  >Descripció</a
                >
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div
                class="tab-pane fade show active"
                id="product-desc"
                role="tabpanel"
                aria-labelledby="product-desc-tab"
              >
                {{ $data.producte.descripcio }}
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
  </div>
</template>



<script>
export default {
  data() {
    return {
      producte: "",
    };
  },
  mounted() {
    console.log("detall montat");

    axios.get("/api/producte/" + this.$route.params.id).then((res) => {
      console.log(res);
      this.producte = res.data;
    });
  },
  methods: {
    toastCorrecte() {
      // Use sweetalert2
      this.$swal({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'Producte afegit a la cistella',
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
    afegirCistella() {
      axios
        .post("/api/afegirCistella/" + this.producte.id)
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
  },
};
</script>