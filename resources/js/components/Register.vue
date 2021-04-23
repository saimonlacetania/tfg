<template>
  <div class="flex flex-wrap w-full justify-center items-center pt-56">
    <div class="flex flex-wrap max-w-xl">
      <div class="p-2 text-2xl text-gray-800 font-semibold">
        <h1>Register an account</h1>
      </div>
      <div class="p-2 w-full">
        <label class="w-full" for="nom">Nom</label>
        <span class="w-full text-red-500" v-if="errors.nom">{{
          errors.nom[0]
        }}</span>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Nom"
          type="text"
          v-model="form.nom"
        />
      </div>
      <div class="p-2 w-full">
        <label class="w-full" for="cognoms">Cognoms</label>
        <span class="w-full text-red-500" v-if="errors.cognoms">{{
          errors.cognoms[0]
        }}</span>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Cognoms"
          type="text"
          v-model="form.cognoms"
        />
      </div>
      <div class="p-2 w-full">
        <label for="email">Your e-mail</label>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Email"
          type="email"
          v-model="form.email"
        />
      </div>
      <div class="p-2 w-full">
        <label class="w-full" for="telefon">Telefon</label>
        <span class="w-full text-red-500" v-if="errors.telefon">{{
          errors.telefon[0]
        }}</span>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Telefon"
          type="text"
          v-model="form.telefon"
        />
      </div>
      <div class="p-2 w-full">
        <label class="w-full" for="direccio">Direccio</label>
        <span class="w-full text-red-500" v-if="errors.direccio">{{
          errors.direccio[0]
        }}</span>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Direccio"
          type="text"
          v-model="form.direccio"
        />
      </div>
      <div class="p-2 w-full">
        <label class="w-full" for="cp">Codi postal</label>
        <span class="w-full text-red-500" v-if="errors.cp">{{
          errors.cp[0]
        }}</span>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Cp"
          type="text"
          v-model="form.cp"
        />
      </div>
      <div class="p-2 w-full">
        <label class="w-full" for="poblacio">Poblacio</label>
        <span class="w-full text-red-500" v-if="errors.poblacio">{{
          errors.poblacio[0]
        }}</span>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Poblacio"
          type="text"
          v-model="form.poblacio"
        />
      </div>
      <div class="p-2 w-full">
        <label class="w-full" for="provincia">Provincia</label>
        <span class="w-full text-red-500" v-if="errors.provincia">{{
          errors.provincia[0]
        }}</span>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Provincia"
          type="text"
          v-model="form.provincia"
        />
      </div>
      <div class="p-2 w-full">
        <label class="w-full" for="data_naix">Data naixament</label>
        <span class="w-full text-red-500" v-if="errors.data_naix">{{
          errors.data_naix[0]
        }}</span>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Data_naix"
          type="date"
          v-model="form.data_naix"
        />
      </div>
      <div class="p-2 w-full">
        <label for="password">Password</label>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Password"
          type="password"
          v-model="form.password"
          name="password"
        />
      </div>
      <div class="p-2 w-full">
        <label for="confirm_password">Confirm Password</label>
        <input
          class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="Confirm Password"
          type="password"
          v-model="form.password_confirmation"
          name="password_confirmation"
        />
      </div>
      <div class="p-2 w-full mt-4">
        <button
          @click.prevent="saveForm"
          type="submit"
          class="flex text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
        >
          Register
        </button>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      form: {
        nom: "",
        cognoms: "",
        email: "",
        telefon: "",
        direccio: "",
        cp: "",
        poblacio: "",
        provincia: "",
        data_naix: "",
        password: "",
        password_confirmation: "",
      },
      errors: [],
    };
  },
  methods: {
    saveForm() {
      let that = this;
      console.log(that.form);
      axios
        .post("/api/register", that.form)
        .then(() => {
          console.log("saved");
        })
        .catch((error) => {
          that.errors = error.response.data.errors;
        });
    },
  },
};
</script>