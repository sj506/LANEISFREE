<template>
  <div id="container">

    <div class="location headerCate">
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
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide />
      <div class="col-10 p-5 memberHeader">
        <h3>뷰티포인트 통합 회원 정보 수정</h3>
        <p class="mb-3 text-dark">* 이 페이지에서 회원정보 수정, 비밀번호 수정시 뷰티포인트 통합 아이디로 로그인하는 아모레퍼시픽 사이트의 정보가 함께 변경됩니다.</p>
        <div class="memberDiv">
          <div class="memberE" @click="displayE" :class="{ bgGreen: isActive1 }">회원정보 수정</div>
          <div class="memberP" @click="displayP" :class="{ bgGreen: isActive2 }">비밀번호 수정</div>
        </div>
        <div class="memberE_ctnt" :class="{ dNone: isActive2}">
          <h4>SNS 계정연동 관리</h4>
          <table class="firstT">
            <thead>
              <tr>
                <th class="col">SNS 연결</th>
                <th>연결정보</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="col">
                  <img src="@/assets/img/mypage/icon_facebook.jpg" alt="페이스북 아이콘"><span>페이스북</span>
                </th>
                <td class="noConnect">연결 정보 없음</td>
              </tr>
              <tr>
                <th class="col">
                  <img src="@/assets/img/mypage/icon_kakao.jpg" alt="카카오톡 아이콘"><span>카카오</span>
                </th>
                <td>
                  <span>연결됨</span>
                  <button class="noConnectBtn">연결해재</button>
                </td>
              </tr>
              <tr>
                <th class="col">
                  <img src="@/assets/img/mypage/icon_naver.jpg" alt="네이버 아이콘"><span>네이버</span>
                </th>
                <td class="noConnect">연결 정보 없음</td>
              </tr>
            </tbody>
          </table>
          <div class="sub">이름 변경(개명)의 경우 이니스프리 고객상담실(080-380-0114)로 문의 부탁드립니다.</div>
          <table class="seconT">
            <tr>
              <th>이름</th>
              <td>쌀과자</td>
            </tr>
            <tr>
              <th>이메일</th>
              <td>
                <input type="text" class="inputText"> @
                <input type="text" class="inputText">
                <select>
                  <option value="gmail.com" class="inputText">선택하세요</option>
                  <option value="gmail.com">구글</option>
                  <option value="naver.com">네이버</option>
                  <option value="daum.net">다음</option>
                  <option value="hanmail.net">한메일</option>
                </select>
                <span><input type="submit" class="noConnectBtn" value="메일확인"></span>
              </td>
            </tr>
            <tr>
              <th>휴대전화 번호</th>
              <td>
                <input type="text" class="inputText"> -
                <input type="text" class="inputText"> -
                <input type="text" class="inputText">
                <input type="submit" value="변경">
              </td>
            </tr>
            <tr>
              <th>주소</th>
              <td>
                <div>
                  <input type="text">
                  <input type="submit" value="우편번호 검색">
                </div>
                <div>
                  <input type="text">
                </div>
                <div>
                  <input type="text">
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="memberP_ctnt" :class="{ dNone: isActive1}">

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
    }
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
  }
}
</script>

<style scoped>


p {
  color: #777;
  padding: 3px;
}

h3 {
  font-size: 30px;
  font-weight: 600;
  padding-bottom: 20px;
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

th, td {
  padding: 17px 16px;
}

thead th {
  width: 170px;
  border-top: 2px solid #222;
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

.memberE_ctnt h4 {
  margin: 35px 0 24px 0;
}

.col {
  width: 50px;
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
  width: 82px;
  height: 30px;
}

.sub {
  margin: 75px 0 24px;
  color: #777;
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
  content: "";
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