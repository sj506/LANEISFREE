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
            </div>
            <div class="tabs__content">
              <searchDate />
            </div>
            <div class="tabs__content">
              <searchDate />
            </div>
            <div class="tabs__content">
              <searchDate />
            </div>
            <div class="tabs__content">
              <searchDate />
            </div>
            <div class="tabs__content">
              <searchDate />
            </div>
            <div class="tabs__content">
              <searchDate />
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
  padding: 30px;
  display: none;
}

.tabs__content.is-active {
  display: block;
}

.tabs__title {
  font-size: var(--text-lg);
  color: #000;
  font-weight: bold;
  margin-bottom: 20px;
}

.tabs__text {
  font-size: 14px;
  color: #000;
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
.orderDiv {
  display: flex;
}

.orderA {
  width: 14.28%;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}

.orderB {
  width: 14.28%;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}

</style>
