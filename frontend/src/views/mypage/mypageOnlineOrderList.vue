<template>
  <div class="containers">

    <div class="location">
      <div class="header">
        <router-link to='/'>
          <div class="depth"><button href="/" class="btn">홈</button></div>
        </router-link>

        <div class="depth">
          <button type="button" class="btn">마이페이지</button>
        </div>

        <div class="depth">
          <button type="button" class="btn">주문/배송현황</button>
        </div>

        <div class="depth">
          <button type="button" class="btn">주문배송내역</button>
        </div>
      </div>
    </div>

    <myPageHeader />
    <section class="d-flex row align-items-baseline justify-content-between">
      <myPageSide />
      <div class="col-9">
        <h3>주문조회</h3>
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
}
</script>

<style scoped>

.containers {
  width: 100%;
}

button,
a {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  letter-spacing: inherit;
  color: inherit;
  text-decoration: none;
  outline: none;
}

.location {
  display: flex;
  flex-direction: column;
}

.location:after {
  content: "";
  display: block;
  clear: both;
}

.header {
  margin-left: 80px;
}

.depth {
  float: left;
  margin-left: 10px;
  padding: 15px 0 17px;
  background: url('@/assets/img/mypage/arw_loc.png') no-repeat 0 50%;
}

.depth:first-child {
  background: none;
}

.btn {
  margin: 0 0 0 15px;
  padding-right: 25px;
  color: #777;
  background: url('@/assets/img/mypage/arw_loc_btn.png') no-repeat 99% 50%;
}

.depth:last-child .btn {
  color: #222;
}

.depth:first-child .btn {
  color: #777;
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
</style>