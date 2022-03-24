import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import SingleRestaurant from "./pages/SingleRestaurant";
import PageCart from "./pages/PageCart";
import Success from "./pages/Success";
import PageNotFound from "./pages/PageNotFound";
// import PageNotFound from "./pages/PageNotFound";



const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
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
        {
            path: "/restaurant/checkout/success",
            name: "success",
            component: Success
        },
        {
            path:'*',
            name: 'page-404',
            component: PageNotFound
        }
    ],
});

export default router;
