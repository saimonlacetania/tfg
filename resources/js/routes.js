import About from "./components/About";
import Register from "./components/Register";
import Login from "./components/Login";
import Dashboard from "./components/Dashboard";
import NotFound from "./components/NotFound";
import Example from "./components/ExampleComponent";

export default {
    mode: "history",
    linkActiveClass: "font-semibold",
    routes: [
        {
            path: "*",
            component: NotFound
        },
        {
            path: "/",
            component: Example,
            name: "Home",
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
            path: "/about",
            component: About
        },
        {
            path: "/register",
            component: Register
        },
        {
            path: "/login",
            component: Login,
            name: "Login"
        },

        {
            path: "/dashboard",
            name: "Dashboard",
            component: Dashboard,
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
        }
    ]
};
