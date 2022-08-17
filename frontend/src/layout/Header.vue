<template>
  <header>
    <nav class="navbar" @click="toggleNav">
      <div class="navbar__logo">
        <router-link to="/" class="flex-center"><img class="logo-img" src="@/assets/img/laneisfree.svg" alt="" /></router-link>
      </div>
      <ul class="navbar__menu flex-center" :class="{ active: isActive }">
        <li data-to="/story" @click="routerPush" @mouseover="showContentsBox('브랜드 스토리', '/story')" @mouseout="closeContentsBox()">브랜드</li>
        <li data-to="/intro" @click="routerPush" @mouseover="showContentsBox('소개', '/intro')" @mouseout="closeContentsBox()">팀소개</li>
        <li data-to="/best" @click="routerPush" @mouseover="showContentsBox('베스트 상품', '/best')" @mouseout="closeContentsBox()">베스트</li>
        <li data-to="/new" @click="routerPush" @mouseover="showContentsBox('NEW 신상품', '/new')" @mouseout="closeContentsBox()">신상품</li>
        <li data-to="/homme" @click="routerPush" @mouseover="showHommeBox()" @mouseout="closeHommeBox()">옴므</li>
      </ul>
      <ul class="navbar__icons" :class="{ active: isActive }">
        <li v-show="loginToggle !== ''">
          <div class="dropdown">
            <router-link to="/mypage" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i>
            </router-link>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li>
                <router-link to="/mypageOnlineOrderList" class="dropdown-item">주문배송조회</router-link>
              </li>
              <li>
                <router-link to="/myPageReview" class="dropdown-item">내 리뷰</router-link>
              </li>
              <li>
                <router-link to="/myPageMemberCheck" class="dropdown-item">회원정보 수정</router-link>
              </li>
              <li>
                <router-link to="/myPageWishList" class="dropdown-item">찜한 제품</router-link>
              </li>
              <li>
                <router-link to="/basket" class="dropdown-item">장바구니</router-link>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <router-link to="/signin" v-show="loginToggle == ''">
            <i class="fa-solid fa-user"></i>
          </router-link>
          <div v-show="loginToggle !== ''" @click="logOut()">
            <i class="fa-solid fa-right-to-bracket"></i>
          </div>
        </li>
        <li>
          <router-link to="/map">
            <i class="fa-solid fa-location-dot"></i>
          </router-link>
        </li>
        <li>
          <router-link to="">
            <i class="fa-solid fa-magnifying-glass"></i>
          </router-link>
        </li>
      </ul>
      <a href="#" class="navbar__toogleBtn" @click="menuToggle">
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
        <hommeCategoryList v-bind:hoverCheck="false" />
      </div>
    </div>
    <div v-show="isShow || hommeShow" class="transparent-box"></div>
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
      // setUser: 0,
    };
  },
  computed: {
    loginToggle: function () {
      return this.$store.state.session_id;
    },
  },
  created() {
    // this.setUser = this.$store.state.setUser;
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
      // this.isShow = true;
    },
    closeHommeBox() {
      this.hommeShow = false;
      this.isShow = false;
    },
    async logOut() {
      this.$store.commit('user', null);
      this.$store.commit('session_id', '');
      await this.$get('user/logout', {});
    },
    routerPush(e) {
      this.$router.push(e.target.dataset.to);
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
  flex-wrap: nowrap;
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
  font-size: 18px;
  padding: 0 20px;
  cursor: pointer;
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
.btn-ins_product {
  display: none;
}
@media screen and (max-width: 975px) {
  .navbar {
    background-color: var(--bg-white);
    flex-direction: column;
    align-items: flex-start;
    margin: 0;
    /* width: 100%; */
  }
  .navbar__menu li {
    cursor: pointer;
  }
  .dropdown-menu {
    display: flex;
    left: -200px;
    top: 28px;
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
  .contents {
    display: none;
  }
  .contents-link-box {
    display: none;
  }
  .hommeBox {
    display: none;
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
