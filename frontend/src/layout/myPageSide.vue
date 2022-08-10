<template>
  <nav id="snb" class="col-2">
    <div class="inner">
      <ul class="navList">
        <li>
          <router-link to="/mypageOnlineOrderList">주문배송조회</router-link>
        </li>
        <li>
          <router-link to="/myPageReview">내 리뷰</router-link>
        </li>
        <li>
          <div @click="myPageMember" class="pe-auto">회원정보 수정</div>
        </li>
        <li>
          <router-link to="/myPageWishList">찜한 제품</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  data() {
    return {

    }
  },
  methods: {
    myPageMember() {
      if (sessionStorage.getItem('savePw')) {
        this.$router.push('/myPageMember');
      } else {
        this.$router.push('/myPageMemberCheck');
      }
    }
  }
}
</script>

<style scoped>

#snb{
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  min-width: 213px;
  border-right: 0.5px solid #ccc;
  height: 100vh;
  z-index: 2;
}
.inner{
  padding-left: 40px;
  position: sticky;
  top: 100px;
}
.navList{
  display: flex;
  flex-direction: column;
  gap: 40px;
  white-space: nowrap;
}

.pe-auto {
  cursor: pointer;
}

a {
  color: var(--text-gray);
}
.active {
  color: var(--text-dark-gray);
}

ul {
  padding-left: 0;
  list-style: none;
}

</style>