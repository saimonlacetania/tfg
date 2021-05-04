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
        <div class="wrapper row">
          <div class="preview col-md-6">
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1">
                <img :src="'/images/' + $data.producte.imatge" />
              </div>
            </div>
          </div>
          <div class="details col-md-6">
            <h3 class="product-title text-uppercase">
              {{ $data.producte.nom }}
            </h3>
            <div class="rating">
              <div class="stars">
                <span class="fas fa-star" style="color: #ff6565"></span>
                <span class="fas fa-star" style="color: #ff6565"></span>
                <span class="fas fa-star" style="color: #ff6565"></span>
                <span class="fas fa-star" style="color: #ff6565"></span>
                <span class="far fa-star" style="color: #ff6565"></span>
              </div>
              <span class="review-no">41 ressenyes</span>
            </div>
            <p class="product-description">{{ $data.producte.descripcio }}</p>
            <h4 class="price">
              preu: <span>{{ $data.producte.preu }}</span>
            </h4>
            <h5 class="colors">stock:{{ $data.producte.stock }}</h5>
            <div class="action">
              <button
                class="add-to-cart btn btn-default zoom"
                type="button"
                style="background-color: #ff6565; border: none; color: white"
              >
                Afegir a la cistella
              </button>
            </div>
          </div>
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