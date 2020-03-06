/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

import moment from 'moment';

window.moment = moment;

import { Form, HasError, AlertError } from 'vform';

window.Form = Form;

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);


import VueRouter from "vue-router";
Vue.use(VueRouter);

import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '2px'
})

import Swal from 'sweetalert2';
window.swal = Swal;

const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', swal.stopTimer)
    toast.addEventListener('mouseleave', swal.resumeTimer)
  }
})

window.toast = toast;

window.Fire = new Vue();


const routes = [
    {
        path: "/dashboard",
        component: require("./components/DashboardComponent.vue").default
    },
    {
        path: "/profile",
        component: require("./components/ProfileComponent.vue").default
		},
		{
			path: "/users",
			component: require("./components/UsersComponent.vue").default
	},
	
];

const router = new VueRouter({
		mode: 'history',
    routes // сокращённая запись для `routes: routes`
});

Vue.filter('upText', function(text){
	return text.charAt(0).toUpperCase()+text.slice(1);
});

Vue.filter('myDate', function(registered){
	return moment(registered).format('MMMM Do YYYY');
});
Vue.component('calendar-component', require('./components/CalendarComponent.vue').default);
Vue.component('phone-component', require('./components/PhoneComponent.vue').default);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component(
	"level-component",
	require("./components/LevelsComponent.vue").default
);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    router
});
