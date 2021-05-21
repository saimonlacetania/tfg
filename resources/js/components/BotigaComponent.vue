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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>El meu perfil</h1>
                </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-dark card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img 
                                v-if="this.botiga.img_perfil"
                                class="profile-user-img img-fluid img-circle"
                                :src="'/images/botigues/' + this.botiga.img_perfil"
                                alt="Shop profile picture"
                                />
                                <img 
                                v-else
                                class="profile-user-img img-fluid img-circle"
                                :src="'/images/botigues/default.jpg'"
                                alt="Shop profile picture"
                                />
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
                            <li v-if="this.botiga.instagram != null || this.botiga.twitter != null || this.botiga.facebook != null " class="list-group-item">
                                <i v-if="this.botiga.instagram" class="fab fa-instagram mr-1"></i> {{this.botiga.instagram}}<br>
                                <i v-if="this.botiga.facebook" class="fab fa-facebook mr-1"></i> {{this.botiga.facebook}}<br>
                                <i v-if="this.botiga.twitter" class="fab fa-twitter mr-1"></i> {{this.botiga.twitter}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-dark">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#mod_perfil" data-toggle="tab">Modificar perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#editarProductes" data-toggle="tab" >Editar productes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#puja_producte" data-toggle="tab" >Pujar productes</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-header -->

                <!-- les meves comandes -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="mod_perfil">
                            <div class="card-body register-card-body">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <label for="nom_botiga">Nom</label>
                                            <input type="text" class="form-control" id="nom_botiga" placeholder="Nom" v-model="$data.form_botiga.nom">
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <label for="descripcio_botiga">Descripció</label>
                                            <input type="text" class="form-control" id="descripcio_botiga" placeholder="Descripció" v-model="$data.form_botiga.descripcio">
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <div class="input-group mb-3" v-if="errors.telf_1">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.telf_1[0] }}</label>
                                            </div>
                                            <label for="telf_1">Telèfon</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="telf_1" placeholder="Telèfon" v-model="$data.form_botiga.telf_1">                                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone" style="color:#ff6565;"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group mb-3" v-if="errors.telf_2">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.telf_2[0] }}</label>
                                            </div>
                                            <label for="telf_2">Telèfon</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="telf_2" placeholder="Telèfon" v-model="$data.form_botiga.telf_2">                                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone" style="color:#ff6565;"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3" v-if="errors.email">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.email[0] }}</label>
                                            </div>
                                            <label for="email_botiga">Email</label>
                                            <input type="email" class="form-control" id="email_botiga" placeholder="Email" v-model="$data.form_botiga.email">
                                        </div>
                                        <div class="col-md-1"></div>                                    
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3" v-if="errors.direccio">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.direccio[0] }}</label>
                                            </div>
                                            <label for="direccio_botiga">Direcció</label>
                                            <input type="text" class="form-control" id="direccio_botiga" placeholder="Direcció" v-model="$data.form_botiga.direccio">
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3" v-if="errors.cp">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.cp[0] }}</label>
                                            </div>
                                            <label for="cp_botiga">Codi postal</label>
                                            <input type="text" class="form-control" id="cp_botiga" placeholder="Codi postal" v-model="$data.form_botiga.cp">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group mb-3" v-if="errors.poblacio">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.poblacio[0] }}</label>
                                            </div>
                                            <label for="poblacio_botiga">Població</label>
                                            <input type="text" class="form-control" id="poblacio_botiga" placeholder="Població" v-model="$data.form_botiga.poblacio">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="input-group mb-3" v-if="errors.provincia">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.provincia[0] }}</label>
                                                </div>
                                                <label for="provincia_botiga">Província</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option>Barcelona</option>
                                                    <option>Girona</option>
                                                    <option>Tarragona</option>
                                                    <option>Lleida</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <div class="input-group mb-3" v-if="errors.cif">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.cif[0] }}</label>
                                            </div>
                                            <label for="cif_botiga">CIF</label>
                                            <input type="text" class="form-control" id="cif_botiga" placeholder="CIF" v-model="$data.form_botiga.cif">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group mb-3" v-if="errors.nif">
                                                <label class="col-form-label" for="number"><i class="far fa-times-circle"></i>
                                                    {{ errors.nif[0] }}</label>
                                            </div>
                                            <label for="nif_botiga">NIF</label>
                                            <input type="text" class="form-control" id="nif_botiga" placeholder="NIF" v-model="$data.form_botiga.nif">
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <label for="instagram_botiga">Instagram</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="instagram_botiga" placeholder="@instagram" v-model="$data.form_botiga.instagram">                                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-instagram" style="color:#ff6565;"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="facebook_botiga">Facebook</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="facebook_botiga" placeholder="@facebook" v-model="$data.form_botiga.facebook">                                            
                                                <div class="input-group-append">
                                                    <div class="input-group-text" style="color:#ff6565;">
                                                        <span class="fab fa-facebook-f"></span>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="twitter_botiga">Twitter</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="twitter_botiga" placeholder="@twitter" v-model="$data.form_botiga.twitter">                                           
                                                <div class="input-group-append">
                                                    <div class="input-group-text" style="color:#ff6565;">
                                                        <span class="fab fa-twitter"></span>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <label for="img_perfil">Imatge de perfil</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input 
                                                        @change="fileSelected"
                                                        type="file" 
                                                        class="custom-file-input" 
                                                        id="img_perfil"
                                                    >
                                                    <label v-if="!files || !files.length" class="custom-file-label" for="img_perfil">Tria un fitxer</label>
                                                    <span v-else>
                                                        <label v-for="file1 in files" :key="file1.name" class="custom-file-label" for="img_perfil">
                                                            <span v-if="file1.id=='img_perfil'">
                                                                {{file1.file[0].name}}
                                                            </span>
                                                            <span v-else>
                                                                Tria un fitxer
                                                            </span>
                                                        </label>
                                                    </span>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-image"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="img_portada">Imatge de portada</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input 
                                                        @change="fileSelected"
                                                        type="file" 
                                                        class="custom-file-input" 
                                                        id="img_portada"
                                                    >
                                                    <label v-if="!files || !files.length" class="custom-file-label" for="img_portada">Tria un fitxer</label>
                                                    <span v-else>
                                                        <label v-for="file2 in files" :key="file2.name" class="custom-file-label" for="img_portada">
                                                            <span v-if="file2.id=='img_portada'">
                                                                {{file2.file[0].name}}
                                                            </span>
                                                            <span v-else>
                                                                Tria un fitxer
                                                            </span>
                                                        </label>
                                                    </span>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-image"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <button class="btn btn-block text-center mt-5 text-light zoom" style="background-color:#ff6565;"

                                            @click.prevent="saveBotiga"
                                            type="submit">                 

                                            Guardar
                                            </button>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- /.les meves comandes -->

                    <div class="tab-pane" id="editarProductes">
                        
                        <div class="content w-100">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Llistat de productes</h3>
                                    </div>
                                    <div v-if="productes.length>0" class="card-body table-responsive">
                                        <table class="table">
                                        <thead class="">
                                            <tr>
                                            <th>Ref.</th>
                                            <th>Nom</th>
                                            <th>Stock</th>
                                            <th>Preu</th>
                                            <th class="text-right">Actiu</th>
                                            <th class="text-right"></th>
                                            <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <tr v-for="producte in productes" :key="producte.id">
                                                <td>{{ producte.ref }}</td>
                                                <td>{{ producte.nom }}</td>
                                                <td>
                                                    <button
                                                    class="btn pl-0"
                                                    style="background-color: transparent"
                                                    v-on:click="restarStock(producte.id)"
                                                    >
                                                    <i class="fas fa-minus"></i>
                                                    </button>
                                                    {{ producte.stock }}
                                                    <button
                                                    class="btn pr-0"
                                                    style="background-color: transparent"
                                                    v-on:click="sumarStock(producte.id)"
                                                    >
                                                    <i class="fas fa-plus"></i>
                                                    </button>
                                                </td>
                                                <td>{{ producte.preu }} €</td>

                                                <td v-if="producte.actiu==1" class="text-right">
                                                    <input 
                                                    v-on:change="canviEstat(producte.id)"
                                                    class="form-check-input"   
                                                    type="checkbox"
                                                    value="true" 
                                                    id="actiu"
                                                    checked>
                                                </td>
                                                <td v-if="producte.actiu==0" class="text-right">
                                                    <input 
                                                    v-on:change="canviEstat(producte.id)"
                                                    class="form-check-input"   
                                                    type="checkbox" 
                                                    value="false" 
                                                    id="actiu">
                                                </td>
                                                <td class="text-right">
                                                    <div class="btn-group"
                                                    ><button
                                                        class="btn btn-info"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Editar producte"
                                                        @click="editarProducte(producte.id)"
                                                    >
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                                                                   
                                                    <button
                                                        class="btn btn-danger"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar producte"
                                                        @click="eliminarProducte(producte.id)"
                                                    >
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div v-else class="card-body table-responsive">
                                        <h4>No hi ha productes.</h4>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                    </div>

                    <!-- Pujar producte -->
                    <div class="tab-pane" id="puja_producte">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">

                                <form>                                    
                                    <div class="card-body register-card-body">

                                        <div class="form-group mb-3">
                                            <label for="imatge">Imatge del Producte</label>
                                            <div class="input-group">
                                            <div class="custom-file">
                                                <input 
                                                    @change="fileSelected"
                                                    type="file" 
                                                    class="custom-file-input" 
                                                    id="img_producte"
                                                >
                                                <label v-if="!files || !files.length" class="custom-file-label" for="img_producte">Tria un fitxer</label>
                                                <span v-else>
                                                    <label v-for="file3 in files" :key="file3.name" class="custom-file-label" for="img_producte">
                                                        <span v-if="file3.id=='img_producte'">
                                                        {{file3.file[0].name}}
                                                        </span>
                                                        <span v-else>
                                                            Tria un fitxer
                                                        </span>
                                                    </label>
                                                </span>
                                            </div>
                                            
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fas fa-image"></i>
                                                </span>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group mb-3" v-if="errors.ref">
                                                <label class="col-form-label" for="number"
                                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
                                                    {{ errors.ref[0] }}</label
                                                >
                                                <br />
                                            </div>
                                            <input
                                                name="ref"
                                                type="text"
                                                class="form-control"
                                                placeholder="Referència"
                                                v-model="form.ref"
                                            />
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-asterisk" style="color:#ff6565;"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group mb-3" v-if="errors.nom">
                                                <label class="col-form-label" for="number"
                                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
                                                    {{ errors.nom[0] }}</label
                                                >
                                                <br />
                                            </div>
                                            <input
                                                name="nom"
                                                type="text"
                                                class="form-control"
                                                placeholder="Nom"
                                                v-model="form.nom"
                                            />
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="categoria">Categoria</label>
                                            <select 
                                                class="form-control" 
                                                id="categoria"
                                                v-model="form.categoria">
                                                    <option v-for="categoria in categories" :key="categoria.id" :value="categoria.id">
                                                        {{categoria.nom}}
                                                    </option>
                                            </select>
                                        </div>

                                        <label for="desc">Descripcio del producte</label><br />
                                        <div class="form-group mb-3">
                                            <div class="input-group mb-3" v-if="errors.desc">
                                                <label class="col-form-label" for="number"
                                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
                                                    {{ errors.desc[0] }}</label
                                                >
                                                <br />
                                            </div>
                                            
                                            <textarea 
                                                class="form-control" 
                                                type="text"
                                                id="desc" 
                                                name="desc"
                                                v-model="form.desc"
                                                rows="3">
                                            </textarea>
                                            
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group mb-3" v-if="errors.preu">
                                                <label class="col-form-label" for="number"
                                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
                                                    {{ errors.preu[0] }}</label
                                                >
                                                <br />
                                            </div>
                                            <input
                                                type="number"
                                                class="form-control"
                                                placeholder="Preu"
                                                name="preu"
                                                v-model="form.preu"
                                            />
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-euro-sign" style="color:#ff6565;"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group mb-3" v-if="errors.stock">
                                                <label class="col-form-label" for="number"
                                                    ><i class="far fa-times-circle" style="color:#ff6565;"></i>
                                                    {{ errors.stock[0] }}</label
                                                >
                                                <br />
                                            </div>
                                            <input
                                                type="number"
                                                class="form-control"
                                                placeholder="Stock"
                                                name="stock"
                                                v-model="form.stock"
                                            />
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-layer-group" style="color:#ff6565;"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input 
                                                        class="form-check-input"   
                                                        type="checkbox" 
                                                        value="0" 
                                                        id="actiu"
                                                        v-model="form.actiu">
                                                    <label class="form-check-label" for="actiu">
                                                        Producte actiu
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <!-- /.col -->
                                            <div class="col text-center">
                                                <button
                                                    @click.prevent="saveForm"
                                                    type="submit"
                                                    class="btn btn-secondary zoom"
                                                    style="background-color:#ff6565; border:none;"
                                                >
                                                    Puja producte
                                                </button>
                                            </div>
                                            <!-- /.col -->
                                            <br />
                                        </div>
                                    </div>
                                    <!-- /.form-box -->
                                </form>
                            </div>
                            <div class="col-md-1"></div>
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
            form: {
                imatge: null,
                ref: "",
                id_botiga: "",
                nom: "",
                desc: "",
                preu: "",
                stock: "",
                actiu: "",
                categoria: "",
                visites: "0",
            },
            form2: {
                imatge: null,
                ref: "",
                id_botiga: "",
                nom: "",
                desc: "",
                preu: "",
                stock: "",
                actiu: "",
                categoria: "",
                visites: "0",
            },
            files: null,
            form_botiga: {
                id:"",
                nom:"",
                descripcio:"",
                telf_1:"",
                telf_2:"",
                direccio:"",
                cp:"",
                poblacio:"",
                provincia:"",
                email:"",
                instagram:"",
                facebook:"",
                twitter:"",
                nif:"",
                cif:"",
                img_perfil: null,
                img_portada: null,
            },
            errors: [],
            categories: "",
            botiga: "",
            productes: {},
            user: ""
            
        };
    },
    mounted() {
        
        this.files = new Array();
        this.loading();
        axios.get("/api/categories").then((res) => {
                this.categories = res.data;
        }).then(() => {
        axios.get("/api/productesB").then((res1) => {
                this.productes=res1.data;
            })
        }).then(()=> {
          axios.get("/api/botiga").then((res2) => {
            
            this.botiga = res2.data[0];
            this.user = this.botiga.user;
            
            this.form["id_botiga"] = this.botiga.id_usuari;
            this.form2["id_botiga"] = this.botiga.id_usuari;
            
            
            this.form_botiga["id"] = this.botiga.id;
            this.form_botiga["nom"] = this.botiga.nom;
            this.form_botiga["descripcio"] = this.botiga.descripcio;
            this.form_botiga["telf_1"] = this.botiga.telf_1;
            this.form_botiga["telf_2"] = this.botiga.telf_2;
            this.form_botiga["direccio"] = this.botiga.direccio;
            this.form_botiga["cp"] = this.botiga.cp;
            this.form_botiga["poblacio"] = this.botiga.poblacio;
            this.form_botiga["provincia"] = this.botiga.provincia;
            this.form_botiga["email"] = this.botiga.email;
            this.form_botiga["instagram"] = this.botiga.instagram;
            this.form_botiga["facebook"] = this.botiga.facebook;
            this.form_botiga["twitter"] = this.botiga.twitter;
            this.form_botiga["nif"] = this.botiga.nif;
            this.form_botiga["cif"] = this.botiga.cif;
            this.form_botiga["img_perfil"] = this.botiga.img_perfil;
            this.form_botiga["img_portada"] = this.botiga.img_portada;
        });  
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

    methods: {
        eliminarProducte(id) {
            axios.post("/api/eliminarProducte/" + id).then((res) => {
            });
            axios.get("/api/productesB").then((res) => {
                this.productes = res.data;
            }).then(()=> {
               Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Eliminat correctament',
                showConfirmButton: false,
                timer: 3000,
                didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            }); 
            })
            
        },
        restarStock(id) {
            axios.post("/api/restarStock/" + id).then((res) => {
            });
            axios.get("/api/productesB").then((res) => {
                this.productes = res.data;
            });
        },
        sumarStock(id) {
            axios.post("/api/sumarStock/" + id).then((res) => {
            });
            axios.get("/api/productesB").then((res) => {
                this.productes = res.data;
            });
        },
        canviEstat(id) {
            axios.post("/api/canviEstat/" + id).then((res) => {
            });
            axios.get("/api/productesB").then((res) => {
                this.productes = res.data;
            });
        },
        editarProducte(id){
            this.$router.push({ name: "editarProducte", params: { id } });
        },

        fileSelected(e) {
            this.files.push({ id: e.target.id, file: e.target.files }); 
        },
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
        
        toastCorrecte() {
        // Use sweetalert2
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Guardat correctament',
            showConfirmButton: false,
            timer: 3000,
            didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        },
        toastIncorrecte() {
        // Use sweetalert2
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Error al guardar',
            showConfirmButton: false,
            timer: 3000,
            didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        },
        saveForm() {
            let that = this;
            let formData = new FormData();
            if (document.getElementById("img_producte").files[0]) {
                that.form["imatge"] = document.getElementById("img_producte").files[0];
                formData.append("imatge", that.form["imatge"]);
            }
            formData.append("ref", that.form["ref"]);
            formData.append("id_botiga", that.form["id_botiga"]);
            formData.append("nom", that.form["nom"]);
            formData.append("desc", that.form["desc"]);
            formData.append("preu", that.form["preu"]);
            formData.append("stock", that.form["stock"]);
            if (that.form["actiu"]==true) {
                that.form["actiu"]=1;
                formData.append("actiu", that.form["actiu"]);    
            } else {
                that.form["actiu"]=0;
                formData.append("actiu", that.form["actiu"]);
            }
            formData.append("categoria", that.form["categoria"]);
            formData.append("visites", that.form["visites"]);
            this.loading();
            axios
                .post("/api/afegirProducte", formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
                })
                .then((res) => {
                this.toastCorrecte();
                this.resetForm();
                })
                .catch((error) => {
                that.errors = error.response.data.errors;
                this.toastIncorrecte();
                });

            
        },
        resetForm() {
            this.files = new Array();
            var self = this; //you need this because this will refer to Object.keys below

            //Iterate through each object field, key is name of the object field
            Object.keys(this.form).forEach(function(key,index) {
            self.form[key] = '';
            });
            this.form["id_botiga"] = this.botiga.id_usuari;
            this.form["visites"] = "0";
            axios.get("/api/productesB").then((res1) => {
                this.productes=res1.data;
            });
        },
        saveBotiga() {
            let that = this;
            let formData = new FormData();

            if (document.getElementById("img_perfil").files[0]) {
                that.form_botiga["img_perfil"] = document.getElementById("img_perfil").files[0];
                formData.append("img_perfil", that.form_botiga["img_perfil"]);
            }
            if (document.getElementById("img_portada").files[0]) {
                that.form_botiga["img_portada"] = document.getElementById("img_portada").files[0];
                formData.append("img_portada", that.form_botiga["img_portada"]);
            }
            formData.append("id", that.form_botiga["id"]);
            formData.append("nom", that.form_botiga["nom"]);
            formData.append("descripcio", that.form_botiga["descripcio"]);
            formData.append("telf_1", that.form_botiga["telf_1"]);
            formData.append("telf_2", that.form_botiga["telf_2"]);
            formData.append("direccio", that.form_botiga["direccio"]);
            formData.append("cp", that.form_botiga["cp"]);
            formData.append("poblacio", that.form_botiga["poblacio"]);
            formData.append("provincia", that.form_botiga["provincia"]);
            formData.append("email", that.form_botiga["email"]);
            formData.append("instagram", that.form_botiga["instagram"]);
            formData.append("facebook", that.form_botiga["facebook"]);
            formData.append("twitter", that.form_botiga["twitter"]);
            formData.append("nif", that.form_botiga["nif"]);
            formData.append("cif", that.form_botiga["cif"]);
            this.loading();
            axios
            .post("/api/modifyShop", formData, {               
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            }) 
            .then((res) => {
                let id_b = this.botiga.id;
                this.toastCorrecte();
                this.$router.push({ name: "PerfilBotiga", params: { id: id_b } });
                
            })
            .catch((error) => {
                that.errors = error.response.data.errors;
                this.toastIncorrecte();
            });
        }
    }

};
</script>
<style>
    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Busca";
        visibility: hidden;
    }
</style>