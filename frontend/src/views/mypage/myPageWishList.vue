<template>
  <div id="container">
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide />
      <div class="col-9 reviewHeader">
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
                      <th class="_th">수량</th>
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
                      <td>수량</td>
                      <td>{{ this.$addComma(likeProduct.pro_price) }}원</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                <div class="btnBox">
                  <button @click="clickBuy">장바구니에 담기</button>
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
      if (getHeart.result) {
        this.purchaseCheck = true;
      }
      console.log(getHeart.result);
      this.likeList = getHeart.result;
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
    clickBuy() {
      this.$refs.buyProduct.forEach((ele) => {
        if (ele.checked) {
          console.log(ele.dataset.pro_num);
        }
      });
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
/* header */
#container {
  width: 100vw;
  min-height: 500px;
  padding-bottom: 110px;
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
  border-bottom: 2px solid #000;
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
  border-bottom: 1px solid var(--text-light-gray);
  background-color: rgba(223, 224, 226, 0.712);
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
  padding-left: 7rem;
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
</style>
