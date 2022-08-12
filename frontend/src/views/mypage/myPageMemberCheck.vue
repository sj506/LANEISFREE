<template>
  <div id="container">
    <div class="location headerCate">
      <div class="header">
        <router-link to="/">
          <div class="depth"><button href="/" class="btn">홈</button></div>
        </router-link>

        <div class="depth">
          <button type="button" class="btn">마이페이지</button>
        </div>

        <div class="depth">
          <button type="button" class="btn">회원정보 수정</button>
        </div>
      </div>
    </div>

    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide activeLink="/myPageMemberCheck" />
      <div class="col-10 p-5 r_border">
        <h3>비밀번호 재확인</h3>
        <p>회원님의 개인정보 보호를 위해 비밀번호를 입력해주세요.</p>
        <p>이니스프리는 회원님의 개인정보를 신중히 취급하며, 회원님의 동의 없이는 회원정보가 공개되지 않습니다.</p>
        <p>보다 다양한 혜택/서비스를 받으시려면 회원 정보를 최신으로 유지해주세요.</p>
        <div class="pwForm">
          <form>
            <label>비밀번호</label>
            <input type="password" v-model="user.m_pw" ref="focus" class="pwInput" />
            <input type="submit" class="pwSubmit" @click.prevent="pwCheckForm" value="확인" />
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import myPageHeader from '@/layout/myPageHeader';
import myPageSide from '@/layout/myPageSide';
export default {
  name: '',
  components: { myPageHeader, myPageSide },
  data() {
    return {
      user: {
        m_email: '',
        m_pw: '',
      },
    };
  },
  methods: {
    async pwCheckForm() {
      this.user.m_email = this.$store.state.user.result.m_email;
      const signIn = await this.$post('user/signIn', this.user);
      if (this.user.m_pw === signIn.result.m_pw) {
        this.$router.push('/myPageMember');
        // console.log('로그인 성공');
      } else {
        alert('비밀번호를 확인해주세요.');
        this.user.m_pw = '';
      }
    },

    checkSetUser() {
      console.log(this.$store.state.setUser);
      // if (this.$store.state.setUser === 1) {
      //   this.$router.push('/myPageMember');
      // }
    },
  },
};
</script>

<style scoped>

#container {
  width: 100vw;
  min-height: 500px;
  /* padding-bottom: 110px; */
  border-top: 1px solid transparent;
}

.location {
  display: flex;
  flex-direction: column;
}

.location:after {
  content: '';
  display: block;
  clear: both;
}

.headerCate {
  max-width: 1550px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}
.header {
  margin-left: 80px;
}

.contents {
  max-width: 1400px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}

.depth {
  float: left;
  margin-left: 10px;
  padding: 15px 0 17px;
  background: url('@/assets/img/mypage/arw_loc.png') no-repeat 0 50%;
}

.depth:first-child {
  background: none;
}

.r_border{ 
  min-height: 1200px;
  border-left: 1px solid #ccc;
}

.r_border h3 {
  font-size: 30px;
  font-weight: 600;
  padding-bottom: 20px;
}

.btn {
  margin: 0 0 0 15px;
  padding-right: 25px;
  color: #777;
  background: url('@/assets/img/mypage/arw_loc_btn.png') no-repeat 99% 50%;
}

.depth:last-child .btn {
  color: #222;
}

.depth:first-child .btn {
  color: #777;
}

.location .list {
  display: none;
  position: absolute;
  max-height: 350px;
  overflow: hidden;
  top: 48px;
  left: -8px;
  padding: 18px 24px;
  background: #fff;
  border: 1px solid #a7a7a7;
}

.location .list a:hover {
  color: #222;
}

p {
  color: #777;
  padding: 3px;
}

/* 비밀번호 재확인 form */
.pwForm {
  margin-top: 80px;
  text-align: center;
}
.pwCheckInput h3 {
  margin-bottom: 24px;
  font-weight: bold;
}

.pwInput {
  height: 40px;
  margin: 0 8px;
  border: 1px solid #dcdcdc;
  width: 270px;
}

.pwSubmit {
  height: 40px;
  background: #000;
  color: #fff;
  padding: 0 30px;
}
</style>
