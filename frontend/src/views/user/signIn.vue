<template>
  <div>

    <!-- header -->
    <header>
      <div class="loginBox">
        <h1 class="loginTitle">로그인</h1>
        <button type="button"><span>X</span></button>
        <hr>
      </div>
    </header>
    <!-- / header -->
    <!-- container -->
    <div class="container">
      <span>아모레퍼시픽 뷰티포인트 통합회원<br>아이디로 로그인 해주세요.</span>
    </div>
    <div>
      <input type="text" id="loginId" placeholder="아이디 입력" autofocus>
    </div>
    <div>
      <input type="password" id="loginPw" placeholder="비밀번호 입력 (영문, 숫자, 특수문자 조합)">
    </div>
    <div><button>로그인</button></div>
    <div>
      <button type="button" @click="kakaoLogin()">
        <img src="//k.kakaocdn.net/14/dn/btroDszwNrM/I6efHub1SN5KCJqLm1Ovx1/o.jpg" width="" alt="카카오 로그인 버튼">
      </button>
    </div>
    <button>
      <span>아직 회원이 아니세요?</span>
      <em>회원가입</em>
    </button>
    <!-- / container -->
  </div>
</template>

<script>
export default {

}
</script>

<style>
</style>