<template>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Inici</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
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
      <img src="../../../node_modules/admin-lte/dist/img/logo_mercat.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mercat Virtual</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar usuari (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../node_modules/admin-lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nom Login</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENÚ PRINCIPAL</li>
          <li class="nav-item">
            <a href="#" v-on:click="mostrarPerfil" class="nav-link">
              <i class="nav-icon far fa-user-circle"></i>
              <p>El meu perfil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" v-on:click="mostrarProductes" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>Comprar</p>
            </a>
          </li>
          <li class="nav-item fixed-bottom">
            <a href="#" class="nav-link">
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
  <div id="productes">
   <productes-component></productes-component>
  </div>
  <!-- /. pagina productes -->
  <div id="perfil" style="display:none;">
  <perfil-component></perfil-component>
  </div>
</div>
</template>

<script>
import PerfilComponent from './PerfilComponent.vue';
import ProductesComponent from './ProductesComponent.vue';
export default {
  components: { ProductesComponent, PerfilComponent },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    mostrarPerfil: function (event) {
      var prod = document.getElementById("productes");
      var perf = document.getElementById("perfil");
      prod.style.display = "none";
      perf.style.display = "block";
    },
    mostrarProductes: function (event) {
      var prod = document.getElementById("productes");
      var perf = document.getElementById("perfil");
      prod.style.display = "block";
      perf.style.display = "none";
    },
  },
};
</script>