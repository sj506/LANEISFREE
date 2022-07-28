<template>
  <ul class="productBox">
    <li class="und-border" v-for="product in selectProduct" :key="product.pro_num">
      <div class="column-center">
        <img
          @mouseover="changeImg"
          @mouseout="reChangeImg($event.target, product.pro_mainimg)"
          :src="getSrc(product.pro_mainimg)"
          :data-category="product.cate_class"
        />

        <div class="pro_tag">{{ product.pro_tag1 }} {{ product.pro_tag2 }}</div>
        <div class="pro_name">{{ product.pro_name }}</div>
      </div>
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
    getSrc(mainImg) {
      return require('@/assets/img' + mainImg);
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

img:hover {
  animation: blink-effect 0.4s;
}

img:not(:hover) {
  animation: blink-effect2 0.4s;
}

.productBox {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
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
}

.und-border {
  margin-bottom: 3rem;
  border-bottom: 1px solid #eaeaea;
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
</style>
