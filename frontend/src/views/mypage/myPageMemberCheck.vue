<template>
  <div class="containers">

  <div class="location">
    <div class="header">
      <router-link to='/'>
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
    <section class="d-flex row align-items-baseline justify-content-between">
      <myPageSide />
      <div class="col-9">
        <h3>비밀번호 재확인</h3>
        <p>회원님의 개인정보 보호를 위해 비밀번호를 입력해주세요.</p>
        <p>이니스프리는 회원님의 개인정보를 신중히 취급하며, 회원님의 동의 없이는 회원정보가 공개되지 않습니다.</p>
        <p>보다 다양한 혜택/서비스를 받으시려면 회원 정보를 최신으로 유지해주세요.</p>
        <div class="pwForm">
          <form>
            <label>비밀번호</label>
            <input type="password">
            <input type="submit" value="확인">
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
}
</script>

<style scoped>

.containers {
  width: 100%;
}
.pwForm {
  margin-top: 80px;
  text-align: center;
}
button,
a {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  letter-spacing: inherit;
  color: inherit;
  text-decoration: none;
  outline: none;
}

.location {
  display: flex;
  flex-direction: column;
}

.location:after {
  content: "";
  display: block;
  clear: both;
}

.header {
  margin-left: 80px;
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
</style>