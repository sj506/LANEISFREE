<template>
  <main id="main" class="main">
    <ol class="breadcrumb">
      <li>
        <router-link to="/index">
          <!-- 링크주소 넣기-->
          <span>Main</span>
        </router-link>
      </li>
      <li class="liList">
        >
        <router-link to="/new">
          <!-- 링크주소 넣기-->
          <span>신상품</span>
        </router-link>
      </li>
    </ol>
    <div class="mainTitle">
      <header class="page-header">
        <h1 class="page_heading">신상품</h1>
      </header>
    </div>

    <div class="container">
      <div class="prod_wide">
        <router-link to="/">
          <!-- 상세페이지 연결 -->
          <div class="prodWide_cont">
            <span class="prodWide_brow">WATER BANK BLUE HYALURONIC CREAM</span>
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
              src="../newImage/워터뱅크.jpg"
              alt="워터뱅크 블루히알루로닉 크림"
              class="prodWide_img"
            />
          </div>
        </router-link>
      </div>

      <div class="prod_box column-center">
        <div class="prod_box1 flex-center">
          <div class="product_item">
            <div class="product-item__badge-wrap">
              <span class="product-item__badge badge badge--new"
                ><NEW></NEW
              ></span>
            </div>
            <a href="#" class="product-item__link">
              <!-- 링크연결 -->
              <div class="product-item__thumb">
                <img
                  class="product-item__img"
                  src="../newImage/크림스킨.jpg"
                  alt="크림 스킨 옴므 올인원"
                />
              </div>
              <div class="product-item__hash-wrap">
                <span class="product-item__hash">남자 올인원</span>
                <div></div>
                <span class="product-item__name">크림 스킨 옴므 올인원</span>
              </div>
            </a>
          </div>
          <div class="product_item">
            <div class="product-item__badge-wrap">
              <span class="product-item__badge badge badge--new"
                ><NEW></NEW
              ></span>
            </div>
            <a
              href="#"
              class="product-item__link"
              ap-click-area="Product"
              ap-click-name="Click - Product Detail Link"
              ap-click-data="신제품_Neo Foundation Brush"
            >
              <div class="product-item__thumb">
                <img
                  class="product-item__img"
                  src="../newImage/모이스처.jpg"
                  alt="모이스처"
                />
              </div>
              <div class="product-item__hash-wrap">
                <span class="product-item__hash">남자수분로션</span>
                <div></div>
                <span class="product-item__name"
                  >액티브 워터 모이스처라이저</span
                >
              </div>
            </a>
          </div>
        </div>

        <div class="prod_box2 flex-center">
          <div class="product_item">
            <div class="product-item__badge-wrap">
              <span class="product-item__badge badge badge--new"
                ><NEW></NEW
              ></span>
            </div>
            <a
              href="#"
              class="product-item__link"
              ap-click-area="Product"
              ap-click-name="Click - Product Detail Link"
              ap-click-data="신제품_hello-blossom-tinted-lip-balm-cherry-blossom"
            >
              <div class="product-item__thumb">
                <img
                  class="product-item__img"
                  src="../newImage/워터스킨.jpg"
                  alt="워터스킨"
                />
              </div>
              <div class="product-item__hash-wrap">
                <span class="product-item__hash">남자수분스킨</span>
                <div></div>
                <span class="product-item__name">액티브 워터 스킨</span>
              </div>
            </a>
          </div>
          <div class="product_item">
            <div class="product-item__badge-wrap">
              <span class="product-item__badge badge badge--new"
                ><NEW></NEW
              ></span>
            </div>
            <a
              href="#"
              class="product-item__link"
              ap-click-area="Product"
              ap-click-name="Click - Product Detail Link"
              ap-click-data="신제품_water-bank-blue-hyaluronic-serum"
            >
              <div class="product-item__thumb">
                <img
                  class="product-item__img"
                  src="../newImage/워터폼클렌저.jpg"
                  alt="래디언-C 어드밴스드 이팩"
                />
              </div>
              <div class="product-item__hash-wrap">
                <span class="product-item__hash">촉촉클렌저</span>
                <div></div>
                <span class="product-item__name">액티브 워터 폼 클렌저</span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="prod_box column-center">
        <div class="prod_box1 flex-center">
          <div class="product_item">
            <div class="product-item__badge-wrap">
              <span class="product-item__badge badge badge--new"
                ><NEW></NEW
              ></span>
            </div>
            <a href="#" class="product-item__link">
              <!-- 링크연결 -->
              <div class="product-item__thumb">
                <img
                  class="product-item__img"
                  src="../newImage/크림스킨.jpg"
                  alt="크림 스킨 옴므 올인원"
                />
              </div>
              <div class="product-item__hash-wrap">
                <span class="product-item__hash">남자 올인원</span>
                <div></div>
                <span class="product-item__name">크림 스킨 옴므 올인원</span>
              </div>
            </a>
          </div>
          <div class="product_item">
            <div class="product-item__badge-wrap">
              <span class="product-item__badge badge badge--new"
                ><NEW></NEW
              ></span>
            </div>
            <a
              href="#"
              class="product-item__link"
              ap-click-area="Product"
              ap-click-name="Click - Product Detail Link"
              ap-click-data="신제품_Neo Foundation Brush"
            >
              <div class="product-item__thumb">
                <img
                  class="product-item__img"
                  src="../newImage/모이스처.jpg"
                  alt="모이스처"
                />
              </div>
              <div class="product-item__hash-wrap">
                <span class="product-item__hash">남자수분로션</span>
                <div></div>
                <span class="product-item__name"
                  >액티브 워터 모이스처라이저</span
                >
              </div>
            </a>
          </div>
        </div>

        <div class="prod_box2 flex-center">
          <div class="product_item">
            <div class="product-item__badge-wrap">
              <span class="product-item__badge badge badge--new"
                ><NEW></NEW
              ></span>
            </div>
            <a
              href="#"
              class="product-item__link"
              ap-click-area="Product"
              ap-click-name="Click - Product Detail Link"
              ap-click-data="신제품_hello-blossom-tinted-lip-balm-cherry-blossom"
            >
              <div class="product-item__thumb">
                <img
                  class="product-item__img"
                  src="../newImage/워터스킨.jpg"
                  alt="워터스킨"
                />
              </div>
              <div class="product-item__hash-wrap">
                <span class="product-item__hash">남자수분스킨</span>
                <div></div>
                <span class="product-item__name">액티브 워터 스킨</span>
              </div>
            </a>
          </div>
          <div class="product_item">
            <div class="product-item__badge-wrap">
              <span class="product-item__badge badge badge--new"
                ><NEW></NEW
              ></span>
            </div>
            <a
              href="#"
              class="product-item__link"
              ap-click-area="Product"
              ap-click-name="Click - Product Detail Link"
              ap-click-data="신제품_water-bank-blue-hyaluronic-serum"
            >
              <div class="product-item__thumb">
                <img
                  class="product-item__img"
                  src="../newImage/워터폼클렌저.jpg"
                  alt="래디언-C 어드밴스드 이팩"
                />
              </div>
              <div class="product-item__hash-wrap">
                <span class="product-item__hash">촉촉클렌저</span>
                <div></div>
                <span class="product-item__name">액티브 워터 폼 클렌저</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import NEW from "../components/NEW.vue";
export default {
  components: {
    NEW,
  },
};
</script>

<style>
.page_heading {
  text-align: center;
  margin-bottom: 35px;
}
.page-header {
  padding-top: 50px;
  margin-bottom: 40px;
}
.breadcrumb {
  display: flex;
  padding-top: 20px;
  padding-left: 30px;
}
li {
  display: inline;
  color: var(--text-black);
}
main {
  margin-top: 60px;
  line-height: 1.6;
}
.container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
.prod_wide {
  position: relative;
  width: 45%;
  height: 45%;
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
.prod_box {
  display: flex;
  justify-content: space-between;
  width: 45%;
  height: 45%;
}
.product-item {
  position: relative;
  width: 45;
  height: 45%;
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
@media (max-width: 800px) {
  .container {
    display: flex;
    flex-direction: column;
  }
}
/* 미디어 쿼리 800부터 한줄로 변경 */
</style>
