<template>
  <main id="main" class="main">
    <div class="mainTitle">
      <header class="page-header">
        <h1 class="page_heading">신상품</h1>
      </header>
    </div>

    <div class="container">
      <div class="container_1">
        <div class="prod_wide">
          <router-link to="hommeProductDetail/17">
            <!-- 상세페이지 연결 -->
            <div class="prodWide_cont">
              <span class="prodWide_brow"
                >WATER BANK BLUE HYALURONIC CREAM</span
              >
              <h2 class="prodWide_title h3">
                워터뱅크 블루
                <br />
                히알루로닉 크림
              </h2>
              <p class="prodWide_desc">
                1/2000 사이즈의 초소형 블루 히알루론산이
                <br />
                피부 깊은 곳부터 빈틈없이 건강하게
                <br />
                풀 리페어 보습을 해주는 크림
              </p>
              <span>
                <span class="btn_text">자세히 보기</span>
              </span>
            </div>
            <div class="prodWide_img_wrap">
              <img
                src="../assets/img/newImage/워터뱅크.jpg"
                alt="워터뱅크 블루히알루로닉 크림"
                class="prodWide_img"
              />
            </div>
          </router-link>
        </div>

        <!-- 첫번째 v-for문 -->
        <div class="prod_box">
          <div class="prod1">
            <div class="prod_box1" v-for="arr1 in arr1" :key="arr1.pro_num">
              <div class="product_item">
                <div class="product-item__badge-wrap">
                  <span class="product-item__badge badge badge--new"
                    ><NEW></NEW
                  ></span>
                </div>
                <router-link :to="`hommeProductDetail/${arr1.pro_num}`" class="product-item__link">
                  <!-- 링크연결 -->
                  <div class="product-item__thumb">
                    <img
                      class="product-item__img"
                      :src="this.$getSrc(arr1.pro_mainimg)"
                      alt="액티브2종세트"
                    />
                  </div>
                  <div class="product-item__hash-wrap">
                    <span class="product-item__hash">{{ arr1.pro_tag1 }}</span>
                    <div></div>
                    <span class="product-item__name">{{ arr1.pro_name }}</span>
                  </div>
                </router-link>
              </div>
            </div>
          </div>
          <div class="prod2">
            <div class="prod_box2" v-for="arr2 in arr2" :key="arr2.pro_num">
              <div class="product_item">
                <div class="product-item__badge-wrap">
                  <span class="product-item__badge badge badge--new"
                    ><NEW></NEW
                  ></span>
                </div>
                <router-link :to="`hommeProductDetail/${arr2.pro_num}`" class="product-item__link">
                  <div class="product-item__thumb">
                    <img
                      class="product-item__img"
                      :src="this.$getSrc(arr2.pro_mainimg)"
                      alt="워터스킨"
                    />
                  </div>
                  <div class="product-item__hash-wrap">
                    <span class="product-item__hash">{{ arr2.pro_tag1 }}</span>
                    <div></div>
                    <span class="product-item__name">{{ arr2.pro_name }}</span>
                  </div>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 상위 페이지 -->

      <div class="container_2">
        <div class="prod_wide2">
          <router-link to="hommeProductDetail/12">
            <!-- 상세페이지 연결 -->
            <div class="prodWide_cont1">
              <span class="prodWide_brow">CREAM SKIN REFINER</span>
              <h2 class="prodWide_title h3">
                크림스킨
                <br />
                리피너
              </h2>
              <p class="prodWide_desc">
                크림 한 통을 그대로 녹여내어
                <br />
                스킨만으로도
                <br />
                크림을 바른 듯
                <br />
                피부를 촉촉하게 채워주는 스킨
              </p>
              <span>
                <span class="btn_text">자세히 보기</span>
              </span>
            </div>
            <div class="prodWide_img_wrap1">
              <img
                src="../assets/img/newImage/크림스킨세로.jpg"
                alt="크림스킨"
                class="prodWide_img"
              />
            </div>
          </router-link>
        </div>
        <!-- 두번째 v-for문 -->
        <div class="prod_box">
          <div class="prod1">
            <div class="prod_box1" v-for="arr3 in arr3" :key="arr3.pro_num">
              <div class="product_item">
                <div class="product-item__badge-wrap">
                  <span class="product-item__badge badge badge--new"
                    ><NEW></NEW
                  ></span>
                </div>
                <router-link :to="`hommeProductDetail/${arr3.pro_num}`" class="product-item__link">
                  <!-- 링크연결 -->
                  <div class="product-item__thumb">
                    <img
                      class="product-item__img"
                      :src="this.$getSrc(arr3.pro_mainimg)"
                      alt="액티브2종세트"
                    />
                  </div>
                  <div class="product-item__hash-wrap">
                    <span class="product-item__hash">{{ arr3.pro_tag1 }}</span>
                    <div></div>
                    <span class="product-item__name">{{ arr3.pro_name }}</span>
                  </div>
                </router-link>
              </div>
            </div>
          </div>
          <div class="prod2">
            <div class="prod_box2" v-for="arr4 in arr4" :key="arr4.pro_num">
              <div class="product_item">
                <div class="product-item__badge-wrap">
                  <span class="product-item__badge badge badge--new"
                    ><NEW></NEW
                  ></span>
                </div>
                <router-link :to="`hommeProductDetail/${arr4.pro_num}`" class="product-item__link">
                  <div class="product-item__thumb">
                    <img
                      class="product-item__img"
                      :src="this.$getSrc(arr4.pro_mainimg)"
                      alt="워터스킨"
                    />
                  </div>
                  <div class="product-item__hash-wrap">
                    <span class="product-item__hash">{{ arr4.pro_tag1 }}</span>
                    <div></div>
                    <span class="product-item__name">{{ arr4.pro_name }}</span>
                  </div>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import NEW from "../components/NEW.vue";
export default {
  components: { NEW },
  data() {
    return {
      productList: [],
      arr1: [],
      arr2: [],
      arr3: [],
      arr4: [],
    };
  },
  methods: {
    async newProductList() {
      this.productList = await this.$get("/product/newProductList", {});
      console.log(this.productList);
      this.arr1.push(this.productList[0], this.productList[1]);
      this.arr2.push(this.productList[2], this.productList[3]);
      this.arr3.push(this.productList[4], this.productList[5]);
      this.arr4.push(this.productList[6], this.productList[7]);
    },
     async getProductImg() {
      const getProductImg = await this.$get('/product/getProductImg', {});
      this.$store.commit('getProductImg', getProductImg);
    },
  },
  created() {
    this.newProductList();
    this.getProductImg();
  },
};
</script>

<style scoped>
.page_heading {
  text-align: center;
  margin-bottom: 35px;
}
.page-header {
  padding-top: 50px;
  margin-bottom: 40px;
}
main {
  padding-bottom: 120px;
  line-height: 1.6;
}
.container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
.container_1 {
  display: flex;
  justify-content: center;
}
.container_2 {
  display: flex;
  justify-content: center;
  flex-direction: row-reverse;
}
.prod_wide {
  position: relative;
  width: 45%;
}
.prod_wide2 {
  position: relative;
  width: 45%;
}
.prodWide_desc {
  margin-bottom: 16px;
}
.btn_text {
  text-decoration-line: underline;
}
.prodWide_img {
  width: 100%;
  height: 100%;
}
.prodWide_cont {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10% 9%;
  z-index: 2;
  color: var(--text-black);
}
.prodWide_cont1 {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 10% 9%;
  z-index: 2;
  color: var(--text-gray);
}
.prod_box {
  display: flex;
  justify-content: space-between;
  width: 45%;
}
.product-item__img {
  width: 100%;
  height: 100%;
  margin: 5px;
  padding: 5px;
}
.product-item__hash-wrap {
  text-align: center;
  color: var(--text-black);
}
.product-item__hash {
  color: var(--text-gray);
  font-size: 14px;
}
@media (max-width: 800px) {
  .container,
  .container_1,
  .container_2 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  .prodWide_img_wrap img{
    width: 100vw;
  }
  .prodWide_img_wrap1 img {
    width: 100vw;
  }
  .product-item__thumb img {
    width: 50vw;
  }
}
/* 미디어 쿼리 800부터 한줄로 변경 */
</style>
