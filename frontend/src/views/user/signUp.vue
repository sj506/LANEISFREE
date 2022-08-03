<template>
  <div style="margin-top: 75px;">

    <div>
      <h1>회원가입을 해야됩니다!!! 작업중</h1>
    </div>

    <form action="">
      <table>
        <tr>
          <td>이름</td>
          <td><input type="text" name="m_nm" class="m_nm mb-1" placeholder="이름 입력"></td>
        </tr>

        <tr>
          <td>이메일</td>
          <td>
            <input type="text" name="m_email" class="mb-1" placeholder="이메일 입력">
            @
            <input type="text" list="m_email2" class="mb-1" name="m_email2" placeholder="직접입력">
            <datalist id="m_email2">
              <option value="gmail.com" />
              <option value="naver.com" />
              <option value="daum.net" />
            </datalist>
          </td>
        </tr>

        <tr>
          <td>비밀번호</td>
          <td><input type="password" name="m_pw1" class="m_pw w-100 mb-1" placeholder="비밀번호 입력 (영문, 숫자, 특수문자 조합)"></td>
        </tr>

        <tr>
          <td>비밀번호 확인</td>
          <td><input type="password" name="m_pw2" class="m_pw2 w-100 mb-1" placeholder="비밀번호 확인"></td>
        </tr>

        <tr>
          <td>핸드폰</td>
          <td>
            <select name="m_tel1">
              <option value="010">010</option>
              <option value="011">011</option>
              <option value="053">053</option>
            </select>
            -
            <input type="text" name="m_tel2" size="5" class="mb-1">
            -
            <input type="text" name="m_tel3" size="5" class="mb-1">
          </td>
        </tr>

        <tr>
          <td>주소</td>
          <td>
            <input type="text" class="mb-1" id="postCode" placeholder="우편번호">
            <input type="button" class="mx-1" @click="execPostCode()" value="우편번호 찾기"><br>
            <input type="text" class="mb-1" id="addr" placeholder="주소"><br>
            <input type="text" class="mb-1" id="detailAddr" placeholder="상세주소">
            <input type="text" class="mx-1" id="extraAddr" placeholder="참고항목">
          </td>
        </tr>

        <tr>
          <td></td>
          <td>
            <div id="wrap">
              <img src="//t1.daumcdn.net/postcode/resource/images/close.png" id="btnFoldWrap"
                style="cursor:pointer;position:absolute;right:0px;top:-1px;z-index:1" onclick="foldDaumPostcode()"
                alt="접기 버튼">
            </div>
          </td>
        </tr>
      </table>
    </form>
   
  </div>

</template>

<script>
import obj from '../../assets/js/addr.js';

export default {
  
  data() {
    return {

    }
  },
  methods: {
    execPostCode() {
      obj.execPostCode();
    }
  },  
  created() {

  }
}
</script>

<style scoped>
</style>