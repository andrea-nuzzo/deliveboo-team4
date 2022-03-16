import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
// import About from "./pages/About";
// import SinglePost from "./pages/SinglePost";
// import Categories from "./pages/Categories";
import SingleTypology from "./pages/SingleTypology";
import SingleRestaurant from "./pages/SingleRestaurant";
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
        // {
        //     path: "/categorie",
        //     name: "categories",
        //     component: Categories,
        // },
        {
            path: "/tipologie/:slug",
            name: "single-typology",
            component: SingleTypology,
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
