<template>
  <div class="content-wrapper" id="contingut">
    <!-- cerca -->
    <div class="content-header">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card bg-dark text-white" style="border:none;">
              <img src="/images/welcome.jpg" class="card-img" alt="...">
            </div>
          </div>
        </div>

        <br><br>

        <div class="col-sm-12 mt-4">
          <h1 class="text-center">¿Perquè Mercat Virtual?</h1>
        </div>

        <br><br>

        <div class="row ml-2">
          <div class="col-md-1"></div>
            <div class="card" style="width: 18rem; background:transparent !important; border:none; box-shadow: none;">
              <img src="images/granja.png" class="float-left ml-5" alt="..." style="width:200px; height:200px; border-radius:250px;">
              <div class="card-body text-center">
                <h5 class="card-title">Empoderem el petit productor</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; background:transparent !important; border:none; box-shadow: none;">
              <img src="images/market.png" class="float-left ml-5" alt="..." style="width:200px; height:200px; border-radius:250px;">
              <div class="card-body text-center">
                <h5 class="card-title">Recuperem el mercat</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; background:transparent !important; border:none; box-shadow: none;">
              <img src="images/hands.png" class="float-left ml-5" alt="..." style="width:200px; height:200px; border-radius:250px;">
              <div class="card-body text-center">
                <h5 class="card-title">Creem sinergia</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
        </div>

          <!-- cerca -->
          <!--<div class="col-md-12">
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
          </div>-->
          <!-- /.col -->

        <!-- cerca avançada -->
        <!--<div id="cerca" style="display: none">
          <cerca-component></cerca-component>
        </div> -->
        <div class="col-sm-12 mt-4">
          <h1 class="text-center" style="color:#ff6565;">El KM0 més a prop que mai</h1>
          <h4 class="text-center">productes únics de professionals locals</h4>
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
            <button type="submit" class="btn btn-block text-center mt-5 text-light" style="background-color:#ff6565;">
              <i class="fa fa-heart"></i>
              Descobreix-lo!
            </button>
          </div>
          <div class="col-md-4"></div>
        </div>

        <br>


      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
                                
    <hr>

    <!-- tarjetes -->
    <div class="content mt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 card-deck mb-4">
            <div class="card card-primary text-center zoom">
              <img
                class="card-img-top p-4"
                src="/images/vendor/admin-lte/dist/prod-1.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <div class="card-title font-weight-bold">
                  Botes d'alta muntanya
                </div>
                <br />
                <div class="badge badge-sm text-uppercase" style="background: #ff6565; color:white; border-radius:10px;">
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
                src="/images/vendor/admin-lte/dist/prod-1.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <div class="card-title font-weight-bold">
                  Botes d'alta muntanya
                </div>
                <br />
                <div class="badge badge-sm text-uppercase" style="background: #ff6565; color:white; border-radius:10px;">
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
                src="/images/vendor/admin-lte/dist/prod-1.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <div class="card-title font-weight-bold">
                  Botes d'alta muntanya
                </div>
                <br />
                <div class="badge badge-sm text-uppercase" style="background: #ff6565; color:white; border-radius:10px;">
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
    console.log("Productes mounted.");
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