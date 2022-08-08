<template>
  <div id="body">
    <div class="joinBox">
      <div class="join">
        <h1>회원가입</h1>
        <router-link to="/signin">
          <button type="button" class="btnPreve"><span class="none">이전</span></button>
        </router-link>
        <router-link to="/">
          <button type="button" class="btnClose"><span class="none">닫기</span></button>
        </router-link>
      </div>
    </div>

    <div class="container">
      <div class="joinTitle">
        <h2>뷰티포인트 회원가입</h2>
        <p>
          뷰티포인트 통합 아이디로 아모레퍼시픽 모든 브랜드의 온/오프 매장 서비스를 이용하실 수 있습니다.<br />(만 14세
          이상 부터 가입 가능합니다.)
        </p>
      </div>

      <form @submit.prevent="submitForm">

        <!-- 이름 -->
        <div>
          <div class="mb-3">
            <label>이름</label>
            <input @keyup="checkName" type="text" v-model="user.m_nm" class="form-control" placeholder="이름 입력">
          </div>
          <p class="check">{{ nameCheck }}</p>
        </div>

        <!-- 성별 -->
        <div class="mb-3">
          <label>성별</label>
          <select v-model="user.m_gender" class="form-control">
            <option value="1">여성</option>
            <option value="2">남성</option>
          </select>
        </div>

        <!-- 이메일 -->
        <div>
          <label>이메일</label>
          <div class="row">
            <div class="col-md-5 mb-3">
              <input @keyup="checkEmail" type="text" v-model="user.m_email" class="form-control" placeholder="이메일 입력" />
            </div>

            <div class="col-md-1 text-center h5"> @ </div>

            <div class="col-md-4 mb-3">
              <input @change="checkEmail" type="text" list="m_email2" v-model="user.m_email2" class="form-control"
                placeholder="직접입력" />
              <datalist id="m_email2">
                <option value="gmail.com" />
                <option value="naver.com" />
                <option value="daum.net" />
                <option value="hanmail.net" />
              </datalist>
            </div>
            <p class="check">{{ emailCheck }}</p>
          </div>
        </div>

        <!-- 비밀번호 -->
        <div>
          <div>
            <div class="mb-3">
              <label>비밀번호</label>
              <input @keyup="checkPassword" type="password" v-model="user.m_pw1" class="form-control"
                placeholder="비밀번호 입력 (영문, 숫자, 특수문자 조합 8~16자로 입력)" />
            </div>
            <p class="check">{{ passwordCheck }}</p>
          </div>

          <div>
            <div class="mb-3">
              <label>비밀번호 재확인</label>
              <input @keyup="checkPassword2" type="password" v-model="user.m_pw2" class="form-control"
                placeholder="비밀번호 다시 입력" />
            </div>
            <p class="check">{{ passwordCheck2 }}</p>
          </div>
        </div>

        <!-- 핸드폰 번호 -->
        <div>
          <label>전화번호</label>
          <div class="row">
            <div class="col-md-3 mb-3">
              <select v-model="user.m_tel1" class="form-control">
                <option value="010">010</option>
                <option value="011">011</option>
                <option value="053">053</option>
              </select>
            </div>

            <div class="col-md-1 text-center h5">-</div>

            <div class="col-md-3 mb-3">
              <input @keyup="checkTel" type="text" v-model="user.m_tel2" size="5" class="form-control" />
            </div>

            <div class="col-md-1 text-center h5">-</div>

            <div class="col-md-3 mb-3">
              <input @keyup="checkTel2" type="text" v-model="user.m_tel3" size="5" class="form-control" />
            </div>

          </div>
          <p class="check">{{ telCheck }}</p>
        </div>

        <!-- 주소 -->
        <div>
          <label>주소</label>
          <div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <input type="text" @click="execDaumPostcode()" v-model="user.postcode" class="form-control"
                  placeholder="우편번호" />
              </div>
              <div class="col-md-3 mb-3">
                <input type="button" @click="execDaumPostcode()" class="btn btn-secondary my-1 btn-sm"
                  value="우편번호 찾기" />
              </div>
            </div>
            <div>
              <input type="text" v-model="user.addr" class="form-control mb-3" placeholder="주소" />
              <input type="text" v-model="user.detailAddr" class="form-control mb-3" placeholder="상세주소" />
              <input type="text" v-model="user.extraAddr" class="form-control mb-3" placeholder="참고항목" />
            </div>
          </div>
        </div>

        <!-- button 회원가입 -->
        <div class="joinBtnDiv">
          <button type="submit" class="btnJoin submitBtn" v-bind:disabled="
                    this.user.m_email === '' ||
                    this.user.m_pw === '' ||
                    this.user.m_email === '' ||
                    this.user.m_tel2 === '' ||
                    this.user.m_tel3 === '' ||
                    this.user.postcode == '' ||
                    this.user.addr == ''||
                    !this.isName(this.user.m_nm) ||
                    !this.isEmail(this.user.m_email + '@' + this.user.m_email2) ||
                    !this.isPassword(this.user.m_pw1) ||
                    this.user.m_pw1 !== this.user.m_pw2 ||
                    !this.isTel(this.user.m_tel2) ||
                    !this.isTel(this.user.m_tel3)
          ">회원가입</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'signUpForm',
  data() {
    return {
      user: {
        m_nm: '',
        m_gender: '1',
        m_email: '',
        m_email2: '',
        m_pw1: '',
        m_pw2: '',
        m_tel1: '010',
        m_tel2: '',
        m_tel3: '',
        postcode: '',
        addr: '',
        detailAddr: '',
        extraAddr: '',
      },
      emailCheck: '',
      nameCheck: '',
      passwordCheck: '',
      passwordCheck2: '',
      telCheck: ''
    };
  },
  methods: {
    // 회원가입 백엔드통신
    async submitForm() {
      console.log(this.user);
      const signUp = await this.$post('user/signUp', this.user);
      this.$store.commit('user', this.user);
      this.$router.push('/signin');
      console.log(signUp);
    },

    // 이름 유효성
    isName(asValue) {
      const regExp = /^[가-힣]+$/;

      return regExp.test(asValue);
    },
    checkName() {
      this.isName(this.user.m_nm) || this.user.m_nm === '' ? this.nameCheck = '' : this.nameCheck = '한글만 입력가능합니다.'
    },    

    // 이메일 유효성
    isEmail(asValue) {
      const regExp = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;

      return regExp.test(asValue);
    },
    checkEmail() {
      this.isEmail(this.user.m_email + '@' + this.user.m_email2) || (this.user.m_email === '' && this.user.m_email2 === '') ? this.emailCheck = '' : this.emailCheck = '이메일형식이 맞지 않습니다'
    },

    // 비밀번호 유효성
    isPassword(asValue) {
      const regExp = /^(?=.*[a-zA-Z])((?=.*\d)(?=.*\W)).{6,16}$/;

      return regExp.test(asValue);
    },
    checkPassword() {
      this.isPassword(this.user.m_pw1) || this.user.m_pw1 === '' ? this.passwordCheck = '' : this.passwordCheck = '영문, 숫자, 특수문자 조합 8~16자만 입력가능합니다.'
    },
    checkPassword2() {
      this.user.m_pw1 === this.user.m_pw2 || this.user.m_pw2 === '' ? this.passwordCheck2 = '' : this.passwordCheck2 = '비밀번호가 일치하지 않습니다.'
    },

    // 전화번화 유효성
    isTel(asValue) {
      const regExp = /^[0-9]{3,4}/;

      return regExp.test(asValue);
    },
    checkTel() {
      this.isTel(this.user.m_tel2) || this.user.m_tel2 === '' ? this.telCheck = '' : this.telCheck = '숫자만 입력가능합니다.'
    },
    checkTel2() {
      this.isTel(this.user.m_tel3) || this.user.m_tel3 === '' ? this.telCheck2 = '' : this.telCheck2 = '숫자만 입력가능합니다.'
    },

    // 도로명 주소 팝업창
    execDaumPostcode() {
      new window.daum.Postcode({
        oncomplete: (data) => {
          if (this.user.extraAddr !== '') {
            this.user.extraAddr = '';
          }
          if (data.userSelectedType === 'R') {
            // 사용자가 도로명 주소를 선택했을 경우
            this.user.addr = data.roadAddress;
          } else {
            // 사용자가 지번 주소를 선택했을 경우(J)
            this.user.addr = data.jibunAddress;
          }

          // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
          if (data.userSelectedType === 'R') {
            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
            if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
              this.user.extraAddr += data.bname;
            }
            // 건물명이 있고, 공동주택일 경우 추가한다.
            if (data.buildingName !== '' && data.apartment === 'Y') {
              this.user.extraAddr += this.user.extraAddr !== '' ? `, ${data.buildingName}` : data.buildingName;
            }
            // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
            if (this.user.extraAddr !== '') {
              this.user.extraAddr = `(${this.user.extraAddr})`;
            }
          } else {
            this.user.extraAddr = '';
          }
          // 우편번호를 입력한다.
          this.user.postcode = data.zonecode;
        },
      }).open();
    },
  },
};
</script>

<style scoped>

.container {
  max-width: 520px;
  padding: 10px 20px 40px;
  margin: 15px auto;
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
  margin-bottom: 10px;
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

.none {
  display: block;
  height: 1px;
  overflow: hidden;
}

.check {
  color: red;
  margin-bottom: 10px;
}

/* 뷰티포인트 회원가입 */
.joinTitle {
  padding: 10px 0 40px;
}

.joinTitle h2 {
  font-size: 20px;
  line-height: 1.4;
  letter-spacing: -1px;
  font-weight: 700;
}

.joinTitle p {
  margin-top: 10px;
  font-size: 16px;
  line-height: 1.44;
}

/* 회원가입 */
.joinBox {
  width: 100%;
  height: 55px;
  border-bottom: 1px solid #f0f0f0;
}

.join {
  margin: 0 auto;
  max-width: 520px;
  position: relative;
}

.join h1 {
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

.btnPreve {
  position: absolute;
  left: 0;
  top: 0;
  width: 54px;
  height: 54px;
  background: url('@/assets/img/signIn/btn_title_back.png') no-repeat 50% 50%;
  -webkit-background-size: 23px auto;
  background-size: 23px auto;
}

.btnClose:focus,
.btnPreve:focus {
  border: 2px solid #0a40d5;
}

/* 회원가입 버튼 */
.joinBtnDiv {
  border-top: 1px solid #f0f0f0;
  padding: 15px auto;
}

.btnJoin {
  width: 100%;
  height: 54px;
  border-radius: 6px;
  font-size: 16px;
  letter-spacing: -0.8px;
  color: #fff;
  border: solid 1px var(--bg-main);
  background-color: var(--bg-main);
  border-top: 1px solid #f0f0f0;
  margin: 30px auto;
}

.submitBtn:disabled,
.submitBtn[disabled] {
  background-color: #f0f0f0;
  border-color: #f0f0f0;
  color: #c6c6c6;
  cursor: none;
}
</style>
