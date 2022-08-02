<template>
  <swiper
    :slidesPerView="1"
    :spaceBetween="30"
    :centeredSlides="true"
    :loop="true"
    :autoplay="{
      delay: 3000,
      disableOnInteraction: false,
    }"
    :pagination="{
      clickable: true,
    }"
    :navigation="true"
    :modules="modules"
    class="mySwiper"
  >
    <swiper-slide>
      <div class="content-box">
        <div class="title">HUG for Universal Goodness</div>
        <div class="subtitle">
          <p>글로벌 다양한 고객의 아름다움과 지속 가능한 지구를 감싸 안는</p>
          <p>라네즈의 지속 가능한 약속</p>
        </div>
        <div class="text">
          <p>#라네즈허그 #LANEIGE HUG #SAVE THE WATER</p>
        </div>
      </div>
      <img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/06/07/20220607_final_HUG_main_KV_pc.jpg" alt=""
    /></swiper-slide>
    <swiper-slide>
      <div class="content-box">
        <NEW></NEW>
        <div class="title">ALL NEW 워터뱅크 블루</div>
        <div class="title">히알루로닉</div>
        <div class="subtitle">
          <p>1/2000 사이즈의 초소형 블루 히알루론산이</p>
          <p>피부 깊은 곳부터. 빈틈없이. 건강한 피부로</p>
          <p>풀 리페어 보습</p>
        </div>
      </div>
      <img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/02/22/20220222_final_WATER-BANK-BLUE-HYALURONIC_main_KV_pc.png" alt=""
    /></swiper-slide>
    <swiper-slide>
      <div class="content-box">
        <NEW></NEW>
        <div class="title">워터뱅크 블루 히알루로닉</div>
        <div class="title">클렌징 젤 ‧ 오일</div>
        <div class="subtitle">
          <p>라네즈가 제안하는 말끔 촉촉 완벽 클렌징 스텝</p>
        </div>
      </div>
      <img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/05/19/220523_final_NEO-NOVO_main_kv_pc.jpg" alt=""
    /></swiper-slide>
    <swiper-slide>
      <div class="content-box">
        <NEW></NEW>
        <div class="title">비스포크 네오,</div>
        <div class="title">UP TO 150 SHADES</div>
        <div class="subtitle">
          <p>내 피부톤에 딱 맞는 오직 나만을 위한</p>
          <p>비스포크 네오를 만들어 드립니다.</p>
        </div>
        <div class="text">
          <p>#비스포크네오 #프레시네오 #갓네오 #찰떡쿠션 #찰떡파데</p>
        </div>
      </div>
      <img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/05/19/20220516_final_WATER-BANK-BLUE-HYALURONIC-CLEANSING_main_KV_pc.jpg" alt=""
    /></swiper-slide>
    <swiper-slide
      ><div class="content-box">
        <NEW></NEW>
        <div class="title">HUG for Universal Goodness</div>
        <div class="subtitle">
          <p>글로벌 다양한 고객의 아름다움과 지속 가능한 지구를 감싸 안는</p>
          <p>라네즈의 지속 가능한 약속</p>
        </div>
        <div class="text">
          <p>#라네즈허그 #LANEIGE HUG #SAVE THE WATER</p>
        </div>
      </div>
      <img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/04/28/20220428_final_BESPOKE-NEO_main_KV_pc.jpg" alt=""
    /></swiper-slide>
  </swiper>
</template>
<script>
import NEW from '../components/NEW.vue';

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';

import 'swiper/css/pagination';
import 'swiper/css/navigation';
// import required modules
import { Autoplay, Pagination, Navigation } from 'swiper';

export default {
  components: {
    Swiper,
    SwiperSlide,
    NEW,
  },
  setup() {
    return {
      modules: [Autoplay, Pagination, Navigation],
    };
  },
};
</script>

<style scoped>
.swiper {
  width: 100%;
  height: 600px;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.content-box {
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  top: 30%;
  left: 10%;
}
.swiper-slide .title {
  font-size: 41px;
  margin-top: 10px;
  font-weight: 300;
}

.swiper-slide .subtitle {
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  font-size: 21px;
}

.swiper-slide .text {
  margin-top: 20px;
  font-size: 14px;
  max-width: 400px;
  line-height: 1.3;
}

/* 스와이프 CSS */
</style>
