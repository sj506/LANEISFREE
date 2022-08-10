<template>
  <!-- 000님은 00 회원입니다  -->
  <div class="mypageTop">
    <div class="userBox">
      <div>
        <div class="userInfo">
          <span class="name"> {{ userNm }} </span>님은
          <span class="wImg"> <img src="@/assets/img/mypage/icon_rank_w2.png" alt="w" /> 웰컴 </span>
          회원입니다.
          <br />

          <div class="totalGrade">
            VIP 승급까지
            <span>100,000 원</span> <span class="bColor">부족</span>
            <span class="gColor">(다음 등급 산정일 &nbsp; 2022.09.01)</span>
            <br />
            당월포함 직전6개월 구매금액 <span>0 원</span>
          </div>

          <a href="#" class="myShop arrow">리뷰어 프로필 등록하기 </a>
          <a href="#" class="myShop arrow">[ <b>MY SHOP</b> ] 등록하기 </a>
        </div>

        <div class="membership">
          <a href="#" class="memberBtn">멤버십 혜택</a>
        </div>
      </div>

      <ul class="userPoint">
        <li class="point">
          <a href="#" class="arrow">뷰티포인트 </a>
          <span class="length"> <span class="num">0</span>P </span>
        </li>

        <li class="coupon">
          <a href="#" class="arrow">보유 쿠폰 </a>
          <span class="length"> <span class="num">11</span>장 </span>
        </li>

        <li class="bottle">
          <a href="#" class="arrow">이번달 공병수거 </a>
          <span class="length"> <span class="num">0</span>개 </span>
        </li>

        <li class="review">
          <a href="#" class="arrow">작성가능리뷰 </a>
          <span class="length"> <span class="num">0</span>건 </span>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
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

li {
  list-style: none;
}
.location {
  display: flex;
  flex-direction: column;
}
.location:after {
  content: '';
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

.mypageTop {
  background: #f3f3f3;
}

.userBox {
  position: relative;
  max-width: 1280px;
  min-width: 1024px;
  height: 160px;
  margin: 0 auto;
}

.userInfo {
  position: relative;
  float: left;
  padding: 38px 0 0 80px;
  color: #222;
}
.wImg {
  color: var(--text-point);
  font-weight: bold;
}

.wImg img {
  position: absolute;
  top: 40px;
  left: 24px;
  width: 48px;
  vertical-align: top;
}

.totalGrade {
  display: block;
  margin: 4px 0 0;
}
.bColor {
  color: #5b9bd5;
}
.gColor {
  color: #777;
}

.myShop {
  display: inline-block;
  vertical-align: top;
  padding-right: 12px;
  font-size: 14px;
  line-height: 24px;
}

.arrow::after {
  background: url(@/assets/img/mypage/arw_link_bs.png) no-repeat;
  vertical-align: -2px;
  content: '';
  display: inline-block;
  width: 7px;
  height: 12px;
  margin-left: 5px;
}

.membership {
  float: left;
  margin: 65px 0 0 45px;
}

.membership .memberBtn {
  display: block;
  margin: 0 0 8px;
  height: 32px;
  line-height: 30px;
  padding: 0 16px;
  background: #f3f3f3;
  border: 1px solid #a7a7a7;
  color: #222;
  font-size: 14px;
  text-align: center;
  transition: all 0.3s;
  box-sizing: border-box;
}

.userPoint {
  position: absolute;
  top: 33px;
  right: 0;
}

.userPoint li {
  display: inline-block;
  padding-top: 40px;
  margin: 0 0 0 32px;
  line-height: 1.2;
  color: #222;
  text-align: center;
}

.userPoint .length {
  display: block;
  margin: 5px 0 0;
  color: var(--text-main);
  font-size: 16px;
}

.userPoint .num {
  font-size: 26px;
}

.point {
  background-position: 50% 5px;
  background: url('@/assets/img/mypage/icon_point.png') no-repeat 50% 0;
}

.coupon {
  background-position: 50% 8px;
  background: url('@/assets/img/mypage/icon_coupon.png') no-repeat 50% 0;
}

.bottle {
  background: url('@/assets/img/mypage/icon_bottle.png') no-repeat 50% 0;
}

.review {
  background: url('@/assets/img/mypage/icon_review_wr.png') no-repeat 50% 0;
}
</style>
