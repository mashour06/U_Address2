require('./bootstrap');
require('./maps');
require('./sb-admin-2');


import { createApp } from 'vue'

import myapp from './vue/myapp'
import Home from './vue/Home.vue'
import Login from './vue/Login.vue'
import Register from './vue/Register.vue'
import Dashboard from './vue/Dashboard.vue'

import { createRouter, createWebHistory } from 'vue-router'

// import VueRouter from 'vue-router'
// Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/register',
        name: 'Register',
        component: Register
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard
    }

];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

const app = createApp(myapp).use(router).mount('#myapp')
