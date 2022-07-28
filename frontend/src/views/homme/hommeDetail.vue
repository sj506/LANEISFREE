<template>
  <div class="containers">
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
            <em class="the-proof">THE PROOF</em>
            <h3 class="h4 proof-title">크림 스킨 옴므 올인원 개발 스토리</h3>
          </header>
          <ul class="proof-list row">
            <li class="proof col">
              <div class="proof__bg">
                <img
                  src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_01_pc.jpg" />
              </div>
              <div class="proof__inner" :class="{ isactive: isActive1 }">
                <p class="proof__desc">크림 한 통을 그대로 녹여낸 스킨 제형으로 로션, 크림이 따로 필요 없는 즉각 수분 충전되는 제품입니다.</p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 1.</em>
                  <span class="proof__t">스킨+로션+크림을 한 단계로! <br />
                    간편한 올인원 스킨
                  </span>
                  <button class="proofBtn">
                    <div @click="collapsedToggle($event.target, 'isActive1')" class="plus-minus-toggle collapsed"></div>
                  </button>
                </div>
              </div>
            </li>
            <li class="proof col">
              <div class="proof__bg">
                <video
                  src="https://www.laneige.com//kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_the-proof_02_pc.mp4"></video>
              </div>
              <div class="proof__inner" :class="{ isactive: isActive2 }">
                <p class="proof__desc">끈적이는 올인원은 NO! 물스킨 제형으로 즉각적으로 피부에 흡수되어 빠르고 간편하게 사용하는 남자 올인원 스킨입니다.</p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 2.</em>
                  <span class="proof__t">물 스킨 제형으로 <br />
                    번들거림 없이 빠르게
                  </span>
                  <button @click="collapsedToggle($event.target, 'isActive2')"
                    class="plus-minus-toggle collapsed"></button>
                </div>
              </div>
            </li>
            <li class="proof col">
              <div class="proof__bg">
                <img class="proof_img"
                  src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_03_pc.jpg" />
              </div>
              <div class="proof__inner" v-bind:class="{ isactive: isActive3 }">
                <p class="proof__desc">과다 분비된 피지 조절 효능이 있는 어성초 성분으로 모공 및 피지를 컨트롤해줍니다.</p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 3.</em>
                  <span class="proof__t">어성초 성분으로 <br />
                    과다 분비된 피지 조절 및 모공케어
                  </span>
                  <button class="proofBtn">
                    <div @click="collapsedToggle($event.target, 'isActive3')" class="plus-minus-toggle collapsed"></div>
                  </button>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="mainImgBox">
        <div class="c_long-video">
          <img class="longImg"
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_detail-PDP_pc.jpg">
          <video class="longVideo"
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_01_pc.mp4"
            loop="" autoplay="" muted="" playsinline=""></video>
        </div>
        <div>
        </div>
      </div>

      <div class="c_data">
        <div class="data_header">
          <em class="data_title">CLINICAL DATA</em>
          <h3 class="h4 data_title2">2주의 기적 - 크림 스킨 옴므 올인원 사용 만족도</h3>
        </div>
        <div class="bg">
          <MARQUEE behavior="scroll" scrollamount=10>
            #피부진정#로션크림스킵케어#유수분밸런스#건성피부보습#피부진정#로션크림스킵케어#유수분밸런스#건성피부보습#피부진정#로션크림스킵케어#유수분밸런스#건성피부보습#피부진정#로션크림스킵케어#유수분밸런스#건성피부보습
          </MARQUEE>
        </div>
        <div class="data">
          <img class="data_img"
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_clinical-data_pc.png">
          <div class="data_cnt_box1 data_cnt_box left-after">
            <div>사용 후 피부가 촉촉해진 느낌이다.</div>
            <div>96.6%</div>
          </div>
          <div class="data_cnt_box2 data_cnt_box left-after">
            <div>사용 후 피부가 진정된 느낌이다.</div>
            <div>90.0%</div>
          </div>
          <div class="data_cnt_box3 data_cnt_box left-after">
            <div>사용 후 피부 답답함이 느껴지지 않는다.</div>
            <div>86.6%</div>
          </div>
          <div class="data_cnt_box4 data_cnt_box right-after">
            <div>바를 때 피부에</div>
            <div>흡수가 잘되는 느낌이다.</div>
            <div>100%</div>
          </div>
          <div class="data_cnt_box5 data_cnt_box right-after">
            <div>일반 옴므 스킨 대비</div>
            <div>더 촉촉한 느낌이다.</div>
            <div>86.6%</div>
          </div>
          <div class="data_cnt_box6 data_cnt_box right-after">
            <div>사용 후 피부에 자극이 덜한 느낌이다.</div>
            <div>86.6%</div>
          </div>
          <div class="data_cnt_box7 data_cnt_box right-after">
            <div>에센스, 크림 등 사용하는</div>
            <div>제품 단계를 축소할 수 있다.</div>
            <div>83.3%</div>
          </div>
        </div>
        <footer class="footer-data">
          <div>크림 스킨 옴므 올인원 만족도 평가 결과 시험기관:㈜글로벌의학연구센터</div>
          <div>시험대상:건조/민감 남성 피부 30명 대상 피부 임상 진행 시험기간:2020.02.04 ~ 2020.02.19 (2주)</div>
        </footer>
      </div>

      <div class="c_texture">
        <div class="texture_title1">
          <div class="h4 texture_stitle">TEXTURE</div>
          <div class="h2 texture_stitle2">우윳빛 물 타입의 스킨</div>
          <video class="texture_video1"
            src="https://www.laneige.com//kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_01_pc.mp4"
            loop="" autoplay="" muted="" playsinline=""></video>
          <div class="texture_ctnt">촉촉하고는 싶지만 번들거림은 부담스러웠던 남자 피부를 위해,</div>
          <div class="texture_ctnt">물 같은 스킨 제형이라 번들거림 없이 바르는 즉시 흡수돼요!</div>
        </div>
        <div class="texture_title2">
          <div class="texture_stitle3"> &lt 자사 올인원 제품과 끈적임 비교 TEST &gt</div>
          <video
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_02_pc.mp4"
            class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
          <div class="texture_stitle4">
            <div>올인원이지만 스킨 제형이라</div>
            <div>피부에 끈적임은 남지 않아 산뜻해요!</div>
          </div>
        </div>
      </div>

      <div>
        <div class="how-header1">
          <div class="h4">HOW TO</div>
          <div class="h2 how-subcnt">크림 스킨 옴므 올인원 기본 사용법</div>
        </div>
        <ol class="d-flex justify-content-center">
          <li>
            <video
              src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_how-to_01_pc.mp4"
              class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
            <div class="how-cnt-box">
              <div class="h4">STEP 1.</div>
              <div class="how-cnt">
                <div>아침, 저녁 세안 후 손바닥에 적당량을 덜어주세요.</div>
                <div>(500원 동전 크기)</div>
              </div>
            </div>
          </li>
          <li>
            <video
              src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_how-to_02.mp4"
              class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
            <div class="how-cnt-box">
              <div class="h4">STEP 2.</div>
              <div class="how-cnt">
                <div>손으로 챱챱 두드리듯 발라 흡수시켜줍니다.</div>
                <div class="how-wrap">
                  <div>*피부 컨디션이 유난히 좋지 않거나 건조할 때에는 2-3회</div>
                  <div>덧발라 흡수시켜주면 더욱 효과적입니다.</div>
                </div>
              </div>
            </div>
          </li>
        </ol>
      </div>
      <div class="c_step">
        <div class="step1">
        </div>
        <div class="step2">
          <div class="h4">BEST STEP</div>
          <div class="h2">라네즈가 추천하는 남성 피부 수분 충전 스텝</div>
        </div>
        <div class="step3">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>

export default {
  data() {
    return {
      navurl: this.geturl(),
      isActive1: false,
      isActive2: false,
      isActive3: false
    };
  },
  methods: {
    geturl() {
      return window.location.href.split('#')[1];
    },
    collapsedToggle(ele, activeNm) {
      this[activeNm] = !this[activeNm];
      ele.classList.toggle('collapsed');
    }
  },
  created() {
  },
  // computed: {
  //   isactive: function(n) {
  //     return this.n;
  //   }
  // }
};
</script>

<style>
html,
body {
  letter-spacing: -0.025em;
  font-family: "Arita", sans-serif;
}

.containers {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 0;
  width: 100%;
}

button {
  border: none;
  background: none;
}

.nav-box {
  position: sticky;
  top: 60px;
  background-color: white;
  z-index: 4;
  width: 100%;
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
  height: auto;
  vertical-align: top;
}

.c_c_mood_img {
  display: flex;
  justify-content: center;
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
  justify-content: center;
}

video {
  display: block;
  width: 100%;
  max-width: 719.98px;
}

.proof {
  position: relative;
  max-width: 370px;
  color: #fff;
  padding: 0;
}

.proof:not(:first-child) {
  margin: 0 0 0 33px;
}

.the-proof {
  font-size: 20px;
  padding: 10px;
}

.proof-title {
  font-size: 26px;
  font-weight: 400;
  letter-spacing: -2px;
  padding-bottom: 20px;
}

.proof__bg {}

.proof__inner {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 60px 30px 110px;
  line-height: 1.6;
  letter-spacing: -0.05em;
  word-spacing: -0.05em;

}

.proof__inner::before,
.proof__inner::after {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
}

.proof__inner::before {
  top: 30%;
  background: linear-gradient(180deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6));
}

.proof__inner::after {
  top: 0;
  z-index: 1;
  background-color: rgba(0, 0, 0, 0);
  transition: 0.4s;
}

.proof__inner.isactive::after {
  background-color: rgba(0, 0, 0, 0.6);
}

.proof__inner.isactive .proof__desc {
  opacity: 1;
  transform: translateY(0);
}

.proof__desc {
  position: relative;
  z-index: 2;
  opacity: 0;
  font-size: 1rem;
  transform: translateY(20px);
  transition: 0.4s;
  transition: 0.4s;
}

.proof__cont {
  position: absolute;
  z-index: 2;
  left: 8%;
  right: 8%;
  bottom: 4%;
}

.proof__t {
  display: block;
  max-width: 75%;
  word-break: keep-all;
  word-wrap: break-word;
}

.proofBtn {}

.plus-minus-toggle {
  cursor: pointer;
  height: 21px;
  width: 21px;
  right: 0;
}

.plus-minus-toggle:before,
.plus-minus-toggle:after {
  background: #fff;
  content: "";
  height: 5px;
  right: 0;
  bottom: 42px;
  position: absolute;
  width: 41px;
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

.mainImgBox {
  margin-top: 80px;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}
.c_long-video{
  position: relative;
}
.longVideo {
  list-style: none;
  position: absolute;
  top: 42%;
  left: 0;
  width: 62%;
  margin: 0 19%;
}

.c_data {
  margin-top: 80px;
  height: 798.98px;
  background-color: #e6ecf8;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 90px 0 0 0;
  width: 100%;
}

.data_header {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
}

.data_title {
  color: #2b2b2b;
  font-family: "brandon-grotesque", "Arita", sans-serif;
  font-weight: bold;
  letter-spacing: .06em;
  margin-bottom: 10px;
}

.data_title2 {
  font-weight: 400;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 0.2em;
  margin-bottom: 1.875rem;
  font-size: 1.8125rem;
}

MARQUEE {
  font-weight: 700;
  color: var(--text-point);
  font-size: 3.5rem;
  text-shadow: #fff;
}

.bg {}

.data {
  position: relative;
}

.data_img {
  max-height: 100%;
  position: relative;
  top: -7%;
}

.data_cnt_box {
  position: absolute;
  padding: 30px;
  background-color: var(--bg-white);
}

.data_cnt_box1 {
  position: absolute;
  top: 10px;
  left: -55%;
  border-radius: 10px;
}

.footer-data{
  position: relative;
  top: -10%;
  left: -30%;
  font-size: 14px;
  color: var(--text-gray);
}

.left-after::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 90%;
  width: 0;
  height: 0;
  border: 12px solid transparent;
  border-top-color: #fff;
  border-bottom: 0;
  border-right: 0;
  margin-right: -5px;
  margin-bottom: -12px;
  transform: rotateY(45deg);

}

.data_cnt_box2 {
  position: absolute;
  top: 22%;
  left: -65%;
  border-radius: 10px;
}

.data_cnt_box3 {
  position: absolute;
  top: 50%;
  left: -55%;
  border-radius: 10px;
}

.data_cnt_box4 {
  position: absolute;
  top: 1%;
  right: -35%;
  border-radius: 10px;
}

.data_cnt_box5 {
  position: absolute;
  top: 23%;
  right: -45%;
  border-radius: 10px;
}

.data_cnt_box6 {
  position: absolute;
  top: 45%;
  right: -55%;
  border-radius: 10px;
}

.data_cnt_box7 {
  position: absolute;
  top: 65%;
  right: -50%;
  border-radius: 10px;
}

.right-after::after {
  left: 10%;
  border: 12px solid transparent;
  border-top-color: #fff;
  border-bottom: 0;
  border-left: 0;
  margin-left: -5px;
  margin-bottom: -12px;
  transform: skewX(-15deg) rotateY(-30deg);
  content: '';
  position: absolute;
  bottom: 0;
  width: 0;
  height: 0;
}
.c_texture{
  display: flex;
  flex-direction: column;
  align-items: center;
}
.texture_video1{
  padding-bottom: 30px;
}
.texture_title1{
  display: flex;
  flex-direction: column;
  align-items: center;
}

.texture_title2{
  display: flex;
  flex-direction: column;
  align-items: center;
}
.texture_stitle{
  margin-top: 40px;
  font-weight: 400;
  letter-spacing: -1.5px;
}
.texture_stitle2{
  margin-bottom: 40px;
}
.texture_ctnt{
  font-size: 16px;
  color: var(--text-gray);
  line-height: 25px;
}
.texture_ctnt:last-child{
  padding-bottom: 30px;
}
.texture_stitle3{
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 40px;

}
.texture_stitle4{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
  margin-bottom: 80px;
  line-height: 24px;
  color: var(--text-gray);
}
.how-header1{
  display: flex;
  flex-direction: column;
  align-items: center;
}
.how-subcnt{
  margin-bottom: 40px;
}
.pdp__video{
  max-width: 394px;
  padding: 20px;
}
.how-cnt-box{
  padding-top: 20px;
}
.how-wrap{}
.how-cnt{
  color: var(--text-gray);

}
.bubbles{
    position: relative;
    width: 100%;
    height: 100%;
    z-index:3;
    top:0;
    left:0;
    margin-bottom: 100px;
  }
  .bubble{
    position: absolute;
    bottom:0;
    width:40px;
    height: 40px;
    background: rgb(0, 0, 0);
    border-radius: 50%;
    opacity: 0.5;
    animation: flying 15s infinite ease-in-out;
  }
  .bubble:nth-child(1){
    width:40px;
    height: 40px;
    left:10%;
    animation-duration: 15s;
  }
  .bubble:nth-child(2){
    width:20px;
    height: 20px;
    left:20%;
    animation-duration: 15s;
    animation-delay:1s;
  }
  .bubble:nth-child(3){
    width:50px;
    height: 50px;
    left:35%;
    animation-duration: 17s;
    animation-delay:2s;
  }
  .bubble:nth-child(4){
    width:80px;
    height: 80px;
    left:50%;
    animation-duration: 14s;
    animation-delay:0s;
  }
  .bubble:nth-child(5){
    width:35px;
    height: 35px;
    left:55%;
    animation-duration: 13s;
    animation-delay:1s;
  }
  .bubble:nth-child(6){
    width:45px;
    height: 45px;
    left:65%;
    animation-duration: 15s;
    animation-delay:3s;
  }
  .bubble:nth-child(7){
    width:25px;
    height: 25px;
    left:75%;
    animation-duration: 14s;
    animation-delay:2s;
  }
  .bubble:nth-child(8){
    width:80px;
    height: 80px;
    left:80%;
    animation-duration: 13s;
    animation-delay:1s;
  }
  .bubble:nth-child(9){
    width:15px;
    height: 15px;
    left:70%;
    animation-duration: 16s;
    animation-delay:0s;
  }
  .bubble:nth-child(10){
    width:50px;
    height: 50px;
    left:85%;
    animation-duration: 12s;
    animation-delay:3s;
  }
  .c_step{
    margin: 60px 0 30px 0;
    position: relative;
    box-sizing: border-box;
    text-align: center;
    background-image: url("https://www.laneige.com/kr/ko/assets/pdp/beststep-bg.jpg");
  }
  .step1{
    width: 100%;
    height: 100%;
  }

  .centerCol{
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .centerRow{
    display: flex;
    justify-content: center;
  }
@media (max-width: 575.98px) {
  .proof__bg {
    width: 370px;
    height: 420px;
  }
}

@media (max-width: 758.98px) {
  .c_c_mood_img {
    display: flex;
    flex-direction: column;
  }

  .img_box1,
  .img_box2 {
    padding: 30px;
    margin: 0;
  }

  .proof-list {
    flex-direction: column;
    align-content: center;
  }

  .proof {
    margin: 20px 0px !important;
  }
}

@media (max-width: 958.98px) {}

@media (max-width: 991.98px) {}

@media (min-width: 1199.98px) {
  .longVideo{

  }
}

@media (max-width: 1399.98px) {}
</style>
