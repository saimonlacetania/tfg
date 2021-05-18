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
            <div class="row">
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
                            <h3 class="widget-user-username text-right text-navy">{{ botiga.nom }}</h3>
                            <h5 class="widget-user-desc text-right text-navy">{{ botiga.poblacio }}</h5>
                        </div>
                        <div v-else class="widget-user-header text-white"
                            :style="'background: url(/images/botigues/unnamed.jpg); background-size: cover;'
                            ">
                            <h3 class="widget-user-username text-right text-white">{{ botiga.nom }}</h3>
                            <h5 class="widget-user-desc text-right text-white">{{ botiga.poblacio }}</h5>
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
                                        <h5 class="description-header">{{ botiga.productes.length }}</h5>
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
      </div>
    </section>
  </div>
</template>

<script>


export default {
  data() {
    return {
      botigues: "",
      keyword: "",      
      productes: "",      
      visites: 0,
    };
  },
  mounted() {

    axios.get("/api/productors").then((res) => {
      console.log(res.data);
      this.botigues = res.data;
    });
  },
};
</script>