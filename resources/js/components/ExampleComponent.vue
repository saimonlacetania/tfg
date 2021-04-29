<style>
.main-header{
  color:#C22847 !important;
}
</style>

<template>
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars" style="color:#ff6565;"></i
          ></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block text-dark">
          <a href="index3.html" class="nav-link text-dark" style="color: #343a40 !important;text-decoration:none !important;">Inici</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            data-toggle="dropdown"
            href="#"
            aria-expanded="false"
          >
            <i class="fas fa-shopping-cart" style="color:#ff6565;"></i>
            <span class="font-weight-light text-dark">Cistella</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- MENÚ ESQUERRA -->
    <aside class="main-sidebar sidebar-light elevation-4">
      <!-- Logo -->
      <a href="" class="brand-link">
        <img
          src="/images/logo_mercat.png"
          alt=""
          class="brand-image img-circle elevation-3"
          style="opacity: 0.8; background: #ff6565;"
        />
        <span class="brand-text font-weight-light">Mercat Virtual</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar usuari (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img
              src="/images/user2-160x160.jpg"
              class="img-circle elevation-2"
              alt="User Image"
            />
          </div>
          <div class="info">
            <a href="#" class="d-block">Hola! {{ this.user }}</a>
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
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user text-dark"></i>
                <p class="text-dark">
                  El meu perfil
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <router-link class="nav-link" :to="'profile'">
                    <i class="nav-icon far fa-user-circle text-dark"></i>
                    <p class="text-dark">Veure perfil</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="fas fa-shopping-basket nav-icon text-dark"></i>
                    <p class="text-dark">Les meves compres</p>
                  </a>
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" :to="'editarPerfil'">
                    <i class="fas fa-cogs nav-icon text-dark"></i>
                    <p class="text-dark">Configuració</p>
                  </router-link>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-store-alt text-dark"></i>
                <p class="text-dark">
                  La meva botiga
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview nav-child-indent">
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="fas fa-feather-alt nav-icon text-dark"></i>
                    <p class="text-dark">Perfil</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="fas fa-tag nav-icon text-dark"></i>
                    <p class="text-dark">Productes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="fas fa-chart-line nav-icon text-dark"></i>
                    <p class="text-dark">Estadístiques</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="'productes'">
                <i class="nav-icon fas fa-shopping-cart text-dark"></i>
                <p class="text-dark">Comprar</p>
              </router-link>
            </li>

            <li class="nav-item fixed-bottom ml-2">
              <a @click.prevent="logout" href="#" class="nav-link">
                <i class="nav-icon fas fa-power-off text-dark"></i>
                <p class="text-dark">Sortir</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- PAGINA PRODUCTES -->
    <router-view></router-view>
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
      this.user = res.data.nom;
      console.log(this.user);
    });
  },
  methods: {
    logout() {
      axios.post("/api/logout").then(() => {
        this.$router.push({ name: "Login" });
        location.reload();
      });
    },
  },
};
</script>