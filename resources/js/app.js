/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import axios from "axios";
import vSelect from "vue-select";
import VueSweetalert2 from 'vue-sweetalert2';

import "sweetalert2/dist/sweetalert2.min.css";
import "vue-select/dist/vue-select.css";
import Datatable from 'vue2-datatable-component'

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('employees', require('./components/Employees.vue').default);
Vue.component('create-employee', require('./employees/Create.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);
Vue.component('open-modal', require('./components/OpenModal.vue').default);
// Vue.component('table-employee', require('./employees/Table.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 const options = {
    confirmButtonColor: "#41b882",
    cancelButtonColor: "#ff7674",
  };

const app = new Vue({
    el: '#app',
});
// app.config.globalProperties.$axios = axios;
// app.config.globalProperties.$APIBASEURL = "http://127.0.0.1:8000/api/v1/mobile/";
axios.defaults.baseURL = 'http://127.0.0.1:8000/api/v1/mobile/';
app.component("VSelect", vSelect);
app.use(VueSweetalert2, options);
app.use(Datatable)
