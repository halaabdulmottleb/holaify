import VueRouter from 'vue-router'
import Home from './views/Home.vue'
let routes = [{
        path: "*",
        // redirect: "/"
    },
    {
        path: '/',
        component: Home
    }
]

export default new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
})
