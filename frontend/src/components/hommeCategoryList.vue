<template>
  <div class="viewAllBox">
    <router-link to="/homme">
      <span ref="viewAll" class="active" @click="addActive">전체보기</span>
    </router-link>
    <!-- 카테고리 x 이미지 -->
    <i v-if="hoverCheck" class="fa-solid fa-xmark toggle pointer" data-bs-toggle="dropdown"></i>
  </div>
  <div class="cateFlex">
    <div class="cateDetails" v-for="(cateList, i) in cateList" :key="i">
      <div class="bigCate">{{ i }}</div>
      <div class="cateList" v-for="(cateList, idx) in cateList" :key="idx">
        <router-link to="/homme">
          <span ref="cateText" class="cateText" @click="addActive" :data-catetype="i" :data-cateclass="cateList">{{ cateList }}</span>
        </router-link>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: '',
  props: {
    hoverCheck: {
      type: Boolean,
      default: 'true',
    },
  },
  data() {
    return {
      example: '',
      cateList: {},
      selectProductNum: [],
      selectProduct: [],
      productList: {},
    };
  },
  created() {
    this.cateList = this.$store.state.cateList;
    // 전체 카테고리 종류를 가져옴
  },
  methods: {
    addActive(e) {
      this.selectProductNum = [];
      this.selectProduct = [];
      this.productList = this.$store.state.getProductList;
      // 상품정보를 가져옴

      console.log(this.productList);
      this.$refs.viewAll.classList.remove('active');
      //맨 처음에 active가 전체보기에 되어있기에 없애줌
      this.$refs.cateText.forEach((ele) => {
        ele.classList.remove('active');
        //전에 클릭한 기록을 지우기위해 cateText안에 classList를 반복해서 active 클래스를 다 지워줌
      });
      e.target.classList.add('active');
      this.$emit('changeCateNm', e.target.innerText);

      if (e.target.innerText === '전체보기') {
        for (let i = 0; i < 8; i++) {
          this.selectProductNum.push(this.productList[i].pro_num);
          this.$emit('productCount', this.productList.length);
        }
        this.productList.forEach((product) => {
          this.selectProductNum.forEach((productNum) => {
            if (product.pro_num === productNum) {
              this.selectProduct.push(product);
            }
          });
        });
      } else {
        this.productList.forEach((productList) => {
          for (const key in this.cateList) {
            if (this.cateList.hasOwnProperty.call(this.cateList, key)) {
              this.$store.state.bigCateList.forEach((bigCateList, i) => {
                if (key == e.target.dataset.catetype && bigCateList == key) {
                  const bigCate = this.cateList[key];
                  bigCate.forEach((cateclass, idx) => {
                    if (cateclass == e.target.dataset.cateclass && productList.cate_type == i + 1 && productList.cate_class == idx + 1) {
                      console.log(productList);
                      this.selectProductNum.push(productList.pro_num);
                    }
                  });
                }
              });
            }
          }
        });
        this.productList.forEach((product) => {
          this.selectProductNum.forEach((productNum) => {
            if (product.pro_num === productNum) {
              this.selectProduct.push(product);
            }
          });
        });
        this.$emit('productCount', this.selectProduct.length);
      }

      // this.productList.forEach((productList) => {
      //   if (!e.target.dataset.catetype) {
      //     this.selectProductNum.push(productList.pro_num);
      //   } else {
      //     switch (productList.cate_type) {
      //       case 1:
      //         if (e.target.dataset.catetype === '유형별') {
      //           if (e.target.dataset.cateclass === '로션/에멀젼' && productList.cate_class == 1) {
      //             // 로션/에멀전
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '클렌징' && productList.cate_class == 2) {
      //             // 클렌징
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '스킨/미스트' && productList.cate_class == 3) {
      //             // 스킨/미스트
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '기프트세트' && productList.cate_class == 4) {
      //             // 기프트 세트
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '전체보기') {
      //             this.selectProductNum.push(productList.pro_num);
      //           }
      //         }
      //         break;
      //       case 2:
      //         if (e.target.dataset.catetype === '고민별') {
      //           if (e.target.dataset.cateclass === '주름/탄력/보습' && productList.cate_class == 1) {
      //             // 로션/에멀전
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '수분/보습' && productList.cate_class == 2) {
      //             // 클렌징
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '전체보기') {
      //             this.selectProductNum.push(productList.pro_num);
      //           }
      //         }
      //         break;
      //       case 3:
      //         if (e.target.dataset.catetype === '라인별') {
      //           if (e.target.dataset.cateclass === '로션/에멀젼' && productList.cate_class == 1) {
      //             // 로션/에멀전
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '클렌징' && productList.cate_class == 2) {
      //             // 클렌징
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '스킨/미스트' && productList.cate_class == 3) {
      //             // 스킨/미스트
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '기프트세트' && productList.cate_class == 4) {
      //             // 기프트 세트
      //             this.selectProductNum.push(productList.pro_num);
      //           } else if (e.target.dataset.cateclass === '전체보기') {
      //             this.selectProductNum.push(productList.pro_num);
      //           }
      //         }
      //         break;
      //     }
      //   }
      // });

      this.$store.commit('selectProduct', this.selectProduct);
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
