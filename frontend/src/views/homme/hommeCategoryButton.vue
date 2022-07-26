<template>
  <div>
    <!-- 카테고리 buttton -->
    <div class="flexDiv">
      <div class="btn-group">
        <button @click="clickToggle1" class="cateBtn toggle flexBtn" type="button" data-bs-toggle="dropdown">
          카테고리
          <i v-if="dNone1" class="fa-solid fa-angle-down btni"></i>
          <i v-if="!dNone1" class="fa-solid fa-minus btni"></i>
        </button>
        <div class="dropdown-menu cateBox">
          <hommeCategoryList />
        </div>
      </div>
      <div class="btn-group">
        <button @click="clickToggle2" class="cateBtn flexBtn toggle" type="button" data-bs-toggle="dropdown">
          신상품순
          <i v-if="dNone2" class="fa-solid fa-angle-down btni"></i>
          <i v-if="!dNone2" class="fa-solid fa-angle-up btni"></i>
        </button>
        <div class="dropdown-menu">
          <ul>
            <li>신상품순</li>
            <li>베스트순</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- 카테고리 buttton -->
  </div>
</template>

<script>
import hommeCategoryList from '@/components/hommeCategoryList.vue';

export default {
  name: '',
  components: { hommeCategoryList },
  data() {
    return {
      example: '',
      dNone1: true,
      dNone2: true,
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
  methods: {
    clickToggle1() {
      this.dNone1 = !this.dNone1;
    },
    clickToggle2() {
      this.dNone2 = !this.dNone2;
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

.cateBox {
  width: 55rem;
  border: 1px solid #cacaca;
  padding: 10px;
  border-radius: 0;
  font-size: 0.8rem;
  padding: 3rem;
  padding-left: 2.5rem;
  padding-right: 2.5rem;
}

.viewAllBox {
  padding-left: 2rem;
}
.viewAllBox i {
  font-size: 2.5rem;
  color: #75757598;
  position: absolute;
  top: 20px;
  right: 1.8rem;
}
.viewAll {
  border-bottom: 1px solid;
  color: #4477be;
}

.cateFlex {
  display: flex;
}

.cateDetails {
  padding: 2rem;
  width: 20rem;
}

.bigCate {
  border-bottom: 1px solid #75757598;
  padding-bottom: 10px;
}

.cateList {
  margin-top: 1rem;
}

.cateList li {
  padding-bottom: 1rem;
  margin-right: 5rem;
}

.pointer {
  cursor: pointer;
}

.cateText {
  color: #666;
  display: inline-block;
  margin: 0;
  text-transform: uppercase;
  cursor: pointer;
}
.cateText:after {
  display: block;
  content: '';
  border-bottom: solid 1.5px #4477be;
  transform: scaleX(0);
  transition: transform 250ms ease-in-out;
}
.cateText:hover {
  color: #4477be;
}
.cateText:hover:after {
  transform: scaleX(1);
}
.cateText.fromRight:after {
  transform-origin: 0% 50%;
}
</style>
