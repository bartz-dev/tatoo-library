import App from "./App";
import '../css/app.css'
import VideoBg from 'vue-videobg'

require('./bootstrap');

import {createApp} from "vue";
import {createRouter, createWebHashHistory} from 'vue-router'
import {routes} from "./route";
import {store} from "./store";
import axios from "axios";

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes,
});


const app = createApp(App);

app.config.globalProperties.$http = axios;

app.use(router);
app.use(store);

app.component('video-bg', VideoBg)

app.component('app', App);

app.mount('#app');
