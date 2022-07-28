<template>
  <div style="margin-top: 75px;">

    <div>
      <h1>회원가입을 해야됩니다!!! 작업중</h1>
    </div>

    <form @submit.prevent="submitForm">
      <table>
        <tr>
          <td>이름</td>
          <td>
            <input type="text" name="m_nm" v-model="m_nm" class="m_nm mb-1" placeholder="이름 입력" autofocus>
          </td>
        </tr>

        <tr>
          <td>이메일</td>
          <td>
            <input type="text" name="m_email" v-model="m_email" class="mb-1" placeholder="이메일 입력">
            @
            <input type="text" list="m_email2" v-model="m_email2" class="mb-1" name="m_email2"
              placeholder="직접입력">
            <datalist id="m_email2">
              <option value="gmail.com" />
              <option value="naver.com" />
              <option value="daum.net" />
            </datalist>
          </td>
        </tr>

        <tr>
          <td>비밀번호</td>
          <td><input type="password" name="m_pw1" v-model="m_pw1" class="m_pw w-100 mb-1"
              placeholder="비밀번호 입력 (영문, 숫자, 특수문자 조합)">
          </td>
        </tr>

        <tr>
          <td>비밀번호 확인</td>
          <td><input type="password" v-model="m_pw2" name="m_pw2" class="m_pw2 w-100 mb-1" placeholder="비밀번호 확인">
          </td>
        </tr>

        <tr>
          <td>핸드폰</td>
          <td>
            <select name="m_tel1" v-model="m_tel1">
              <option value="010">010</option>
              <option value="011">011</option>
              <option value="053">053</option>
            </select>
            -
            <input type="text" name="m_tel2" v-model="m_tel2" size="5" class="mb-1">
            -
            <input type="text" name="m_tel3" v-model="m_tel3" size="5" class="mb-1">
          </td>
        </tr>

        <tr>
          <td>주소</td>
          <td>
            <input type="text" v-model="postcode" placeholder="우편번호">
            <input type="button" @click="execDaumPostcode()" value="우편번호 찾기"><br>
            <input type="text" v-model="addr" placeholder="주소"><br>
            <input type="text" v-model="detailAddr" placeholder="상세주소">
            <input type="text" v-model="extraAddr" placeholder="참고항목">
          </td>
        </tr>
      </table>
      <div class="d-flex justify-content-center">
        <button class="btn btn-primary mt-3 mx-1" type="submit" @click="signUp()">회원가입</button>
        <input class="btn btn-danger mt-3 mx-1" type="reset" value="초기화">
      </div>

    </form>

  </div>

</template>

<script>
export default {
  name: "signUpForm",
  data() {
    return {
      m_nm: "",
      m_email: "",
      m_email2: "",
      m_pw1: "",
      m_pw2: "",
      m_tel1: "",
      m_tel2: "",
      m_tel3: "",
      postcode: "",
      addr: "",
      detailAddr: "",
      extraAddr: "",
    };
  },
  methods: {
    async submitForm() {
      alert('clicked');

    },
    execDaumPostcode() {
      new window.daum.Postcode({
        oncomplete: (data) => {
          if (this.extraAddr !== "") {
            this.extraAddr = "";
          }
          if (data.userSelectedType === "R") {
            // 사용자가 도로명 주소를 선택했을 경우
            this.addr = data.roadAddress;
          } else {
            // 사용자가 지번 주소를 선택했을 경우(J)
            this.addr = data.jibunAddress;
          }

          // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
          if (data.userSelectedType === "R") {

            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
            if (data.bname !== "" && /[동|로|가]$/g.test(data.bname)) {
              this.extraAddr += data.bname;
            }
            // 건물명이 있고, 공동주택일 경우 추가한다.
            if (data.buildingName !== "" && data.apartment === "Y") {
              this.extraAddr +=
                this.extraAddr !== ""
                  ? `, ${data.buildingName}`
                  : data.buildingName;
            }
            // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
            if (this.extraAddr !== "") {
              this.extraAddr = `(${this.extraAddr})`;
            }
          } else {
            this.extraAddr = "";
          }
          // 우편번호를 입력한다.
          this.postcode = data.zonecode;
        },
      }).open();
    },
  },
};
</script>

<style scoped>
</style>