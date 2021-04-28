<style>

.nav-link.active{
    background-color: red !important;
    color: white !important;
}
.nav-link {
    text-decoration:none !important;
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
                        <h1>El meu perfil</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-dark card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="../../../node_modules/admin-lte/dist/img/user2-160x160.jpg"
                                        alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Nom login</h3>

                                <p class="text-muted text-center"><i class="fas fa-map-marker-alt"></i> Població</p>

                                <a href="#" class="btn btn-secondary btn-block"><b>Configuració</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-dark">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity"
                                            data-toggle="tab">Les meves comandes</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline"
                                            data-toggle="tab">Tornar a comprar</a></li>
                                </ul>
                            </div><!-- /.card-header -->

                            <!-- les meves comandes -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img
                                                    src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"
                                                    alt="..."
                                                    class="img-fluid p-1 ml-4"
                                                    style="height: 150px; width: 150px; border-radius:150px;"
                                                />
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Producte</h5>
                                                        <p class="card-text">
                                                        This is a wider card with supporting text below as a natural lead-in to
                                                        additional content. This content is a little bit longer.
                                                        </p>
                                                        <p class="card-text">
                                                            <small class="text-muted">Comprat el 26/04/2021</small>
                                                        </p>
                                                    </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="card mb-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img
                                                    src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"
                                                    alt="..."
                                                    class="img-fluid p-1 ml-4"
                                                    style="height: 150px; width: 150px; border-radius:150px;"
                                                />
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Producte</h5>
                                                        <p class="card-text">
                                                        This is a wider card with supporting text below as a natural lead-in to
                                                        additional content. This content is a little bit longer.
                                                        </p>
                                                        <p class="card-text">
                                                            <small class="text-muted">Comprat el 26/04/2021</small>
                                                        </p>
                                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div><!-- /.les meves comandes -->                     

                                    <!-- TIMELINE tornar a comprar -->
                                    <div class="tab-pane" id="timeline">
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
                                                <i class="fas fa-gift bg-maroon"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="fas fa-store-alt"></i><a href="#"> Nom Botiga</a></span>

                                                    <h3 class="timeline-header">Nom del producte</h3>

                                                    <small class="timeline-body">Descripcio producte</small>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-gift bg-maroon"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="fas fa-store-alt"></i><a href="#"> Nom Botiga</a></span>

                                                    <h3 class="timeline-header">Nom del producte</h3>

                                                    <small class="timeline-body">Descripcio producte</small>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-gift bg-maroon"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="fas fa-store-alt"></i><a href="#"> Nom Botiga</a></span>

                                                    <h3 class="timeline-header">Nom del producte</h3>

                                                    <small class="timeline-body">Descripcio producte</small>
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
                                                    <span class="time"><i class="fas fa-store-alt"></i><a href="#"> Nom Botiga</a></span>

                                                    <h3 class="timeline-header">Nom del producte</h3>

                                                    <small class="timeline-body">Descripcio producte</small>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
</template>



<script>
    export default {
        mounted() {
            console.log("Component mounted.");
        },
    };

</script>
