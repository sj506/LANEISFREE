<template>
    <div id="container">
        <myPageHeader />
        <section class="contents d-flex row align-items-baseline justify-content-between">
            <myPageSide />
            <div class="col-9 reviewHeader">
                <h3>리뷰 작성</h3>
                <div class="reviewGuide">
                    <p class="guide1">리뷰 작성은 제한이 없으나, 월 최대 6,000P 까지만 적립이 가능합니다.</p>
                    <li>리뷰작성을 통해 6,000P를 모두 적립 받았을 경우, 리뷰를 계속 작성하시더라도 뷰티포인트는 추가 지급되지않습니다.</li>
                </div>
                <div class="writeCtnt row ">
                    <div class="pro_review col-6">
                        <div class="pro">
                            <div><img src="" alt=""></div>
                            <div>
                                <ul>
                                    <li>2022-08-03</li>
                                    <li>제주 에멀젼</li>
                                    <li>15000원</li>
                                </ul>
                            </div>
                        </div>
                        <div class="review ">
                        <div>제품 리뷰 운영 정책</div>
                        <div>
                            <div>[리뷰 작성 유의사항]</div>
                            <ul>
                                <li>-상품과 관련이 없거나, 이미 등록된 사진, 타인의 리뷰에서 도용한 사진, 화면 캡쳐등의 리뷰는 라네즈프리 공식몰 리뷰 정책에 따라 게시가 제한될 수 있습니다.</li>
                                <li>-상품과 관련 없는 내용이나 사진/동여상, 동일 문자 반복, 욕설이나 타인의 리뷰 도용 등의 내용이 포함 된 경우 통보없이 삭제 및 뷰티포인트 적립 혜택이 회수될 수 있습니다.</li>
                                <li>-한 주문 건 내 동일 제품을 여러 개 구매하시는 경우 1회만 리뷰 작성이 가능하며, 리뷰포인트 적립도 1회만 가능합니다.</li>
                                <li>정기 구독 제품의 경우 1회차 제품만 리뷰 작성이 가능하며 일반 리뷰 정책을 따릅니다.</li>
                            </ul>
                        </div>
                        <div>
                            <div>[리뷰 포인트 혜택안내]</div>
                            <ul>
                                <li>-2022년 1월 1일부터 뷰티포인트 운영 정책에 따라 비구매성 포인트(이벤트포인트)는 연간 누적 2,000,000P를 초과하거나 동일한 적립 사유로 고객님의 일 적립 요청횟수가 50회를 초과하는 경우, 뷰티포인트 적립이 불가능합니다. <br> ※ 비구매성 포인트 예시: 리뷰 작성, 리뷰 프로필 등록, 이벤트 참여, 공병수거 적립, 공병 프리퀀시 혜택, 특정 제품 구매 추가 적립 등으로 인한 적립 뷰티포인트 <br> ※ 잔여 한도 내에서는 부분 적립됩니다.<br></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="reiviewForm col-6"></div>
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
        
      };
    },
}
</script>

<style>

/* header */
#container {
  width: 100vw;
  min-height: 500px;
  padding-bottom: 110px;
  border-top: 1px solid transparent;
}
.contents{
  max-width: 1400px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}
/* main */
.reviewHeader{
    padding: 40px;
}
.reviewGuide{
    padding: 28px 0;
    font-size: 14px;
    color: var(--text-light-gray);
    border-bottom: 1px solid var(--text-light-gray);
    position: relative;
}
p::before{
    content: '';
    display: inline-block;
    position: absolute;
    left: -5px;
    width: 18px;
    height: 17px;
    background: url(https://images.innisfree.co.kr/resources/web2/images/review/icon_exc.png) no-repeat left top;
    background-size: 100%;
}
.guide1{
    margin-left: 19px;
    padding-bottom: 2px !important;
}
/* 리뷰작성화면 */
.writeCtnt{
}
</style>