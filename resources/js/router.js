import VueRouter from "vue-router";
import Vue from "vue";

Vue.use(VueRouter);

import HomePage from "./pages/HomePage";
import Deliveries from "./pages/Deliveries/Deliveries";
import StockRequests from "./pages/StockRequests/StockRequests";

const routes = [
    {
        path: "/",
        component: HomePage,
    },
    {
        path: "/deliveries",
        component: Deliveries,
    },
    {
        path: "/stock-requests",
        component: StockRequests,
    }
];

export default new VueRouter({
    mode: "history",
    routes
})