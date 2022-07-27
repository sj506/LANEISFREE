<template>
  <div v-for="product in productList" :key="product.pro_num">
    <div>
      <img :src="getSrc(product.pro_mainimg)" alt="" />
      <div>{{ product.pro_name }}</div>
    </div>
  </div>
</template>
<script>
export default {
  name: '',
  components: {},
  data() {
    return {
      example: '',
      productList: {},
    };
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
      this.productList = getProductList;
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
  width: 100px;
}
</style>
