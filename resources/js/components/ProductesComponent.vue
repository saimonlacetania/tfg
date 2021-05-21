<template>
  <div class="content-wrapper" id="contingut">
    <!-- cerca -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- cerca -->
        <div class="col-md-12">
            <div class="input-group">
              <input
                v-model="keyword"
                type="text"
                class="form-control form-control-lg text-right"
                placeholder="¿Què vols buscar?"
              />
                <button
                  type="button"
                  class="btn btn-lg btn-secondary"
                  style="background-color: #ff6565; border:none; cursor:context-menu; pointer-events: none;"
                >
                  <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <br>
        <!-- /.col -->

        <div v-if="productes.length>0" class="content w-100">
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
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div :class="'card-title font-weight-bold text-uppercase col-md-10 text-center align-middle'">
                        {{ producte.nom }}
                      </div>
                      <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-4"></div>
                      <div :class="'col-md-4 badge badge-sm align-middle text-center'" style="background-color: #ff6565; color:white;">
                        Queden:
                        {{ producte.stock }}
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                    <br>
                    <div class="row" style="margin-bottom:-10%;">
                      <div class="col-md-1"></div>
                      <div :class="'card-text col-md-10 text-justify'">
                        {{ producte.descripcio }}
                      </div>
                      <div class="col-md-1"></div>
                  </div>
                </div>
                  <div :class="'card-footer bg-light'" style="border:none;">
                    <router-link
                      :to="{ name: 'Producte', params: { id: producte.id } }"
                      :class="'btn btn-outline-secondary'"
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
        <div v-else class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 mt-3">
              <hr>
              <h3><i class="fas fa-heart-broken" style="color:#ff6565;"></i> Oops! <br><small>No hi ha resultats per el que busques.</small></h3>
          </div>
          <div class="col-md-4"></div>         
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


export default {
  data() {
    return {
      productes: "a",
      keyword: ""
    };
  },
  mounted() {
    this.loading();
    axios.get("/api/productes").then((res) => {
      this.productes = res.data;
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
    });
  },
  watch: {
        keyword(after, before) {
            this.cercaProductes();
        }
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
    cercaProductes() {
      if (this.keyword=="" || this.keyword==" ") {
        axios.get("/api/productes").then((res) => {
          this.productes = res.data;
        });
      } else {
        axios.get('api/productesCerca/'+this.keyword).then((res) => {
          this.productes = res.data;
        });
      }
    }
  },
};
</script>