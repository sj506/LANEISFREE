<template>
  <div id="body">
    <div class="container">
      <div class="input-form-backgroud row">
        <div class="input-form col-md-12 mx-auto">
          <h4 class="mb-3 d-flex justify-content-center">회원가입</h4>
          <form @submit.prevent="submitForm" class="validation-form" novalidate>

            <!-- 이름 -->
            <div class="mb-3">
              <label>이름</label>
              <input type="text" v-model="user.m_nm" class="form-control" placeholder="이름 입력" autofocus required>
              <div class="invalid-feedback">
                이름을 입력해주세요.
              </div>
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
                  <input type="text" v-model="user.m_email" class="form-control" placeholder="이메일 입력" />
                </div>

                <div class="col-md-1 text-center h5"> @ </div>

                <div class="col-md-4 mb-3">
                  <input type="text" list="m_email2" v-model="user.m_email2" class="form-control" placeholder="직접입력" />
                  <datalist id="m_email2">
                    <option value="gmail.com" />
                    <option value="naver.com" />
                    <option value="daum.net" />
                    <option value="hanmail.net" />
                  </datalist>
                </div>
              </div>
            </div>

            <!-- 비밀번호 -->
            <div>
              <div class="mb-3">
                <label>비밀번호</label>
                <input type="password" v-model="user.m_pw1" class="form-control"
                  placeholder="비밀번호 입력 (영문, 숫자, 특수문자 조합)" />
              </div>

              <div class="mb-3">
                <label>비밀번호 재확인</label>
                <input type="password" v-model="user.m_pw2" class="form-control" placeholder="비밀번호 다시 입력" />
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

                <div class="col-md-1 text-center h5"> - </div>

                <div class="col-md-3 mb-3">
                  <input type="text" v-model="user.m_tel2" size="5" class="form-control" />
                </div>

                <div class="col-md-1 text-center h5"> - </div>

                <div class="col-md-3 mb-3">
                  <input type="text" v-model="user.m_tel3" size="5" class="form-control" />
                </div>
              </div>
            </div>

            <!-- 주소 -->
            <div>
              <label>주소</label>
              <div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <input type="text" v-model="user.postcode" class="form-control" placeholder="우편번호" />
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
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary mx-1">가입하기</button>
              <button type="reset" class="btn btn-danger mx-1">초기화</button>
            </div>
          </form>

        </div>
      </div>
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
          m_gender: '',
          m_email: '',
          m_email2: '',
          m_pw1: '',
          m_pw2: '',
          m_tel1: '',
          m_tel2: '',
          m_tel3: '',
          postcode: '',
          addr: '',
          detailAddr: '',
          extraAddr: '',
        },
      };
    },
  methods: {
      // 회원가입 백엔드통신
      async submitForm() {
        console.log(this.user);
        const signUp = await this.$post('user/signUp', this.user);
        console.log(signUp);
      },

      // 도로명 주소 팝업창
      execDaumPostcode() {
        new window.daum.Postcode({
          oncomplete: data => {
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
  #body {
    min-height: 100vh;
  }

  .input-form {
    max-width: 680px;

    margin-top: 45px;
    padding: 32px;

    background: #f5f6f7;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15)
  }
  label {
    margin-bottom: 10px;
  }
</style>
