<template>
  <main id="best_main">
    <div class="best_title">
      <h2 class="best_seller">BEST SELLER</h2>
    </div>
    <div class="container">
        <div class="flexWrap_1 flex-center">
          <div class="main-box">
            <img
              src="../assets/img/bsetProduct/크림스킨가로.jpg"
              alt="크림스킨"
            />
          </div>
        </div>
        <div class="flexWrap1 section">
          <div class="flexbox_1 between-center">
            <div>
            <img
              src="../assets/img/bsetProduct/네오쿠션가로.jpg"
              alt="네오쿠션"
            />
            </div>
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
 };
 
 .container .main-box {
    padding-bottom: 40px;
}
.container .flexWrap1 {
    margin-top: 30px;
}
.section img:nth-child(2n)  {
    margin-left: 40px;
}
</style>
