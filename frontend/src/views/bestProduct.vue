<template>
  <main id="best_main">
    <div class="best_title">
      <h2 class="best_seller">BEST SELLER</h2>
    </div>
    <div class="container">
      <div class="flexWrap flex-center">
        <div class="main-box">
          <img
            src="../assets/img/bsetProduct/크림스킨가로.jpg"
            alt="크림스킨"
          />
          <div class="txt">
            <h3>크림 스킨</h3>
            <h4>CREAM SKIN REFINER</h4>
            <p class="desc">
              크림 한 통을 그대로 녹여내어 <br class="pc-only" />
              스킨만으로도 <br class="mo-only" />크림을 바른 듯
              <br class="pc-only" />
              피부를 촉촉하게 채워주는 스킨
            </p>
            <router-link to="/" class="link">
              <span class="btn__text">자세히 보기 ></span>
            </router-link>
            <p class="review-desc">
              <i>“</i>스킨인데 뛰어난 보습지속력과, 산뜻한 사용감으로 <br />
              이만한 스킨은 없는 것 같아요<br />
              <span>@rabb********</span>
            </p>
          </div>
        </div>
      </div>
      <div class="flexWrap1 section">
        <div class="flexbox_1 between-center">
          <div class="main-box1">
            <img
              src="../assets/img/bsetProduct/네오쿠션가로.jpg"
              alt="네오쿠션"
            />
          </div>
          <div class="txt1">aaaa</div>
          <div>
            <img
              src="../assets/img/bsetProduct/네오파운데이션매트가로.jpg"
              alt="네오파운데이션매트"
            />
          </div>
        </div>
      </div>
      <div class="flexWrap1 section">
        <div class="flexbox_1 between-center">
          <div>
            <img
              src="../assets/img/bsetProduct/래디언C크림가로.jpg"
              alt="래디언C크림"
            />
          </div>
          <div>
            <img
              src="../assets/img/bsetProduct/립슬리핑마스크EX가로.jpg"
              alt="립슬핑마스크EX"
            />
          </div>
        </div>
      </div>
      <div class="flexWrap1 section">
        <div class="flexbox_1 between-center">
          <div>
            <img
              src="../assets/img/bsetProduct/워터슬리핑마스크EX가로.jpg"
              alt="워터슬리핑마스크EX"
            />
          </div>
          <div>
            <img
              src="../assets/img/bsetProduct/워터뱅크블루히알루로닉크림가로.jpg"
              alt="워터뱅크블루히알루로닉크림"
            />
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
export default {};
</script>

<style scoped>
main {
  padding-bottom: 100px;
}
.best_title {
  text-align: center;
  padding: 20px 0px;
}
.container {
  max-width: 1440px;
  overflow: hidden;
}
.main-box img {
  width: 100%;
}
.flexbox_1 div {
  width: 49%;
}
.flexbox_1 img {
  width: 100%;
}

.container {
  padding-bottom: 40px;
}
.container .flexWrap1 {
  margin-top: 30px;
}
.section img:nth-child(2n) {
  margin-left: 40px;
}
.main-box {
  position: relative;
}
.txt {
  position: absolute;
  right: 10%;
  bottom: 25%;
  z-index: 2;
}
.flexbox_1 {
  position: relative;
}
.txt1 {
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 2;
}
h3{
  font-weight: bold;
}
h4{
  color: var(--text-gray);
}
.desc {
  margin-top: 20px;
  line-height: 40px;
  font-weight: bold;
}
.link span{
  text-decoration: underline;
  color: var(--text-gray);
}
.review-desc{
   margin-top: 35px;
   color: var(--text-gray);
}
</style>
