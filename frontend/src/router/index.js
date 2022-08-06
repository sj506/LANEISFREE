import { createRouter, createWebHistory } from 'vue-router';
import hommeDetail from '../views/homme/hommeDetail';
import homme from '../views/homme/homme';
import index from '../views/index.vue';
import introduce from '../views/introduce.vue';
import bestProduct from '../views/bestProduct.vue';
import newProduct from '../views/newProduct.vue';
import myPageReview from '../views/mypage/myPageReview.vue';
import signIn from '../views/user/signIn.vue';
import signUp from '../views/user/signUp.vue';
import story from '../views/story.vue';
import meetsArt from '../views/meetsArt.vue';
import hommeProductDetail from '../views/homme/hommeProductDetail.vue';
import buyPage from '../views/homme/buyPage.vue';
import store from '@/store';

//네비게이션 가드
const requireAuth = () => (to, from, next) => {
  // (가고자하는 위치, 현재 위치, next)
  // 로그인이 필요한 위치를 체크해서 쓸 것이기 때문에 to, from은 사용하지 않음
  if (store.state.user.m_num === undefined) {
    // undefined인 경우 → 로그인을 안 한 경우
    alert('로그인을 하세요.', '', 'warning');
    return router.push('/signin');
  }
  return next(); // next가 호출이 되어야 사용가능
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
    path: '/myPageReview',
    name: 'myPageReview',
    component: myPageReview,
    beforeEnter: requireAuth(),
  },
  {
    path: '/hommeProductDetail/:productId',
    name: 'hommeProductDetail',
    component: hommeProductDetail,
    props: true,
  },
  {
    path: '/buyPage',
    name: 'buyPage',
    component: buyPage,
    props: true,
    beforeEnter: requireAuth(),
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
