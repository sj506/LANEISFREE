<template>
  <div>
    <!-- 카테고리 buttton -->
    <div class="flexDiv">
      <div class="btn-group">
        <button @click="clickToggle" class="cateBtn toggle flexBtn" type="button" data-bs-toggle="dropdown">
          {{ CateNm }}
          <i v-if="dNone" class="fa-solid fa-angle-down btni"></i>
          <i v-if="!dNone" class="fa-solid fa-minus btni"></i>
        </button>
        <div class="dropdown-menu dropDownBox cateBox">
          <hommeCategoryList @changeCateNm="changeCateNm" />
        </div>
      </div>
      <hommeProductButton />
    </div>
    <!-- 카테고리 buttton -->
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
      CateNm: '카테고리',
      dNone: true,
    };
  },
  methods: {
    clickToggle() {
      this.dNone = !this.dNone;
    },
    changeCateNm(val) {
      this.CateNm = val;
    },
  },
};
</script>

<style scoped>
.flexDiv {
  margin: 2rem;
  display: flex;
  flex-direction: row;
  align-content: center;
  margin-left: 3rem;
}

.cateBtn {
  border: 1px solid #cacaca;
  font-size: 0.9rem;
  padding: 10px;
  border-radius: 0;
  padding-right: 3rem;
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
</style>
