
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// require('./admin-lte');
import VueRouter from 'vue-router'
window.Vue = require('vue');

//tell system to use VueRouter by resgistering it as a global comonent c_sousen
Vue.use(VueRouter);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// 1. Define route components.
// These can be imported from other files
let Dashboard = require('./components/Dashboard.vue');
let Profile = require('./components/Profile.vue');
//c_sousen
// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
let routes = [
    { path: '/dashboard', component: Dashboard },
    { path: '/profile', component: Profile }
  ]
// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
// history mode enabled
const router = new VueRouter({
  mode : 'history',
    routes // short for `routes: routes`
  })

Vue.component('example-component', require('./components/ExampleComponent.vue'));
//c_sousen
const app = new Vue({
    el: '#app',
    router
});
