<template>
  <div id="container">
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide activeLink="/ReviewWrite" />
      <div class="col-9 reviewHeader">
        <h3>리뷰 작성</h3>
        <div class="reviewGuide">
          <p class="guide1">리뷰 작성은 제한이 없으나, 월 최대 6,000P 까지만 적립이 가능합니다.</p>
          <li>리뷰작성을 통해 6,000P를 모두 적립 받았을 경우, 리뷰를 계속 작성하시더라도 뷰티포인트는 추가 지급되지않습니다.</li>
        </div>
        <div class="writeCtnt row">
          <div class="pro_review col-6">
            <div class="pro">
              <div class="pro_info">
                <div><img :src="$getSrc(this.UserProduct[0].pro_mainimg)" alt="" /></div>
                <ul>
                  <li>{{ this.UserProduct[0].pur_date }}</li>
                  <li>{{ this.UserProduct[0].pro_name }}제주 에멀젼</li>
                  <li>{{ this.UserProduct[0].pro_price }}원</li>
                </ul>
              </div>
            </div>
            <div class="review">
              <div class="r_info_title">제품 리뷰 운영 정책</div>
              <div>
                <div class="info_sub_title">[리뷰 작성 유의사항]</div>
                <ul>
                  <li class="info_ctnt">
                    상품과 관련이 없거나, 이미 등록된 사진, 타인의 리뷰에서 도용한 사진, 화면 캡쳐등의 리뷰는 라네즈프리 공식몰 리뷰 정책에 따라
                    게시가 제한될 수 있습니다.
                  </li>
                  <li class="info_ctnt">
                    상품과 관련 없는 내용이나 사진/동여상, 동일 문자 반복, 욕설이나 타인의 리뷰 도용 등의 내용이 포함 된 경우 통보없이 삭제 및
                    뷰티포인트 적립 혜택이 회수될 수 있습니다.
                  </li>
                  <li class="info_ctnt">
                    한 주문 건 내 동일 제품을 여러 개 구매하시는 경우 1회만 리뷰 작성이 가능하며, 리뷰포인트 적립도 1회만 가능합니다.
                  </li>
                  <li class="info_ctnt">정기 구독 제품의 경우 1회차 제품만 리뷰 작성이 가능하며 일반 리뷰 정책을 따릅니다.</li>
                </ul>
              </div>
              <div>
                <div class="info_sub_title">[리뷰 포인트 혜택안내]</div>
                <ul>
                  <li class="info_ctnt">
                    2022년 1월 1일부터 뷰티포인트 운영 정책에 따라 비구매성 포인트(이벤트포인트)는 연간 누적 2,000,000P를 초과하거나 동일한 적립
                    사유로 고객님의 일 적립 요청횟수가 50회를 초과하는 경우, 뷰티포인트 적립이 불가능합니다.
                  </li>
                  <li class="info_P">
                    ※ 비구매성 포인트 예시: 리뷰 작성, 리뷰 프로필 등록, 이벤트 참여, 공병수거 적립, 공병 프리퀀시 혜택, 특정 제품 구매 추가 적립
                    등으로 인한 적립 뷰티포인트
                  </li>
                  <li class="info_P">※ 잔여 한도 내에서는 부분 적립됩니다.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="reiviewForm col-6">
            <div class="review--content">
              <form @submit.prevent="submitForm">
                <h2 class="review-h2 reciew_title">제품은 만족하셨나요?</h2>
                <div class="stars-widget" @click="starBtn">
                  <label
                    ><i class="fa-solid fa-star"></i
                    ><input type="radio" class="star-radio" id="star_1" name="star" value="1" v-model="review_ctnt.star"
                  /></label>
                  <label
                    ><i class="fa-solid fa-star"></i
                    ><input type="radio" class="star-radio" id="star_2" name="star" value="2" v-model="review_ctnt.star"
                  /></label>
                  <label
                    ><i class="fa-solid fa-star"></i
                    ><input type="radio" class="star-radio" id="star_3" name="star" value="3" v-model="review_ctnt.star"
                  /></label>
                  <label
                    ><i class="fa-solid fa-star"></i
                    ><input type="radio" class="star-radio" id="star_4" name="star" value="4" v-model="review_ctnt.star"
                  /></label>
                  <label
                    ><i class="fa-solid fa-star"></i
                    ><input type="radio" class="star-radio" id="star_5" name="star" value="5" v-model="review_ctnt.star"
                  /></label>
                </div>
                <h3 class="review-h2">써 보니 어떠셨나요?</h3>
                <input v-model="review_ctnt.ctnt" type="text" name="review_ctnt" class="review_ctnt" />
                <input id="picture" type="file" accept="image/png,image/jpeg" name="review_pic" @change="fileUpload" />
                <label for="picture" class="input_file"><i class="fa-solid fa-camera"></i> 사진 올리기</label>
                <div class="Precautions pt-2 pb-5">※ 상품과 무관한 사진을 첨부한 경우 통보없이 삭제 및 리워드 혜택이 회수될 수 있습니다.</div>
                <div class="d-flex justify-content-between w-100">
                  <div>
                    <div class="pb-2"><input type="checkbox" />제품 리뷰 이용약관 동의</div>
                    <div class="Precautions pb-3">※제품 리뷰 이용약관에 동의해주세요.</div>
                  </div>
                  <div class="cursor">자세히보기 ></div>
                </div>
                <div>
                  <router-link to="myPageReview"><input type="button" value="취소" class="btn btn-secondary cansle" /></router-link>
                  <input type="submit" value="작성완료" class="btn btn-dark" />
                </div>
              </form>
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

export default {
  name: '',
  components: { myPageHeader, myPageSide },
  data() {
    return {
      userProductList: [],
      UserProduct: [],
      review_ctnt: {
        star: '',
        ctnt: '',
        pic: '',
        re_num: null
      },
      user: {},
      pro_num: '',
    };
  },
  computed: {
    loginToggle: function () {
      return this.$store.state.setUser;
    },
  },
  watch: {
    loginToggle: function () {
      this.loginCheck();
    },
  },
  created() {
    this.user = this.$store.state.user;
    console.log(this.user);
    this.userProductList = this.$store.state.userProductList;
    console.log(this.userProductList);
    this.getUserProduct();
    this.pro_num = this.$route.query.pro_num;
  },
  methods: {
    loginCheck() {
      if (!this.$store.state.user) {
        alert('로그인 한 유저만 구매가 가능합니다.');
        this.$router.push('signin');
      }
    },
    getUserProduct() {
      if(this.$route.query.re_num){
        this.review_ctnt.re_num = this.$route.query.re_num;
      }
      console.log(this.review_ctnt.re_num);
      this.UserProduct = this.userProductList.filter((element) => {
        return element.pro_num == this.$route.query.pro_num;
      });
      console.log(this.UserProduct);
    },
    starBtn() {
      let radioInputs = document.getElementsByClassName('star-radio');
      let selected = 0;

      for (let idx = 0; idx < radioInputs.length; idx++) {
        let current = radioInputs[idx];
        current.onclick = function () {
          selected = current.value;
          for (let idx2 = 0; idx2 < radioInputs.length; idx2++) {
            let radioGuy = radioInputs[idx2];
            if (radioGuy.value <= selected) {
              let icon = radioGuy.previousSibling;
              icon.classList.add('checked');
            } else {
              let icon = radioGuy.previousSibling;
              icon.classList.remove('checked');
            }
          }
        };
      }
    },
    async submitForm() {
      const review = await this.$post(`review/insertReview/${this.user.result.m_num}/${this.pro_num}`, this.review_ctnt);
      // this.$router.push('/signin');
      console.log(review);
      this.$router.push('./myPageReview');
    },
    async fileUpload(e) {
      const image = await this.$base64(e.target.files[0]);
      this.review_ctnt.pic = image;
      console.log(this.review_ctnt);
    },
  },
};
</script>

<style scoped>
/* header */
.cursor {
  cursor: pointer;
}

#container {
  width: 100vw;
  min-height: 500px;
  padding-bottom: 110px;
  border-top: 1px solid transparent;
}

.contents {
  max-width: 1400px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}

/* main */
.reviewHeader {
  padding: 40px;
}

.reviewGuide {
  padding: 28px 0;
  font-size: 14px;
  color: var(--text-light-gray);
  border-bottom: 1px solid var(--text-light-gray);
  position: relative;
}

p::before {
  content: '';
  display: inline-block;
  position: absolute;
  left: -5px;
  width: 18px;
  height: 17px;
  background: url(https://images.innisfree.co.kr/resources/web2/images/review/icon_exc.png) no-repeat left top;
  background-size: 100%;
}

.guide1 {
  margin-left: 19px;
  padding-bottom: 2px !important;
}

/* 리뷰작성화면 */

.pro_review {
  display: flex;
  flex-direction: column;
  padding: 15px;
}

.pro {
  margin-bottom: 15px;
}

.review {
  height: 100%;
  background-color: #f3f3f3;
  padding: 20px;
  line-height: 18px;
}

.r_info_title {
  font-size: 16px;
  font-weight: 600;
}

.info_sub_title {
  font-weight: 600;
  padding: 12px 0;
}

.info_ctnt {
  color: var(--text-light-gray);
  padding: 5px;
  list-style: '-';
  font-size: 15px;
}

.info_P {
  color: var(--text-light-gray);
  padding: 5px;
  font-size: 15px;
}

img {
  height: 100px;
  width: 100px;
}

.pro_info {
  display: flex;
  align-items: center;
}

.pro_info > ul > li:first-child {
  color: #777;
  padding-bottom: 5px;
}

.pro_info > ul > li:nth-child(2) {
  font-size: 17px;
  font-weight: 500;
}

.pro_info > ul > li:nth-child(3) {
  padding-top: 7px;
  font-size: 22px;
  font-weight: 600;
}

/* 리뷰폼 */
.main--box {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.review--content form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.review--title {
  padding-top: 100px;
}

.review-logo {
  width: 30%;
}

.stars-widget {
  margin: 10px 0;
  display: flex;
  justify-content: center;
  align-items: center;
  color: var(--text-light-gray);
  font-size: 2rem;
  margin-bottom: 50px;
}

.stars-widget input {
  display: none;
}

.stars-widget .checked {
  color: var(--bg-main);
}

.stars-widget label:hover {
  color: var(--bg-main);
  cursor: pointer;
}

.filereader .image-input__input,
.filereader .image-input__pseudo,
.filereader .image-input__thumb {
  width: 100%;
}

.review_ctnt {
  width: 100%;
  height: 200px;
}

#picture {
  display: none;
}

.input_file {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  text-align: center;
  border-radius: 2px;
  border: 1px solid #777;
  background-color: #f3f3f3;
  height: 50px;
  margin-top: 20px;
}

.fa-camera {
  margin-right: 10px;
}

.Precautions {
  color: red;
  font-size: 14px;
}

.Precautions:first-child {
  margin-bottom: 20px;
}

.reciew_title {
  margin-top: 30px;
}

.cansle {
  width: 82.516px;
  margin-right: 20px;
}
</style>
