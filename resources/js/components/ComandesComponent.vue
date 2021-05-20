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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Les meves comandes</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-dark">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      href="#activity"
                      data-toggle="tab"
                      >Productes a enviar</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab"
                      >Productes enviats</a
                    >
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->

              <!-- les meves comandes -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-12">
                          <div class="card-header">
                            <h3 class="card-title">
                              Productes per preparar...
                            </h3>
                          </div>
                          <div v-if="orders.length>0" class="card-body table-responsive">
                            <table class="table">
                              <thead class="">
                                <tr>
                                  <th>Referencia</th>
                                  <th>Nom</th>
                                  <th>Número d'ordre</th>
                                  <th>Quantitat</th>
                                  <th>Direcció</th>

                                  <th>Enviat</th>
                                </tr>
                              </thead>
                              <tbody class="">
                                <tr v-for="comanda in orders" :key="comanda.id">
                                  <td>{{ comanda.productes.ref }}</td>
                                  <td>{{ comanda.productes.nom }}</td>
                                  <td>{{ comanda.id_ordre }}</td>
                                  <td>{{ comanda.quantitat }}</td>
                                  <td>
                                    {{
                                      comanda.order.provincia +
                                      ", " +
                                      comanda.order.poblacio +
                                      " (" +
                                      comanda.order.cp +
                                      "), " +
                                      comanda.order.direccio
                                    }}
                                  </td>
                                  <td class="">
                                    <span
                                      ><button
                                        v-on:click="enviarOrdre(comanda.id)"
                                        class="btn btn-success"
                                      >
                                        <i class="fas fa-shipping-fast"></i>
                                      </button>
                                    </span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <div v-else class="card-body table-responsive">
                            <h4>No hi ha comandes.</h4>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.les meves comandes -->

                  <!-- TIMELINE tornar a comprar -->
                  <div class="tab-pane" id="timeline">
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-12">
                          <div class="card-header">
                            <h3 class="card-title">Productes ja enviats</h3>
                          </div>
                          <div v-if="ordersEnviats.length>0" class="card-body table-responsive">
                            <table class="table">
                              <thead class="">
                                <tr>
                                  <th>Referencia</th>
                                  <th>Nom</th>
                                  <th>Número d'ordre</th>
                                  <th>Quantitat</th>
                                  <th>Direcció</th>
                                  <th>Estat</th>
                                </tr>
                              </thead>
                              <tbody class="">
                                <tr
                                  v-for="comanda in ordersEnviats"
                                  :key="comanda.id"
                                >
                                  <td>{{ comanda.productes.ref }}</td>
                                  <td>{{ comanda.productes.nom }}</td>
                                  <td>{{ comanda.id_ordre }}</td>
                                  <td>{{ comanda.quantitat }}</td>
                                  <td>
                                    {{
                                      comanda.order.provincia +
                                      ", " +
                                      comanda.order.poblacio +
                                      " (" +
                                      comanda.order.cp +
                                      "), " +
                                      comanda.order.direccio
                                    }}
                                  </td>
                                  <td v-if="comanda.order.rebut == 0">
                                    En repartiment
                                  </td>
                                  <td v-else>Entregat</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <div v-else class="card-body table-responsive">
                            <h4>No hi ha comandes.</h4>
                          </div>

                        </div>
                      </div>
                    </div>
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

<style>
.timeline::before {
  background-color: #ffffff;
}
</style>

<script>
export default {
  data() {
    return {
      user: "",
      orders: "",
      ordersEnviats: "",
    };
  },

  mounted() {
    this.loading();
    axios.get("/api/user").then((res) => {
      this.user = res.data;
    }).then(()=>{
      axios.get("/api/veureOrdreBotiga").then((res) => {
      this.orders = res.data;
      console.log(this.orders);
    });
    }).then(()=>{
      axios.get("/api/veureOrdreBotigaEnviat").then((res) => {
      this.ordersEnviats = res.data;
      console.log(this.ordersEnviats);
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
    toastCorrecte() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "success",
        title: "Producte enviat correctament",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
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
    enviarOrdre(id) {
      axios.post("/api/enviarOrdre/" + id).then((res1) => {
        console.log(res1);
        this.toastCorrecte();
        axios.get("/api/veureOrdreBotiga").then((res2) => {
          this.orders = res2.data;
          console.log(this.orders);
        });
        axios.get("/api/veureOrdreBotigaEnviat").then((res) => {
          this.ordersEnviats = res.data;
          console.log(this.ordersEnviats);
        });
      });
    },
  },
};
</script>
