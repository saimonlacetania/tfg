import Register from "./components/Register";
import Login from "./components/Login";
import NotFound from "./components/NotFound";
import Example from "./components/ExampleComponent";
import Perfil from "./components/PerfilComponent";
import Productes from "./components/ProductesComponent";
import EditarPerfil from "./components/EditarPerfilComponent";
import Botiga from "./components/BotigaComponent";
import CrearBotiga from "./components/CrearBotigaComponent";

export default {
    mode: "history",
    linkActiveClass: "font-semibold",
    routes: [{
            path: "*",
            component: NotFound
        },
        {
            path: "/",
            component: Example,
            name: "Home",
            children: [{
                    // UserProfile will be rendered inside User's <router-view>
                    // when /user/:id/profile is matched
                    path: "/profile",
                    component: Perfil,
                    name: "Profile",
                    beforeEnter: (to, form, next) => {
                        axios
                            .get("/api/athenticated")
                            .then(() => {
                                next();
                            })
                            .catch(() => {
                                return next({ name: "Login" });
                            });
                    }
                },
                {
                    // UserPosts will be rendered inside User's <router-view>
                    // when /user/:id/posts is matched
                    path: "/editarPerfil",
                    component: EditarPerfil,
                    name: "EditarPerfil",
                    beforeEnter: (to, form, next) => {
                        axios
                            .get("/api/athenticated")
                            .then(() => {
                                next();
                            })
                            .catch(() => {
                                return next({ name: "Login" });
                            });
                    }
                },
                {
                    // UserPosts will be rendered inside User's <router-view>
                    // when /user/:id/posts is matched
                    path: "",
                    component: Productes
                },
                {
                    // UserPosts will be rendered inside User's <router-view>
                    // when /user/:id/posts is matched
                    path: "/productes",
                    component: Productes,
                    name: "Productes"
                },
                {
                    path: "/botiga",
                    component: Botiga,
                    name: "Botiga"
                },
                {
                    path: "/register",
                    component: Register
                },
                {
                    path: "/crearBotiga",
                    component: CrearBotiga
                },
                {
                    path: "/login",
                    component: Login,
                    name: "Login"
                }
            ]
        }
    ]
};