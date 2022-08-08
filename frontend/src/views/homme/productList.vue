<template>
  <ul class="productBox">
    <li class="und-border" v-for="product in selectProduct" :key="product.pro_num">
      <router-link :to="{ name: 'hommeProductDetail', params: { productId: product.pro_num } }">
        <!-- params로 상품번호를 전달 -->
        <div class="column-center">
          <img
            @mouseover="changeImg"
            class="cursor-png"
            @mouseout="reChangeImg($event.target, product.pro_mainimg)"
            :src="$getSrc(product.pro_mainimg)"
            :data-category="product.cate_class"
          />

          <div class="pro_tag">{{ product.pro_tag1 }} {{ product.pro_tag2 }}</div>
          <div class="pro_name">{{ product.pro_name }}</div>
        </div>
      </router-link>
    </li>
  </ul>
</template>
<script>
export default {
  name: '',
  components: {},
  data() {
    return {
      example: '',
    };
  },
  computed: {
    selectProduct() {
      return this.$store.state.selectProduct;
    },
  },
  beforeCreate() {},
  created() {
    this.getProductList();
  },
  beforeMount() {},
  mounted() {},
  beforeUpdate() {},
  updated() {},
  beforeUnmount() {},
  unmounted() {},
  methods: {
    async getProductList() {
      const getProductList = await this.$get('/product/getProductList', {});
      this.$store.commit('selectProduct', getProductList);
      this.$store.commit('getProductList', getProductList);
      //상품 리스트 가져오는 통신
    },
    changeImg(e) {
      if (e.target.dataset.category === '1') {
        e.target.src = 'https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2019/11/17/Active_Water_Skin_Toner_thumb_list.png';
      } else if (e.target.dataset.category === '2') {
        e.target.src =
          'https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2020/04/28/20200427_final_cream-skin-refiner-all-in-one_thumbnails_02_pc.png';
      } else {
        e.target.src = 'https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/09/30/Blue_Energy_Skin_Toner_EX_thumb_list.jpg';
      }
    },
    reChangeImg(target, mainImg) {
      target.src = require('@/assets/img' + mainImg);
    },
  },
};
</script>

<style scoped>
img {
  width: 100%;
  max-width: 250px;
  height: 100%;
}
.cursor-png {
  cursor: url('https://www.laneige.com/kr/ko/assets/image/a/pointer.png'), auto;
}
.productBox {
  display: grid;
  grid-template-rows: repeat(4, minmax(auto, auto));
  grid-template-columns: repeat(4, minmax(auto, auto));
}

.pro_tag {
  color: #767676;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.pro_name {
  font-size: 0.9rem;
  margin-bottom: 2rem;
  color: #000000;
}

.und-border {
  margin-bottom: 3rem;
  border-bottom: 1px solid #eaeaea;
}

img:hover {
  animation: blink-effect 0.4s;
}

img:not(:hover) {
  animation: blink-effect2 0.4s;
}

@keyframes blink-effect {
  0% {
    opacity: 0.3;
  }
  100% {
    opacity: 1;
  }
}

@keyframes blink-effect2 {
  0% {
    opacity: 0.3;
  }
  100% {
    opacity: 1;
  }
}

@media (max-width: 980px) {
  .productBox {
    display: grid;
    grid-template-rows: repeat(2, minmax(auto, auto));
    grid-template-columns: repeat(2, minmax(auto, auto));
  }
}
</style>
