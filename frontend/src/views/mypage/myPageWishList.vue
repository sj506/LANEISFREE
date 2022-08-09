<template>
  <div class="containers">
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide />
      <div class="col-9">
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
.containers {
  width: 100%;
}
</style>
