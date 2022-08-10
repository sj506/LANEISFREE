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
      <myPageSide activeLink="/myPageMember" />
      <div class="col-10 p-5 memberHeader">
        <h3 class="pb-4">뷰티포인트 통합 회원 정보 수정</h3>
        <p class="mb-3 text-dark">
          * 이 페이지에서 회원정보 수정, 비밀번호 수정시 뷰티포인트 통합 아이디로 로그인하는 아모레퍼시픽 사이트의 정보가 함께 변경됩니다.
        </p>
        <div class="memberDiv">
          <div class="memberE" @click="displayE" :class="{ bgGreen: isActive1 }">회원정보 수정</div>
          <div class="memberP" @click="displayP" :class="{ bgGreen: isActive2 }">비밀번호 수정</div>
        </div>
        <div class="memberE_ctnt" :class="{ dNone: isActive2 }">
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
                <th class="col"><img src="@/assets/img/mypage/icon_facebook.jpg" alt="페이스북 아이콘" /><span>페이스북</span></th>
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
          <div class="seconTdiv">
            <table class="seconT">
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
                  <input type="text" class="inputText" disabled /> - <input type="text" class="inputText" disabled /> -
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
          <table class="thirdT">
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
          <div class="pt">
            <span class="sub3"
              >※ 귀하는 개인정보 수집 및 이용에 대한 동의를 거부할 수 있습니다. 단, 거부할 경우 문의 서비스의 이용이 불가합니다.</span
            >
            <label><input type="checkbox" />동의합니다.</label>
          </div>
        </div>
        <div class="memberP_ctnt" :class="{ dNone: isActive1 }"></div>
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

thead th {
  width: 170px;
  border-top: 2px solid #222;
}

.seconTdiv {
  width: 1026px;
  border-top: 1px solid #222;
  border-bottom: 1px solid #dcdcdc;
  padding: 15px 0;
}

.seconT th {
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

.col {
  width: 35px;
}

.thirdT thead th,
.thirdT tbody td {
  border-bottom: 1px solid #dcdcdc;
  border-left: 1px solid #dcdcdc;
  text-align: center;
  padding: 17px 14px;
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

/* header */

#container {
  width: 100vw;
  min-height: 500px;
  padding-bottom: 110px;
  border-top: 1px solid transparent;
}

.btn {
  margin: 0 0 0 15px;
  padding-right: 25px;
  color: #777;
  background: url('@/assets/img/mypage/arw_loc_btn.png') no-repeat 99% 50%;
}

.dNone {
  display: none;
}

.bgGreen {
  background-color: #17342f;
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

.depth:last-child .btn {
  color: #222;
}

.depth:first-child .btn {
  color: #777;
}

.depth:first-child {
  background: none;
}

/* main */
.memberHeader {
  padding: 40px;
  min-width: 560px;
}

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
</style>
