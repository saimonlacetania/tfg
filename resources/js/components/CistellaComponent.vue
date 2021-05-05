

<template>
  <div class="content-wrapper" id="contingut">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>La meva cistella</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="content w-100">
      <div class="container-fluid">
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th style="width: 10px">#</th>
              <th>Nom</th>
              <th>Quantitat</th>
              <th>Quantitat</th>
              <th>Preu</th>
              <th style="width: 10px">Opcions</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr v-for="(producte, index) in cistella" :key="producte.id">
              <td>{{ index + 1 }}</td>
              <td>{{ producte.productes.nom }}</td>
              <td>ASADASDASD</td>
              <td>
                -
                {{ producte.quantitat }}
                +
              </td>
              <td>
                {{ producte.productes.preu }}
              </td>
              <td>
                <span
                  ><button
                    class="btn btn-danger"
                    @click="eliminarCistella(producte.id)"
                  >
                    <i class="fas fa-trash"></i>
                  </button>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
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
      cistella: "",
    };
  },
  mounted() {
    axios.get("/api/user").then((res) => {
      this.user = res.data;
    });
    axios.get("/api/veureCistella").then((res) => {
      this.cistella = res.data;
      console.log(this.cistella);
    });
  },
  methods: {
    eliminarCistella(id) {
      axios.post("/api/eliminarCistella/" + id).then((res) => {
        console.log(res);
      });
      axios.get("/api/veureCistella").then((res) => {
        this.cistella = res.data;
      });
    },
  },
};
</script>