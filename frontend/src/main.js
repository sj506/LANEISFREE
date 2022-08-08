import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';
import mixins from './mixins';
import css from './assets/css/style.css';
import swipe from '@/assets/js/swiper.js';
import socketPlugin from './plugins/socketPlugin';

// import AOS from 'aos';
import 'aos/dist/aos.css';

createApp(App).use(store).use(router).mixin(mixins).use(css).use(swipe).use(socketPlugin).mount('#app');
window.Kakao.init('61b4bcbd93b6e2039a3f7f7d46cbbe45');

// new Vue({
//   el: '#app',
//   render: (h) => h(App),
// });
// new Vue({
//   render: h => h(App),
//   mounted() {
//     AOS.init();
//   },
// }).$mount('#app');
