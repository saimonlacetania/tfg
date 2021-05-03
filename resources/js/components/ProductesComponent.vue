<template>
  <div class="content-wrapper" id="contingut">
    <!-- cerca -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-dark text-white" style="border: none">
              <img src="/images/welcome.jpg" class="card-img" alt="..." />
            </div>
          </div>
        </div>

        <br /><br />

        <div class="col-sm-12 mt-4">
          <h1 class="text-center">¿Perquè Mercat Virtual?</h1>
        </div>

        <br /><br />

        <div class="row ml-2">
          <div class="col-md-1"></div>
          <div
            class="card"
            style="
              width: 18rem;
              background: transparent !important;
              border: none;
              box-shadow: none;
            "
          >
            <img
              src="images/granja.png"
              class="float-left ml-5"
              alt="..."
              style="width: 200px; height: 200px; border-radius: 250px"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Empoderem el petit productor</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div
            class="card"
            style="
              width: 18rem;
              background: transparent !important;
              border: none;
              box-shadow: none;
            "
          >
            <img
              src="images/market.png"
              class="float-left ml-5"
              alt="..."
              style="width: 200px; height: 200px; border-radius: 250px"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Recuperem el mercat</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div
            class="card"
            style="
              width: 18rem;
              background: transparent !important;
              border: none;
              box-shadow: none;
            "
          >
            <img
              src="images/hands.png"
              class="float-left ml-5"
              alt="..."
              style="width: 200px; height: 200px; border-radius: 250px"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Creem sinergia</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-12 mt-4">
          <h1 class="text-center" style="color: #ff6565">
            El KM0 més a prop que mai
          </h1>
          <h4 class="text-center">productes únics de professionals locals</h4>
        </div>

        <br /><br />

        <div class="row w-100">
          <div class="card-deck">
            <div class="card">
              <img
                class="card-img-top"
                src="/images/grapes.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Fresc</h5>
                <p class="card-text">
                  This is a longer card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="/images/ovella.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Ecològic</h5>
                <p class="card-text">
                  This card has supporting text below as a natural lead-in to
                  additional content.
                </p>
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="/images/roba.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Sostenible</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This card has even longer
                  content than the first to show that equal height action.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <button
              type="submit"
              class="btn btn-block text-center mt-5 text-light zoom"
              style="background-color: #ff6565"
            >
              <i class="fa fa-heart"></i>
              Descobreix-lo!
            </button>
          </div>
          <div class="col-md-4"></div>
        </div>

        <br />
        <!-- cerca -->
        <div class="col-md-12">
          <form action="simple-results.html">
            <div class="input-group">
              <input
                type="search"
                class="form-control form-control-lg text-right"
                placeholder="¿Què vols buscar?"
              />
              <div class="input-group-append">
                <button
                  type="submit"
                  class="btn btn-lg btn-secondary"
                  style="background-color: #ff6565"
                >
                  <i class="fa fa-search"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-lg btn-secondary"
                  aria-expanded="true"
                  v-on:click="mostrarCerca"
                  style="background-color: #ff6565"
                >
                  <i class="fa fa-arrow-down"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.col -->

        <!-- cerca avançada -->
        <div id="cerca" style="display: none">
          <cerca-component></cerca-component>
        </div>

        <div class="content w-100">
          <div class="container-fluid">
            <div class="row">
              <div
                :class="'col-md-4 card-deck mb-4'"
                v-for="producte in productes"
                :key="producte.id"
              >
                <div :class="'card card-primary text-center zoom'">
                  <img
                    :class="'card-img-top p-3'"
                    :src="'/images/' + producte.imatge"
                  />
                  <div :class="'card-body'">
                    <div :class="'card-title font-weight-bold'">
                      {{ producte.nom }}
                    </div>
                    <br />
                    <div :class="'badge badge-warning badge-sm text-uppercase'">
                      {{ producte.ref }}
                    </div>
                    <p :class="'card-text'">
                      {{ producte.descripcio }}
                    </p>
                  </div>
                  <div :class="'card-footer'">
                    <router-link
                      :to="{ name: 'Producte', params: { id: producte.id } }"
                      :class="'btn btn-outline-secondary btn-icon-right'"
                    >
                      <span>Saber més</span>
                    </router-link>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-md-6 card-deck-->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <hr />

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card text-center">
              <div class="card-body">
                <h3 style="color: #ff6565">Segueix les nostres novetats</h3>
                <p class="card-text text-gray">
                  Inscriu-te per rebre el butlletí de Mercat Virtual al teu
                  correu electrònic.<br />
                  T’informem setmana a setmana de les novetats
                </p>

                <div class="input-group mb-3 col-md-12">
                  <div class="col-md-3"></div>
                  <div class="col-md-6 input-group">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text"
                        style="background-color: #ff6565"
                        ><i class="far fa-envelope" style="color: #ffffff"></i
                      ></span>
                    </div>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Adreça de correu electrònic"
                    />
                  </div>
                  <div class="col-md-3"></div>
                </div>

                <div class="mb-2">
                  <input type="checkbox" /> &nbsp;
                  <small class="text-gray" aria-label="Text input with checkbox"
                    >He llegit i accepto les
                    <a href="#"
                      ><b class="text-gray"
                        >Condicions Generals d’Accés i Ús</b
                      ></a
                    >
                    i
                    <a href="#"
                      ><b class="text-gray">Política de Privacitat</b></a
                    ></small
                  >
                </div>

                <div class="row">
                  <div class="col-md-5"></div>
                  <div class="col-md-2">
                    <button
                      type="submit"
                      class="btn btn-block text-center text-light zoom"
                      style="background-color: #ff6565"
                    >
                      Enviar
                    </button>
                  </div>
                  <div class="col-md-5"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br />

    <div class="content">
      <div class="container-fluid">
        <div class="card-group">
          <div class="card bg-gray">
            <div class="card-body">
              <small class="card-text">MANIFEST FUNDACIONAL</small><br />
              <small class="card-text">FAQS</small><br />
              <small class="card-text">L'EQUIP</small><br />
              <small class="card-text">FES-TE SOCI</small>
            </div>
          </div>
          <div class="card bg-gray">
            <div class="card-body">
              <small class="card-text">EL TEU COMPTE</small><br />
              <small class="card-text">CONTACTES</small><br />
              <small class="card-text">CONDICIONS GENERALS</small><br />
              <small class="card-text">POLÍTICA DE PRIVACITAT</small><br />
              <small class="card-text">POLÍTICA DE COOKIES</small>
            </div>
          </div>
          <div class="card bg-gray">
            <div class="card-body"></div>
          </div>
          <div class="card bg-gray">
            <div class="card-body">
              <h4>Segueix-nos!</h4>
              <a
                class="btn btn-primary"
                style="background-color: #ff6565; border: none"
              >
                <i class="fab fa-facebook-f"></i>
              </a>
              <a
                class="btn btn-primary"
                style="background-color: #ff6565; border: none"
              >
                <i class="fab fa-twitter"></i>
              </a>
              <a
                class="btn btn-primary"
                style="background-color: #ff6565; border: none"
              >
                <i class="fab fa-google"></i>
              </a>
              <a
                class="btn btn-primary"
                style="background-color: #ff6565; border: none"
              >
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.contingut pagina -->
</template>
<style>
.zoom {
  transition: transform 0.2s; /* Animation /
}

.zoom:hover {
  transform: scale(1.05); / (150% zoom)*/
}
</style>

<script>
import CercaComponent from "./CercaComponent.vue";

export default {
  data() {
    return {
      productes: "",
    };
  },
  components: { CercaComponent },
  mounted() {
    axios.get("/api/productes").then((res) => {
      console.log(res);
      this.productes = res.data;
    });
  },
  methods: {
    mostrarCerca: function (event) {
      var cerca = document.getElementById("cerca");
      if (cerca.style.display == "none") {
        cerca.style.display = "block";
      } else {
        cerca.style.display = "none";
      }
    },
  },
};
</script>