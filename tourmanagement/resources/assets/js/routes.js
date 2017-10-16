import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// components

import Home from './components/home.vue'


var router = new VueRouter({
    routes:[
        {
            path:'/',
            component:Home
        }
    ]
});

export default router