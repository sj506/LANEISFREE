<!-- homme 카테고리 들어가있음 , 후에 data에서 통신으로 받아오면 됨 -->

<template>
  <div class="viewAllBox">
    <router-link to="/homme" class="viewAll">전체보기</router-link>
    <!-- 카테고리 x 이미지 -->
    <i class="fa-solid fa-xmark toggle pointer" data-bs-toggle="dropdown"></i>
  </div>
  <div class="cateFlex">
    <div class="cateDetails" v-for="(cateList, idx) in cateList" :key="idx">
      <div class="bigCate">{{ idx }}</div>
      <div class="cateList" v-for="(cateList, i) in cateList" :key="i">
        <li class="cateText">{{ cateList }}</li>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: '',
  data() {
    return {
      example: '',
      cateList: {
        유형별: ['전체보기', '스킨/미스트', '기프트세트', '클렌징', '로션/에멀젼'],
        고민별: ['전체보기', '주름/탄력/보습', '수분/보습'],
        라인별: ['전체보기', '블루에너지', '크림 스킨', '액티브워터', '기타'],
      },
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
  /* width 값 조절필요 */
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
