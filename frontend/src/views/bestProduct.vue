<template>
  <main id="best_main">
    <div class="best_title">
      <h2 class="best_seller">BEST SELLER</h2>
    </div>
    <div class="container">
      <div
        class="flexWrap flex-center"
        data-aos="fade-up"
        data-aos-anchor-placement="top-bottom"
      >
        <div class="main-box" v-for="(best, idx) in bestProduct" :key="idx">
          <img class="changeImg" :src="this.$getSrc(best.imgSrc)" alt="크림스킨" />
          <div class="txt">
            <h3>{{ best.productNm }}</h3>
            <h4>{{ best.engNm }}</h4>
            <p class="desc" v-html="best.ctnt"></p>
            <router-link to="hommeProductDetail/12" class="link">
              <!-- 어디로 링크할지 정해야 함 -->
              <span class="btn__text">자세히 보기 ></span>
            </router-link>
            <div class="review-box">
                  <div><i class="fa-solid fa-quote-left"></i></div>
                  <div class="review1">{{ bestReviews[0] }}</div>
                  <div class="review-user">{{ reviewNm[0] }}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="flexWrap1 section">
        <div class="flexbox_1 between-center">
          <div
            class="main-box1"
            data-aos="fade-up"
            data-aos-anchor-placement="top-bottom"
            v-for="(best1, idx) in bestProduct_1"
            :key="idx"
          >
            <img class="changeImg1" :src="this.$getSrc(best1.imgSrc)" alt="네오쿠션" />
            <div class="txt1">
              <h3>{{ best1.productNm }}</h3>
              <h4>{{ best1.engNm }}</h4>
              <p class="desc" v-html="best1.ctnt"></p>
              <router-link :to="`${best1.link}`" class="link">
                <span class="btn__text">자세히 보기 ></span>
              </router-link>
              <div class="review-box">
                  <div><i class="fa-solid fa-quote-left"></i></div>
                  <div class="review">{{ bestReviews[1] }}</div>
                  <div class="review-user">{{ reviewNm[1] }}</div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="flexWrap1 section">
        <div class="flexbox_1 between-center">
          <div
            class="main-box1"
            data-aos="fade-up"
            data-aos-anchor-placement="top-bottom"
            data-aos-duration="1000"
            v-for="(best2, idx) in bestProduct_2"
            :key="idx"
          >
            <img
              class="changeImg2"
              :src="this.$getSrc(best2.imgSrc)"
              alt="래디언C크림"
            />
            <div class="txt1">
              <h3>{{best2.productNm}}</h3>
              <h4>{{best2.engNm}}</h4>
              <p class="desc" v-html="best2.ctnt"></p>
              <router-link :to="`${best2.link}`" class="link">
                <span class="btn__text">자세히 보기 ></span>
              </router-link>
              <div class="review-box">
                  <div><i class="fa-solid fa-quote-left"></i></div>
                  <div class="review">{{ bestReviews[2] }}</div>
                  <div class="review-user">{{ reviewNm[2] }}</div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
      <div class="flexWrap1 section">
        <div class="flexbox_1 between-center">
          <div
            class="main-box1"
            data-aos="fade-up"
            data-aos-anchor-placement="top-bottom"
            data-aos-duration="1000"
            v-for="(best3, idx) in bestProduct_3" :key="idx"
          >
            <img
              class="changeImg3"
              :src="this.$getSrc(best3.imgSrc)"
              alt="워터슬리핑마스크EX"
            />
            <div class="txt1">
              <h3 style="color: white">{{best3.productNm}}</h3>
              <h4>{{best3.engNm}}</h4>
              <p style="color: white" class="desc" v-html="best3.ctnt"></p>
              <router-link :to="`${best3.link}`" class="link">
                <span class="btn__text">자세히 보기 ></span>
              </router-link>
              <div class="review-box">
                  <div><i class="fa-solid fa-quote-left"></i></div>
                  <div class="review">{{ bestReviews[idx] }}</div>
                  <div class="review-user">{{ reviewNm[idx] }}</div>
              </div>
            </div>
          </div>
          <div
            class="main-box1"
            data-aos="fade-up"
            data-aos-anchor-placement="top-bottom"
            data-aos-duration="2000"
            v-for="(best4,idx) in bestProduct_4" :key="idx"
          >
            <img
              class="changeImg4"
              :src="this.$getSrc(best4.imgSrc)"
              alt="워터뱅크블루히알루로닉크림"
            />
            <div class="txt1">
              <h3 v-html="best4.productNm"></h3>
              <h4>{{best4.engNm}}</h4>
              <p class="desc" v-html="best4.ctnt"></p>
              <router-link :to="`${best4.link}`" class="link">
                <span class="btn__text">자세히 보기 ></span>
              </router-link>
              <div class="review-box">
                  <div><i class="fa-solid fa-quote-left"></i></div>
                  <div class="review">{{ bestReviews[4] }}</div>
                  <div class="review-user">{{ reviewNm[4] }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  data() {
    return {
      bestProduct: [
        {
          productNm: "크림스킨",
          engNm: "CREAM SKIN REFINER",
          imgSrc: "/bsetProduct/크림스킨가로.jpg",
          ctnt: `크림 한 통을 그대로 녹여내어<br> 스킨만으로도 크림을 바른 듯<br> 피부를 촉촉하게 채워주는 스킨`,
        },
      ],
      bestProduct_1: [
        {
          productNm: "네오쿠션",
          engNm: "NEO CUSHION",
          imgSrc: "/bsetProduct/네오쿠션가로.jpg",
          ctnt: `한 번의 터치만으로 타고난 듯 <br> 24시간 완벽하게 커버해주는 쿠션`,
          link: "hommeProductDetail/13"
        },
        {
          productNm: "네오 파운데이션_매트",
          engNm: "NEO FOUNDATION _ MATTE",
          imgSrc: "/bsetProduct/네오파운데이션매트가로.jpg",
          ctnt: ` 바쁜 도시 생활 속 스트레스로 변덕스러운 <br>
                피부에도 맑은 날의 구름과 햇살처럼 예쁜 자연광 피부로 만들어주는
                네오 파운데이션`,
          link: "hommeProductDetail/44"
        },
      ],
      bestProduct_2: [
        {
          productNm: "래디언-C 크림",
          engNm: "RADIAN - C CREAM",
          imgSrc: "/bsetProduct/래디언C크림가로.jpg",
          ctnt: ` 듀얼비타민의 강력한 파워로 단 2주만에 <br /> 빛나는 피부, 빛톤피부로 바꾸어주는 크림`,
          link: "hommeProductDetail/14"
        },
        {
          productNm: "립 슬리핑 마스크 EX",
          engNm: "LIP SLEEPING MASK EX",
          imgSrc: "/bsetProduct/립슬리핑마스크EX가로.jpg",
          ctnt: `밤 사이 입술 각질을 부드럽게 녹여주고 <br />
                매끈 탱탱한 입술로 가꿔주는 립 전용 <br />
                슬리핑 마스크`,
          link: "hommeProductDetail/16"
        },
      ],
      bestProduct_3: [
        {
          productNm: "워터 슬리핑 마스크 EX",
          engNm: "WATER SLEEPING MASK EX",
          imgSrc: "/bsetProduct/워터슬리핑마스크EX가로.jpg",
          ctnt: `프로바이오틱스 콤플렉스가 함유되어 <br />
                푹 잔 듯 맑고 생기 있는 <br />
                피부로 가꿔주는 수분 마스크`,
          link: "hommeProductDetail/15"
        }
      ],
      bestProduct_4: [
        {
          productNm: `워터뱅크 블루 <br />히알루로닉 크림`,
          engNm: "WATER BANK BLUE HYALURONIC CREAM",
          imgSrc: "/bsetProduct/워터뱅크블루히알루로닉크림가로.jpg",
          ctnt: `1/2000 사이즈의 초소형 블루 히알루산이<br />
                피부 깊은 곳부터 빈틈없이<br />
                건강하게 풀 리페어 보습을 해주는 크림`,
          link: "hommeProductDetail/17"
        }
      ],
      productPk: [12, 13, 14, 15, 16, 17],
      bestReviews: [],
      reviewNm: [],
      windowWidth: window.innerWidth,
    };
  },
  created() {
    this.getBestReview();
    this.getProductImg();
  },
  mounted() {
    AOS.init();

    this.$nextTick(() => {
      window.addEventListener('resize', this.onResize);
    });
  },
  beforeDestroy() {
    window.removeEventListener('resize', this.onResize);
  },
  methods: {
    onResize() {
      this.windowWidth = window.innerWidth;
      const img = document.querySelector(".changeImg");
      if (this.windowWidth < 960) {
        img.src = this.$getSrc("/bsetProduct/크림스킨세로.jpg");
      } else {
        img.src = this.$getSrc("/bsetProduct/크림스킨가로.jpg");
      }
    },
    async getBestReview() {
      const bestReviews = await this.$get('/review/getBestReview', {});
      console.log(bestReviews);

      bestReviews.forEach((element) => {
        if (this.productPk.includes(element.pro_num)) {
          this.bestReviews.push(element.re_ctnt);
          this.reviewNm.push(element.m_nm);
        }
      });
    },
    async getProductImg() {
      const getProductImg = await this.$get('/product/getProductImg', {});
      this.$store.commit('getProductImg', getProductImg);
    },
  }
};
</script>

<style scoped>
main {
  padding-bottom: 100px;
}
.best_title {
  font-weight: bold;
  text-align: center;
  padding: 20px 0px;
}
.container {
  max-width: 1440px;
  overflow: hidden;
}
.main-box img {
  width: 100%;
}
.main-box1 {
  width: 49%;
}
.flexbox_1 img {
  width: 100%;
}

.container {
  padding-bottom: 40px;
}
.container .flexWrap1 {
  margin-top: 30px;
}
.section img:nth-child(2n) {
  margin-left: 40px;
}
.main-box {
  position: relative;
}
.txt {
  position: absolute;
  right: 10%;
  bottom: 25%;
  z-index: 2;
  word-break: break-all;
}
.main-box1 {
  position: relative;
}
.review {
  width: 600px;
  overflow: hidden;
  word-break:break-all;
  color: var(--text-light-gray);
}
.review1 {
  width: 300px;
  overflow: hidden;
  word-break:break-all;
  color: var(--text-light-gray);
}
i {
  color: var(--text-light-gray);

}
.review-user {
  color: var(--text-light-gray);
}
.txt1 {
  position: absolute;
  right: 5%;
  bottom: 5%;
  z-index: 2;
  text-align: right;
}
.main-box2 {
  position: relative;
}
h3 {
  font-weight: bold;
}
h4 {
  color: var(--text-light-gray);
}
.desc {
  margin-top: 20px;
  line-height: 40px;
  font-weight: bold;
}
.link span {
  text-decoration: underline;
  color: var(--text-light-gray);
}
.review-desc {
  margin-top: 35px;
  color: var(--text-light-gray);
}
@media (max-width: 960px) {
  .main-box img {
    width: 95vw;
  }
  .main-box1 img{
    width: 95vw;
  }
  .flexbox_1 {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: flex-start
  }
  .main-box1 {
  position: relative;
}
  .txt1 {
    position: absolute !important;
    right: -85%;
    bottom: 5%;
    z-index: 2;
    text-align: right;
  }
} ;
</style>
