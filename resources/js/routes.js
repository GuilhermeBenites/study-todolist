import Home from "./Pages/Home.vue";
import Login from "./Pages/Login.vue";
import AuthenticatedLayout from "./Layouts/AuthenticatedLayout.vue";
import GuestLayout from "./Layouts/GuestLayout.vue";


export default [
    {
        path: '/',
        component: Home,
        meta: {
            layout: AuthenticatedLayout
        }
    },
    {
        path: '/login',
        component: Login,
        meta: {
            layout: GuestLayout
        }
    }
];
