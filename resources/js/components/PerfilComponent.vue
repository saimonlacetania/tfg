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
                                <p> Nom: {{ this.user.nom }}</p> 
                                <p> Cognoms: {{ this.user.cognoms }}</p>
                                <p> Email: {{ this.user.email }} </p>
                                <p> Telefon: {{ this.user.telefon }}</p>
                                <p> Direcció: {{ this.user.direccio }}</p> 
                                <p> CP: {{ this.user.cp }}</p> 
                                <p> Població: {{ this.user.poblacio }}</p> 
                                <p> Provincia: {{ this.user.provincia }}</p> 
                                <p> Data de naixement: {{ this.user.data_naix }}</p> 

                                

                                
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
                                    <li class="nav-item"><a class="nav-link" href="#settings"
                                            data-toggle="tab">Llista de desitjos</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <!-- Post -->
                                        <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="../../../node_modules/admin-lte/dist/img/user2-160x160.jpg"
                                                    alt="user image">
                                                <span class="username">
                                                    <a href="#">Jonathan Burke Jr.</a>
                                                    <a href="#" class="float-right btn-tool"><i
                                                            class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Shared publicly - 7:30 PM today</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Lorem ipsum represents a long-held tradition for designers,
                                                typographers and the like. Some people hate it and argue for
                                                its demise, but others ignore the hate as they create awesome
                                                tools to help create filler text for everyone from bacon lovers
                                                to Charlie Sheen fans.
                                            </p>

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i
                                                        class="fas fa-share mr-1"></i> Share</a>
                                                <a href="#" class="link-black text-sm"><i
                                                        class="far fa-thumbs-up mr-1"></i> Like</a>
                                                <span class="float-right">
                                                    <a href="#" class="link-black text-sm">
                                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                                    </a>
                                                </span>
                                            </p>

                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Type a comment">
                                        </div>
                                        <!-- /.post -->

                                        <!-- Post -->
                                        <div class="post clearfix">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="../../../node_modules/admin-lte/dist/img/user2-160x160.jpg"
                                                    alt="User Image">
                                                <span class="username">
                                                    <a href="#">Sarah Ross</a>
                                                    <a href="#" class="float-right btn-tool"><i
                                                            class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Sent you a message - 3 days ago</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Lorem ipsum represents a long-held tradition for designers,
                                                typographers and the like. Some people hate it and argue for
                                                its demise, but others ignore the hate as they create awesome
                                                tools to help create filler text for everyone from bacon lovers
                                                to Charlie Sheen fans.
                                            </p>

                                            <form class="form-horizontal">
                                                <div class="input-group input-group-sm mb-0">
                                                    <input class="form-control form-control-sm" placeholder="Response">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-danger">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.post -->

                                        <!-- Post -->
                                        <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="../../../node_modules/admin-lte/dist/img/user2-160x160.jpg"
                                                    alt="User Image">
                                                <span class="username">
                                                    <a href="#">Adam Jones</a>
                                                    <a href="#" class="float-right btn-tool"><i
                                                            class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Posted 5 photos - 5 days ago</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <div class="row mb-3">
                                                <div class="col-sm-6">
                                                    <img class="img-fluid"
                                                        src="../../../node_modules/admin-lte/dist/img/photo1.png"
                                                        alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <img class="img-fluid mb-3"
                                                                src="../../../node_modules/admin-lte/dist/img/photo2.png"
                                                                alt="Photo">
                                                            <img class="img-fluid"
                                                                src="../../../node_modules/admin-lte/dist/img/photo3.jpg"
                                                                alt="Photo">
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-sm-6">
                                                            <img class="img-fluid mb-3"
                                                                src="../../../node_modules/admin-lte/dist/img/photo4.jpg"
                                                                alt="Photo">
                                                            <img class="img-fluid"
                                                                src="../../../node_modules/admin-lte/dist/img/photo1.png"
                                                                alt="Photo">
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i
                                                        class="fas fa-share mr-1"></i> Share</a>
                                                <a href="#" class="link-black text-sm"><i
                                                        class="far fa-thumbs-up mr-1"></i> Like</a>
                                                <span class="float-right">
                                                    <a href="#" class="link-black text-sm">
                                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                                    </a>
                                                </span>
                                            </p>

                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Type a comment">
                                        </div>
                                        <!-- /.post -->
                                    </div>
                                    <!-- /.tab-pane -->

                                    <!-- grid llista desitjos -->
                                    <div class="tab-pane" id="settings">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Les meves llistes</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                                    <table class="table table-head-fixed text-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Nom llista</th>
                                                                <th>Rol</th>
                                                                <th>Creada</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>183</td>
                                                                <td>John Doe</td>
                                                                <td>11-7-2014</td>
                                                            </tr>
                                                            <tr>
                                                                <td>219</td>
                                                                <td>Alexander Pierce</td>
                                                                <td>11-7-2014</td>
                                                            </tr>
                                                            <tr>
                                                                <td>657</td>
                                                                <td>Bob Doe</td>
                                                                <td>11-7-2014</td>
                                                            </tr>
                                                            <tr>
                                                                <td>175</td>
                                                                <td>Mike Doe</td>
                                                                <td>11-7-2014</td>
                                                            </tr>
                                                            <tr>
                                                                <td>134</td>
                                                                <td>Jim Doe</td>
                                                                <td>11-7-2014</td>
                                                            </tr>
                                                            <tr>
                                                                <td>494</td>
                                                                <td>Victoria Doe</td>
                                                                <td>11-7-2014</td>
                                                            </tr>
                                                            <tr>
                                                                <td>832</td>
                                                                <td>Michael Doe</td>
                                                                <td>11-7-2014</td>
                                                            </tr>
                                                            <tr>
                                                                <td>982</td>
                                                                <td>Rocky Doe</td>
                                                                <td>11-7-2014</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                            <!-- /.row -->

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
        data() {
            return {
            user: "",
            };
        },
        mounted() {
            axios.get("/api/user").then((res) => {
                this.user = res.data;
            });
            console.log(this.user);
        },
        
    };

</script>
