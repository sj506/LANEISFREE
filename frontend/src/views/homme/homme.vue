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
  created() {},
  beforeMount() {},
  mounted() {},
  beforeUpdate() {},
  updated() {},
  beforeUnmount() {},
  unmounted() {},
  methods: {},
};
</script>

<style scoped>
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
