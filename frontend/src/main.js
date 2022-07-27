import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';
import mixins from './mixins';
import css from './assets/css/style.css';
import swipe from '@/assets/js/swiper.js';

createApp(App).use(store).use(router).mixin(mixins).use(css).use(swipe).mount('#app');

window.Kakao.init('61b4bcbd93b6e2039a3f7f7d46cbbe45');
