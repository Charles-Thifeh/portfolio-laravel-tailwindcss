

require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('app-component', require('./components/App.vue').default);
Vue.component('body-component', require('./components/Body.vue').default);
Vue.component('home-component', require('./components/Home.vue').default);


const app = new Vue({
    el: '#app',
});
