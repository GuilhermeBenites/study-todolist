import './bootstrap';

import {createApp} from "vue";
import {createRouter, createWebHistory} from "vue-router";
import routes from "./routes.js"

const router = createRouter({
    history: createWebHistory(),
    routes,
    linkActiveClass: 'fill-todo-red text-todo-red'
})

const app = createApp({});

app.use(router);

app.mount('#app')
