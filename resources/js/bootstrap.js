import Vue from 'vue';
import axios from 'axios';
import "tailwindcss/dist/tailwind.min.css";
import "tailwindcss/dist/utilities.min.css";
import "tailwindcss/dist/utilities.min.css";
import WOW from "wow.js";
import Chart from 'chart.js';
window.Vue = Vue;

window.axios = axios;
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.WOW = WOW;
new WOW().init();
let orders = document.getElementById('myChart');

var myChart = new Chart(orders, {
    type: 'doughnut',
    data: {
        labels: ['Pending', 'Canceled', 'Deliverd'],
        datasets: [{
            data: [12, 5, 13],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                '#3F51B5',
            ],
            borderWidth: 0
        }]
    },
    options: {
        legend: {
            display: false,
        }
    }
});
