<template>
  <div class="content-wrapper" id="contingut">
    <!-- cerca -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
            <form action="simple-results.html">
              <div class="input-group">
                <input
                  type="search"
                  class="form-control form-control-lg text-right"
                  placeholder="¿Què vols buscar?"
                />
                <div class="input-group-append">
                  <button type="submit" class="btn btn-lg btn-secondary">
                    <i class="fa fa-search"></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-lg btn-secondary"
                    aria-expanded="true"
                    v-on:click="mostrarCerca"
                  >
                    <i class="fa fa-arrow-down"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- cerca avançada -->
        <div id="cerca" style="display: none">
          <cerca-component></cerca-component>
        </div>
        <div class="col-sm-12 text-center">
          <h1>Novetats</h1>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- tarjetes -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 card-deck mb-4">
            <div class="card card-primary text-center zoom">
              <img
                class="card-img-top p-4"
                src="../../../public/images/vendor/admin-lte/dist/prod-1.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <div class="card-title font-weight-bold">
                  Botes d'alta muntanya
                </div>
                <br />
                <div class="badge badge-warning badge-sm text-uppercase">
                  La botigueta del muntanyaire
                </div>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-outline-secondary btn-icon-right">
                  <span>Saber més</span>
                </a>
              </div>
            </div>
            <!-- /.card -->

            <div class="card card-primary text-center zoom">
              <img
                class="card-img-top p-4"
                src="../../../public/images/vendor/admin-lte/dist/prod-1.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <div class="card-title font-weight-bold">
                  Botes d'alta muntanya
                </div>
                <br />
                <div class="badge badge-warning badge-sm text-uppercase">
                  La botigueta del muntanyaire
                </div>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-outline-secondary btn-icon-right">
                  <span>Saber més</span>
                </a>
              </div>
            </div>
            <!-- /.card -->

            <div class="card card-primary text-center zoom">
              <img
                class="card-img-top p-4"
                src="../../../public/images/vendor/admin-lte/dist/prod-1.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <div class="card-title font-weight-bold">
                  Botes d'alta muntanya
                </div>
                <br />
                <div class="badge badge-warning badge-sm text-uppercase">
                  La botigueta del muntanyaire
                </div>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-outline-secondary btn-icon-right">
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
    <!-- /.tarjetes -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 card-deck mb-4">
            <div class="card" style="width: 20rem; height: 20rem">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Visitors Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->

            <div class="card" style="width: 20rem; height: 20rem">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Visitors Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->

            <div class="card" style="width: 20rem; height: 20rem">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Visitors Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 card-deck-->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.tarjetes -->
  </div>
  <!-- /.contingut pagina -->
</template>

<style>
.zoom {
  transition: transform 0.2s; /* Animation */
}

.zoom:hover {
  transform: scale(1.05); /* (150% zoom)*/
}
</style>

<script>
import CercaComponent from "./CercaComponent.vue";

export default {
  components: { CercaComponent },
  mounted() {
    console.log("Component mounted.");
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