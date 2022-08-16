<template>
  <main>
    <div class="contanier">
      <div class="logo">
        <h1 class="title">LANEISFREE</h1>
        <h2 class="title_1">Team Member</h2>
      </div>
      <div class="wrapper">
        <ul class="team">
          <li class="team-item">
            <div class="profile profile_red">
              <img src="../assets/img/team_member/예챤.jpg" />
              <div class="profile-contents">
                <h2>김예찬</h2>
                <hr>
                <p>
                  상세페이지 <br>
                  리뷰작성 <br>
                  리뷰화면 <br>
                </p>
              </div>
            </div>
          </li>
          <li class="team-item">
            <div class="profile profile_beige">
              <img src="../assets/img/team_member/손지.jpg" />
              <div class="profile-contents">
                <h2>손지현</h2>
                <hr>
                <p>
                  로그인 <br>
                  회원가입 <br>
                  마이페이지 <br>
                </p>
              </div>
            </div>
          </li>
          <li class="team-item">
            <div class="profile profile_green">
              <img src="../assets/img/team_member/재훈재훈.jpg" />
              <div class="profile-contents">
                <h2>김재훈</h2>
                <hr>
                <p>
                  INDEX <br>
                  Header & Footer <br>
                  Brand Story <br>
                  지도 & 채팅 <br>
                  제품등록 <br>
                </p>
              </div>
            </div>
          </li>
          <li class="team-item">
            <div class="profile profile_pink">
              <img src="../assets/img/team_member/대홍.jpg" />
              <div class="profile-contents">
                <h2>김대홍</h2>
                <hr>
                <p>
                  팀소개 <br>
                  베스트 <br>
                  신상품 <br>
                </p>
              </div>
            </div>
          </li>
          <li class="team-item">
            <div class="profile profile_purple">
              <img src="../assets/img/team_member/만승재.jpg" />
              <div class="profile-contents">
                <h2>이승재</h2>
                <hr>
                <p>
                  장바구니 <br>
                  찜한상품 <br>
                  상품리스트 <br>
                  상세페이지 <br>
                  구매페이지 <br>
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </main>
</template>

<script>
export default {};
</script>

<style scoped>
main,
ul,
h2,
p {
  margin: 0;
  padding: 0;
}

.title {
  text-align: center;
  font-weight: bold;
  font-size: 100px;
  color: var(--text-main);
  margin-top: 70px;
}
.title_1 {
  text-align: center;
  font-weight: bold;
  font-size: 60px;
  color: var(--text-main);
}

li {
  list-style-type: none;
}

.logo img{
  display: flex;
  width: 100%;
}

.wrapper {
  display: flex;
  height: 70vh;
  justify-content: center;
  align-items: center;
}

.team {
  display: flex;
  justify-content: center;
  align-items: center;
}

.team-item {
  flex-basis: 18%;
  flex-shrink: 0;
  width: 100%;
  margin: 0 4px;
  opacity: 0.4;
  transition: all 0.4s;
}

.team-item:hover {
  opacity: 1;
  flex-basis: 20%;
  margin: 0 20px;
}

.team-item img {
  width: 100%;
}

.profile {
  background-color: #222;
  position: relative;
  overflow: hidden;
  color: azure;
  width: 250px;
  height: 350px;
}

.profile img{
  /* width: 100%; */
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.profile:before {
  content: " ";
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#000000+0,000000+100&0+0,0.95+100 */
  background: -moz-linear-gradient(
    top,
    rgba(0, 0, 0, 0) 0%,
    rgba(0, 0, 0, 0.95) 100%
  ); /* FF3.6-15 */
  background: -webkit-linear-gradient(
    top,
    rgba(0, 0, 0, 0) 0%,
    rgba(0, 0, 0, 0.95) 100%
  ); /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(
    to bottom,
    rgba(0, 0, 0, 0) 0%,
    rgba(0, 0, 0, 0.95) 100%
  ); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#f2000000',GradientType=0 ); /* IE6-9 */
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 400px;
}

/* .profile_red {
  color: #ff4949;
}

.profile_beige {
  color: beige;
}

.profile_green {
  color: darkseagreen;
}

.profile_pink {
  color: pink;
}

.profile_purple {
  color: violet;
} */

.profile-contents {
  position: absolute;
  left: 0;
  bottom: 0;
  padding: 10px;
}

.profile-contents h2 {
  font-size: 30px;
}

.profile-contents h2 span {
  display: block;
  font-size: 15px;
}

.profile-contents p {
  color: white;
  font-size: 25px;
  min-width: 140px;
  max-height: 0;
  overflow: hidden;
  line-height: 1.2;
  transition: all 1s;
  opacity: 0;
}

.team-item:hover .profile-contents p {
  opacity: 1;
  transition-delay: 0.2s;
  max-height: 6em;
  margin-top: 0.4em;
}
</style>
