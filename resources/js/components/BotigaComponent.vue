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
        <!--<h1>Component botiga</h1>
        <h2>{{this.botiga.nom}}</h2>
        <h2>{{this.botiga.descripcio}}</h2>-->

        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-navy card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                :src="'/images/avatars/' + this.user.profile_pic"
                                alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{this.user.nom}}</h3>
                        <p class="text-muted text-center">{{this.botiga.descripcio}}</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> {{this.botiga.poblacio}}</strong>
                                <div class="text-muted">{{this.botiga.direccio}}</div>  
                                <small><p class="text-muted">{{this.botiga.provincia}}</p></small>                                 
                            </li>
                            <li class="list-group-item">
                                <strong><i class="far fa-address-card mr-1"></i> Contacte</strong>
                                <div class="text-muted">{{this.botiga.email}}</div>  
                                <small><p class="text-muted">{{this.botiga.telf_1}}</p></small>  
                            </li>
                            <li class="list-group-item">
                                <i class="fab fa-instagram mr-1"></i> {{this.botiga.instagram}}<br>
                                <i class="fab fa-facebook mr-1"></i> {{this.botiga.facebook}}<br>
                                <i class="fab fa-twitter mr-1"></i> {{this.botiga.twitter}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-navy card-outline">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#mod_perfil" data-toggle="tab" style="color:#0a0421 !important;">Modificar perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#puja_producte" data-toggle="tab" style="color:#0a0421 !important;">Pujar productes</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-header -->

                <!-- les meves comandes -->
                <div class="card-body">
                    <div class="tab-content">
                    <div class="active tab-pane" id="mod_perfil">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <label for="nom_botiga">Nom</label>
                                        <input type="text" class="form-control" id="nom_botiga" placeholder="Nom">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <label for="descripcio_botiga">Descripció</label>
                                        <input type="text" class="form-control" id="descripcio_botiga" placeholder="Descripció">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <label for="telf_1_botiga">Telèfon</label>
                                        <input type="text" class="form-control" id="telf_1_botiga" placeholder="Telèfon">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="telf_2_botiga">Telèfon</label>
                                        <input type="text" class="form-control" id="telf_2_botiga" placeholder="Telèfon">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                    </div>
                    <!-- /.les meves comandes -->

                    <!-- TIMELINE tornar a comprar -->
                    <div class="tab-pane" id="puja_producte">
                        <!-- The timeline -->
                        <div class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-secondary">
                            <i class="far fa-calendar-alt"></i>
                            26/04/2021
                            </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <router-link :to="'AfegirProducte'">
                                <p class="text-dark">
                                    Afegir Producte
                                </p>
                            </router-link>
                            <i class="fas fa-gift bg-maroon"></i>
                            <div class="timeline-item">
                            <span class="time"
                                ><i class="fas fa-store-alt"></i
                                ><a href="#"> Nom Botiga</a></span
                            >

                            <h3 class="timeline-header">Nom del producte</h3>

                            <small class="timeline-body"
                                >Descripcio producte</small
                            >
                            </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-gift bg-maroon"></i>
                            <div class="timeline-item">
                            <span class="time"
                                ><i class="fas fa-store-alt"></i
                                ><a href="#"> Nom Botiga</a></span
                            >

                            <h3 class="timeline-header">Nom del producte</h3>

                            <small class="timeline-body"
                                >Descripcio producte</small
                            >
                            </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-gift bg-maroon"></i>
                            <div class="timeline-item">
                            <span class="time"
                                ><i class="fas fa-store-alt"></i
                                ><a href="#"> Nom Botiga</a></span
                            >

                            <h3 class="timeline-header">Nom del producte</h3>

                            <small class="timeline-body"
                                >Descripcio producte</small
                            >
                            </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-secondary">
                            <i class="far fa-calendar-alt"></i>
                            27/10/2020
                            </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-gift bg-maroon"></i>
                            <div class="timeline-item">
                            <span class="time"
                                ><i class="fas fa-store-alt"></i
                                ><a href="#"> Nom Botiga</a></span
                            >

                            <h3 class="timeline-header">Nom del producte</h3>

                            <small class="timeline-body"
                                >Descripcio producte</small
                            >
                            </div>
                        </div>
                        <!-- END timeline item -->
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

<script>
export default {
    data() {
        return {
            botiga: "",
            user: "",
            formulari_dades: ""
        };
    },
    mounted() {
        axios.get("/api/user").then((res) => {
                this.user = res.data;
            }).then(
        axios.get("/api/botiga").then(res2 => {
            console.log(this.user.id);
            for (let b in res2.data) {
                if (res2.data[b].id_usuari==this.user.id) {
                    this.botiga = res2.data[b]
                }
            }
        }));
        
        
        
    },

};
</script>