<template>
  <div id="container">
    <div class="location">
      <div class="header">
        <router-link to='/'>
          <div class="depth"><button href="/" class="btn">홈</button></div>
        </router-link>

        <div class="depth">
          <button type="button" class="btn">마이페이지</button>
        </div>

        <div class="depth">
          <button type="button" class="btn">찜한 제품</button>
        </div>
      </div>
    </div>
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide />
      <div class="col-9 reviewHeader">
        <h3>내 리뷰</h3>
        <div class="reviewDiv">
          <div class="reviewP" @click="displayP" :class="{ bgGreen: isActive1 }">작성 가능한 리뷰</div>
          <div class="reviewW" @click="displayW" :class="{ bgGreen: isActive2 }">내가 작성한 리뷰</div>
        </div>
            <div class="reviewP_ctnt" :class="{ dNone: isActive2}">
              <div class="p_container">
                <div class="p_header">
                  <div class="review_point">리뷰 포인트 혜택</div>
                  <div class="review_policy">리뷰운영정책 </div>
                </div>
                <div class="p_ctnt">
                  <div class="nonList" v-show="!purchaseCheck">
                    구매하신 제품이 있을 경우에만<br>
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
                          <img :src="$getSrc(item.pro_mainimg)" class="proImg">
                        </li>
                        <li>{{ item.pro_price }}</li>
                        <li>{{ item.pur_date }}</li>
                        <li><button><router-link :to="{path:'/ReviewWrite', query: { pro_num: item.pro_num }}"> 리뷰쓰기 </router-link></button></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="reviewW_ctnt" :class="{ dNone: isActive1}">

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
        userProductList: {}
      };
    },
    beforeCreate() {
    },
    created() {
      this.user = this.$store.state.user;
      console.log(this.user.result);
      this.userChecking();
      this.getPurchase(this.user.result.m_num);
      console.log(this.purchaseData);
      this.getUserProductList(this.user.result.m_num);
    },
    methods: {
      displayP(e) {
        this.isActive1 = true;
        this.isActive2 = false;
        console.log(e.target);
      },
      displayW() {
        this.isActive1 = false;
        this.isActive2 = true;
      },
      async getPurchase(m_num) {
        this.purchaseData = await this.$get(`/review/getPurchase/${m_num}`, {});
        console.log(this.purchaseData);
        if(this.purchaseData.length == 0){
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
      userChecking() {
        if(this.user.result === undefined){
          this.userCheck = true;
        } else {
          this.userCheck = false;
          } 
      },
    }
}
</script>

<style scoped>

/* default */
.dNone{
  display: none;
}
h3{
  font-size: 30px;
  font-weight: 600;
  padding-bottom: 20px;
}
.bgGreen{
  background-color: #17342f;
  color: #fff;
}
a{
  color: var(--text-black);
  font-style: none;
}
/* header */
#container {
  width: 100vw;
  min-height: 500px;
  padding-bottom: 110px;
  border-top: 1px solid transparent;
}

.contents{
  max-width: 1400px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}

/* main */
.reviewHeader{
  padding: 40px;
  min-width: 560px;
}
.reviewDiv{
  display: flex;

}
.reviewP{
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}
.reviewW{
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* reviewP */
.p_header{
  display: flex;
  margin-top: 50px;
  justify-content:space-between ;
  padding-bottom: 15px;
  border-bottom: 2px solid #000;
}
.review_point::after{
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
.review_policy{
  position: relative;
  padding-right: 5px;
}
.review_policy::before{
    content: '';
    display: inline-block;
    position: absolute;
    left: -20px;
    width: 18px;
    height: 17px;
    background: url(https://images.innisfree.co.kr/resources/web2/images/review/icon_exc.png) no-repeat left top;
    background-size: 100%;
}
.nonList{
    width: 100% !important;
    margin: 80px 0 0;
    padding: 120px 0 40px;
    text-align: center;
    font: 22px/32px 'SDNeoL', 'notoR';
    color: #222;
    background: url(https://images.innisfree.co.kr/resources/web2/images/common/bg_no_list.png) no-repeat 50% 40px;
    background-size: 60px;
}
.p_ctnt_header{
  justify-content: space-around;
  padding: 20px 0;
  font-weight: 600;
  border-bottom: 1px solid var(--text-light-gray);
  background-color: rgba(226, 223, 223, 0.712);
}
.p_ctnt_header li:first-child{
  width: 150px;
  text-align: center;
}
.p_ctnt_ctnt{
  justify-content: space-around;
  padding: 35px 0;
  align-items: center;
}
.p_ctnt_ctnt li:first-child{
  width: 150px;
  text-align: center;
  position: relative;
  margin-left: 20px;
}
.p_ctnt_ctnt li:nth-child(2){
  padding-left: 16px;
}
.p_ctnt_ctnt li:nth-child(3){
  padding-left: 15px;
}
.proNm{
}
.proImg{
    width: 100px;
    height: 90px;
    position: absolute;
    left: -96px;
    top: -30px;
}

/* myPage Header */
button,
a {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  letter-spacing: inherit;
  color: inherit;
  text-decoration: none;
  outline: none;
}

.location {
  display: flex;
  flex-direction: column;
}

.location:after {
  content: "";
  display: block;
  clear: both;
}

.header {
  margin-left: 80px;
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

.btn {
  margin: 0 0 0 15px;
  padding-right: 25px;
  color: #777;
  background: url('@/assets/img/mypage/arw_loc_btn.png') no-repeat 99% 50%;
}

.depth:last-child .btn {
  color: #222;
}

.depth:first-child .btn {
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

</style>