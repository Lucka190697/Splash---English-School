import Snotify from 'vue-snotify';

require('./bootstrap');
Vue.use(Snotify,UserSnotify);

window.Vue = require('vue');

const UserSnotify = {
    toast: {
        timeout: 5000,
        showProgressBar: true,
        // position: SnotifyPosition.rightTop,
        pauseOnHover: true,
        closeOnClick: false,
    },
}

// Vue.component('user-snotify', require('./components/snotify.vue'));


Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('snotify', require('./components/snotify.vue'));

const app = new Vue({
    el: '#app'
});
