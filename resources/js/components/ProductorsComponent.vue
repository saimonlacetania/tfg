<template>
  <div class="content-wrapper" id="contingut">
    <section class="content pt-3">
      <div class="container-fluid">
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
            <div v-if="botigues.length>0" class="row">
                <div
                    :class="'col-md-4 card-deck mb-4 ml-2'"
                    v-for="botiga in botigues"
                    :key="botiga.id">

                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user zoom">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div v-if="botiga.img_portada" class="widget-user-header text-white"
                            :style="'background: url(/images/botigues/' + botiga.img_portada +'); background-size: cover;'
                            ">
                            <h3 class="titolP text-right">{{ botiga.nom }}</h3>
                            <h5 class="titolP text-right">{{ botiga.poblacio }}</h5>
                            
                        </div>
                        <div v-else class="widget-user-header text-white"
                            :style="'background: url(/images/botigues/unnamed.jpg); background-size: cover;'
                            ">
                            <h3 class="titolP text-right">{{ botiga.nom }}</h3>
                            <h5 class="titolP text-right">{{ botiga.poblacio }}</h5>
                            
                        </div>

                        <div class="widget-user-image">
                            <img v-if="botiga.img_perfil" class="img-circle elevation-2" :src="'/images/botigues/' + botiga.img_perfil" alt="User Avatar">
                            <img v-else class="img-circle elevation-2" :src="'/images/botigues/default.jpg'" alt="User Avatar">
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="description-block">
                                        <h6 class="description-header">{{ botiga.visites_total }}</h6>
                                        <small class="description-text">visites</small>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-2">
                                    <div class="description-block"></div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-5">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ botiga.productes_total}}</h5>
                                        <small class="description-text">productes</small>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h5 class="">{{ botiga.nom }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <h6 class="text-center">
                                    {{ botiga.descripcio }}
                                    </h6>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10 text-center zoom">
                                    <router-link
                                        :to="{ name: 'PerfilBotiga', params: { id: botiga.id } }"
                                        :class="'btn text-white'"
                                        style="background:#ff6565;">
                                        <span>Visita!</span>
                                    </router-link>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- /.col-md-6 card-deck-->
            </div>
            <!-- /.row -->
            <div v-else class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4 mt-3">
                  <hr>
                  <h3><i class="fas fa-heart-broken" style="color:#ff6565;"></i> Oops! <br><small>No hi ha resultats per el que busques.</small></h3>
              </div>
              <div class="col-md-4"></div>         
            </div>
      </div>
    </section>
  </div>
</template>

<style>
@media (min-width:790px){
  .titolP {
    color: #ff6565;
    text-shadow: 2px 2px 2px rgb(34, 34, 34);
    white-space: nowrap;
    width: 100%;
    font-size: 1.5vw;
    object-fit: cover;
  }
}
@media (max-width:790px){
  .titolP {
  color: #ff6565;
  text-shadow: 2px 2px 2px rgb(34, 34, 34);
  width: 100%;
  object-fit: cover;
  }
}

</style>

<script>

export default {
  data() {
    return {
      botigues: "a",
      keyword: "",      
     
      visites: 0,
    };
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
    cercaProductors() {
      if (this.keyword=="" || this.keyword==" ") {
        axios.get("/api/productors").then((res) => {
          this.botigues = res.data;
        });
      } else {
        axios.get('api/productorsCerca/'+this.keyword).then((res) => {
          this.botigues = res.data;
        });
      }
    }
  },
  watch: {
        keyword(after, before) {
            this.cercaProductors();
        }
    },
  mounted() {
    this.loading();
    axios.get("/api/productors").then((res) => {
      this.botigues = res.data;
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
};
</script>