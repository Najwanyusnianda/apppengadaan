import Vue from 'vue';
import VueRouter from 'vue-router';

//import component
import Login from './components/auth/Login.vue';
import AuthLayout from './components/layouts/AuthLayout.vue';

Vue.use(VueRouter);


//DEFINE ROUTE
const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/',
            name: 'layout',
            component: Vue.component('layout', require('./components/layouts/AppLayout.vue')),
            children: [{
                    path: '/dashboard',
                    component: require('./components/pages/dashboard.vue'),
                    name: 'Dashboard',
                }

            ]
        }
    ]
});

export default router