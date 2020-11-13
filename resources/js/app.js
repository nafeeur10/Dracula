require('./bootstrap');

window.Vue = require('vue');
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)

Vue.component('callback-js', require('./components/CallbackJs.vue').default);
Vue.component('sort', require('./components/Sort.vue').default);
Vue.component('for-each-js', require('./components/ForEachJs.vue').default);
Vue.component('filter-js', require('./components/FilterJs.vue').default);
Vue.component('map-js', require('./components/MapJs.vue').default);
Vue.component('reduce-js', require('./components/ReduceJs.vue').default);
Vue.component('animation-js', require('./components/animation/AnimationJs.vue').default);

const app = new Vue({
    el: '#app',
});
