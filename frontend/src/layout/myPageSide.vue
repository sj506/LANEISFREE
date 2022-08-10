<template>
  <nav id="snb" class="col-2">
    <div class="inner">
      <ul class="navList">
        <li v-for="(myPage, idx) in myPageList" :key="idx" @click="myPagePush">
          <div v-bind:class="{ active: activeLink == myPage.to }" :data-to="myPage.to">{{ myPage.name }}</div>
        </li>
        <!-- <li>
          <router-link to="/myPageReview">내 리뷰</router-link>
        </li>
        <li>
          <div @click="myPageMember" class="pe-auto">회원정보 수정</div>
        </li>
        <li>
          <router-link to="/myPageWishList">찜한 제품</router-link>
        </li> -->
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  props: ['activeLink'],
  data() {
    return {
      myPageList: [
        { name: '주문배송조회', to: '/myPageOnlineOrderList' },
        { name: '내 리뷰', to: '/myPageReview' },
        { name: '회원정보 수정', to: '/myPageMember' },
        { name: '찜한 제품', to: '/myPageWishList' },
      ],
    };
  },
  created() {},
  methods: {
    // myPagepush() {
    //   if (sessionStorage.getItem('savePw')) {
    //     this.$router.push('/myPageMember');
    //   } else {
    //     this.$router.push('/myPageMemberCheck');
    //   }
    // },
    myPagePush(e) {
      // this.$refs.myPageRouter.forEach((myPageRouter) => {
      //   myPageRouter.classList.remove('active');
      // });

      // e.target.classList.add('active');
      this.$router.push(e.target.dataset.to);
    },
  },
};
</script>

<style scoped>
#snb {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  min-width: 213px;
  border-right: 0.5px solid #ccc;
  height: 100vh;
  z-index: 2;
}
.inner {
  padding-left: 40px;
  position: sticky;
  top: 100px;
}
.navList {
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
  /* color: var(--text-dark-gray); */
  color: tomato;
}

ul {
  padding-left: 0;
  list-style: none;
}
</style>
