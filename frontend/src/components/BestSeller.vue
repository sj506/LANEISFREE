<template>
  <div>
    <div class="title column-center">
      <h3>BEST SELLER</h3>
    </div>
    <div class="wave">
      <video autoplay preload muted loop src="https://www.laneige.com/kr/ko/assets/video/index/bestseller-bg.mp4"></video>
    </div>
    <div class="swiper-container flex-center">
      <div class="swiper-box">
        <swiper :slidesPerView="slidesPerView" :spaceBetween="30" :navigation="true" :modules="modules" class="mySwiper">
          <swiper-slide v-for="(product, idx) in productList" :key="idx">
            <div class="swiper-item" data-aos="fade-up" :data-aos-duration="`${idx}000`">
              <img :src="require(`../assets/img/bestSeller/${idx + 1}.png`)" alt="" />
              <div class="product-info">
                <div class="product-name">
                  <div class="engName">{{ product.engName }}</div>
                  <div class="name">{{ product.name }}</div>
                </div>
                <div class="review-box">
                  <div><i class="fa-solid fa-quote-left"></i></div>
                  <div class="review">{{ bestReviews[idx] }}</div>
                  <div class="review-user">{{ reviewNm[idx] }}</div>
                </div>
              </div>
            </div>
          </swiper-slide>
        </swiper>
      </div>
    </div>
  </div>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';

import 'swiper/css/pagination';
// import required modules
import { Navigation } from 'swiper';

export default {
  data() {
    return {
      productList: [
        {
          name: '크림 스킨',
          engName: 'Cream Skin Refiner',
        },
        {
          name: '네오 쿠션',
          engName: 'NEO CUSHION',
        },
        {
          name: '래디언-C 크림',
          engName: 'RADIAN-C CREAM',
        },
        {
          name: '워터 스리핑 마스크 EX',
          engName: 'Water Sleeping Mask EX',
        },
        {
          name: '립 슬리핑 마스크 EX',
          engName: 'Lip Sleeping Mask EX',
        },
        {
          name: '워터뱅크 블루 히알루로닉 크림',
          engName: 'WATER BANK BLUE HYALURONIC CREAM',
        },
      ],
      productPk: [12, 13, 14, 15, 16, 17],
      bestReviews: [],
      reviewNm: [],
      slidesPerView: 3,
      windowWidth: window.innerWidth,
    };
  },
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Navigation],
    };
  },
  created() {
    this.getBestReview();
  },
  mounted() {
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

      if (this.windowWidth < 970) {
        this.slidesPerView = 1;
      } else {
        this.slidesPerView = 3;
      }
    },
    changeBg() {
      let percentHeight = Math.floor(($(window).scrollTop() / ($(document).height() - $(window).height())) * 100);
      console.log(percentHeight);
    },

    async getBestReview() {
      const bestReviews = await this.$get('/review/getBestReview', {});
      // console.log(bestReviews);

      bestReviews.forEach((element) => {
        if (this.productPk.includes(element.pro_num)) {
          this.bestReviews.push(element.re_ctnt);
          this.reviewNm.push(element.m_nm);
        }
      });
    },
  },
};
</script>

<style scoped>
.swiper-container {
  width: 100%;
}
.swiper-box {
  margin-top: 180px;
  width: 90%;
  max-width: 1180px;
}
.swiper {
  width: 100%;
  height: 100%;
}
.swiper-slide {
  text-align: center;
  font-size: 18px;
  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.title {
  position: relative;
}
.title h3 {
  position: absolute;
  top: 50px;
  font-size: 42px;
}
.wave video {
  position: absolute;
  z-index: -1;
  object-fit: cover;
  left: 0px;
  width: 100vw;
  height: 460px;
}
.product-info .engName {
  margin: 10px 0;
  color: var(--text-point);
  font-weight: bold;
}
.product-info .review-box {
  color: var(--text-light-gray);
}
.product-info .product-name div {
  margin-bottom: 20px;
}
.review {
  color: var(--text-gray);
}
.review-user {
  font-size: var(--font-sm);
}
.product-info .review-box div {
  margin: 20px 0;
}

.swiper-item img:hover {
  animation: wobble-hor-bottom 0.4s both;
}
@keyframes wobble-hor-bottom {
  0%,
  100% {
    transform: translateX(0);
    transform-origin: 50% 50%;
  }

  30% {
    transform: translateX(-15px) rotate(-4deg);
  }

  60% {
    transform: translateX(15px) rotate(4deg);
  }
}
@media screen and (max-width: 969px) {
  .swiper {
    width: 50%;
  }
}
</style>
