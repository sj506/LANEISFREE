<template>
  <div>
    <div class="title column-center">
      <h3>BEST SELLER</h3>
    </div>
    <div class="wave">
      <video autoplay preload muted loop src="https://www.laneige.com/kr/ko/assets/video/index/bestseller-bg.mp4"></video>
    </div>
    <div class="swiper-box">
      <swiper :slidesPerView="3" :spaceBetween="30" :navigation="true" :modules="modules" class="mySwiper">
        <swiper-slide v-for="(product, idx) in productList" :key="idx">
          <div data-aos="fade-up" :data-aos-duration="`${idx}000`">
            <img :src="require(`../assets/img/bestSeller/${idx + 1}.png`)" alt="" />
            <div class="product-info">
              <div class="engName">{{ product.engName }}</div>
              <div class="name">{{ product.name }}</div>
            </div>
          </div>
        </swiper-slide>
      </swiper>
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
      cars: ['hyundai', 'kia', 'bmw', 'volvo', 'benz'],
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
  mounted() {
    AOS.init();
  },
};
</script>

<style scoped>
.swiper-box {
  margin-top: 180px;
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
  width: 100vw;
  height: 460px;
}
.product-info .engName {
  margin: 10px 0;
  color: var(--text-point);
  font-weight: bold;
}
</style>
