require("./bootstrap");

window.Vue = require("vue");
import example from "./components/ExampleComponent.vue";
import VueRouter from "vue-router";
import routes from "./routes";

Vue.component('example', require('./components/ExampleComponent.vue'));
Vue.use(VueRouter);

const app = new Vue({
    el: "#app",
    components: {
        "example": require("./components/ExampleComponent.vue")
    },
    router: new VueRouter(routes)
});