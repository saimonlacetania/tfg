<template>
  <div class="content-wrapper">
    <!-- cerca -->
    <div class="content-header">
      <div class="container-fluid">
        <!--Section: Contact v.2-->
        <section class="mb-4">
          <!--Section heading-->
          <h2
            class="h1-responsive font-weight-bold text-center my-4"
            style="color: #ff6565"
          >
            Contacta'ns
          </h2>
          <!--Section description-->
          <p class="text-center w-responsive mx-auto mb-5">
            Tens alguna pregunta? No dubtis en contactar-nos directament! El
            nostre equip es posarà en contacte amb tu per ajudar-te
          </p>

          <div class="row">
            <!--Grid column-->
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form" action="">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input
                        type="text"
                        id="name"
                        name="name"
                        v-model="form.name"
                        class="form-control"
                        placeholder="Nom"
                        required
                      />
                    </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input
                        type="text"
                        id="email"
                        name="email"
                        v-model="form.email"
                        class="form-control"
                        placeholder="Email"
                        required
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->

                <br />

                <!--Grid row-->
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form mb-0">
                      <input
                        type="text"
                        id="subject"
                        name="subject"
                        v-model="form.subject"
                        class="form-control"
                        placeholder="Subjecte"
                        required
                      />
                    </div>
                  </div>
                </div>
                <!--Grid row-->

                <br />

                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12">
                    <div class="md-form">
                      <textarea
                        type="text"
                        id="message"
                        name="message"
                        v-model="form.message"
                        rows="2"
                        class="form-control md-textarea"
                        placeholder="El teu missatge"
                        required
                      ></textarea>
                    </div>
                  </div>
                </div>
                <!--Grid row-->
              </form>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <div class="text-center">
                    <button
                      class="btn btn-primary btn-block zoom"
                      style="background-color: #ff6565; border: none"
                      v-on:click="toastCorrecte"
                    >
                      <i class="fas fa-paper-plane"></i>&nbsp;Envia!
                    </button>
                  </div>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>
            <div class="col-md-2"></div>
            <!--Grid column-->
          </div>
          <!--Grid column-->
            <div class="row mt-5">
              <div class="col-md-3"></div>
              <div class="col-md-2 text-center">
                <i
                  class="fas fa-map-marker-alt m-3 fa-2x"
                  style="color: #ff6565"
                ></i>
                <p>Manresa, BCN 94126, CAT</p>
              </div>
              <div class="col-md-2 text-center">
                <i class="fas fa-phone m-3 fa-2x" style="color: #ff6565"></i>
                <p>+ 01 234 567 89</p>
              </div>
              <div class="col-md-2 text-center">
                <i
                  class="fas fa-envelope m-3 fa-2x"
                  style="color: #ff6565"
                ></i>
                <p>hola@mercatvirual.com</p>
              </div>
              <div class="col-md-3"></div>
            </div>
              <!--Grid column-->
            
        </section>
        <!--Section: Contact v.2-->
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        subject: "",
        message: ""
      },
    };
  },
  mounted() {
    console.log("muntat");
  },
  methods: {
    toastCorrecte() {
      let that = this;
      if (
        that.form.name != "" &&
        that.form.email != "" &&
        that.form.subject != "" &&
        that.form.message != ""
      ) {
        // Use sweetalert2
        Swal.fire({
          toast: true,
          position: "top-end",
          icon: "success",
          title: "Mail enviat correctament",
          showConfirmButton: false,
          timer: 3000,
          didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
          },
        });
      } else {
        Swal.fire({
          toast: true,
          position: "top-end",
          icon: "error",
          title: "El formulari de contacte no pot ser buit!",
          showConfirmButton: false,
          timer: 3000,
          didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
          },
        });
      }
    },
  },
};
</script>
