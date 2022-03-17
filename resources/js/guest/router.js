import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import SingleRestaurant from "./pages/SingleRestaurant";
import PageCart from "./pages/PageCart";
// import PageNotFound from "./pages/PageNotFound";



const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        // {
        //     path: "/chi-siamo",
        //     name: "about",
        //     component: About,
        // },
        // {
        //     path: "/posts/:slug",
        //     name: "single-post",
        //     component: SinglePost,
        // },
        {
            path: "/carrello",
            name: "page-cart",
            component: PageCart,
        },
        {
            path: "/ristorante/:slug",
            name: "single-restaurant",
            component: SingleRestaurant,
        },
        // // mostrare 404
        // {
        //     path:'*',
        //     name: 'page-404',
        //     component: PageNotFound
        // }
    ],
});

export default router;
