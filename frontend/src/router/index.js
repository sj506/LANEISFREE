import { createRouter, createWebHistory } from 'vue-router';
import index from '../views/index.vue';
import bestProduct from '../views/bestProduct.vue';
import newProduct from '../views/newProduct.vue';
import introduce from '../views/introduce.vue';

const routes = [
  {
    path: '/',
    name: 'index',
    component: index,
  },
  {
    path: '/',
    name: 'bestitme',
    component: bestProduct,
  },
  {
    path: '/',
    name: 'newproduct',
    component: newProduct,
  },
  {
    path: '/',
    name: 'introduce',
    component: introduce,
  },
  // {
  //   path: '/',
  //   name: 'home',
  //   component: HomeView
  // },
  // {
  //   path: '/about',
  //   name: 'about',
  //   // route level code-splitting
  //   // this generates a separate chunk (about.[hash].js) for this route
  //   // which is lazy-loaded when the route is visited.
  //   component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  // }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
