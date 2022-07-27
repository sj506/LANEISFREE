<template>
  <main id="main" class="main">
    <ol>
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
      <header>
        <h1>신상품</h1>
      </header>
    </div>

    <div class="newProd_box">
      <router-link to="/" class="prod_wide">
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
          <span class="btn btn_line">
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

      <div class="prod_box">
        <div class="product_item">
          <div class="product-item__badge-wrap">
            <span class="product-item__badge badge badge--new">new</span>
          </div>
          <a href="#" class="product-item__link">
            <div class="product-item__thumb">
              <img
                class="product-item__img"
                src="../newImage/크림스킨.jpg"
                alt="크림 스킨 옴므 올인원"
              />
            </div>
            <div class="product-item__hash-wrap">
              <span class="product-item__hash">남자 올인원</span>
              <span class="product-item__hash">원샷원킬수분공급</span>
            </div>
            <strong class="product-item__name">크림 스킨 옴므 올인원</strong>
          </a>
        </div>
        <div class="product_item">
          <div class="product-item__badge-wrap">
            <span class="product-item__badge badge badge--new">new</span>
          </div>
          <a
            href="/kr/ko/makeup/neo-foundation-brush.html"
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
              <span class="product-item__hash">남자수부지</span>
            </div>
            <strong class="product-item__name"
              >액티브 워터 모이스처라이저</strong
            >
          </a>
        </div>
        <div class="product_item"></div>
        <div class="product_item"></div>
      </div>
    </div>
  </main>
</template>

<script>
export default {};
</script>

<style>
h1 {
  text-align: center;
  margin: 35px;
}
li {
  display: inline;
}
main {
  margin-top: 60px;
}
.newProd_box {
  display: flex;
  justify-content: center;
}
.prod_wide {
  position: relative;
  width: 45%;
  height: 45%;
  margin-left: 10px;
}
.prodWide_img {
  width: 100%;
  height: 100%;
}
.prodWide_cont {
  position: absolute;
  z-index: 1;
  color: var(--text-black);
}
.prod_box {
  display: flex;
  justify-content: center;
  width: 45%;
  height: 45%;
}
.product-item {
  position: relative;
  width: 45%;
  height: 45%;
}
.product-item__img{
  width: 100%;
  height: 100%;
  margin: 5px;
  padding: 5px;
}
.product-item__badge {
  position: absolute;
  z-index: 1;
  color: var(--text-white);
  font-size: large;
  font-weight: 100;
  background-color: var(--bg-point);
  padding-top: 3px;
  padding: 0 5px;
  padding-bottom: 5px;
}
.product-item__hash-wrap,
.product-item__name {
  text-align: center;
  color: var(--text-black);
}
</style>
