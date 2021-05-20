

<template>
  <div class="content-wrapper" id="contingut">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>La meva cistella</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="content w-100">
      <div class="container-fluid">
        <div v-if="cistella.length>0" class="row">
          <div class="col-md-8">
            <div class="card card-dark card-outline">
              <div class="card-header">
                <h3 class="card-title">La meva cistella</h3>
              </div>
              <div class="card-body table-responsive">
                <table class="table">
                  <thead class="">
                    <tr>
                      <th>Nom</th>
                      <th>Quantitat</th>
                      <th>Preu</th>
                      <th class="text-right">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    <tr v-for="producte in cistella" :key="producte.id">
                      <td>{{ producte.productes.nom }}</td>
                      <td>
                        <button
                          class="btn pl-0"
                          style="background-color: transparent"
                          v-on:click="restarCistella(producte.id)"
                        >
                          <i class="fas fa-minus"></i>
                        </button>
                        {{ producte.quantitat }}
                        <button
                          class="btn pr-0"
                          style="background-color: transparent"
                          v-on:click="sumarCistella(producte.id)"
                        >
                          <i class="fas fa-plus"></i>
                        </button>
                      </td>
                      <td>{{ producte.productes.preu }} €</td>
                      <td class="text-right">
                        <span
                          ><button
                            class="btn btn-danger"
                            @click="eliminarCistella(producte.id)"
                          >
                            <i class="fas fa-trash"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-dark card-outline">
              <div class="card-header">
                <h3 class="card-title">Processar la meva cistella</h3>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead class="">
                    <tr>
                      <th class="text-left">Nom</th>
                      <th class="text-right">Preu</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    <tr v-for="producte in cistella" :key="producte.id">
                      <td>{{ producte.productes.nom }}</td>

                      <td class="text-right">
                        {{ producte.productes.preu }} €
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"><b>Total</b>:</td>
                      <td class="text-right">
                        <b>{{ $data.total }} €</b>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="text-right">
                  <button id="botoComanda" class="btn btn-success" v-on:click="crearOrdre">
                    Processar la comanda
                  </button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

        <div v-else  class="row">
          <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="card card-dark card-outline">
                <div class="card-header">
                  <h3 class="card-title">La meva cistella</h3>
                </div>
                <div class="card-body table-responsive">
                  <h2>La cistella esta buida.</h2>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
        
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  <!-- /.container-fluid -->
</template>
<style>
#botoComanda {
  background-color: #ff6565;
  border-color: #ff9090;
}
#botoComanda:focus, #botoComanda.focus {
    color: #fff;
    box-shadow: 0 0 0 0.2rem #ff9090e1;;
}
</style>
<script>
export default {
  data() {
    return {
      user: "",
      cistella: "",
      total: 0,
    };
  },
  mounted() {
    this.loading();
    axios.get("/api/user").then((res) => {
      this.user = res.data;
      this.actualitzarCistella();
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
    actualitzarCistella() {
      axios.get("/api/veureCistella").then((res) => {
        this.cistella = res.data;
        this.total = 0;
        for (let i = 0; i < this.cistella.length; i++) {
          this.cistella[i].productes.preu = parseFloat(
            this.cistella[i].productes.preu * this.cistella[i].quantitat
          ).toFixed(2);
          this.total += parseFloat(this.cistella[i].productes.preu);
        }
        this.total = parseFloat(this.total).toFixed(2);
      });
    },
    toastCorrecte() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "success",
        title: "Comanda realitzada correctament",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
    },
    elminatCorrectament() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "success",
        title: "Eliminat correctament",
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
        title: "La direcció de compra no és correcte!",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
    },
    toastIncorrecte2() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "error",
        title: "La cistella no pot ser buida!",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
    },
    crearOrdre() {
      axios
        .post("/api/crearOrdre")
        .then((res) => {
          console.log(res);
          this.toastCorrecte();
          axios.get("/api/veureCistella").then((res) => {
            this.cistella = res.data;
            console.log(this.cistella);

            this.total = 0.0;
          });
        })
        .catch((error) => {
          console.log(error.response.data);
          if (error.response.data == "Buida") {
            this.toastIncorrecte2();
          } else {
            this.toastIncorrecte();
          }
        });
    },
    eliminarCistella(id) {
      axios.post("/api/eliminarCistella/" + id).then((res) => {
        console.log(res);
        this.elminatCorrectament();
        this.actualitzarCistella();
      });
    },
    restarCistella(id) {
      axios.post("/api/restarCistella/" + id).then((res) => {
        console.log(res);
        this.actualitzarCistella();
      });
    },
    sumarCistella(id) {
      axios.post("/api/sumarCistella/" + id).then((res) => {
        console.log(res);
        this.actualitzarCistella();
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