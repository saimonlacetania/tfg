<template>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row h-100"></div>
                    <div class="row">
                        <div class="error-page">
                            <h2 class="headline" style="color:#ff6565;"> 404</h2>

                            <div class="error-content">
                                <h3><i class="fas fa-exclamation-triangle" style="color:#ff6565;"></i> Oops! <br><small>No hem trobat la pàgina que busques</small></h3>

                                <p>
                                    No hem pogut trobar la pàgina que busques
                                    mentres,<br>pots tornar a l'inici clickant el següent botó
                                </p>  
                                
                                
                                    <router-link :to="'/'" class="nav-item input-group-append col-md-10">
                                        <button type="submit" name="submit" class="btn btn-warning btn-block zoom" style="background-color:#ff6565; border:none; color:white;">
                                            <i class="fas fa-home fa-2x"></i>
                                        </button>
                                    </router-link>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</template>

<script>
export default {
    
}
</script>