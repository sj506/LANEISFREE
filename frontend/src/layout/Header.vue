<template>
  <header>
    <nav class="navbar">
      <div class="navbar__logo">
        <router-link to="/" class="flex-center"><img class="logo-img" src="https://www.laneige.com/kr/ko/assets/image/a/laneige-logo.svg" alt="" /></router-link>
      </div>
      <ul class="navbar__menu flex-center" :class="{ active: isActive }">
        <li @mouseover="showContentsBox('브랜드 스토리', '/story')" @mouseout="closeContentsBox()">
          <router-link class="router-link" to="/story"> 브랜드</router-link>
        </li>
        <li @mouseover="showContentsBox('소개', '/intro')" @mouseout="closeContentsBox()"><router-link class="router-link" to="/intro">팀소개</router-link></li>
        <li @mouseover="showContentsBox('사그마이스터 앤 월시', '/meetsart')" @mouseout="closeContentsBox()">
          <router-link class="router-link" to="/meetsart">미츠아트</router-link>
        </li>
        <li @mouseover="showContentsBox('베스트 상품', '/best')" @mouseout="closeContentsBox()">
          <router-link class="router-link" to="/best">베스트</router-link>
        </li>
        <li @mouseover="showContentsBox('NEW 신상품', '/new')" @mouseout="closeContentsBox()"><router-link class="router-link" to="/new">신상품</router-link></li>
        <li @mouseover="showHommeBox()" @mouseout="closeHommeBox()"><router-link class="router-link" to="/homme">옴므</router-link></li>
      </ul>
      <ul class="navbar__icons" :class="{ active: isActive }">
        <li v-show="setUser === 1">
          <div class="dropdown">
            <router-link to="/mypage" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i>
            </router-link>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><router-link to="" class="dropdown-item">주문배송조회</router-link></li>
              <li><router-link to="" class="dropdown-item">내 리뷰</router-link></li>
              <li><router-link to="" class="dropdown-item">회원정보 수정</router-link></li>
              <li><router-link to="" class="dropdown-item">찜한 제품</router-link></li>
            </ul>
          </div>
        </li>
        <li>
          <router-link to="/signin" v-show="setUser === 0">
            <i class="fa-solid fa-user"></i>
          </router-link>
          <div v-show="setUser === 1" @click="logOut()">
            <i class="fa-solid fa-right-to-bracket"></i>
          </div>
        </li>
        <li>
          <router-link to="">
            <i class="fa-solid fa-location-dot"></i>
          </router-link>
        </li>
        <li>
          <router-link to="">
            <i class="fa-solid fa-magnifying-glass"></i>
          </router-link>
        </li>
      </ul>
      <a href="#" class="navbar__toogleBtn" @click="toggleNav">
        <i class="fa-solid fa-bars"></i>
      </a>
    </nav>
    <div v-show="isShow" @mouseover="showContentsBox(content, url)" @mouseout="closeContentsBox()" class="contents">
      <div class="flex-center contents-link-box">
        <router-link :to="`${url}`" class="contents-link"> {{ content }} </router-link>
      </div>
    </div>
    <div class="contents" v-show="hommeShow" @mouseover="showHommeBox()" @mouseout="closeHommeBox()">
      <div class="hommeBox column-center">
        <hommeCategoryList />
      </div>
    </div>
    <div v-show="isShow" class="transparent-box"></div>
  </header>
</template>

<script>
import hommeCategoryList from '@/components/hommeCategoryList.vue';

export default {
  name: '',
  components: { hommeCategoryList },
  data() {
    return {
      isActive: false,
      isShow: false,
      hommeShow: false,
      content: '',
      url: '',
      setUser: 0,
    };
  },
  created() {
    this.$store.state.user ? (this.setUser = 1) : (this.setUser = 0);
    console.log(this.setUser);
  },
  methods: {
    toggleNav() {
      this.isActive = !this.isActive;
    },
    showContentsBox(content, url) {
      this.isShow = true;
      this.content = content;
      this.url = url;
    },
    closeContentsBox() {
      this.isShow = false;
    },
    showHommeBox() {
      this.hommeShow = true;
    },
    closeHommeBox() {
      this.hommeShow = false;
    },
    loginCheck() {
      this.$store.state.user ? (this.setUser = 1) : (this.setUser = 0);
    },
    logOut() {
      this.$store.commit('user', null);
      this.setUser = 0;
    },
  },
};
</script>
<style scoped>
header {
  height: 60px;
  background-color: var(--bg-white);
  position: fixed;
  z-index: 99;
  border-bottom: 1px solid var(--text-light-gray);
  top: 0;
  left: 0;
  right: 0;
}
.hommeBox {
  padding-top: 20px;
}

.logo-img {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 130px;
  margin-left: 50px;
  margin-right: 100px;
}
.navbar__logo {
  height: 60px;
  display: flex;
  flex-direction: row;
}
ul {
  padding-left: 0;
  list-style: none;
}
.router-link {
  color: var(--text-dark-gray);
}
.contents-link {
  padding: 20px;
}
.navbar {
  padding: 0;
  margin: 0px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: var(--text-lg);
}
.navbar__menu {
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}
.navbar__menu li {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 60px;
  position: relative;
  padding: 0 20px;
}
.navbar__menu li:hover a {
  color: var(--text-black);
  font-weight: bold;
}
.navbar__menu li:after {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  width: 0%;
  bottom: 0;
  z-index: 102;
  height: 3px;
  margin: 0 auto;
  background-color: #000;
  transition: width 0.36s ease;
}
.contents {
  min-height: 60px;
  width: 100vw;
  background: #f7f7f7;
  border-bottom: 1px solid var(--text-light-gray);
}
.navbar__menu li:hover:after {
  width: 100%;
  transform: scaleX(1);
}
.navbar__icons {
  background-color: var(--bg-white);
  display: flex;
}
.navbar__icons li {
  height: 100%;
  padding: 8px 12px;
}
.navbar__icons i {
  color: var(--text-main);
  font-size: 20px;
}
.navbar__icons i:hover {
  color: var(--text-point);
}
.navbar__toogleBtn {
  position: absolute;
  display: none;
  top: 20px;
  right: 10px;
  font-size: 24px;
  color: var(--text-main);
}
@media screen and (max-width: 975px) {
  .navbar {
    background-color: var(--bg-white);
    flex-direction: column;
    align-items: flex-start;
  }
  .navbar__menu {
    display: none;
    flex-direction: column;
    text-align: center;
    align-items: center;
    width: 100%;
    padding: 8px 12px;
    box-sizing: border-box;
  }
  .navbar__menu li {
    width: 100%;
  }
  .navbar__icons {
    display: none;
    justify-content: center;
    width: 100%;
    text-align: center;
  }
  .navbar__toogleBtn {
    display: block;
  }
  .navbar__menu.active,
  .navbar__icons.active {
    display: flex;
  }
}
.transparent-box {
  position: fixed;
  height: 100vh;
  width: 100vw;
  background-color: rgba(0, 0, 0, 0.541);
  z-index: 3;
}
.contents-link-box {
  height: 60px;
}
.contents-link-box a {
  color: var(--text-main);
}
.contents-link-box a:hover {
  color: var(--text-point);
}
</style>
