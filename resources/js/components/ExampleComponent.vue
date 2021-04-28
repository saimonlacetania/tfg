<template>
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"
            ><i class="fas fa-bars"></i
          ></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Inici</a>
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
            <i class="fas fa-shopping-cart"></i>
            <span class="font-weight-light">Cistella</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- MENÚ ESQUERRA -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Logo -->
      <a href="" class="brand-link">
        <img
          src="../../../public/images/vendor/admin-lte/dist/logo_mercat.png"
          alt=""
          class="brand-image img-circle elevation-3"
          style="opacity: 0.8"
        />
        <span class="brand-text font-weight-light">Mercat Virtual</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar usuari (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img
              src="../../../public/images/vendor/admin-lte/dist/user2-160x160.jpg"
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
            class="nav nav-pills nav-sidebar flex-column"
            data-widget="treeview"
            role="menu"
            data-accordion="false"
          >
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">MENÚ PRINCIPAL</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  El meu perfil
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <router-link class="nav-link" :to="'profile'">
                    <i class="nav-icon far fa-user-circle"></i>
                    <p>Veure perfil</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="fas fa-shopping-basket nav-icon"></i>
                    <p>Les meves compres</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="fas fa-cogs nav-icon"></i>
                    <p>Configuració</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-store-alt"></i>
                <p>
                  La meva botiga
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="fas fa-feather-alt nav-icon"></i>
                    <p>Perfil</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="fas fa-tag nav-icon"></i>
                    <p>Productes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="fas fa-chart-line nav-icon"></i>
                    <p>Estadístiques</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="'productes'">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>Comprar</p>
              </router-link>
            </li>

            <li class="nav-item fixed-bottom">
              <a @click.prevent="logout" href="#" class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>Sortir</p>
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