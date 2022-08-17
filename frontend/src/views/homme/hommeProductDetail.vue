<template>
  <header class="_container mobile">
    <div class="mainBox">
      <div class="subImgBox">
        <div v-for="img in productImg" :key="img.op_num" class="subImg" @click="changeImg($event.target, img.op_detailimg)">
          <img
            v-bind:class="{ activeBd: img.op_detailimg == '1.png' || img.op_detailimg == '1.jpg' }"
            :src="getSubImgSrc(img.op_detailimg)"
            class="detailImg"
            ref="subImg"
          />
        </div>
      </div>
      <div>
        <!-- 이미지박스 -->
        <img ref="mainImg" :src="this.$getSrc(productDetail.pro_mainimg)" class="mainImg" />
      </div>
      <div class="detailBox">
        <!-- 상품설명박스 -->
        <div class="flexCol mb-20">
          <!-- 해쉬태그 -->
          <div class="hashTag mL-20">
            {{ productDetail.pro_tag1 }}
          </div>
          <div class="hashTag">
            {{ productDetail.pro_tag2 }}
          </div>
        </div>
        <!-- 상품명 -->
        <div class="mb-20 pro_name">
          {{ productDetail.pro_name }}
        </div>
        <!-- 상품명 영어 -->
        <div class="mb-20 pro_ename">
          {{ productDetail.pro_ename }}
        </div>
        <!-- 상세설명 -->
        <i class="fa-solid fa-quote-left icon"></i>
        <div class="mb-20 pro_explain">
          {{ productDetail.pro_explain }}
        </div>
        <hr />
        <!-- 용량 + 가격 -->
        <div class="flexCol mb-20 sm-font">
          <div class="mL-20">{{ productDetail.pro_volume }}ml</div>
          <div>{{ this.$addComma(productDetail.pro_price) }}원</div>
        </div>
        <!-- 구매 및 구매사이트 방문 버튼-->
        <router-link :to="{ name: 'buyPage', params: { productId: productDetail.pro_num } }">
          <div @click="getBasket" class="buyButton _btn">AMORE MALL 에서 구매하기</div>
        </router-link>
        <div class="visitButton _btn">
          <a href="https://www.laneige.com/kr/ko/brand/flagship-store/introduction/"> 라네즈 명동 쇼룸 방문하기</a>
        </div>
      </div>
    </div>
  </header>
  <HommeDetail :pro_num="this.$route.params.productId" />
</template>
<script>
import HommeDetail from '../homme/hommeDetail.vue';

export default {
  name: 'Params',
  components: { HommeDetail },
  props: {
    name: {
      type: String,
      default: '',
    },
  },
  data() {
    return {
      productDetail: '',
      productImg: [],
    };
  },
  beforeCreate() {},

  created() {
    this.$store.state.getProductList.forEach((item) => {
      if (item.pro_num == this.$route.params.productId) {
        this.productDetail = item;
      }
    });
    this.productId = this.$route.params.productId;
    // this를 붙여줘야 route가 돌아감
    this.getProductImg();
  },
  beforeMount() {},
  mounted() {},
  beforeUpdate() {},
  updated() {},
  beforeUnmount() {},
  unmounted() {},
  methods: {
    changeImg(e, subImg) {
      this.$refs.mainImg.src = this.getSubImgSrc(subImg);
      this.$refs.subImg.forEach((subImg) => {
        subImg.classList.remove('activeBd');
        console.log(subImg.classList);
      });
      e.classList.add('activeBd');
    },
    getSubImgSrc(subImg) {
      return require('@/assets/img/hommeProduct/details/' + this.productDetail.pro_num + '/' + subImg);
    },
    getProductImg() {
      // store에서 받아온 getProductImg 중
      this.$store.state.getProductImg.forEach((product) => {
        if (product.pro_num == this.productId) {
          this.productImg.push(product);
        }
      });
    },
    async getBasket() {
      // if (!this.$store.state.user.result.m_num) {
      //   alert('로그인 한 유저만 구매할 수 있습니다.');
      //   return;
      // }
      const param = [
        {
          pro_num: this.productId,
          ba_stock: '1',
        },
      ];
      await this.$post('/product/insbasket', param);
    },
  },
};
</script>
<style scoped>
.mainBox {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  margin-top: 10%;
  margin-bottom: 10%;

  margin-left: 7rem;
  margin-right: 7rem;
}

.subImgBox {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.subImg {
  margin-bottom: 10px;
  margin-right: 5rem;
}

.detailImg {
  width: 2.5rem;
}
.detailImg:hover {
  width: 2.5rem;
  outline: 1.5px solid #000000;
  outline-offset: -1px;
}

.mainImg {
  width: 20rem;
  margin-right: 7rem;
}
.mb-20 {
  margin-bottom: 20px;
}
.mL-20 {
  margin-right: 20px;
}

.flexCol {
  display: flex;
  flex-direction: row;
}
.hashTag {
  display: inline-block;
  color: rgb(53, 53, 53);
  font-size: 0.9rem;
  background: linear-gradient(to top, #cfdae8 50%, transparent 50%);
}

.detailBox {
  display: flex;
  flex-direction: column;
}

.pro_name {
  font-size: 1.7rem;
}

.pro_ename {
  font-size: 0.9rem;
}

.icon {
  color: #d8d8d8;
  font-size: 20px;
}

.pro_explain {
  font-size: 0.9rem;
  font-weight: bolder;
  color: #777777;
  line-height: 150%;
}
.sm-font {
  justify-content: space-between;
  font-size: 0.8rem;
  color: #777777;
}

._btn {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  height: 2.5rem;
  cursor: pointer;
}
.buyButton {
  color: #fff;
  background-color: #7ba4db;
  border-color: #7ba4db;
  margin-bottom: 1rem;
}

.buyButton:hover {
  animation: byuBtn-hover-effect 1s;
  background-color: #4093ff;
}

.visitButton {
  border: 1px solid #7ba4db;
}

.visitButton:hover {
  animation: visitBtn-hover-effect 1s;
  border: 1px solid #7ba4db;
  color: #4093ff;
}

.activeBd {
  outline: 1px solid #7ba4db;
  outline-offset: -1px;
}

@keyframes byuBtn-hover-effect {
  0% {
    opacity: 0.6;
    background-color: #4093ff;
  }
  100% {
    opacity: 1;
    background-color: #4093ff;
  }
}

@keyframes visitBtn-hover-effect {
  0% {
    opacity: 0.6;
    color: #4093ff;
  }
  100% {
    opacity: 1;
    color: #4093ff;
  }
}

@media (min-width: 480px) {
  .mobile {
    display: flex;
  }
}

@media (min-width: 992px) {
  ._container {
    max-width: 1040px;
  }
}

@media (max-width: 992px) {
  .subImgBox {
    display: flex;
    flex-direction: row;
  }
  .mainBox {
    display: flex;
    flex-direction: column;
  }
}

@media (max-width: 1200px) {
  ._btn {
    font-size: 13px;
  }
}

@media (min-width: 1200px) {
  ._container {
    max-width: 1140px;
  }
}

@media (min-width: 1400px) {
  ._container {
    max-width: 1320px;
  }
}
</style>
