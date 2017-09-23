
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.events = new Vue();

window.flash = function (message) {
    window.events.$emit('flash', message);
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('star', require('./components/Star.vue'));
Vue.component('profile', require('./components/Profile.vue'));
Vue.component('reset', require('./components/Reset.vue'));

const app = new Vue({
    el: '#app',
    mounted() {
      $('.tab-menu').hide();
      $("#content").show();
    }
});

$('.tab li').click(function (e) {
  $(this).parent().find('li').removeClass('change');
  $(this).addClass('change');
  var id = $(this).data('change');
  $('.tab-menu').hide();
  $("#" + id).show();
});
