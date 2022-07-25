import { createRouter, createWebHistory } from 'vue-router';
import hommeDetail from '../views/homme/hommeDetail';
import index from '../views/index.vue';
import introduce from '../views/introduce.vue';
import bestProduct from '../views/bestProduct.vue';
import newProduct from '../views/newProduct.vue';

const routes = [
  {
    path: '/',
    name: 'index',
    component: index,
  },
  {
    path: '/intro',
    name: 'introduce',
    component: introduce,
  },
  {
    path: '/best',
    name: 'bestProduct',
    component: bestProduct,
  },
  {
    path: '/new',
    name: 'newProduct',
    component: newProduct,
  },
  {
    path: '/detail',
    name: 'hommeDetail',
    component: hommeDetail,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
