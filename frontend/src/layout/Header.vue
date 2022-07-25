<template>
  <div class="column-center">
    <div>
      <div class="logo">
        <nav>
          <router-link to="/">
            <img class="logo-img" src="https://www.laneige.com/kr/ko/assets/image/a/laneige-logo.svg" alt="" />
          </router-link>
          <router-link to="/homme">옴므</router-link>
          <router-link class="nav-link" to="/">index</router-link>
          <router-link class="nav-link" to="/intro">팀 소개</router-link>
          <router-link class="nav-link active" to="/best">베스트</router-link>
          <router-link class="nav-link" to="/new">신상품</router-link>
        </nav>
      </div>
    </div>
  </div>
  <hr />
</template>

<script>
export default {
  name: '',
  components: {},
  data() {
    return {
      example: '',
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
  methods: {},
};
</script>

<style scoped>
.logo-img {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 130px;
  margin-left: 50px;
  margin-right: 100px;
}
.logo {
  display: flex;
  flex-direction: row;
  margin: 20px;
}
</style>
