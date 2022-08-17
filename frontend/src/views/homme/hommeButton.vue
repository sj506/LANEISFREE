<template>
  <div class="buttonBox">
    <!-- 카테고리 buttton -->
    <div class="flexDiv">
      <div class="btn-group">
        <button @click="clickToggle" class="cateBtn toggle flexBtn" type="button" data-bs-toggle="dropdown">
          {{ cateBtnNm }}
          <i v-if="dNone" class="fa-solid fa-angle-down btni"></i>
          <i v-if="!dNone" class="fa-solid fa-minus btni"></i>
        </button>
        <div class="dropdown-menu dropDownBox cateBox">
          <hommeCategoryList @changeCateNm="changeCateNm" @productCount="productCount" />
        </div>
      </div>
      <hommeProductButton />
    </div>
    <!-- 카테고리 buttton -->
    <p class="hommeProductCount">{{ cateNm }} {{ proCount }}개 상품</p>
  </div>
</template>

<script>
import hommeCategoryList from '@/components/hommeCategoryList.vue';
import hommeProductButton from './hommeProductButton.vue';

export default {
  name: '',
  components: { hommeCategoryList, hommeProductButton },
  data() {
    return {
      example: '',
      cateBtnNm: '카테고리',
      dNone: true,
      cateNm: '옴므',
      proCount: this.$store.state.getProductList.length,
    };
  },
  methods: {
    clickToggle() {
      this.dNone = !this.dNone;
    },
    changeCateNm(val) {
      this.cateBtnNm = val;
      this.cateNm = val;
    },
    productCount(val) {
      this.proCount = val;
    },
  },
};
</script>

<style scoped>
.buttonBox {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  min-width: 40rem;
}
.hommeProductCount {
  margin-right: 5rem;
  color: #767676;
  font-size: 0.8rem;
}
.flexDiv {
  margin: 2rem;
  display: flex;
  flex-direction: row;
  align-content: center;
}

.cateBtn {
  border: 1px solid #cacaca;
  font-size: 0.9rem;
  padding: 10px;
  border-radius: 0;
}

.flexBtn {
  display: flex;
  flex-direction: row;
  padding-right: 1rem;
  background-color: #ffffff;
}

.btni {
  padding-left: 2.5rem;
}

.dropDownBox {
  border: 1px solid #cacaca;
  border-radius: 0;
  padding: 10px;
  --bs-dropdown-min-width: 8.6rem;
}

.cateBox {
  width: 55rem;
  border-radius: 0;
  font-size: 0.8rem;
  padding: 3rem;
  padding-left: 2.5rem;
  padding-right: 2.5rem;
}

.cate2Box {
  font-size: 0.8rem;
}

.cate2Box ul li {
  margin-top: 0.3rem;
  margin-bottom: 0.5rem;
  padding: 0;
}

@media (max-width: 980px) {
  .buttonBox {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    width: 30rem;
  }
}
</style>
