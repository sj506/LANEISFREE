<!-- homme 카테고리 들어가있음 , 후에 data에서 통신으로 받아오면 됨 -->

<template>
  <div class="viewAllBox">
    <router-link to="/homme">
      <span ref="viewAll" class="active" @click="addActive">전체보기</span>
    </router-link>
    <!-- 카테고리 x 이미지 -->
    <i class="fa-solid fa-xmark toggle pointer" data-bs-toggle="dropdown"></i>
  </div>
  <div class="cateFlex">
    <div class="cateDetails" v-for="(cateList, idx) in cateList" :key="idx">
      <div class="bigCate">{{ idx }}</div>
      <div class="cateList" v-for="(cateList, idx) in cateList" :key="idx">
        <router-link to="/homme">
          <span ref="cateText" class="cateText" @click="addActive">{{ cateList }}</span>
        </router-link>
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
    };
  },
  methods: {
    addActive(e) {
      this.$refs.viewAll.classList.remove('active');
      //맨 처음에 active가 전체보기에 되어있기에 없애줌
      this.$refs.cateText.forEach((ele) => {
        ele.classList.remove('active');
        //전에 클릭한 기록을 지우기위해 cateText안에 classList를 반복해서 active 클래스를 다 지워줌
      });
      e.target.classList.add('active');
      this.$emit('changeCateNm', e.target.innerText);
    },
  },
};
</script>

<style scoped>
a {
  color: #666;
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
.active {
  border-bottom: 1px solid;
  color: #4477be !important;
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
