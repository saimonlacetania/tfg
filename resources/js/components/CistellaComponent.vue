

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
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">La meva cistella</h3>
              </div>
              <div class="card-body table-responsive">
                <table class="table">
                  <thead class="">
                    <tr>
                      <th>Nom</th>
                      <th>Quantitat</th>
                      <th>Preu</th>
                      <th class="text-right">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    <tr v-for="producte in cistella" :key="producte.id">
                      <td>{{ producte.productes.nom }}</td>
                      <td>
                        <button
                          class="btn pl-0"
                          style="background-color: transparent"
                          v-on:click="restarCistella(producte.id)"
                        >
                          <i class="fas fa-minus"></i>
                        </button>
                        {{ producte.quantitat }}
                        <button
                          class="btn pr-0"
                          style="background-color: transparent"
                          v-on:click="sumarCistella(producte.id)"
                        >
                          <i class="fas fa-plus"></i>
                        </button>
                      </td>
                      <td>{{ producte.productes.preu }} €</td>
                      <td class="text-right">
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
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Processar la meva cistella</h3>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead class="">
                    <tr>
                      <th class="text-left">Nom</th>
                      <th class="text-right">Preu</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    <tr v-for="producte in cistella" :key="producte.id">
                      <td>{{ producte.productes.nom }}</td>

                      <td class="text-right">
                        {{ producte.productes.preu }} €
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"><b>Total</b>:</td>
                      <td class="text-right">
                        <b>{{ $data.total }} €</b>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="text-right">
                  <button class="btn btn-success">Processar la comanda</button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
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
      cistella: "",
      total: 0,
    };
  },
  mounted() {
    axios.get("/api/user").then((res) => {
      this.user = res.data;
    });
    axios.get("/api/veureCistella").then((res) => {
      this.cistella = res.data;
      console.log(this.cistella);
      for (let i = 0; i < this.cistella.length; i++) {
        this.cistella[i].productes.preu = parseFloat(
          this.cistella[i].productes.preu * this.cistella[i].quantitat
        ).toFixed(2);
        this.total += parseFloat(this.cistella[i].productes.preu);
      }
      this.total = parseFloat(this.total).toFixed(2);
    });
  },
  methods: {
    eliminarCistella(id) {
      axios.post("/api/eliminarCistella/" + id).then((res) => {
        console.log(res);
      });
      axios.get("/api/veureCistella").then((res) => {
        this.cistella = res.data;
        this.total = 0;
        for (let i = 0; i < this.cistella.length; i++) {
          this.cistella[i].productes.preu = parseFloat(
            this.cistella[i].productes.preu * this.cistella[i].quantitat
          ).toFixed(2);
          this.total += parseFloat(this.cistella[i].productes.preu);
        }
        this.total = parseFloat(this.total).toFixed(2);
      });
    },
    restarCistella(id) {
      axios.post("/api/restarCistella/" + id).then((res) => {
        console.log(res);
      });
      axios.get("/api/veureCistella").then((res) => {
        this.cistella = res.data;
        this.total = 0;
        for (let i = 0; i < this.cistella.length; i++) {
          this.cistella[i].productes.preu = parseFloat(
            this.cistella[i].productes.preu * this.cistella[i].quantitat
          ).toFixed(2);
          this.total += parseFloat(this.cistella[i].productes.preu);
        }
        this.total = parseFloat(this.total).toFixed(2);
      });
    },
    sumarCistella(id) {
      axios.post("/api/sumarCistella/" + id).then((res) => {
        console.log(res);
      });
      axios.get("/api/veureCistella").then((res) => {
        this.cistella = res.data;
        this.total = 0;
        for (let i = 0; i < this.cistella.length; i++) {
          this.cistella[i].productes.preu = parseFloat(
            this.cistella[i].productes.preu * this.cistella[i].quantitat
          ).toFixed(2);
          this.total += parseFloat(this.cistella[i].productes.preu);
        }
        this.total = parseFloat(this.total).toFixed(2);
      });
    },
  },
};
</script>