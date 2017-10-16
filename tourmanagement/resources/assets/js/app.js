
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import VueResource from 'vue-resource'
import Router from './routes.js'


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import $ from 'jquery';
window.$ = window.jQuery = $;
import 'jquery-ui/ui/widgets/datepicker.js';

 import App from './App.vue'
 Vue.use(VueResource)
 Vue.http.options.root ='http://localhost:8000'
new Vue({
    el: '#app',
    render:h=>h(App),
    router:Router
});
