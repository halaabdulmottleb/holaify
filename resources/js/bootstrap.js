import Vue from 'vue';
import axios from 'axios';
import "tailwindcss/dist/tailwind.min.css";
import "tailwindcss/dist/utilities.min.css";
import "tailwindcss/dist/utilities.min.css";
import WOW from "wow.js";
window.Vue = Vue;

window.axios = axios;
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.WOW = WOW;
new WOW().init();