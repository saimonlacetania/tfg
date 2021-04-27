require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
import routes from "./routes";
const router = new VueRouter(routes)

Vue.use(VueRouter);


const app = new Vue({
    el: "#app",
    router
});