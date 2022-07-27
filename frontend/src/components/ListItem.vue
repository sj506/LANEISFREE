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
    <swiper-slide><img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/06/07/20220607_final_HUG_main_KV_pc.jpg" alt="" /></swiper-slide>
    <swiper-slide><img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/02/22/20220222_final_WATER-BANK-BLUE-HYALURONIC_main_KV_pc.png" alt="" /></swiper-slide>
    <swiper-slide><img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/05/19/220523_final_NEO-NOVO_main_kv_pc.jpg" alt="" /></swiper-slide>
    <swiper-slide><img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/05/19/20220516_final_WATER-BANK-BLUE-HYALURONIC-CLEANSING_main_KV_pc.jpg" alt="" /></swiper-slide>
    <swiper-slide><img src="https://www.laneige.com/kr/ko/layout/main/key-visual/__icsFiles/afieldfile/2022/04/28/20220428_final_BESPOKE-NEO_main_KV_pc.jpg" alt="" /></swiper-slide>
  </swiper>
</template>
<script>
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
  height: 100%;
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
</style>
