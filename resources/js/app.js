import {ASTElement as Vue} from "vue-template-compiler";

require('./bootstrap');
Vue.component('favorite', require('./components/Favorite.vue'));

