import App from "./App";
import '../css/app.css'

require('./bootstrap');

import {createApp} from "vue";
import {createRouter, createWebHashHistory} from 'vue-router'
import {routes} from "./route";
import {store} from "./store";

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes,
});


const app = createApp(App);

app.use(router);
app.use(store);


app.component('app', App);

app.mount('#app');
