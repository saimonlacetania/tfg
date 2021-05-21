<template>
  <div class="content-wrapper" id="contingut">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>La meva llista de desitjos</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="content w-100">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="card card-dark card-outline">
              <div v-if="wishlist.length>0" class="card-body table-responsive">
                <table class="table">
                  <thead class="">
                    <tr>
                      <th>Nom</th>
                      <th>Referència</th>
                      <th>Preu</th>
                      <th class="text-right">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    <tr v-for="producte in wishlist" :key="producte.id">
                      <td>
                        {{ producte.productes.nom }}
                      </td>
                      <td>
                        {{ producte.productes.ref }}
                      </td>
                      <td>{{ producte.productes.preu }} €</td>
                      <td class="text-right">
                        <span
                          ><button
                            class="btn btn-danger"
                            @click="eliminarWishlist(producte.id)"
                          >
                            <i class="fas fa-trash"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div v-else class="card-body">
                <h4>No hi ha productes.</h4>
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <!-- /.container-fluid -->
</template>

<script>
export default {
  data() {
    return {
      user: "",
      wishlist: "",
      cistella: "",
      total: 0,
    };
  },

  mounted() {
    this.loading();
    axios.get("/api/user").then((res) => {
      this.user = res.data;
    }).then(()=>{
      axios.get("/api/veureWishlist").then((res2) => {
      this.wishlist = res2.data;
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
    });
  },
  methods: {
    toastCorrecte() {
      // Use sweetalert2
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "success",
        title: "Eliminat correctament",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
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
    eliminarWishlist(id) {
      axios.post("/api/eliminarWishlist/" + id).then((res) => {
        axios.get("/api/veureWishlist").then((res) => {
          this.wishlist = res.data;
          this.toastCorrecte();
        });
      });
    },
  },
};
</script>
