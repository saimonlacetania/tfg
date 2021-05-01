<template>
  <div class="content-wrapper" id="contingut">
    <!-- cerca -->
    <div class="content-header">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card bg-dark text-white" style="border:none;">
              <img src="/images/agro_1.jpg" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h3 class="card-header text-center">Benvinguts al Mercat Virtual</h3>
                <div class="row">
                  <div class="col-md-4 mt-5"></div>
                  <button type="submit" class="btn btn-lg btn-secondary col-md-4 text-center mt-5" style="background-color:#ff6565;">
                    <i class="fa fa-search"></i>
                    Descobreix-lo!
                  </button>
                  <div class="col-md-4"></div>
                  </div>
              </div>

            </div>
          </div>
        </div>

          <br>

          <!-- cerca -->
          <div class="col-md-12">
            <form action="simple-results.html">
              <div class="input-group">
                <input
                  type="search"
                  class="form-control form-control-lg text-right"
                  placeholder="¿Què vols buscar?"
                />
                <div class="input-group-append">
                  <button type="submit" class="btn btn-lg btn-secondary" style="background-color:#ff6565;">
                    <i class="fa fa-search"></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-lg btn-secondary"
                    aria-expanded="true"
                    v-on:click="mostrarCerca"
                    style="background-color:#ff6565;"
                  >
                    <i class="fa fa-arrow-down"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.col -->

        <!-- cerca avançada -->
        <div id="cerca" style="display: none">
          <cerca-component></cerca-component>
        </div>
        <div class="col-sm-12 mt-4">
          <h1 class="text-center">El KM0 més a prop que mai</h1>
          <h4 class="text-center">Productes únics de professionals locals</h4>
        </div>

        <br><br>

        <div class="row">
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="/images/grapes.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Fresc</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="/images/ovella.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Ecològic</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="/images/roba.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Sostenible</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-block text-center mt-5" style="background-color:#ff6565;">
              <i class="fa fa-search"></i>
              Descobreix-lo!
            </button>
          </div>
          <div class="col-md-4"></div>
        </div>



      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
                                
    <hr>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div :class="'col-md-4 card-deck mb-4'" v-for="producte in productes" :key="producte.id">
                <div :class="'card card-primary text-center zoom'">
                  <img :class="'card-img-top p-3'" :src="'/images/'+producte.imatge" />
                  <div :class="'card-body'">
                    <div :class="'card-title font-weight-bold'">
                    {{ producte.nom }}
                    </div>
                    <br />
                    <div :class="'badge badge-warning badge-sm text-uppercase'">
                      {{producte.ref}}
                    </div>
                    <p :class="'card-text'">
                      {{producte.descripcio}}
                    </p>
                  </div>
                  <div :class="'card-footer'">
                    <a href="#" :class="'btn btn-outline-secondary btn-icon-right'">
                      <span>Saber més</span>
                    </a>
                  </div>
                </div>
                <!-- /.card -->
          </div>
          <!-- /.col-md-6 card-deck-->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
  

    <hr>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
              <p>Holee</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.contingut pagina -->
</template>
<style>
.zoom {
  transition: transform 0.2s; /* Animation /
}

.zoom:hover {
  transform: scale(1.05); / (150% zoom)*/
}
</style>

<script>
import CercaComponent from "./CercaComponent.vue";

export default {
  data() {
        return {
          productes: "",
        };
  },
  components: { CercaComponent },
  mounted() {
    axios.get("/api/productes").then((res) => {
        console.log(res);
        this.productes = res.data;
      });


  },
  methods: {
    mostrarCerca: function (event) {
      var cerca = document.getElementById("cerca");
      if (cerca.style.display == "none") {
        cerca.style.display = "block";
      } else {
        cerca.style.display = "none";
      }
    },
  },
};
</script>