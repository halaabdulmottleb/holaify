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
var ctx = document.getElementById('myChart');
var ctxx = document.getElementById('ordersWeekly');

var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Pending Orders', 'Canceled Orders', 'Deliverd Orders'],
        datasets: [{
            // label: '# of Votes',
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
        display: false,}
    }
});

let chart = new Chart(ctxx, {
    type: 'line',
    data: {
      datasets: [{
          data: [10, 20, 30, 40, 50, 60]
      }],
      labels: ['January', 'February', 'March', 'April', 'May', 'June']
  },
  options: {
      // scales: {
      //     xAxes: [{
      //         ticks: {
      //             min: 'March'
      //         }
      //     }]
      // }
  }
});
