<template>
  <div class="content-wrapper" id="contingut">
    <!-- cerca -->
    <div class="content-header">
      <div class="container-fluid">
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
                <button
                  type="submit"
                  class="btn btn-lg btn-secondary"
                  style="background-color: #ff6565"
                >
                  <i class="fa fa-search"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-lg btn-secondary"
                  aria-expanded="true"
                  v-on:click="mostrarCerca"
                  style="background-color: #ff6565"
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

        <div class="content w-100">
          <div class="container-fluid">
            <div class="row">
              <div
                :class="'col-md-4 card-deck mb-4 ml-2'"
                v-for="producte in productes"
                :key="producte.id"
              >
                <div :class="'card card-primary text-center zoom bg-light'">
                  <img
                    :class="'card-img-top p-3'"
                    :src="'/images/productes/' + producte.imatge"
                  />
                  <div :class="'card-body'">
                    <div :class="'card-title font-weight-bold'">
                      {{ producte.nom }}
                    </div>
                    <br />
                    <div :class="'badge badge-warning badge-sm text-uppercase'">
                      {{ producte.ref }}
                    </div>
                    <p :class="'card-text'">
                      {{ producte.descripcio }}
                    </p>
                  </div>
                  <div :class="'card-footer'">
                    <router-link
                      :to="{ name: 'Producte', params: { id: producte.id } }"
                      :class="'btn btn-outline-secondary btn-icon-right'"
                    >
                      <span>Saber més</span>
                    </router-link>
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
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <br>    

  </div>
  <!-- /.contingut pagina -->
</template>
<style>
.zoom {
  transition: transform 0.2s; /* Animation */
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