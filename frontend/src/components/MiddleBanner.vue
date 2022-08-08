<template>
  <div>
    <div class="banner">
      <router-link :to="`${item.url}`" v-for="(item, idx) in banner" :key="idx">
        <!-- 삼항식을 사용하여 aos 속도 변화주기 -->
        <div class="banner-item flex-center" data-aos="fade-up" :data-aos-duration="`${idx === 1 ? 10 : idx === 0 ? 13 : 16}00`" data-aos-easing="ease-in-sine">
          <div class="banner-title">{{ item.title }}</div>
          <div class="banner-info">
            <img :src="`${item.src}`" alt="" />
            <h2 class="sub-title">{{ item.subTitle }}</h2>
            <h2 class="content">{{ item.content }}</h2>
          </div>
        </div>
      </router-link>
    </div>
    <div class="banner bottomBanner1">
      <router-link :to="`${item.url}`" v-for="(item, idx) in bottomBanner1" :key="idx">
        <div class="banner-item flex-center" :class="{ itemWidth: idx === 0 }" data-aos="fade-up" :data-aos-duration="`${idx + 1}000`" data-aos-easing="ease-in-sine">
          <div class="banner-title">{{ item.title }}</div>
          <div class="banner-info">
            <img :src="`${item.src}`" alt="" />
            <h2 class="sub-title">{{ item.subTitle }}</h2>
            <h2 class="content">{{ item.content }}</h2>
          </div>
        </div>
      </router-link>
    </div>
    <div class="banner bottomBanner2">
      <router-link :to="`${item.url}`" v-for="(item, idx) in bottomBanner2" :key="idx">
        <div class="banner-item flex-center" :class="{ itemWidth: idx === 1 }" data-aos="fade-up" :data-aos-duration="`${idx + 1}000`" data-aos-easing="ease-in-sine">
          <div class="banner-title">{{ item.title }}</div>
          <div class="banner-info">
            <img :src="`${item.src}`" alt="" />
            <h2 class="sub-title">{{ item.subTitle }}</h2>
            <h2 class="content">{{ item.content }}</h2>
          </div>
        </div>
      </router-link>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      banner: [
        {
          url: '/story',
          title: 'BRAND STORY',
          src: 'https://www.laneige.com/kr/ko/layout/main/contents-3/__icsFiles/afieldfile/2021/12/01/20211201_feel_the_glow.jpg',
          subTitle: 'FEEL the GLOW',
          content: '내 피부 본연의 건강한 빛, 내 삶의 빛나는 자신감',
        },
        {
          url: '/intro',
          title: 'LANEIGE MEETS ARTS',
          src: 'https://www.laneige.com/kr/ko/layout/main/contents-3/__icsFiles/afieldfile/2022/06/27/20220624_final_ARTIST-NOVO-COLLECTION_main_sub-banner_1.jpg',
          subTitle: '아티스트 노보 컬렉션',
          content: '라네즈가 선보이는 아트 프로젝트를 통해 삶에 즐거운 변화를 느껴보세요!',
        },
        {
          url: '',
          title: 'LANEIGE CAMPAIGN',
          src: 'https://www.laneige.com/kr/ko/layout/main/contents-3/__icsFiles/afieldfile/2022/06/27/20220624_final_HUG-CAMPAIGN_main_sub-banner.jpg',
          subTitle: '허그 캠페인',
          content: '글로벌 다양한 고객의 아름다움과 지속가능한 지구를 감싸 안는 라네즈의 지속 가능한 약속',
        },
      ],

      bottomBanner1: [
        {
          url: '/story',
          title: 'BEAUTY & LIFE LAB',
          src: 'https://www.laneige.com/kr/ko/layout/main/contents-4/__icsFiles/afieldfile/2022/07/27/20220727_final_LBLL_banner.jpg',
          subTitle: '뷰티 & 라이프 LAB',
          content: '[연구 #4] 코로나로 달라진 세상, 우리 피부도 달라졌을까?',
        },
        {
          url: '/intro',
          title: 'FLAGSHIP STORE',
          src: 'https://www.laneige.com/kr/ko/layout/main/contents-4/__icsFiles/afieldfile/2021/12/01/20201104_final_flagship-store_banner_pc.jpg',
          subTitle: '명동 쇼룸',
          content: '편안하게 제품을 체험하고 브랜드를 경험할 수 있는 라네즈 브랜드 공간',
        },
      ],
      bottomBanner2: [
        {
          url: '',
          title: 'BEST SELLER',
          src: 'https://www.laneige.com/kr/ko/layout/main/contents-4/__icsFiles/afieldfile/2021/12/01/20201130_final_laneige_main-thumbnail_best-seller.jpg',
          subTitle: '네오 쿠션',
          content: '함부로 묻지 않게, 네오로 밀착',
        },
        {
          url: '',
          title: 'NEW ARRIVALS',
          src: 'https://www.laneige.com/kr/ko/layout/main/contents-4/__icsFiles/afieldfile/2021/12/01/20210811_final_NEO-foundation-matte_main_sub_banner_1.jpg',
          subTitle: '네오 파운데이션',
          content: '얇고 촘촘한 구름결 커버',
        },
      ],
    };
  },
};
</script>

<style scoped>
.banner {
  margin-top: 200px;
  width: 100vw;
  max-width: 1180px;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
.banner-item {
  display: flex;
  align-items: flex-start;
  width: 350px;
}
/* 제목을 세로로 바꾸기 */
.banner-title {
  writing-mode: vertical-lr;
  transform: rotate(180deg);
  margin-right: 10px;
  color: var(--text-main);
  font-weight: bold;
}
.banner-info {
  color: var(--text-gray);
}
.banner-info img {
  width: 100%;
}
.banner-info .sub-title {
  color: var(--text-dark-gray);
  font-size: 19px;
  margin: 20px 0;
}
.banner-info .content {
  line-height: 20px;
  font-size: 16px;
}
.bottomBanner2 {
  margin-top: 20px;
}
.itemWidth {
  width: 600px;
}
@media screen and (max-width: 960px) {
  .banner {
    flex-direction: column;
  }
  .banner-item {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
  }
}
</style>
