<template>
  <div class="mt-60">
    <hommeBanner />
    <div class="productMain">
      <hommeButton />
      <productList />
    </div>
  </div>
</template>

<script>
import hommeBanner from './hommeBanner';
import hommeButton from './hommeButton';
import productList from './productList.vue';

export default {
  name: '',
  components: { hommeBanner, hommeButton, productList },
  data() {
    return {
      example: '',
      categoryList: {},
      productList: {},
    };
  },
  beforeCreate() {},
  created() {
    this.getCategoryList();
  },
  beforeMount() {},
  mounted() {},
  beforeUpdate() {},
  updated() {},
  beforeUnmount() {},
  unmounted() {},
  methods: {
    async getCategoryList() {
      const getCategoryList = await this.$get('/product/getCategoryList', {});
      this.categoryList = getCategoryList;
      this.$store.commit('getCategoryList', getCategoryList);
      //카테고리 가져오는 통신
    },
  },
};
</script>

<style scoped>
.mt-60 {
  margin-top: 60px;
}
.productMain {
  margin-bottom: 10rem;
  margin-left: 20%;
  margin-right: 20%;
}
@media (max-width: 59.99em) {
  .mobile {
    display: block;
  }
}
</style>
