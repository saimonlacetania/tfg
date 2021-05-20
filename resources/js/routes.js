import Register from "./components/Register";
import Login from "./components/Login";
import NotFound from "./components/NotFound";
import Main from "./components/MainComponent";
import Perfil from "./components/PerfilComponent";
import Productes from "./components/ProductesComponent";

import FeedInici from "./components/feediniciComponent";
import Contacte from "./components/contacteComponent";
import Producte from "./components/ProducteComponent";
import Botiga from "./components/BotigaComponent";
import CrearBotiga from "./components/CrearBotigaComponent";
import EditarProducte from "./components/EditarProducteComponent";
import Wishlist from "./components/WishlistComponent";
import Comandes from "./components/ComandesComponent";

import PerfilBotiga from "./components/PerfilBotigaComponent";
import Cistella from "./components/CistellaComponent";
import Productors from "./components/ProductorsComponent";

export default {
    mode: "history",
    linkActiveClass: "font-semibold",
    routes: [{
            path: "*",
            component: NotFound
        },
        {
            path: "/",
            component: Main,
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
                    path: "",
                    component: FeedInici,
                    name: "FeedInici"
                },
                {
                    // UserPosts will be rendered inside User's <router-view>
                    // when /user/:id/posts is matched
                    path: "/productes",
                    component: Productes,
                    name: "Productes"
                },
                {
                    // UserPosts will be rendered inside User's <router-view>
                    // when /user/:id/posts is matched
                    path: "/productors",
                    component: Productors,
                    name: "Productors"
                },
                {
                    // UserPosts will be rendered inside User's <router-view>
                    // when /user/:id/posts is matched
                    path: "/producte/:id",
                    component: Producte,
                    name: "Producte"
                },
                {
                    path: "/editarProducte/:id",
                    component: EditarProducte,
                    name: "editarProducte",
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
                    path: "/botiga",
                    component: Botiga,
                    name: "Botiga",
                    beforeEnter: (to, form, next) => {
                        axios
                            .get("/api/athenticated")
                            .then(() => {
                                axios
                                    .get("/api/comprovaBotiga")
                                    .then((res) => {
                                        console.log(res);
                                        next();
                                    })
                                    .catch(() => {
                                        return next({ name: "CrearBotiga" });
                                    })
                            })
                            .catch(() => {
                                return next({ name: "Login" });
                            });
                    }
                },
                {
                    path: "/register",
                    component: Register,
                    name: "Register"
                },
                {
                    path: "/crearBotiga",
                    component: CrearBotiga,
                    name: "CrearBotiga",
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
                    path: "/login",
                    component: Login,
                    name: "Login"
                },
                {
                    path: "/contacte",
                    component: Contacte,
                    name: "Contacte"
                },
                {
                    path: "/perfil/:id",
                    component: PerfilBotiga,
                    name: "PerfilBotiga",
                },
                {
                    path: "/cistella",
                    component: Cistella,
                    name: "Cistella",
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
                    path: "/wishlist",
                    component: Wishlist,
                    name: "Wishlist"
                },
                {
                    path: "/comandes",
                    component: Comandes,
                    name: "Comandes"
                }
            ]
        }
    ]
};