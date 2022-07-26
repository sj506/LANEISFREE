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
      <a href="#" class="prod_wide">
        <div class="prodWide_cont">
          <span class="prodWide_brow">WATER BANK BLUE HYALURONIC CREAM</span>
          <h2 class="prodWide_title h3">
            워터뱅크 블루
            <br>
            히알루로닉 크림
          </h2>
          <p class="prodWide_desc">
            1/2000 사이즈의 초소형 블루 히알루론산이
            <br>
            피부 깊은 곳부터 빈틈없이 건강하게
            <br>
            풀 리페어 보습을 해주는 크림
          </p>
          <span class="btn btn_line">
            <span class="btn_text">자세히 보기</span>
          </span>
        </div>
        <div class="prodWide_img_wrap">
          <img src="../newImage/9.jpg" alt="워터뱅크 블루히알루로닉 크림" class="prodWide_img">
        </div>
      </a>

      <div></div>
      <div></div>
      <div></div>
    </div>
  </main>
</template>

<script>
export default {};
</script>

<style>
h1 {
  text-align: center;
}
li {
  display: inline;
}
main {
  margin-top: 60px;
}
.container {
}
</style>
