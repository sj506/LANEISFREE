<template>
  <header>
    <nav class="navbar">
      <div class="navbar__logo">
        <img class="logo-img" src="https://www.laneige.com/kr/ko/assets/image/a/laneige-logo.svg" alt="" />
      </div>
      <ul class="navbar__menu" :class="{ active: isActive }">
        <li><router-link class="router-link" to=""> 브랜드</router-link></li>
        <li><router-link class="router-link" to="">미츠아트</router-link></li>
        <li><router-link class="router-link" to="">베스트</router-link></li>
        <li><router-link class="router-link" to="">신상품</router-link></li>
        <li><router-link class="router-link" to="">옴므</router-link></li>
      </ul>
      <ul class="navbar__icons" :class="{ active: isActive }">
        <li>
          <i class="fa-solid fa-user"></i>
        </li>
        <li>
          <i class="fa-solid fa-location-dot"></i>
        </li>
        <li>
          <i class="fa-solid fa-magnifying-glass"></i>
        </li>
      </ul>
      <a href="#" class="navbar__toogleBtn" @click="toggleNav">
        <i class="fa-solid fa-bars"></i>
      </a>
    </nav>
  </header>
</template>

<script>
export default {
  name: '',
  components: {},
  data() {
    return {
      isActive: false,
    };
  },
  beforeCreate() {},
  created() {},
  beforeMount() {},
  mounted() {},
  beforeUpdate() {},
  updated() {},
  beforeUnmount() {},
  unmounted() {},
  methods: {
    toggleNav() {
      this.isActive = !this.isActive;
    },
  },
};
</script>
<style scoped>
header {
  height: 80px;
  background-color: #fff;
  position: fixed;
  z-index: 99;
  border-bottom: 1px solid var(--text-light-gray);
  top: 0;
  left: 0;
  right: 0;
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
  display: flex;
  flex-direction: row;
  margin: 20px;
}
ul {
  padding-left: 0;
  list-style: none;
}
.router-link {
  color: var(--text-gray);
}
.navbar {
  margin: 0px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: var(--text-lg);
}
.navbar__menu {
  display: flex;
  justify-content: center;
}
.navbar__menu li {
  padding: 8px 12px;
}
.navbar__menu li:hover {
  color: red;
  border-radius: 4px;
}
.navbar__icons {
  display: flex;
}
.navbar__icons li {
  height: 100%;
  padding: 8px 12px;
}
.navbar__icons i {
  color: var(--text-main);
}
.navbar__icons i:hover {
  color: var(--text-point);
}
.navbar__toogleBtn {
  position: absolute;
  display: none;
  right: 10px;
  font-size: 24px;
  color: var(--text-main);
}
@media screen and (max-width: 768px) {
  .navbar {
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
</style>
