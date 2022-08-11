<template>
  <div id="container">
    <div class="location headerCate">
      <div class="header">
        <router-link to="/">
          <div class="depth"><button href="/" class="btn_h">홈</button></div>
        </router-link>

        <div class="depth">
          <button type="button" class="btn_h">마이페이지</button>
        </div>

        <div class="depth">
          <button type="button" class="btn_h">내 리뷰</button>
        </div>
      </div>
    </div>
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide activeLink="/myPageReview" />
      <!-- <div class="col-9 reviewHeader"> -->
      <div class="col-10 p-5 r_border">
        <h3>내 리뷰</h3>
        <div class="reviewDiv">
          <div class="reviewP" @click="displayP" :class="{ bgGreen: isActive1 }">작성 가능한 리뷰</div>
          <div class="reviewW" @click="displayW" :class="{ bgGreen: isActive2 }">내가 작성한 리뷰</div>
        </div>
        <div class="reviewP_ctnt" :class="{ dNone: isActive2 }">
          <div class="p_container">
            <div class="p_header">
              <div class="review_point">리뷰 포인트 혜택</div>
              <div class="review_policy">리뷰운영정책</div>
            </div>
            <div class="p_ctnt">
              <div class="nonList" v-show="!purchaseCheck">
                구매하신 제품이 있을 경우에만<br />
                리뷰 작성이 가능합니다.
              </div>
              <div v-show="purchaseCheck">
                <header>
                  <ul class="d-flex p_ctnt_header">
                    <li class="">제품명</li>
                    <li class="">결제금액</li>
                    <li class="">작성기한</li>
                    <li class="">리뷰작성</li>
                  </ul>
                </header>
                <div>
                  <ul class="d-flex p_ctnt_ctnt" v-for="item in userProductList" :key="item.pro_num">
                    <li>
                      <div class="proNm">{{ item.pro_name }}</div>
                      <img :src="$getSrc(item.pro_mainimg)" class="proImg" />
                    </li>
                    <li>{{ item.pro_price }}</li>
                    <li>{{ item.pur_deadline }}</li>
                    <li>
                      <button class="btn btn-secondary">
                        <router-link :to="{ path: '/ReviewWrite', query: { pro_num: item.pro_num } }"><span style="color:white">리뷰쓰기</span></router-link>
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="reviewW_ctnt" :class="{ dNone: isActive1 }">
          <div class="w_container" v-for="item in writenReview" :key="item.pro_num">
            <div class="w_main row">
              <div class="w_user col-6 p-3 d-flex justify-content-between align-items-center">
                <div class="user_info">
                  <ul>
                    <li class="p-1">{{ item.m_email }}</li>
                    <li class="p-1 user_hash">#남성 #20대</li>
                  </ul>
                  <div class="star--box">
                    <div class="star">
                      <div class="stars-outer">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <div class="stars-inner" :class="'star' + item.re_star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-1 re_time">{{ item.re_time }}</div>
              </div>
              <div class="w_ctnt col-6 p-3 d-flex align-items-center">
                <div><img class="reviewImg" :src="$getSrc(item.pro_mainimg)" alt="" /></div>
                <ul>
                  <li>{{ item.pro_name }}</li>
                  <li class="pro_price">{{ item.pro_price }}원</li>
                </ul>
              </div>
            </div>
            <div class="w_review">{{ item.re_ctnt }}</div>
            <div class="w_btn d-flex justify-content-end pt-2">
              <div><router-link :to="{ path: `/ReviewWrite`, query: { pro_num: item.pro_num, re_num: item.re_num } }"><button class="btn btn-outline-dark">수정</button></router-link></div>
              <div><button class="btn btn-outline-dark" @click="reviewDel(item.pro_num, this.user.result.m_num)">삭제</button></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
</template>

<script>
import myPageHeader from '@/layout/myPageHeader';
import myPageSide from '@/layout/myPageSide';
export default {
  name: '',
  components: { myPageHeader, myPageSide },
  data() {
    return {
      isActive1: true,
      isActive2: false,
      user: {},
      userCheck: true,
      purchaseData: [],
      purchaseCheck: false,
      userProductList: {},
      userReviewList: {},
      writenReview: [],
      stars: ['star1', 'star2', 'star3', 'star4', 'star5'],
    };
  },
  beforeCreate() {},
  computed: {
    loginToggle: function () {
      return this.$store.state.setUser;
    },
  },
  watch: {
    loginToggle: function () {
      this.loginCheck();
    },
  },
  created() {
    this.user = this.$store.state.user;
    console.log(this.user.result);
    this.userChecking();
    this.getPurchase(this.user.result.m_num);
    console.log(this.purchaseData);
    this.getUserProductList(this.user.result.m_num);
    this.getUserReviewList(this.user.result.m_num);
    this.getWritenReview(this.user.result.m_num);
  },
  methods: {
    loginCheck() {
      if (!this.$store.state.user) {
        alert('로그인 한 유저만 구매가 가능합니다.');
        this.$router.push('signin');
      }
    },
    displayP(e) {
      this.isActive1 = true;
      this.isActive2 = false;
      console.log(e.target);
      this.$store.commit('userProductList', this.userProductList);
    },
    displayW() {
      this.isActive1 = false;
      this.isActive2 = true;
      this.$store.commit('userProductList', this.writenReview);
    },
    async getPurchase(m_num) {
      this.purchaseData = await this.$get(`/review/getPurchase/${m_num}`, {});
      console.log(this.purchaseData);
      if (this.purchaseData.length == 0) {
        console.log(this.purchaseData);
        this.purchaseCheck = false;
      } else {
        this.purchaseCheck = true;
      }
    },
    async getUserProductList(m_num) {
      this.userProductList = await this.$get(`/review/getUserProductList/${m_num}`, {});
      this.$store.commit('userProductList', this.userProductList);
      console.log(this.userProductList);
    },
    async getUserReviewList(m_num) {
      this.userReviewList = await this.$get(`/review/getUserReview/${m_num}`, {});
      console.log(this.userReviewList);
    },
    async getWritenReview(m_num) {
      this.writenReview = await this.$get(`/review/getWritenReview/${m_num}`, {});
      console.log(this.writenReview);
    },
    async reviewDel(pro_num, m_num) {
      await this.$get(`/review/reviewDel/${m_num}/${pro_num}`, {});
      this.getUserProductList(this.user.result.m_num);
      this.getWritenReview(this.user.result.m_num);
      this.displayP();
    },
    userChecking() {
      if (this.user.result === undefined) {
        this.userCheck = true;
      } else {
        this.userCheck = false;
      }
    },
  },
};
</script>

<style scoped>
/* default */
.dNone {
  display: none;
}
h3 {
  font-size: 30px;
  font-weight: 600;
  padding-bottom: 20px;
}
.bgGreen {
  background-color: var(--bg-main);
  color: #fff;
}
a {
  color: var(--text-black);
  font-style: none;
}
button {
  border: none;
}
.r_border {
  min-height: 1200px;
  border-left: 1px solid #ccc;
}

/* header */
#container {
  width: 100vw;
  min-height: 500px;
  /* padding-bottom: 110px; */
  border-top: 1px solid transparent;
}

.contents {
  max-width: 1400px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}

/* main */
.reviewHeader {
  padding: 40px;
  min-width: 560px;
}
.reviewDiv {
  display: flex;
}
.reviewP {
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}
.reviewW {
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* reviewP */
.p_header {
  display: flex;
  margin-top: 50px;
  justify-content: space-between;
  padding-bottom: 15px;
  border-bottom: 2px solid var(--text-main);
}
.review_point::after {
  content: '';
  display: inline-block;
  width: 7px;
  height: 7px;
  transform: rotate(225deg);
  border-color: #222;
  border-style: solid;
  border-width: 0px 0px 1px 1px;
  vertical-align: 2px;
  margin-left: 3px;
}
.review_policy {
  position: relative;
  padding-right: 5px;
}
.review_policy::before {
  content: '';
  display: inline-block;
  position: absolute;
  left: -20px;
  width: 18px;
  height: 17px;
  background: url(https://images.innisfree.co.kr/resources/web2/images/review/icon_exc.png) no-repeat left top;
  background-size: 100%;
}
.nonList {
  width: 100% !important;
  margin: 80px 0 0;
  padding: 120px 0 40px;
  text-align: center;
  font: 22px/32px 'SDNeoL', 'notoR';
  color: #222;
  background: url(https://images.innisfree.co.kr/resources/web2/images/common/bg_no_list.png) no-repeat 50% 40px;
  background-size: 60px;
}
.p_ctnt_header {
  justify-content: space-around;
  padding: 20px 0;
  font-weight: 600;
  border-bottom: 1px solid var(--text-main);
}
.p_ctnt_header li:first-child {
  width: 150px;
  text-align: center;
}
.p_ctnt_ctnt {
  justify-content: space-around;
  padding: 35px 0;
  align-items: center;
}
.p_ctnt_ctnt li:first-child {
  width: 150px;
  text-align: center;
  position: relative;
  margin-left: 20px;
}
.p_ctnt_ctnt li:nth-child(2) {
  padding-left: 16px;
}
.p_ctnt_ctnt li:nth-child(3) {
  padding-left: 15px;
}
.proNm {
}
.proImg {
  width: 100px;
  height: 90px;
  position: absolute;
  left: -96px;
  top: -30px;
}
/* review W */
.w_container {
  margin-top: 50px;
}
.w_main {
  border: 1px solid #ccc;
}
.w_user {
  border-right: 1px solid #ccc;
}
.reviewImg {
  width: 100px;
  height: 100px;
}
.w_ctnt {
}
.re_time {
  align-self: flex-start;
  color: #777;
}
.pro_price {
  padding-top: 10px;
  font-size: 20px;
  font-weight: 600;
}
.w_review {
  margin-top: 20px;
  color: #222;
}
.w_btn {
  gap: 5px;
}
.user_hash {
}
/* 리뷰별점 */
.user_info {
  display: flex;
  flex-direction: column;
}
.star--box {
  display: inline;
  width: 92px;
  padding-top: 5px;
}
.store--rating i {
  font-size: 18px;
}
.stars-outer {
  position: relative;
  display: flex;
}

.stars-inner {
  display: flex;
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap;
  overflow: hidden;
  width: 0;
}
.stars-outer i {
  font-weight: 900;
  color: #ccc;
}

/* header category */

.location {
  display: flex;
  flex-direction: column;
}

.location:after {
  content: '';
  display: block;
  clear: both;
}

.header {
  margin-left: 80px;
}

.headerCate {
  max-width: 1550px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}

.depth {
  float: left;
  margin-left: 10px;
  padding: 15px 0 17px;
  background: url('@/assets/img/mypage/arw_loc.png') no-repeat 0 50%;
}

.depth:first-child {
  background: none;
}

.btn_h {
  margin: 0 0 0 15px;
  padding-right: 25px;
  color: #777;
  background: url('@/assets/img/mypage/arw_loc_btn.png') no-repeat 99% 50%;
  border: none;
}

.depth:last-child .btn_h {
  color: #222;
}

.depth:first-child .btn_h {
  color: #777;
}

.location .list {
  display: none;
  position: absolute;
  max-height: 350px;
  overflow: hidden;
  top: 48px;
  left: -8px;
  padding: 18px 24px;
  background: #fff;
  border: 1px solid #a7a7a7;
}

.location .list a:hover {
  color: #222;
}

.stars-inner i {
  font-weight: 900;
  color: #fcd34d;
}
.stars-inner.star5 {
  width: 100% !important;
}
.stars-inner.star4 {
  width: 80% !important;
}
.stars-inner.star3 {
  width: 60% !important;
}
.stars-inner.star2 {
  width: 40% !important;
}
.stars-inner.star1 {
  width: 20% !important;
}
.stars-inner.star0 {
  width: 0% !important;
}
</style>
