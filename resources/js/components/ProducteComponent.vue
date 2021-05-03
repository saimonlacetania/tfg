<template>
  <div class="content-wrapper" id="contingut">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"></div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9 mx-auto">
            <div class="card card-dark card-outline">
              <div class="card-body">
                <h1 class="text-center">{{ $data.producte.nom }}</h1>
                <br />
                <img
                  :class="'card-img-top p-3 mx-auto d-block border border-dark'"
                  :src="'/images/' + $data.producte.imatge"
                  style="width: 600px"
                />
                <hr />
                <h3>{{ $data.producte.descripcio }}</h3>
                <p>Preu: {{ $data.producte.preu }}</p>
                <p>Stock: {{ $data.producte.stock }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>



<script>
export default {
  data() {
    return {
      producte: "",
    };
  },
  mounted() {
    console.log("detall montat");

    axios.get("/api/producte/" + this.$route.params.id).then((res) => {
      console.log(res);
      this.producte = res.data;
    });
  },
};
</script>