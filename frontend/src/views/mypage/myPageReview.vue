<template>
  <div id="container">
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide />
      <div class="col-9 reviewHeader">
        <h3>내 리뷰</h3>
        <div class="reviewDiv">
          <div class="reviewP" @click="displayP" :class="{ bgGreen: isActive1 }">작성 가능한 리뷰</div>
          <div class="reviewW" @click="displayW" :class="{ bgGreen: isActive2 }">내가 작성한 리뷰</div>
        </div>
            <div class="reviewP_ctnt" :class="{ dNone: isActive2}">
              <div class="p_container">
                <div class="p_header">
                  <div class="review_point">리뷰 포인트 혜택</div>
                  <div class="review_policy">리뷰운영정책 </div>
                </div>
                <div class="p_ctnt">
                  <div class="nonList">
                    구매하신 제품이 있을 경우에만<br>
                    리뷰 작성이 가능합니다.
                  </div>
                </div>
              </div>
            </div>
            <div class="reviewW_ctnt" :class="{ dNone: isActive1}">

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
      displayP(e) {
        this.isActive1 = true;
        this.isActive2 = false;
        console.log(e.target);
      },
      displayW() {
        this.isActive1 = false;
        this.isActive2 = true;
      }
    }
}
</script>

<style scoped>
/* default */
.dNone{
  display: none;
}
h3{
  font-size: 30px;
  font-weight: 600;
  padding-bottom: 20px;
}
.bgGreen{
  background-color: #17342f;
  color: #fff;
}
/* header */
#container {
  min-height: 500px;
  padding-bottom: 110px;
  border-top: 1px solid transparent;
}

.contents{
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}

/* main */
.reviewHeader{
  padding: 40px;
  min-width: 560px;
}
.reviewDiv{
  display: flex;

}
.reviewP{
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}
.reviewW{
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* reviewP */
.p_header{
  display: flex;
  margin-top: 50px;
  justify-content:space-between ;
  padding-bottom: 15px;
  border-bottom: 2px solid #000;
}
.review_point::after{
  content: '';
  display: inline-block;
  width: 7px;
  height: 7px;
  transform: rotate(225deg);
  border-color: #222;
  border-style: solid;
  border-width: 0px 0px 1px 1px;
  vertical-align: 2px;
  margin-left: 3px;
}
.review_policy{
  position: relative;
  padding-right: 5px;
}
.review_policy::before{
    content: '';
    display: inline-block;
    position: absolute;
    left: -18px;
    width: 18px;
    height: 17px;
    background: url(https://images.innisfree.co.kr/resources/web2/images/review/icon_exc.png) no-repeat left top;
    background-size: 100%;
}
</style>