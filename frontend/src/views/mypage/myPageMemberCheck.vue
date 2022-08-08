<template>
  <div class="containers">
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
</style>