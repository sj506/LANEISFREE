<template>
  <ul class="productBox">
    <li class="und-border" v-for="product in selectProduct" :key="product.pro_num">
      <div class="column-center">
        <img :src="getSrc(product.pro_mainimg)" alt="" />
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
  },
};
</script>

<style scoped>
img {
  width: 100%;
  max-width: 250px;
  height: 100%;
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
</style>
