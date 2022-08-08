import { createRouter, createWebHistory } from 'vue-router';
import hommeDetail from '../views/homme/hommeDetail';
import homme from '../views/homme/homme';
import index from '../views/index.vue';
import introduce from '../views/introduce.vue';
import bestProduct from '../views/bestProduct.vue';
import newProduct from '../views/newProduct.vue';
import myPageMemberCheck from '../views/mypage/myPageMemberCheck.vue';
import mypageOnlineOrderList from '../views/mypage/mypageOnlineOrderList.vue';
import myPageReview from '../views/mypage/myPageReview.vue';
import myPageWishList from '../views/mypage/myPageWishList.vue';
import ReviewWrite from '../views/mypage/ReviewWrite.vue';
import signIn from '../views/user/signIn.vue';
import signUp from '../views/user/signUp.vue';
import story from '../views/story.vue';
import meetsArt from '../views/meetsArt.vue';
import hommeProductDetail from '../views/homme/hommeProductDetail.vue';
import buyPage from '../views/homme/buyPage.vue';
import store from '@/store';

//네비게이션 가드
const requireAuth = () => (to, from, next) => {
  if (store.state.setUser === 0) {
    alert('로그인 후에 이용해주시길 바랍니다.', '', 'warning');
    next('/signin');
    return;
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
    path: '/myPageMemberCheck',
    name: 'myPageMemberCheck',
    component: myPageMemberCheck,
    // beforeEnter: requireAuth(),
  },
  {
    path: '/mypageOnlineOrderList',
    name: 'mypageOnlineOrderList',
    component: mypageOnlineOrderList,
    // beforeEnter: requireAuth(),
  },
  {
    path: '/myPageReview',
    name: 'myPageReview',
    component: myPageReview,
    // beforeEnter: requireAuth(),
  },
  {
    path: '/myPageWishList',
    name: 'myPageWishList',
    component: myPageWishList,
    // beforeEnter: requireAuth(),
  },
  {
    path: '/ReviewWrite',
    name: 'ReviewWrite',
    component: ReviewWrite,
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
