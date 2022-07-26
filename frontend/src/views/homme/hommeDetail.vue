<template>
  <div class="container">
    <div class="nav-box">
      <div class="nav justify-content-center d-flex">
        <a v-bind:class="{ bottomLine: this.geturl() == 'feature' }" href="#feature" class="nav-item">상품 특징</a>
        <a v-bind:class="{ bottomLine: this.geturl() == 'review' }" href="#review" class="nav-item">사용 리뷰(479)</a>
        <a v-bind:class="{ bottomLine: this.geturl() == 'info' }" href="#info" class="nav-item">전성분/주의사항</a>
      </div>
    </div>
    <section id="main" class="">
      <div class="c_recommend">
        <dl class="recommend">
          <dt class="recommend_t h4">이런 피부 고민에 추천해요!</dt>
          <dd class="recommend_d">
            <ul class="recommend__list">
              <li class="recommend__item">#건성피부</li>
              <li class="recommend__item">#지성피부</li>
              <li class="recommend__item">#면도 후 연약해진 피부</li>
              <li class="recommend__item">#피지</li>
              <li class="recommend__item">#모공</li>
            </ul>
          </dd>
        </dl>
      </div>

      <blockquote class="c_quote">
        <div class="c_c_qutote">
          <div class="quote-line">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z" />
            </svg>
          </div>
          <p class="quote_text">
            수분은 부족하고 피지량은 많은 남자 피부를 위한 진화, <br />스킨만으로도 로션, 크림을 따로 바를 필요 없이 바로 촉촉해지는 <br />남자만의
            스킨케어 - 올인원 스킨으로 쉽고 간편하게 사용할수 있어요!
          </p>
          <footer class="quote_footer">라네즈 크림 스킨 옴므 올인원 상품개발 담당자</footer>
        </div>
      </blockquote>

      <div class="c_viral">
        <div class="viral_title">라네즈 크림 스킨 옴므 올인원</div>
        <div class="viral_sub">[HOMME] CREAM SKIN REFINER ALL IN ONE</div>
        <div class="viral_box">
          <img
            src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_top-visuals-banner_pc.jpg"
            class="ft-viral__img" alt="라네즈 크림 스킨 옴므 올인원 제품 연출 이미지" />
        </div>
      </div>
      <div class="c_mood_img">
        <div class="c_c_mood_img">
          <div class="img_box1">
            <img
              src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_mood-cut_01_pc.jpg" />
          </div>
          <div class="img_box2">
            <img
              src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_mood-cut_03_pc.jpg" />
          </div>
        </div>
      </div>
      <div class="c_proof">
        <div class="wrapper">
          <header class="sub-header">
            <em>THE PROOF</em>
            <h3 class="h4">크림 스킨 옴므 올인원 개발 스토리</h3>
          </header>
          <ul class="proof-list row">
            <li class="proof col">
              <div class="proof__bg">
                <img
                  src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_01_pc.jpg" />
              </div>
              <div class="proof__inner">
                <p class="proof__desc">크림 한 통을 그대로 녹여낸 스킨 제형으로 로션, 크림이 따로 필요 없는 즉각 수분 충전되는 제품입니다.</p>
                <div class="proof__cnt">
                  <em class="proof__cap">SECRET 1.</em>
                  <span class="proof__t">스킨+로션+크림을 한 단계로! <br />
                    간편한 올인원 스킨
                    <div class="plus-minus-toggle collapsed"></div>
                  </span>
                </div>
              </div>
            </li>
            <li class="proof col">
              <div class="proof__bg">
                <video
                  src="https://www.laneige.com//kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_the-proof_02_pc.mp4"></video>
              </div>
              <div class="proof__inner">
                <p class="proof__desc">
                  끈적이는 올인원은 NO! 물스킨 제형으로 즉각적으로 피부에 흡수되어 빠르고 간편하게 사용하는 남자 올인원 스킨입니다.
                </p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 2.</em>
                  <span class="proof__t">물 스킨 제형으로 <br />
                    번들거림 없이 빠르게
                    <div class="plus-minus-toggle collapsed"></div>
                  </span>
                </div>
              </div>
            </li>
            <li class="proof col">
              <div class="proof__bg">
                <img
                  src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_03_pc.jpg"/>
              </div>
              <div class="proof__inner">
                <p class="proof__desc">과다 분비된 피지 조절 효능이 있는 어성초 성분으로 모공 및 피지를 컨트롤해줍니다.</p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 3.</em>
                  <span class="proof__t">어성초 성분으로 <br />
                    과다 분비된 피지 조절 및 모공케어
                    <div class="plus-minus-toggle collapsed"></div>
                  </span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import { computed } from '@vue/reactivity';

export default {
  data() {
    return {
      navurl: this.geturl()
    };
  },
  methods: {
    geturl() {
      return window.location.href.split('#')[1];
    }
  },
  created() {
  },
  computed: {

  }
};
</script>

<style>
.nav-box {
  position: sticky;
  top: 0;
  background-color: white;

}

.nav {
  position: relative;
  display: flex;
  height: 54px;
  font-size: 1.0625rem;
  justify-content: space-around;
  color: #ddd;
  border-top: 1px solid;
  flex-wrap: nowrap;
}

.nav::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  border-bottom: 1px solid;
}

.nav-item {
  overflow: hidden;
  position: relative;
  display: inline-block;
  padding: 0 3em;
  color: #5f5f5f;
  font-weight: 700;
  line-height: 54px;
  white-space: nowrap;
  flex-wrap: nowrap;
}

.nav-item:hover {
  color: #5f5f5f;
}

.nav-item::before {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  border-bottom: 2px solid;
  transform: translateY(2px);
  transition-duration: 0.2s;
  transition-timing-function: ease;
  transition-delay: 0s;
}

.nav-item:hover::before {
  border-bottom: 1px solid #ccc;
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  border-bottom: 2px solid;
  transform: translateY(2px);
  transition-duration: 0.2s;
  transition-timing-function: ease;
  transition-delay: 0s;
}

.nav-item:hover::before,
nav-item:focus::before {
  transform: translateY(0);
}

.bottomLine::before {
  transform: translateY(0);
  color: #000;
}

.c_recommend {
  display: flex;
  justify-content: center;
  margin: 30px 20px;
}

.recommend {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
  border: 5px solid #f7f7f7;
  max-width: 820px;
  width: 75%;
  margin: 40px auto;
}

.recommend_t {
  text-align: center;
  padding: 10px;
  margin-top: 20px;
  font-weight: bold;
}

.recomment_d {}

.recommend__list {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: 10px;
}

.recommend__item {
  margin: 10px;
  position: relative;
}

.recommend__item::before {
  content: '';
  position: absolute;
  z-index: -1;
  top: 40%;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 0;
  background-color: #cfdae8;
}

.h4 {
  font-size: 1.3125rem;
  line-height: 1.4;
}

svg {
  width: 50px;
  padding: 0 10px;
}

.c_quote {
  display: flex;
  justify-content: center;
}

.c_c_qutote {
  display: flex;
  flex-direction: column;
}

.quote-line {
  text-align: center;
  display: flex;
  align-items: center;
}

.quote-line::before,
.quote-line::after {
  content: '';
  width: 50%;
  display: block;
  border-bottom: 1px solid;
}

.quote_text {
  padding: 0 20px;
  padding-top: 20px;
  margin: 0 20px;
  text-align: center;
}

.quote_footer {
  border-bottom: 1px solid;
  padding: 20px;
  padding-bottom: 40px;
  text-align: center;
  padding-bottom: 30px;
  box-sizing: content-box;
}

.c_viral {}

.viral_title {
  font-size: xx-large;
  color: #2b2b2b;
  font-family: "brandon-grotesque", "Arita", sans-serif;
  text-align: center;
  padding: 80px 0px 10px 0px;
}

.viral_sub {
  text-align: center;
  color: #5f5f5f;
  padding-bottom: 40px;
}

img {
  max-width: 100%;
}

.c_c_mood_img {
  display: flex;
}

.img_box1 {
  margin: 50px;
}

.img_box2 {
  margin: 150px 20px 50px 20px
}

/* .wrapper{
  display: flex;
  justify-content: center;
  flex-direction: column;
} */
.sub-header {
  display: flex;
  flex-direction: column;
  text-align: center;
}

.proof-list {
  display: flex;
  flex-grow: 1 1 1;
}

video {
  max-width: 100%;
}

@media (max-width: 575.98px) {
  .proof__bg {
    width: 370px;
    height: 420px;
  }
}

button {
  border: 0;
  outline: 0;
  background: none;
}

.plus-minus-toggle {
  cursor: pointer;
  height: 21px;
  position: relative;
  width: 21px;
}

.plus-minus-toggle:before,
.plus-minus-toggle:after {
  background: #000;
  content: "";
  height: 5px;
  left: 0;
  position: absolute;
  top: 0;
  width: 21px;
  transition: transform 500ms ease;
}

.plus-minus-toggle:after {
  transform-origin: center;
}

.plus-minus-toggle.collapsed:after {
  transform: rotate(90deg);
}

.plus-minus-toggle.collapsed:before {
  transform: rotate(180deg);
}

@media (max-width: 958.98px) {}

@media (max-width: 991.98px) {}

@media (max-width: 1199.98px) {}

@media (max-width: 1399.98px) {}
</style>
