import App from "./App";
import '../css/app.css'

require('./bootstrap');

import {createApp} from "vue";
import {createRouter, createWebHistory} from 'vue-router'
import {routes} from "./route";
import {store} from "./store";
import axios from "axios";
import AppMenu from './components/AppMenu'

const router = createRouter({
    mode: 'history',
    history: createWebHistory(),
    fallback: true,
    routes: routes,
});


const app = createApp(App);

app.config.globalProperties.$http = axios;

app.use(router);
app.use(store);


app.component('app', App);

app.mount('#app');
