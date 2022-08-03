import { createRouter, createWebHistory } from 'vue-router';
import hommeDetail from '../views/homme/hommeDetail';
import homme from '../views/homme/homme';
import index from '../views/index.vue';
import introduce from '../views/introduce.vue';
import bestProduct from '../views/bestProduct.vue';
import newProduct from '../views/newProduct.vue';
import myPage from '../views/mypage/myPage.vue';
import signIn from '../views/user/signIn.vue';
import signUp from '../views/user/signUp.vue';
import story from '../views/story.vue';
import meetsArt from '../views/meetsArt.vue';
import hommeProductDetail from '../views/homme/hommeProductDetail.vue';
import store from '@/store';

const requireAuth = () => (to, from, next) => {
  if (store.state.user.m_num === undefined) {
    swal.fire('로그인을 하세요.', '', 'warning');
    return;
  }
  return next();
};

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
    path: '/homme',
    name: 'homme',
    component: homme,
  },
  {
    path: '/detail',
    name: 'hommeDetail',
    component: hommeDetail,
  },
  {
    path: '/mypage',
    name: 'myPage',
    component: myPage,
    beforeEnter: requireAuth(),
  },
  {
    path: '/signin',
    name: 'signIn',
    component: signIn,
  },
  {
    path: '/signup',
    name: 'signUp',
    component: signUp,
  },
  {
    path: '/story',
    name: 'story',
    component: story,
  },
  {
    path: '/meetsart',
    name: 'meetsart',
    component: meetsArt,
  },
  {
    path: '/hommeProductDetail/:productId',
    name: 'hommeProductDetail',
    component: hommeProductDetail,
    props: true,
  },
  // {
  //   path: '/',
  //   name: 'home',
  //   component: HomeView
  // },
  // {
  //   path: '/about',
  //   name: 'about',
  // route level code-splitting
  // this generates a separate chunk (about.[hash].js) for this route
  // which is lazy-loaded when the route is visited.
  //   component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  // }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
