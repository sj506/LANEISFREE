<template>
  <div class="body">
    <div class="loginBox">
      <div class="login">
        <h1>로그인</h1>
        <router-link to="/">
          <button type="button" class="btnClose"><span class="none">닫기</span></button>
        </router-link>
      </div>
    </div>

    <!-- container -->
    <div class="container">
      <div class="signInTitle">
        <span>아모레퍼시픽 뷰티포인트 통합회원<br />아이디로 로그인 해주세요.</span>
      </div>

      <div>
        <!-- 키보드 열기 -->
        <div class="keyboard">
          <button class="keyboardBtn" @click="keyboardBtn">{{ keyboardOpenBtn }}</button>
          <span class="keyboardImg">
            <img src="@/assets/img/signIn/img_keyboard.png" alt="키보드 배열 이미지" />
          </span>
        </div>

        <form @submit.prevent="submitForm">
          <!-- input 이메일 -->
          <div class="mb-3 inputForm">
            <input type="email" id="loginId" v-model="user.m_email" placeholder="이메일 입력" required />
            <div type="button" class="delBtn" @click="eDelBtn()"><span class="none">삭제</span></div>
          </div>

          <!-- input 비밀번호 -->
          <div class="mb-3 inputForm">
            <input type="password" id="loginPw" v-model="user.m_pw" placeholder="비밀번호 입력 (영문, 숫자, 특수문자 조합)" required />
            <div type=" button" class="delBtn" @click="pDelBtn()"><span class="none">삭제</span></div>
          </div>

          <!-- checkbox 아이디 저장 -->
          <div>
            <span class="idSave">
              <input type="checkbox" id="saveId" checked />
              <label for="saveId"><span>아이디 저장</span></label>
            </span>
          </div>

          <!-- button 로그인 -->
          <div>
            <button
              type="submit"
              class="btn submitBtn blueBtn"
              @click="submitBtn"
              v-bind:disabled="this.user.m_email === '' || this.user.m_pw === ''"
            >
              로그인
            </button>
          </div>
        </form>

        <!-- button 카카오 로그인 -->
        <div class="kakaoLoginBtn">
          <div>
            <button type="button" @click="kakaoLogin()">
              <img src="@/assets/img/signIn/btn_login_mobile.png" />
              휴대폰<br />로그인
            </button>
          </div>
          <div>
            <button type="button" @click="kakaoLogin">
              <img src="@/assets/img/signIn/btn_login_ka.png" />
              카카오<br />로그인
            </button>
          </div>
          <div>
            <button type="button">
              <img src="@/assets/img/signIn/btn_login_na.png" />
              네이버<br />로그인
            </button>
          </div>
          <div>
            <button type="button">
              <img src="@/assets/img/signIn/btn_login_more.png" />
              더보기
            </button>
          </div>
        </div>

        <!-- a 아이디, 비번찾기 -->
        <div class="searchA">
          <a href="#" class="px-1">아이디 찾기</a> |
          <a href="#" class="px-1">비밀번호 찾기</a>
        </div>

        <!-- button 회원가입 -->
        <button class="btn whiteBtn signUpBtn">
          <router-link to="/signup">
            <span>아직 회원이 아니세요?</span>
            <em>회원가입</em>
          </router-link>
        </button>
      </div>
    </div>
    <!-- / container -->
  </div>
</template>

<script>
export default {
  name: '',
  data() {
    return {
      keyboardOpenBtn: 'PC 키보드 열기',
      user: {
        m_email: '',
        m_pw: '',
      },
    };
  },
  methods: {
    // 키보드 열고 닫기
    keyboardBtn() {
      const keyboard = document.querySelector('.keyboard');
      const check = keyboard.classList.contains('open');
      if (check) {
        keyboard.classList.remove('open');
        this.keyboardOpenBtn = 'PC 키보드 열기';
      } else {
        keyboard.classList.add('open');
        this.keyboardOpenBtn = 'PC 키보드 닫기';
      }
    },

    // 로그인 백엔드통신
    async submitForm() {
      // console.log(this.$store.state.setUser);
      // console.log(this.user);
      const signIn = await this.$post('user/signIn', this.user);
      if (this.user.m_email === signIn.result.m_email && this.user.m_pw === signIn.result.m_pw) {
        this.$store.commit('session_id', signIn.session_id);
        this.$store.commit('user', signIn);
        this.$router.push('/');
        const btnInsPro = document.querySelector('.btn-ins_product');
        if (signIn.result.m_level > 0) {
          btnInsPro.style.display = 'flex';
        }
      } else {
        alert('이메일 또는 비밀번호를 확인해주세요.');
        this.user.m_email = '';
        this.user.m_pw = '';
      }
      // console.log(this.$store.state.user);
      // console.log(signIn.result.m_email);
    },

    // ' X ' 버튼
    eDelBtn() {
      this.user.m_email = '';
    },

    pDelBtn() {
      this.user.m_pw = '';
    },

    // 카카오 로그인
    kakaoLogin() {
      window.Kakao.Auth.login({
        scope: 'account_email',
        success: this.getKakaoAccount,
        fail: (e) => {
          console.error(e);
        },
      });
    },
    getKakaoAccount(authObj) {
      console.log(authObj);
      window.Kakao.API.request({
        url: '/v2/user/me',
        success: (res) => {
          const acc = res.kakao_account.email;
          const tempEmail = acc.split('@');
          const param = {
            m_email: tempEmail[0],
            m_email2: tempEmail[1],
          };
          console.log(param);
          this.login(param);
        },
        fail: (e) => {
          console.error(e);
        },
      });
    },
  },
};
</script>

<style scoped>
.container {
  max-width: 520px;
  padding: 10px 20px 40px;
  margin: 0 auto;
  height: 800px;
}

a {
  color: inherit;
  text-decoration: none;
}

a:hover {
  color: inherit;
}

label {
  vertical-align: middle;
  cursor: pointer;
}

img {
  width: 100%;
  border: 0;
  vertical-align: top;
}

button {
  background: transparent;
  cursor: pointer;
  vertical-align: middle;
  margin: 0;
  padding: 0;
  border: none;
  border-image-width: 0;
  font-weight: 400;
  color: #252525;
}

input[type='email'],
input[type='password'] {
  padding: 0 12px;
  width: 100%;
  height: 50px;
  line-height: 48px;
  color: #252525;
  font-size: 14px;
  letter-spacing: -0.7px;
  border: 1px solid #e6e6e6;
  border-radius: 6px;
  appearance: none;
}

input[type='email']:hover,
input[type='password']:hover {
  border-color: #ccc;
}

input[type='email']:focus,
input[type='password']:focus {
  border: 2px solid #0a40d5;
  outline: 0;
  caret-color: #5c95f0;
}

#saveId:focus + label,
.searchA a:focus,
.keyboardBtn:focus {
  outline: 2px solid #0a40d5;
}

.none {
  display: block;
  height: 1px;
  overflow: hidden;
}

/* 로그인 */
.loginBox {
  width: 100%;
  height: 55px;
  border-bottom: 1px solid #f0f0f0;
}

.login {
  margin: 0 auto;
  max-width: 520px;
  position: relative;
}

.login h1 {
  line-height: 54px;
  font-weight: 500;
  font-size: 18px;
  text-align: center;
}

.btnClose {
  position: absolute;
  right: 0;
  top: 0;
  width: 60px;
  height: 54px;
  background: url('@/assets/img/signIn/btn_title_close.png') no-repeat 50% 50%;
  background-size: 23px auto;
}

.btnClose:focus {
  border: 2px solid #0a40d5;
}

.inputForm {
  position: relative;
  display: block;
}

.delBtn {
  position: absolute;
  right: 8px;
  top: 10px;
  width: 30px;
  height: 30px;
  background: #fff url('@/assets/img/signIn/btn_textfield_delete.png') no-repeat 50% 50%;
  -webkit-background-size: 13px auto;
  background-size: 13px auto;
  border-radius: 50%;
  cursor: pointer;
}

/* 아모레퍼시픽 뷰티포인트 통합회원 */
.signInTitle {
  width: 405px;
  height: 70px;
  margin: 20px auto 20px;
  font-size: 25px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.4;
  letter-spacing: -1px;
  text-align: center;
  color: #000;
}

/* PC 키보드 열기 */
.keyboard {
  padding-bottom: 12px;
  text-align: right;
}

.keyboard .keyboardBtn {
  position: relative;
  padding-right: 22px;
  color: #898989;
  letter-spacing: -0.65px;
}

.keyboard .keyboardBtn:before {
  position: absolute;
  right: 0;
  top: 50%;
  margin-top: -4px;
  width: 14px;
  height: 8px;
  background: url('@/assets/img/signIn/btn_keyboard_open.png') no-repeat 0 0;
  background-size: 14px auto;
  content: '';
}

.keyboard .keyboardImg {
  display: none;
}

.keyboard.open .keyboardImg {
  display: block;
  padding-top: 12px;
}

.keyboard.open .keyboardBtn:before {
  transform: rotate(180deg);
}

/* 아이디 저장 */
.idSave {
  margin: 14px auto;
  display: inline-block;
  position: relative;
}

.idSave input {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  filter: alpha(opacity=0);
  cursor: pointer;
}

.idSave label {
  padding-left: 27px;
  display: inline-block;
  vertical-align: top;
  position: relative;
  z-index: 2;
  line-height: 21px;
  color: #252525;
  letter-spacing: -0.8px;
}

.idSave label:before {
  position: absolute;
  left: 0;
  top: 0;
  content: '';
  width: 21px;
  height: 21px;
  vertical-align: middle;
  background: url('@/assets/img/signIn/btn_check_off.png') no-repeat 0 0;
  background-size: 100% auto;
}

.idSave input:checked + label:before {
  background-image: url('@/assets/img/signIn/btn_check_on.png');
}

/* 로그인 버튼 */
.btn {
  width: 100%;
  height: 54px;
  border-radius: 6px;
  font-size: 16px;
  letter-spacing: -0.8px;
}

.blueBtn {
  color: #fff;
  border: solid 1px var(--bg-main);
  background-color: var(--bg-main);
}

.submitBtn:disabled,
.submitBtn[disabled] {
  background-color: #f0f0f0;
  border-color: #f0f0f0;
  color: #c6c6c6;
  cursor: none;
}

/* 카카오톡 로그인 버튼 */
.kakaoLoginBtn {
  margin-top: 20px;
  padding: 20px 17px;
  display: flex;
  border-top: 1px solid #f0f0f0;
  border-bottom: 1px solid #f0f0f0;
}

.kakaoLoginBtn div {
  flex: 1;
  position: relative;
}

.kakaoLoginBtn button {
  width: 100%;
  font-size: 15px;
  line-height: 1.23;
  letter-spacing: -0.65px;
  font-weight: 400;
}

.kakaoLoginBtn button img {
  display: block;
  margin: 0 auto 12px;
  width: 45px;
}

/* 찾기 버튼 */
.searchA {
  text-align: center;
  margin: 20px 9px;
  font-size: 15px;
  color: #898989;
  letter-spacing: -0.65px;
}

/* 회원가입 버튼 */
.signUpBtn {
  margin-top: 15px;
  padding: 0 20px;
  height: 44px;
  font-size: 14px;
  letter-spacing: -0.7px;
  font-weight: bold;
}

.whiteBtn {
  border: solid 1px #d3d3d3;
  background-color: var(--bg-white);
}

.signUpBtn span {
  float: left;
}

.signUpBtn em {
  position: relative;
  padding-right: 12px;
  float: right;
  font-weight: bolder;
}

.signUpBtn em:before {
  position: absolute;
  right: 0;
  top: 50%;
  margin-top: -6px;
  width: 7px;
  height: 12px;
  background: url('@/assets/img/signIn/icon_signup_arrow.png') no-repeat 0 0;
  background-size: 7px auto;
  content: '';
}
</style>
