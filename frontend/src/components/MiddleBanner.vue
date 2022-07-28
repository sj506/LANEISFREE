<template>
  <div class="banner" v-for="(item, idx) in banner" :key="idx">
    <div class="banner-item">
      <div class="banner-title">{{ item.title }}</div>
      <div class="banner-info">
        <img src="" alt="" />
        <h2 class="sub-title"></h2>
        <h2 class="content"></h2>
      </div>
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
    };
  },
};
</script>

<style></style>
