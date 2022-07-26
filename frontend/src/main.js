import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';
import mixins from './mixins';
import css from './assets/css/style.css';

createApp(App).use(store).use(router).use(router).use(store).use(router).mixin(mixins).use(store).use(router).mount('#app').use(css);

window.Kakao.init('61b4bcbd93b6e2039a3f7f7d46cbbe45');