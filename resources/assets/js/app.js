
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue';
import Buefy from 'buefy';

Vue.use(Buefy, { defaultIconPack: 'fa' });
window.Vue = Vue;

var App = new Vue({
   el: '#app'
});

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
