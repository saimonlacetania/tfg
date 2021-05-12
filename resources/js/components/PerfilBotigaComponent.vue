<template>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header text-white" style="background: url('/images/photo1.png') center center; height:300px;">
                                <h3 class="widget-user-username text-right">{{ this.botiga.nom }}</h3>
                                <h5 class="widget-user-desc text-right">{{ this.user.nom }}</h5>
                            </div>
                            <div class="widget-user-image pt-5">
                                <img 
                                    v-if="this.botiga.img_perfil"
                                    class="img-circle border-4" 
                                    :src="'/images/botigues/' + this.botiga.img_perfil" 
                                    alt="Shop profile picture" 
                                    style="height:200px; width:200px; margin-top:25%; margin-left:-30%;"
                                />
                                <img 
                                    v-else
                                    class="img-circle border-4" 
                                    :src="'/images/botigues/default.png'" 
                                    alt="Shop profile picture" 
                                    style="height:200px; width:200px; margin-top:25%; margin-left:-30%;"
                                />
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">3,200</h5>
                                            <span class="description-text">VISITES</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4"></div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">35</h5>
                                            <span class="description-text">PRODUCTES</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <hr>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">{{ this.botiga.nom }}</h4>
                                    </div>
                                    <div class="col-md-5">
                                        <hr>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <h5 class="text-center">
                                            {{ this.botiga.descripcio }}
                                        </h5>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <h5><li class="fab fa-instagram mr-1 "></li> {{ this.botiga.instagram }}</h5>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h5><li class="fab fa-facebook mr-1"></li> {{ this.botiga.facebook }}</h5>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h5><li class="fab fa-twitter mr-1"></li> {{ this.botiga.twitter }}</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"></div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-block text-center mt-3 text-light zoom" style="background-color:#ff6565;">
                                            <i class="fa fa-heart"></i>
                                            Contacta!
                                        </button>
                                    </div>
                                </div>
                                <hr>
                            </div>
                                
                        </div>
                        <!-- /.widget-user -->
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="content w-100">
                <div class="container-fluid">
                    <div class="row">
                    <div
                        :class="'col-md-4 card-deck mb-4'"
                        v-for="producte in productes"
                        :key="producte.id"
                    >
                        <div :class="'card card-primary text-center zoom'">
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
        </section>
    </div>
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
            productes: "",
            botiga:"",
            id:"",
            user:""
        };
    },
    mounted() {
        console.log("Perfil botiga mounted");

        axios.get("/api/perfil/" + this.$route.params.id).then((res) => {
            this.id = res.data.id;
        });

        axios.get("/api/productesBotiga/"+this.$route.params.id).then((res) => {
        this.productes = res.data;
        });

        axios.get("/api/perfilBotiga/"+this.$route.params.id).then((res) => {
        this.botiga = res.data[0];
        });

        axios.get("/api/user/" + this.$route.params.id).then((res) => {
            this.user = res.data[0];
        });

    },
  methods: {
  },
};
</script>