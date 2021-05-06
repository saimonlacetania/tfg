require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
import routes from "./routes";
const router = new VueRouter(routes);

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
