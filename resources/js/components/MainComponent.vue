<style>
.wrapper {
  height: 100%;
}

body,
html {
  height: 100%;
}

.main-header {
  color: #ff6565 !important;
}
</style>

<template>
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light border-bottom-0">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="javascript:void(null);" role="button">
            <i class="fas fa-bars" style="color: #ff6565"></i
          ></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <router-link
            :to="'/cistella'"
            class="nav-link"
            data-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-shopping-cart" style="color: #ff6565"></i>
            <span class="font-weight-light text-dark">Cistella</span>
          </router-link>
        </li>
        <li class="nav-item dropdown">
          <router-link
            :to="'/wishlist'"
            class="nav-link"
            data-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-heart" style="color: #ff6565"></i>
            <span class="font-weight-light text-dark">Llista de desitjos</span>
          </router-link>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- MENÚ ESQUERRA -->
    <aside class="main-sidebar sidebar-light elevation-4 sidebar-no-expand">
      <!-- Logo -->
      <router-link :to="'/'" class="brand-link">
        <img
          src="/images/botigues/default.jpg"
          alt=""
          class="brand-image img-circle elevation-3"
          style="opacity: 0.8; background: #ff6565"
        />
        <span class="brand-text font-weight-light">Mercat Virtual</span>
      </router-link>

      <!-- Sidebar -->
      <div
        v-if="this.user.nom"
        class="sidebar fixed-left"
        style="overflow-y: auto"
      >
        <!-- Sidebar usuari (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img
              v-if="this.user.profile_pic"
              :src="'/images/avatars/' + this.user.profile_pic"
              class="img-circle elevation-2"
              alt="User Image"
            />
            <img
              v-else
              :src="'/images/botigues/default.jpg'"
              class="img-circle elevation-2"
              alt="User Image"
            />
          </div>
          <div class="info">
            <span class="d-block">Hola! {{ this.user.nom }}</span>
          </div>
        </div>

        <!-- Sidebar Menu -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul
            class="nav nav-pills nav-sidebar flex-column nav-child-indent"
            data-widget="treeview"
            role="menu"
            data-accordion="false"
          >
            <!-- Add icons to the links using the .nav-icon class
                                  with font-awesome or any other icon font library -->
            <li class="nav-header text-dark">MENÚ PRINCIPAL</li>
                <li class="nav-item">
                  <router-link class="nav-link" :to="'/profile'">
                    <i class="nav-icon fas fa-user text-dark"></i>
                    <p class="text-dark">Veure perfil</p>
                  </router-link>
                </li>
            <li class="nav-item" v-if="this.user.botiga">
              <a class="nav-link" href="javascript:void(null);">
                <i class="nav-icon fas fa-store-alt text-dark"></i>
                <p class="text-dark">
                  La meva botiga
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview nav-child-indent">
                <li class="nav-item">
                  <router-link class="nav-link" :to="'/botiga'">
                    <i class="fas fa-feather-alt nav-icon text-dark"></i>
                    <p class="text-dark">Perfil</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link
                    class="nav-link"
                    :to="{ name: 'PerfilBotiga', params: { id: user.id } }"
                  >
                    <i class="fas fa-gem nav-icon text-dark"></i>
                    <p class="text-dark">Perfil públic</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link :to="'/comandes'" class="nav-link">
                    <i class="fas fa-chart-line nav-icon text-dark"></i>
                    <p class="text-dark">Comandes</p>
                  </router-link>
                </li>
              </ul>
            </li>

            <li v-else class="nav-item">
              <router-link class="nav-link" :to="'/crearBotiga'">
                <i class="fas fa-feather-alt nav-icon text-dark"></i>
                <p class="text-dark">Crear Botiga</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="'/productes'">
                <i class="nav-icon fas fa-shopping-cart text-dark"></i>
                <p class="text-dark">Comprar</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="'/productors'">
                <i class="nav-icon fas fa-store text-dark"></i>
                <p class="text-dark">Productors</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="'/contacte'">
                <i class="nav-icon fas fa-comments text-dark"></i>
                <p class="text-dark">Contacte</p>
              </router-link>
            </li>

            <li class="nav-item align-text-bottom">
              <a @click.prevent="logout" href="javascript:void(null);" class="nav-link">
                <i class="nav-icon fas fa-power-off text-dark"></i>
                <p class="text-dark">Sortir</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <span v-else>
        <div class="sidebar fixed-left">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column nav-child-indent"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-header text-dark">MENÚ PRINCIPAL</li>
              <li class="nav-item">
                <router-link class="nav-link" :to="'/profile'">
                  <i class="nav-icon fas fa-sign-in-alt text-dark"></i>
                  <p class="text-dark">Log in</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" :to="'/productes'">
                  <i class="nav-icon fas fa-shopping-cart text-dark"></i>
                  <p class="text-dark">Comprar</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" :to="'/productors'">
                  <i class="nav-icon fas fa-store text-dark"></i>
                  <p class="text-dark">Productors</p>
                </router-link>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
      </span>

      <!-- /.sidebar -->
    </aside>
    <!-- PAGINA PRODUCTES -->
    <router-view></router-view>
      <div id="cajacookies" class="shadow p-3 mb-5 bg-white rounded align-middle text-center" style="margin-left:37% !important;">
          Aquesta web utilitza cookies per garantir la millor experiencia per l'usuari.
          <a href="https://www.cookiesandyou.com/"><span style="color:#ff6565;">Més info</span></a>.
          <div class="row">
            <div class="col-md-4"></div>            
            <div class="col-md-4">
              <button v-on:click="aceptarCookies" class="pull-right btn btn-sm text-white zoom" style="background-color:#ff6565"><i class="fa fa-check-circle"></i> Acceptar i tancar</button>
            </div>
            <div class="col-md-4"></div>
          </div>
      </div>
  </div>
</template>
<style>



.main-sidebar, .main-sidebar::before {
  @media (max-width: 767.98px);
  background-color: white;
}
  #cajacookies {
    position: fixed;
    bottom: 0;
  }
</style>
<script>
import PerfilBotigaComponent from './PerfilBotigaComponent.vue';
export default {
  components: { PerfilBotigaComponent },
  
  data() {
    return {
      user: "",
    };
  },
  mounted() {
    axios.get("/api/user").then((res) => {
      this.user = res.data;
    });
    /* ésto comprueba la localStorage si ya tiene la variable guardada */
    if(localStorage.aceptaCookies == 'true'){
        cajacookies.style.visibility = 'hidden';
    }
    
  },
  methods: {
    logout() {
      axios.post("/api/logout").then(() => {
        this.$router.push({
          name: "Login",
        });
        location.reload();
        return false;
      });
    },
    aceptarCookies() {
      console.log("click")
      localStorage.aceptaCookies = 'true';
      cajacookies.style.visibility = 'hidden';
    },
  },
};
</script>
