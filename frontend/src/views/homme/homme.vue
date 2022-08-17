<template>
  <div>
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
  name: 'Params',
  components: { hommeBanner, hommeButton, productList },
  props: {
    name: {
      type: String,
      default: '',
    },
  },
  data() {
    return {
      example: '',
      categoryList: {},
      productList: {},
    };
  },
  beforeCreate() {},
  created() {
    this.getProductImg();
  },
  beforeMount() {},
  mounted() {},
  beforeUpdate() {},
  updated() {},
  beforeUnmount() {},
  unmounted() {},
  methods: {
    async getProductImg() {
      const getProductImg = await this.$get('/product/getProductImg', {});
      this.$store.commit('getProductImg', getProductImg);
    },
  },
};
</script>

<style scoped>
.productMain {
  margin-bottom: 10rem;
  margin-left: 20%;
  margin-right: 20%;
}
/* @media (max-width: 59.99em) {
  .mobile {
    display: block;
  }
/* } */
</style>
