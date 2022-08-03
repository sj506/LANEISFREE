<template>
  <main id="best_main">
    <div class="best_title">
      <h2 class="best_seller">BEST SELLER</h2>
    </div>
    <div class="container">
      <div class="container_1">
        <div class="flexWrap_1">
          <div class="flexbox">
            <img
              src="../assets/img/bsetProduct/크림스킨가로.jpg"
              alt="크림스킨"
            />
          </div>
        </div>
        <div class="flexWrap1">
          <div class="flexbox_1">
            <img
              src="../assets/img/bsetProduct/네오쿠션가로.jpg"
              alt="네오쿠션"
            />
          </div>
          <div class="flexbox_1">
            <img
              src="../assets/img/bsetProduct/네오파운데이션매트가로.jpg"
              alt="네오파운데이션매트"
            />
          </div>
        </div>
        <div class="flexWrap2">
          <div class="flexbox_1">
            <img
              src="../assets/img/bsetProduct/래디언C크림가로.jpg"
              alt="래디언C크림"
            />
          </div>
          <div class="flexbox_1">
            <img
              src="../assets/img/bsetProduct/립슬리핑마스크EX가로.jpg"
              alt="립슬핑마스크EX"
            />
          </div>
        </div>
        <div class="flexWrap3">
          <div class="flexbox_1">
            <img
              src="../assets/img/bsetProduct/워터슬리핑마스크EX가로.jpg"
              alt="워터슬리핑마스크EX"
            />
          </div>
          <div class="flexbox_1">
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

<style>
main {
  padding-bottom: 100px;
  line-height: 1.6;
}
.best_title {
  text-align: center;
}
.container_1 {
  display: flex;
  flex-wrap: wrap;
}
.flexbox {
  display: flex;
  justify-content: center;
  width: 100%;
  height: 100%;
}
.flexWrap1 {
  display: flex;
  width: 50%;
  height: 50%;
}
.flexWrap2 {
  display: flex;
  width: 50%;
  height: 50%;
}
.flexWrap3 {
  display: flex;
  width: 50%;
  height: 50%;
}
</style>
