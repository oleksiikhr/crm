
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Vue.use(require('vue-material'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// window.Vue.material.registerTheme({
//     default: {
//         primary: 'blue',
//         accent: 'red'
//     },
//     green: {
//         primary: 'green',
//         accent: 'pink'
//     },
//     orange: {
//         primary: 'orange',
//         accent: 'green'
//     },
// });

Vue.component('login', require('./components/auth/Login.vue'));
Vue.component('navbar', require('./components/header/Navbar.vue'));

const app = new Vue({
    el: '#app'
});
