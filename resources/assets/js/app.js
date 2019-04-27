require('./bootstrap');

window.Vue = require('vue');

import welcomecomp from './components/Welcome.vue';

Vue.component('welcomecomp', welcomecomp);

const app = new Vue({

  el: '#app',
  components: {welcomecomp} 
  
});

export default {
  
  name: 'welcomecomp',

  components: {welcomecomp}

};