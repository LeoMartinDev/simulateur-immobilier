
import Vue from 'vue';
import Vuetify from 'vuetify/lib';
import '@mdi/font/css/materialdesignicons.css';

import Simulator from './Simulator.vue';

Vue.use(Vuetify);

new Vue({
  vuetify: new Vuetify(),
  render: h => h(Simulator),
}).$mount('#app')
