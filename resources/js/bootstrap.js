import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import "tailwindcss/dist/tailwind.min.css";
import "tailwindcss/dist/utilities.min.css";
import "tailwindcss/dist/utilities.min.css";
import WOW from "wow.js";

window.Vue = Vue;
Vue.use(VueRouter);

window.axios = axios;
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.WOW = WOW;
new WOW().init();