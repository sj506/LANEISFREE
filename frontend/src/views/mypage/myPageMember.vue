<template>
  <div id="container">
    <div class="location headerCate">
      <div class="header">
        <router-link to="/">
          <div class="depth"><button href="/" class="btn_h">홈</button></div>
        </router-link>

        <div class="depth">
          <button type="button" class="btn_h">마이페이지</button>
        </div>

        <div class="depth">
          <button type="button" class="btn_h">회원정보 수정</button>
        </div>
      </div>
    </div>
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide activeLink="/myPageMemberCheck" />
      <div class="col-10 p-5 r_border">
        <h3 class="pb-4">뷰티포인트 통합 회원 정보 수정</h3>
        <p class="mb-3 text-dark">* 이 페이지에서 회원정보 수정, 비밀번호 수정시 뷰티포인트 통합 아이디로 로그인하는 아모레퍼시픽 사이트의 정보가 함께 변경됩니다.</p>

        <div class="memberDiv">
          <div class="memberE" @click="displayE" :class="{ bgGreen: isActive1 }">회원정보 수정</div>
          <div class="memberP" @click="displayP" :class="{ bgGreen: isActive2 }">비밀번호 수정</div>
        </div>

        <div class="memberE_ctnt" :class="{ dNone: isActive2 }">
          <form>
            <h4 class="mt-4 pt-2 mb-4">SNS 계정연동 관리</h4>
            <table class="firstT">
              <thead>
                <tr>
                  <th class="col">SNS 연결</th>
                  <th>연결정보</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="col"><img src="@/assets/img/mypage/icon_facebook.jpg" alt="페이스북 아이콘" /><span>페이스북</span>
                  </th>
                  <td class="noConnect">연결 정보 없음</td>
                </tr>
                <tr>
                  <th class="col"><img src="@/assets/img/mypage/icon_kakao.jpg" alt="카카오톡 아이콘" /><span>카카오</span></th>
                  <td>
                    <span>연결됨</span>
                    <button class="noConnectBtn">연결해재</button>
                  </td>
                </tr>
                <tr>
                  <th class="col"><img src="@/assets/img/mypage/icon_naver.jpg" alt="네이버 아이콘" /><span>네이버</span></th>
                  <td class="noConnect">연결 정보 없음</td>
                </tr>
              </tbody>
            </table>

            <div class="sub">이름 변경(개명)의 경우 이니스프리 고객상담실(080-380-0114)로 문의 부탁드립니다.</div>

            <div class="Tdiv">
              <table class="table">
                <tr>
                  <th>이름</th>
                  <td>쌀과자</td>
                </tr>
                <tr>
                  <th>이메일</th>
                  <td>
                    <input type="text" class="inputText" /> @
                    <input type="text" class="inputText" disabled />
                    <select class="inputText ms-4">
                      <option value="gmail.com">선택하세요</option>
                      <option value="gmail.com">구글</option>
                      <option value="naver.com">네이버</option>
                      <option value="daum.net">다음</option>
                      <option value="hanmail.net">한메일</option>
                    </select>
                    <span><input type="submit" class="noConnectBtn" value="메일확인" /></span>
                  </td>
                </tr>
                <tr>
                  <th>휴대전화 번호</th>
                  <td>
                    <input type="text" class="inputText" disabled /> - <input type="text" class="inputText" disabled />
                    -
                    <input type="text" class="inputText" disabled />
                    <input type="submit" class="noConnectBtn" value="변경" />
                  </td>
                </tr>
                <tr>
                  <th>주소</th>
                  <td>
                    <div>
                      <input type="text" class="inputText" style="width: 13%" disabled />
                      <input type="submit" class="noConnectBtn" value="우편번호 검색" />
                    </div>
                    <div>
                      <input type="text" class="inputText mt-2" style="width: 60%" disabled />
                    </div>
                    <div>
                      <input type="text" class="inputText mt-2" style="width: 60%" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>

            <div class="sub2">
              <h4>※ 개인정보 수집·이용 동의 (선택)</h4>
              <p>회사는 이용자의 회원서비스 제공을 위하여 아래와 같이 개인정보를 수집 및 이용합니다.</p>
            </div>

            <div class="thirdT">
              <table>
                <thead>
                  <tr>
                    <th>수집항보</th>
                    <th>수집・이용목적</th>
                    <th>보유기간</th>
                  </tr>
                </thead>
                <tbody>
                  <td>이메일, 휴대전화 번호, 주소</td>
                  <td>
                    본인 동의 시 회사 또는 제휴사의<br />
                    서비스/사업 및 정책/기타 이벤트에 관한 정보 제공 및<br />
                    그에 따른 경품 등 물품 배송
                  </td>
                  <td>동의 철회 또는 회원 탈퇴 시 까지</td>
                </tbody>
              </table>
            </div>
            <div class="pt-3 sub3">
              <span>※ 귀하는 개인정보 수집 및 이용에 대한 동의를 거부할 수 있습니다. 단, 거부할 경우 문의 서비스의 이용이 불가합니다.</span>
              <label class="agree"><input type="checkbox" class="me-1 agreeCheckBox" />동의합니다.</label>
            </div>
            <div class="sub2">
              <h4>관련정보 수신여부</h4>
              <p>이니스프리에서 보내드리는 문자, 이메일, 우편물에 대한 수신동의 입니다.</p>
            </div>

            <div class="Tdiv">
              <table class="table">
                <tr>
                  <th>이메일 수신동의</th>
                  <td><input type="radio" name="emailAgree1" /> 수신 <input type="radio" name="emailAgree1" class="ms-4"
                      checked /> 미수신</td>
                </tr>
                <tr>
                  <th>문자 수신동의</th>
                  <td><input type="radio" name="messageAgree1" /> 수신 <input type="radio" name="messageAgree1"
                      class="ms-4" checked /> 미수신</td>
                </tr>
                <tr>
                  <th>우편물 수신동의</th>
                  <td><input type="radio" name="postAgree1" /> 수신 <input type="radio" name="postAgree1" class="ms-4"
                      checked /> 미수신</td>
                </tr>
              </table>
            </div>

            <div class="sub2">
              <h4>뷰티포인트 수신여부</h4>
              <p>뷰티포인트에서 보내드리는 문자, 이메일, 우편물에 대한 수신동의 입니다.</p>
            </div>

            <div class="Tdiv">
              <table class="table bPoint">
                <tr>
                  <th>이메일 수신동의</th>
                  <td><input type="radio" name="emailAgree2" /> 수신 <input type="radio" name="emailAgree2" class="ms-4"
                      checked /> 미수신</td>
                </tr>
                <tr>
                  <th>문자 수신동의</th>
                  <td><input type="radio" name="messageAgree2" /> 수신 <input type="radio" name="messageAgree2"
                      class="ms-4" checked /> 미수신</td>
                </tr>
                <tr>
                  <th>우편물 수신동의</th>
                  <td><input type="radio" name="postAgree2" /> 수신 <input type="radio" name="postAgree2" class="ms-4"
                      checked /> 미수신</td>
                </tr>
                <tr>
                  <th>TM 수신동의</th>
                  <td><input type="radio" name="TMAgree" /> 수신 <input type="radio" name="TMAgree" class="ms-4"
                      checked /> 미수신</td>
                </tr>
                <tr>
                  <th colspan="2" class="siteMoveBtn">뷰티포인트 수신여부는 뷰티포인트 사이트에서 수정이 가능합니다.</th>
                  <td>
                    <input type="button" class="noConnectBtn" value="뷰티포인트 사이트 이동" />
                  </td>
                </tr>
              </table>
            </div>

            <div class="my-5 d-flex submitBtnDiv">
              <input type="submit" class="btn btn-dark my-5 submitBtn" value="확인" />
              <input type="reset" class="btn btn-light border my-5 submitBtn" value="취소" />
            </div>

            <div class="secessionDiv">
              <span>이니스프리 회원 또는 이니스프리 밀리터리 회원에서 탈퇴가 가능합니다. </span>
              <router-link to="/signin">
                <span class="noConnectBtn ms-3 py-2">회원탈퇴</span>
              </router-link>
            </div>
          </form>
        </div>

        <div class="memberP_ctnt" :class="{ dNone: isActive1 }">
          <div class="">
            <h4 class="mt-4 pt-2 mb-4">뷰티포인트 통합 비밀번호 수정</h4>
            <p class="mb-1">개인정보 보호를 위해 비밀번호는 90일마다 변경해주세요.</p>
            <p class="mb-1">타인에게 비밀번호가 노출되지 않도록 주의해 주세요.</p>
            <p class="mb-1">비밀번호 변경시, 뷰티포인트ID로 로그인 된 모든 서비스에서 로그아웃됩니다.(자동 로그인 포함)</p>
          </div>
          <form class="column-center">
            <div class="noticeForm">
              <div class="notice">
                <div class="noticeTitle">
                  <p>비밀번호 입력 시 유의사항</p>
                </div>
                <div class="noticeList">
                  <p>* 영문 소문자, 숫자, 특수문자 중 최소 2가지 조합으로 8~16자</p>
                  <p>- 사용 가능한 특수문자: !”#$%&’()+,-./:;=>?@[ ]^_`{|}~</p>
                  <p>- 공백 사용 불가</p>
                  <p>* 아이디와 동일한 비밀번호 사용불가</p>
                  <p>* 개인정보와 관련되거나 연속된 숫자, 반복된 문자는 사용하지 않도록 주의</p>
                </div>
              </div>
              <div class="changePw">
                <table>
                  <tr>
                    <th>현재 비밀번호</th>
                    <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <th>새 비밀번호</th>
                    <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <th>새 비밀번호 확인</th>
                    <td><input type="text" /></td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="my-5 d-flex submitBtnDiv update">
              <input type="submit" class="btn btn-dark my-5 submitBtn" value="확인" />
              <input type="reset" class="btn btn-light border my-5 submitBtn" value="취소" />
            </div>
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
      isActive1: true,
      isActive2: false,
    };
  },
  methods: {
    displayE(e) {
      this.isActive1 = true;
      this.isActive2 = false;
      console.log(e.target);
    },
    displayP(e) {
      this.isActive1 = false;
      this.isActive2 = true;
      console.log(e.target);
    },
  },
};
</script>

<style scoped>



p {
  color: #777;
  padding: 3px;
}

h3 {
  font-size: 30px;
  font-weight: 600;
  /* padding-bottom: 20px; */
}

a {
  color: var(--text-black);
  font-style: none;
}

button {
  border: none;
}

.r_border {
  min-height: 1200px;
  border-left: 1px solid #ccc;
}

/* header */

#container {
  width: 100vw;
  min-height: 500px;
  /* padding-bottom: 110px; */
  border-top: 1px solid transparent;
}

.btn_h {
  margin: 0 0 0 15px;
  padding-right: 25px;
  color: #777;
  background: url('@/assets/img/mypage/arw_loc_btn.png') no-repeat 99% 50%;
}

.dNone {
  display: none;
}

.bgGreen {
  background-color: var(--bg-main);
  color: #fff;
}

/* header category */

.location {
  display: flex;
  flex-direction: column;
}

.location:after {
  content: '';
  display: block;
  clear: both;
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

.depth:last-child .btn_h {
  color: #222;
}

.depth:first-child .bt_h {
  color: #777;
}

.depth:first-child {
  background: none;
}

/* main */
.memberDiv {
  display: flex;
}

.memberE {
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}

.memberP {
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* 회원정보 수정 */

table {
  width: 1026px;
  border-collapse: collapse;
  table-layout: fixed;
}

th,
td {
  padding: 17px 16px;
}

.col {
  width: 38px;
}

thead th {
  width: 170px;
  border-top: 2px solid #222;
}

.Tdiv {
  width: 1026px;
  border-top: 1px solid #222;
  border-bottom: 1px solid #dcdcdc;
  padding-top: 12px;
}

.table th {
  width: 170px;
}

.firstT th,
.firstT td {
  border-bottom: 1px solid #dcdcdc;
}

.firstT th img {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin-right: 16px;
  vertical-align: middle;
}

.thirdT thead th,
.thirdT tbody td {
  border-bottom: 1px solid #dcdcdc;
  border-left: 1px solid #dcdcdc;
  text-align: center;
  padding: 17px 14px;
  vertical-align: middle;
}

.thirdT th:first-child,
.thirdT td:first-child {
  border-left: none;
}

.noConnect {
  color: #999;
}

.noConnectBtn {
  background-color: #f3f3f3;
  border: 1px solid #a7a7a7;
  color: #222;
  font-size: 14px;
  margin: 0 6px;
  padding: 0 16px;
  height: 40px;
}

.sub {
  margin: 75px 0 24px;
  color: #777;
}

.sub2 {
  margin: 75px 0 24px;
}

.sub3 {
  position: relative;
  width: 1026px;
}

.sub3 span {
  color: #777;
  padding: 3px;
}

.inputText {
  width: 150px;
  vertical-align: middle;
  height: 40px;
  padding: 8px;
  border: 1px solid #dcdcdc;
}

.agree {
  position: absolute;
  right: 0;
}

.agreeCheckBox {
  height: 20px;
  width: 20px;
  vertical-align: middle;
}

.siteMoveBtn {
  width: fit-content;
}

.submitBtnDiv {
  justify-content: center;
}

.submitBtnDiv .submitBtn:first-child {
  margin-right: 10px;
}

.submitBtn {
  height: 48px;
  padding: 0 55px;
}

.secessionDiv {
  padding: 40px 0;
  background: #f3f3f3;
  text-align: center;
  color: #222;
  max-width: 1026px;
}

.bPoint td {
  width: 300px;
}

/* 비밀번호 수정 */
.noticeForm {
  margin-top: 20px;
  border-top: 1px solid #222;
  border-bottom: 1px solid #f3f3f3;
  max-width: 1026px;
}

.notice {
  float: right;
  width: 50%;
  background-color: #f3f3f3;
  text-align: center;
}

.noticeList {
  padding: 5px 35px 35px;
  text-align: left;
}

.noticeList p {
  color: #777;
  padding-bottom: 5px;
  font-size: 14px;
}

.noticeTitle p {
  padding-top: 140px;
  padding-bottom: 10px;
  font-size: 24px;
  color: #222;
  background: url('@/assets/img/mypage/icon_alert.png') no-repeat 50% 40px;
}

.changePw {
  float: left;
  width: 50%;
}

.changePw table {
  width: 100%;
  border-collapse: collapse;
  table-layout: fixed;
  padding: 14px 0;
  margin-top: 35px;
}

.changePw th {
  width: 170px;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  color: #222;
  vertical-align: top;
}

.changePw td {
  padding: 4px 0;
  color: #222;
}

.changePw input {
  height: 40px;
  width: 234px;
  padding: 0 8px;
  border: 1px solid #dcdcdc;
  font-size: 16px;
}
</style>
