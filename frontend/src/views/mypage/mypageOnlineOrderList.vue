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
          <button type="button" class="btn_h">주문/배송현황</button>
        </div>

        <div class="depth">
          <button type="button" class="btn_h">주문배송내역</button>
        </div>
      </div>
    </div>
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide activeLink="/myPageOnlineOrderList" />
      <div class="col-10 p-5 r_border">
        <h3 class="pb-4">주문/배송현황</h3>

        <div class="tabs">
          <div class="tabs__head">
            <div @click="tabs__toggle" class="tabs__toggle is-active">
              <span class="tabs__name">주문배송내역</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">취소신청</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">반품신청</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">교환신청</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">증빙서류발급</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">구매내역</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">정기구독내역</span>
            </div>
          </div>

          <div class="tabs__body">
            <div class="tabs__content is-active">
              <searchDate />

              <div class="middleTab">
                <div class="middleTabs">
                  <a @click="activetab=1" :class="[ activetab === 1 ? 'active' : '' ]">전체주문체결내역</a>
                  <a @click="activetab=2" :class="[ activetab === 2 ? 'active' : '' ]">주문취소내역</a>
                  <a @click="activetab=3" :class="[ activetab === 3 ? 'active' : '' ]">반품처리내역</a>
                  <a @click="activetab=4" :class="[ activetab === 4 ? 'active' : '' ]">교환처리내역</a>
                </div>

                <div class="content">
                  <div v-if="activetab === 1" class="middelCtnt">
                    <div class="orderDiv">
                      <p>총 <strong>0</strong> 건</p>
                      <div class="orderTableDiv">
                        <table class="orderTable">
                          <thead>
                            <th style="width:120px;">주문일자</th>
                            <th style="width:115px;">주문번호</th>
                            <th>대표제품 명</th>
                            <th style="width:110px;">결제금액</th>
                            <th style="width:110px;">처리현황</th>
                            <th style="width:110px;">배송조회</th>
                            <th style="width:110px;">수취확인</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="7">현재 전체주문체결내역이 없습니다.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="orderText">
                        <p>※ 주문번호와 제품명을 클릭 하시면 주문 상세 내역을 보실 수 있습니다.</p>
                        <p>※ 배송정보는 처리현황이 배송 중, 배송완료 상태에서 조회가 가능합니다.</p>
                        <p>※ 이상없이 제품을 받으셨다면 수취확인을 해주세요. 확인하지 않으실 경우 배송시작일 부터 7일이후에 자동으로 배송완료상태로 변경됩니다.</p>
                        <p>※ 온라인에서 구매내역 표기시 제품의 정상가로 표기 됩니다. (단, 등급 반영시 실제 결제가 기준으로 반영됩니다.)</p>
                        <p>※ 등급 반영시 반품내역, 포인트 구매내역은 제외 됩니다.</p>
                      </div>
                      <div class="orderIcon">
                        
                      </div>
                    </div>
                  </div>
                  <div v-if="activetab === 2" class="middelCtnt">
                    2
                  </div>
                  <div v-if="activetab === 3" class="middelCtnt">
                    3
                  </div>
                  <div v-if="activetab === 4" class="middelCtnt">
                    4
                  </div>
                </div>
              </div>
            </div>
            <div class="tabs__content">
              <searchDate />
              <h1>취소신청</h1>
            </div>
            <div class="tabs__content">
              <searchDate />
              <h1>반품신청</h1>
            </div>
            <div class="tabs__content">
              <searchDate />
              <h1>교환신청</h1>
            </div>
            <div class="tabs__content">
              <searchDate />
              <h1>증빙서류발급</h1>
            </div>
            <div class="tabs__content">
              <searchDate />
              <h1>구매내역</h1>
            </div>
            <div class="tabs__content">
              <searchDate />
              <h1>정기구독내역</h1>
            </div>

          </div>

        </div>
      </div>
    </section>
  </div>
</template>

<script>
import myPageHeader from '@/layout/myPageHeader';
import myPageSide from '@/layout/myPageSide';
import searchDate from '@/layout/searchDate'

export default {
  name: '',
  components: { myPageHeader, myPageSide, searchDate },
  data() {
    return {
      activetab: 1
    };
  },
  methods: {
    tabs__toggle() {
      let contents = document.querySelectorAll(".tabs__content");
      let tabs = document.querySelectorAll(".tabs__toggle");

      tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
          contents.forEach(content => {
            content.classList.remove('is-active');
          });
          tabs.forEach(tab => {
            tab.classList.remove('is-active');
          });
          contents[index].classList.add('is-active');
          tabs[index].classList.add('is-active');
        });
      });
    }
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

/* tabs */
.tabs__head {
  display: flex;
  align-items: stretch;
}

.tabs__toggle {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 14.28%;
  height: 64px;
  background: #fff;
  border: 1px solid #ccc;
  cursor: pointer;
}

.tabs__toggle.is-active {
  background: var(--bg-main);
  color: #fff;
  font-weight: 600;
}

.tabs__content {
  display: none;
}

.tabs__content.is-active {
  display: block;
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

/* 중간 탭 */
.middleTabs {
  overflow: hidden;
  margin-bottom: -2px;
}

.middleTabs a {
  width: 25%;
  height: 48px;
  line-height: 47px;
  float: left;
  font-size: 18px;
  background-color: #f8f8f8;
  color: var(--bg-light-gray);
  text-align: center;
  cursor: pointer;
  transition: background-color 0.2s;
  border: 1px solid #dcdcdc;
  border-bottom: 1px solid;
}

.middleTabs ul {
  list-style-type: none;
  margin-left: 20px;
}

.middleTabs a:last-child {
  border-right: 1px solid #ccc;
}

.middleTabs a.active {
  background-color: #fff;
  color: #484848;
  border-color: #222;
  border-bottom: 2px solid #fff;
  cursor: default;
}

.middelCtnt {
  padding: 30px 0;
}

/* 전체주문결제내역 탭 */
.orderDiv p {
  margin-bottom: 14px;
  color: var(--text-black);
}
.orderTableDiv {
  position: relative;
  border-top: 2px solid var(--text-black);
}
.orderTable {
  width: 100%;
  border-collapse: collapse;
  table-layout: fixed;
}

.orderTable thead {
  vertical-align: middle;
}

.orderTable th, td {
  padding: 17px 14px;
  text-align: center;
  color: var(--text-black);
  border-bottom: 1px solid var(--text-black);
  border-left: 1px solid #dcdcdc;
}

.orderTable td {
  border-bottom: 1px solid #dcdcdc;
}

.orderTable th:first-child,
.orderTable td:first-child {
  border-left: 0;
}

.orderTable th:last-child
.orderTable td:last-child {
  border-right: 0;
}

.orderText {
  margin-top: 15px;
}

.orderText p {
  color: var(--text-light-gray);
  padding-left: 16px;
  margin-bottom: 0;
}

.orderIcon {
  margin-top: 80px;
  text-align: center;
}

</style>
