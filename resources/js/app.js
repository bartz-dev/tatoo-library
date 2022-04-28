import App from "./App";

require('./bootstrap');

import {createApp} from "vue";

const app = createApp(App);

app.component('app', App)

app.mount('#app')