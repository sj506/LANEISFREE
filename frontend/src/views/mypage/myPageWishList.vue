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
          <button type="button" class="btn_h">찜한 제품</button>
        </div>
      </div>
    </div>
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide activeLink="/myPageWishList" />
      <div class="col-10 p-5 r_border">
        <h3>찜한 제품</h3>
        <!-- <div class="reviewDiv">
          <div class="reviewP" @click="displayP" :class="{ bgGreen: isActive1 }">작성 가능한 리뷰</div>
          <div class="reviewW" @click="displayW" :class="{ bgGreen: isActive2 }">내가 작성한 리뷰</div>
        </div> -->
        <div class="reviewP_ctnt" :class="{ dNone: isActive2 }">
          <div class="p_container">
            <div class="p_header">
              <!-- <div class="review_point">리뷰 포인트 혜택</div> -->
              <!-- <div class="review_policy">찜한 제품</div> -->
            </div>
            <div class="p_ctnt">
              <div class="nonList" v-show="!purchaseCheck">찜한제품이 없습니다.</div>
              <div v-show="purchaseCheck">
                <table>
                  <thead>
                    <tr class="p_ctnt_header">
                      <th class="_th allSelect">
                        <label><input class="SelectBox" type="checkbox" @click="selectAll" />전체선택</label>
                      </th>
                      <th class="_th"></th>
                      <th class="_th"></th>
                      <th class="_th selPrice">판매가</th>
                      <th class="_th"></th>
                    </tr>
                  </thead>
                  <tbody class="_tbody">
                    <tr class="product_box" v-for="(likeProduct, idx) in likeList" :key="idx">
                      <td class="_flex">
                        <input
                          class="SelectBox onceSelectBox"
                          type="checkbox"
                          :checked="checkboxSelect"
                          :data-pro_num="likeProduct.pro_num"
                          ref="buyProduct"
                        />
                        <router-link :to="{ name: 'hommeProductDetail', params: { productId: likeProduct.pro_num } }">
                          <img class="product_img" :src="this.$getSrc(likeProduct.pro_mainimg)" />
                        </router-link>
                      </td>
                      <td>
                        <router-link :to="{ name: 'hommeProductDetail', params: { productId: likeProduct.pro_num } }">
                          {{ likeProduct.pro_name }}
                        </router-link>
                      </td>
                      <td class="pro_count_box">
                        <!-- <input type="text" class="pro_count" v-model="likeProduct.pro_count" min="0" /> -->
                        <!-- <span class="countIcon">
                          <i class="fa-solid fa-sort-up"></i>
                          <i class="fa-solid fa-sort-down"></i>
                        </span> -->
                        <!-- <input type="number" class="form-control pro_count" v-model="likeProduct.pro_count" min="0" /> -->
                      </td>
                      <td>{{ this.$addComma(likeProduct.pro_count * likeProduct.pro_price) }}원</td>
                      <td><i :data-pro_num="likeProduct.pro_num" @click="delLike" class="fa-solid fa-x pointer"></i></td>
                    </tr>
                  </tbody>
                </table>
                <div class="btnBox">
                  <button class="buyBtn" @click="clickBuy">장바구니에 담기</button>
                </div>
              </div>
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
      isActive2: false,
      purchaseCheck: false,
      likeList: {},
      checkboxSelect: false,
    };
  },
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
    this.getHeart();
  },
  methods: {
    async getHeart() {
      const param = { m_num: this.$store.state.user.result.m_num };
      const getHeart = await this.$post('product/getHeart', param);
      console.log(getHeart.result);
      if (getHeart.result.length !== 0) {
        this.purchaseCheck = true;
      }
      this.likeList = getHeart.result;
      this.likeList.forEach((likeProduct) => {
        likeProduct.pro_count = 1;
      });
    },
    selectAll() {
      this.checkboxSelect = !this.checkboxSelect;
    },
    loginCheck() {
      if (!this.$store.state.user) {
        alert('로그인 한 유저만 구매가 가능합니다.');
        this.$router.push('signin');
      }
    },
    async clickBuy() {
      const param = [];
      this.$refs.buyProduct.forEach((ele) => {
        if (ele.checked) {
          // console.log(ele.dataset.pro_num);
          // 체크박스 인풋에서 true인 상품들만 리스트를 가져온다
          this.likeList.forEach((likeProduct) => {
            if (likeProduct.pro_num == ele.dataset.pro_num) {
              // 체크박스가 true인 상품번호와 찜목록에 상품번호가 일치한 상품만
              // 수량과 상품번호를 param값에 전달한다 여기서 param을 만들면 param이 여러개가 만들어져서 밖으로 뺐다.
              const basketList = { m_num: this.$store.state.user.result.m_num, pro_num: ele.dataset.pro_num, ba_stock: likeProduct.pro_count };
              param.push(basketList);
            }
          });
        }
      });
      const basketList = await this.$post('product/insbasket', param);
      this.$router.push('/basket');
    },
    async delLike(e) {
      const param = {
        m_num: this.$store.state.user.result.m_num,
        pro_num: e.target.dataset.pro_num,
      };
      const delHeart = await this.$post('product/delHeart', param);
      console.log(delHeart);
      this.getHeart();
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

/* reviewP */
.p_header {
  display: flex;
  justify-content: space-between;
  border-bottom: 2px solid var(--text-main);
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
  padding: 20px 0;
  font-weight: 600;
  border-bottom: 1px solid var(--text-main);
}

table {
  min-width: 560px;
  width: 100%;
}

._th {
  padding: 20px;
  padding-left: 50px;
}

._th > label {
  display: flex;
}

.SelectBox {
  width: 16px;
  height: 16px;
  margin-right: 8px;
}

td {
  vertical-align: middle;
}
.onceSelectBox {
  margin-left: auto;
  margin-right: auto;
}

.allSelect {
  width: 300px;
}
.product_img {
  width: 130px;
  margin-left: 3rem;
}
.product_box {
  text-align: center;
  border-bottom: 1px solid #afafaf;
}
.selPrice {
  padding-left: 5rem;
}
._tbody {
}

._flex {
  display: flex;
  justify-content: center;
  align-items: center;
}

.btnBox {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  align-items: center;
}

.buyBtn {
  margin-top: 20px;
  width: 180px;
  height: 50px;
  font-size: 19px;
  font-weight: bold;
  background-color: var(--bg-main);
  border: none;
  color: var(--text-white);
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
}

.depth:last-child .btn_h {
  color: #222;
}

.depth:first-child .btn_h {
  color: #777;
}
/* header category */

.pro_count_box {
  display: flex;
  flex-direction: row;
  justify-content: center;
}

.pro_count {
  width: 4rem;
  border-collapse: collapse;
}
</style>
