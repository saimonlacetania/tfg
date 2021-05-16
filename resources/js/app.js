require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
import routes from "./routes";
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import swal from 'sweetalert2';
window.Swal = swal;

const router = new VueRouter(routes);

Vue.use(VueSweetalert2);
Vue.use(VueRouter);

const app = new Vue({
    el: "#app",
    mode: "history",
    router,
    created: function() {
        axios.get("/api/user").then(res => {
            this.user = res.data;
            console.log("montat");
        });
    }
});
