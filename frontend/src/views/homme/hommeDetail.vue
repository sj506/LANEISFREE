<template>
  <div class="containers">
    <div class="nav-box">
      <div class="nav justify-content-center d-flex">
        <a v-bind:class="{ bottomLine: this.geturl() == 'feature' }" href="#feature" class="nav-item">상품 특징</a>
        <a v-bind:class="{ bottomLine: this.geturl() == 'review' }" href="#review" class="nav-item">사용 리뷰({{ reviewAvg.re_count }})</a>
        <a v-bind:class="{ bottomLine: this.geturl() == 'info' }" href="#info" class="nav-item">전성분/주의사항</a>
      </div>
    </div>
    <div id="feature"></div>
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
                d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z"
              />
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
            class="ft-viral__img"
            alt="라네즈 크림 스킨 옴므 올인원 제품 연출 이미지"
          />
        </div>
      </div>
      <div class="c_mood_img">
        <div class="c_c_mood_img">
          <div class="img_box1">
            <img
              src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_mood-cut_01_pc.jpg"
            />
          </div>
          <div class="img_box2">
            <img
              src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_mood-cut_03_pc.jpg"
            />
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
                  src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_01_pc.jpg"
                />
              </div>
              <div class="proof__inner" :class="{ isactive: isActive1 }">
                <p class="proof__desc">크림 한 통을 그대로 녹여낸 스킨 제형으로 로션, 크림이 따로 필요 없는 즉각 수분 충전되는 제품입니다.</p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 1.</em>
                  <span class="proof__t"
                    >스킨+로션+크림을 한 단계로! <br />
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
                  src="https://www.laneige.com//kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_the-proof_02_pc.mp4"
                ></video>
              </div>
              <div class="proof__inner" :class="{ isactive: isActive2 }">
                <p class="proof__desc">
                  끈적이는 올인원은 NO! 물스킨 제형으로 즉각적으로 피부에 흡수되어 빠르고 간편하게 사용하는 남자 올인원 스킨입니다.
                </p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 2.</em>
                  <span class="proof__t"
                    >물 스킨 제형으로 <br />
                    번들거림 없이 빠르게
                  </span>
                  <button @click="collapsedToggle($event.target, 'isActive2')" class="plus-minus-toggle collapsed"></button>
                </div>
              </div>
            </li>
            <li class="proof col">
              <div class="proof__bg">
                <img
                  class="proof_img"
                  src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_03_pc.jpg"
                />
              </div>
              <div class="proof__inner" v-bind:class="{ isactive: isActive3 }">
                <p class="proof__desc">과다 분비된 피지 조절 효능이 있는 어성초 성분으로 모공 및 피지를 컨트롤해줍니다.</p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 3.</em>
                  <span class="proof__t"
                    >어성초 성분으로 <br />
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
          <img
            class="longImg"
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_detail-PDP_pc.jpg"
          />
          <video
            class="longVideo"
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_01_pc.mp4"
            loop=""
            autoplay=""
            muted=""
            playsinline=""
          ></video>
        </div>
        <div></div>
      </div>

      <div class="c_data">
        <div class="data_header">
          <em class="data_title">CLINICAL DATA</em>
          <h3 class="h4 data_title2">2주의 기적 - 크림 스킨 옴므 올인원 사용 만족도</h3>
        </div>
        <div class="bg">
          <MARQUEE behavior="scroll" scrollamount="10">
            #피부진정#로션크림스킵케어#유수분밸런스#건성피부보습#피부진정#로션크림스킵케어#유수분밸런스#건성피부보습#피부진정#로션크림스킵케어#유수분밸런스#건성피부보습#피부진정#로션크림스킵케어#유수분밸런스#건성피부보습
          </MARQUEE>
        </div>
        <div class="data">
          <img
            class="data_img"
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_clinical-data_pc.png"
          />
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
          <video
            class="texture_video1"
            src="https://www.laneige.com//kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_01_pc.mp4"
            loop=""
            autoplay=""
            muted=""
            playsinline=""
          ></video>
          <div class="texture_ctnt">촉촉하고는 싶지만 번들거림은 부담스러웠던 남자 피부를 위해,</div>
          <div class="texture_ctnt">물 같은 스킨 제형이라 번들거림 없이 바르는 즉시 흡수돼요!</div>
        </div>
        <div class="texture_title2">
          <div class="texture_stitle3">&lt 자사 올인원 제품과 끈적임 비교 TEST &gt</div>
          <video
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_02_pc.mp4"
            class="pdp__video"
            loop=""
            autoplay=""
            muted=""
            playsinline=""
          ></video>
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
              class="pdp__video"
              loop=""
              autoplay=""
              muted=""
              playsinline=""
            ></video>
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
              class="pdp__video"
              loop=""
              autoplay=""
              muted=""
              playsinline=""
            ></video>
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
        <div class="step1 bg">
          <img src="https://www.laneige.com/kr/ko/assets/pdp/beststep-bg.jpg" />
        </div>
        <div class="step2">
          <div class="h4">BEST STEP</div>
          <div class="h2">라네즈가 추천하는 남성 피부 수분 충전 스텝</div>
        </div>
        <div class="step3">
          <div>
            <div>
              <a class="line" href="">
                <div>
                  <img src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/bs-active-water-foam-cleanser-200427.png" alt="" />
                </div>
                <b>Step 1</b>
                <div class="step3_title">Cleansing</div>
                <div class="step3_ctnt">액티브 워터 폼 클렌저</div>
              </a>
            </div>
          </div>
          <div>
            <div>
              <a class="line selected" href="">
                <div>
                  <img
                    src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2020/04/28/20200427_final_cream-skin-refiner-all-in-one_best-step_pc.png"
                    alt=""
                  />
                </div>
                <b>Step 2</b>
                <div class="step3_title">Morning Care</div>
                <div class="step3_ctnt">크림 스킨 옴므 올인원</div>
              </a>
            </div>
          </div>
          <div>
            <div>
              <a class="line" href="">
                <div>
                  <img src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2020/04/28/bs-homme-air-light-sun-stick-200427.png" alt="" />
                </div>
                <b>Step 3</b>
                <div class="step3_title">Day Care</div>
                <div class="step3_ctnt">옴므 에어라이트 선 스틱</div>
              </a>
            </div>
          </div>
          <div>
            <div>
              <a class="line" href="">
                <div><img src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2020/04/28/cs-qsp-best-step-01_1.png" alt="" /></div>
                <b>Step 4</b>
                <div class="step3_title">Night Care</div>
                <div class="step3_ctnt">크림 스킨 퀵 스킨 팩</div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="c_tips centerCol pt-5">
        <div class="c_tips1 centerCol">
          <em class="pb-3">BEAUTY TIPS</em>
          <h3>크림 스킨 옴므 올인원, 이렇게 사용해보세요!</h3>
        </div>
        <div class="c_tips2 centerCol pt-4">
          <b>#닦토로 사용</b>
          <div class="c_tips_ctnt">지성 피부이거나 더 산뜻한 사용감을 원한다면</div>
          <div class="c_tips_ctnt">토너로 사용하는 것 처럼 화장솜으로 #닦토 해보세요!</div>
        </div>
        <div class="c_tips3 centerRow pb-3">
          <video
            class="bt_pdp__video"
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_beauty-tips_01_pc.mp4"
            loop=""
            autoplay=""
            muted=""
            playsinline=""
          ></video>
          <video
            class="bt_pdp__video"
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_beauty-tips_02_pc.mp4"
            loop=""
            autoplay=""
            muted=""
            playsinline=""
          ></video>
        </div>
        <div class="c_tips4 centerCol pt-3">
          <b>#스킨팩으로 사용</b>
          <div class="c_tips_ctnt">건성 피부 혹은 즉각적인 피부 진정이 필요할 때</div>
          <div class="c_tips_ctnt pb-5">화장솜에 듬뿍 적셔 #스킨팩 해보세요!</div>
        </div>
        <div class="c_tips5">
          <video
            class="bt_pdp__video"
            src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_beauty-tips_03_pc.mp4"
            loop=""
            autoplay=""
            muted=""
            playsinline=""
          ></video>
        </div>
      </div>
    </section>
    <section class="pdp-review centerCol" id="review">
      <div class="review centerCol">
        <div class="c_review">
          <header class="border_bottom">
            <div class="centerCol">
              <em class="">AMORE MALL REVIEWS</em>
              <h3 class="h4">{{ reviewAvg.re_count }}개의 소중한 상품 리뷰</h3>
              <span class="">{{ reviewAvg.re_avg }} / 5.0</span>
            </div>

            <div class="centerRow justify-content-between">
              <div class="text-center centerRow">
                <a href=""><span>전체</span></a> |
                <a href=""><span>포토리뷰</span></a>
              </div>
              <div class="selectBox">
                <select class="select">
                  <option value="" selected>작성일순</option>
                  <option value="">베스트순</option>
                </select>
                <span class="icoArrow"><img src="https://freepikpsd.com/media/2019/10/down-arrow-icon-png-7-Transparent-Images.png" alt="" /></span>
              </div>
            </div>
          </header>
          <main>
            <div class="review_container">
              <ul class="review_box" v-for="(item, idx) in reviewData" :key="idx">
                <li class="star--container">
                  <div class="star--box">
                    <div class="star">
                      <div class="stars-outer">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <div class="stars-inner" :class="'star' + item.re_star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>{{ item.m_email }}</li>
                <li>{{ item.re_time }}</li>
                <li>{{ item.re_ctnt }}</li>
                <li><img class="review_img" :src="`/static/img/review/${item.m_num}/${item.pro_num}/${item.re_img}`" alt="" /></li>
              </ul>
            </div>
          </main>
        </div>
        <div class="pagination">
          <button type="button" class="page page--prev is-disabled"><span class="page__text"></span><span class="a11y">이전 페이지</span></button>
          <button v-for="(item, idx) in pagingCount.cnt" :key="idx" type="button" class="page">
            <router-link :to="{ path: `/hommeProductDetail/${pro_num}`, query: { page: item }, hash: '#review' }"
              ><span class="page__text current">{{ item }}</span></router-link
            >
          </button>
          <button type="button" class="page page--next"><span class="a11y">다음페이지</span></button>
        </div>
      </div>
    </section>
    <!-- 주의사항/전성분 -->
    <div class="accordion accordion-flush c_precautions" id="accordionFlushExample">
      <div class="accordion-item" id="info">
        <h2 class="accordion-header" id="flush-headingOne">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne"
            aria-expanded="false"
            aria-controls="flush-collapseOne"
          >
            주의사항
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            1. 화장품 사용 시 또는 사용 후 직사광선에 의하여 사용부위가 붉은 반점, 부어오름 또는 가려움증 등의 이상 증상이나 부작용이 있는 경우 전문의
            등과 상담할 것 2. 상처가 있는 부위 등에는 사용을 자제할 것 3. 보관 및 취급 시의 주의사항 가) 어린이의 손이 닿지 않는 곳에 보관할 것 나)
            직사광선을 피해서 보관할 것
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo"
            aria-expanded="false"
            aria-controls="flush-collapseTwo"
          >
            전성분
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            정제수, 에탄올, 디프로필렌글라이콜,글리세린, 피이지/피피지-17/6코폴리머, 해수, 바이오사카라이드검-1, 징크글루코네이트,
            마그네슘아스파테이트, 칼슘글루코네이트, 카퍼글루코네이트, 부틸렌글라이콜, 옥틸도데세스-16, 피이지-60하이드로제네이티드캐스터오일,
            디소듐이디티에이, 에칠헥실글리세린, 향료, 알파-아이소메틸 아이오논, 부틸페닐메틸프로피오날, 헥실신남알, 리날룰, 리모넨
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['pro_num'],

  data() {
    return {
      navurl: this.geturl(),
      isActive1: false,
      isActive2: false,
      isActive3: false,
      reviewData: {},
      pagingCount: 0,
      page: 1,
      rowCount: 15,
      startIdx: 0,
      reviewAvg: {},
      // img: ''
    };
  },
  methods: {
    geturl() {
      return window.location.href.split('#')[1];
    },
    collapsedToggle(ele, activeNm) {
      this[activeNm] = !this[activeNm];
      ele.classList.toggle('collapsed');
    },
    // async getReviewData() {
    //   this.reviewData = await this.$get(`/review/getReviewData`, {});
    //   console.log(this.reviewData);
    // },
    async getPagingCount() {
      this.pagingCount = await this.$get(`/review/getPagingCount/${this.rowCount}`, {});
      console.log(this.pagingCount);
    },
    async getPagingReviewData() {
      this.reviewData = await this.$get(`/review/getPagingReviewData/${this.rowCount}/${this.startIdx}`, {});
      console.log(this.reviewData);
    },
    async getReviewAvg() {
      this.reviewAvg = await this.$get(`/review/getReviewAvg`, {});
      console.log(this.reviewAvg);
    },
    // async getReviewImgData() {
    //   this.reviewData = await this.$get(`/review/getReviewImgData/${this.rowCount}/${this.startIdx}`, {});
    //   console.log(this.reviewData);
    // },
    getPage() {
      if (typeof this.$route.query.page != undefined) {
        this.page = this.$route.query.page;
      }
      this.startIdx = (this.page - 1) * this.rowCount;
      console.log(this.page);
    },
  },
  computed: {
    selPage: function () {
      return this.$route.query.page;
    },
    selImg: function () {
      return this.$route.query.img;
    },
  },
  watch: {
    selPage: function () {
      this.getPage();
      this.getPagingReviewData();
    },
  },
  created() {
    this.getPagingCount();
    this.getPage();
    this.getPagingReviewData();
    this.getReviewAvg();
  },
  // computed: {
  //   isactive: function(n) {
  //     return this.n;
  //   }
  // }
};
</script>

<style scoped>
html,
body {
  letter-spacing: -0.025em;
  font-family: 'Arita', sans-serif;
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

b {
  font-weight: bolder;
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

.recomment_d {
}

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

.c_viral {
}

.viral_title {
  font-size: xx-large;
  color: #2b2b2b;
  font-family: 'brandon-grotesque', 'Arita', sans-serif;
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
  margin: 150px 20px 50px 20px;
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

.proof__bg {
}

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

.proofBtn {
}

.plus-minus-toggle {
  cursor: pointer;
  height: 21px;
  width: 21px;
  right: 0;
}

.plus-minus-toggle:before,
.plus-minus-toggle:after {
  background: #fff;
  content: '';
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
.c_long-video {
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
  font-family: 'brandon-grotesque', 'Arita', sans-serif;
  font-weight: bold;
  letter-spacing: 0.06em;
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

.bg {
}

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

.footer-data {
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
  left: -60%;
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
.c_texture {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.texture_video1 {
  padding-bottom: 30px;
}
.texture_title1 {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.texture_title2 {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.texture_stitle {
  margin-top: 40px;
  font-weight: 400;
  letter-spacing: -1.5px;
}
.texture_stitle2 {
  margin-bottom: 40px;
}
.texture_ctnt {
  font-size: 16px;
  color: var(--text-gray);
  line-height: 25px;
}
.texture_ctnt:last-child {
  padding-bottom: 30px;
}
.texture_stitle3 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 40px;
}
.texture_stitle4 {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
  margin-bottom: 80px;
  line-height: 24px;
  color: var(--text-gray);
}
.how-header1 {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.how-subcnt {
  margin-bottom: 40px;
}
.pdp__video {
  max-width: 394px;
  padding: 20px;
}
.how-cnt-box {
  padding-top: 20px;
}
.how-wrap {
}
.how-cnt {
  color: var(--text-gray);
}

/* 스텝 */
.c_step {
  margin: 60px 0 30px 0;
  position: relative;
  box-sizing: border-box;
  text-align: center;
  object-fit: cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  height: 80vh;
}
.step1 {
  width: 100%;
  height: 100%;
  padding-top: 80px;
  padding-bottom: 80px;
}
.bg img {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.step2 {
  position: absolute;
  top: 12%;
}
.step3 {
  display: flex;
  position: absolute;
  width: 70%;
  top: 25%;
  box-sizing: content-box;
  padding-left: 80px;
  padding-right: 80px;
}
.step3 b {
  display: inline-block;
  border-radius: 1em;
  padding: 0.25em 1em;
  margin-bottom: 40px;
  line-height: 1;
  color: #2b2b2b;
  text-transform: uppercase;
  font-weight: 550;
}
.step3_title {
  padding-bottom: 15px;
  color: #5f5f5f;
}
.step3_ctnt {
  color: #000;
}
.line::before {
  content: '';
  position: absolute;
  left: 0;
  width: 100%;
  bottom: 65px;
  border-bottom: 2px solid #4477be;
}
.line::after {
  content: '';
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  position: absolute;
  width: 8px;
  height: 8px;
  bottom: 65px;
  border-radius: 50%;
  margin-bottom: -3px;
  margin-left: -4px;
  background-color: #4477be;
}
.selected::after {
  width: 16px;
  height: 16px;
  border: 2px solid #4477be;
  margin-left: -8px;
  margin-bottom: -7px;
  background-color: #fff;
  z-index: 2;
}

.c_tips3 {
  flex-wrap: wrap;
  max-width: none;
  margin-top: 2.5rem;
  gap: 10px;
}

.bt_pdp__video {
  display: block;
  max-width: 394px;
  margin: auto;
  width: 395px;
  margin-top: 0;
  margin-left: 0;
}
.c_tips2,
.c_tips4 {
  gap: 10px;
}
.c_tips_ctnt {
  color: var(--text-gray);
}

/* 리뷰 */
#review {
  margin-top: 40px;
}
.pdp-review {
  padding: 5rem 0;
  background-color: #f7f7f7;
  width: 100%;
}
.c_review {
  width: 100%;
}
.border_bottom {
  border-bottom: 1px solid rgb(88, 87, 87);
}
.review {
  max-width: 980px;
  width: 100%;
}
.review_container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  width: 100%;
  gap: 20px;
  padding: 10px;
}
.review_box {
  background-color: #fff;
  padding: 15px;
}
.review_box li {
  margin: 6px 0px;
}
.review_img {
  height: 150px;
}
/* 리뷰별점 */
.user_info {
  display: flex;
  flex-direction: column;
}
.star--box {
  display: inline;
  width: 92px;
  padding-top: 5px;
}
.store--rating i {
  font-size: 18px;
}
.stars-outer {
  position: relative;
  display: flex;
}

.stars-inner {
  display: flex;
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap;
  overflow: hidden;
  width: 0;
}
.stars-outer i {
  font-weight: 900;
  color: #ccc;
}
.star--container {
  width: 92px;
}
.stars-inner i {
  font-weight: 900;
  color: #fcd34d;
}
.stars-inner.star5 {
  width: 100% !important;
}
.stars-inner.star4 {
  width: 80% !important;
}
.stars-inner.star3 {
  width: 60% !important;
}
.stars-inner.star2 {
  width: 40% !important;
}
.stars-inner.star1 {
  width: 20% !important;
}
.stars-inner.star0 {
  width: 0% !important;
}
/* 리뷰페이지 */
.pagination {
  margin-top: 20px;
}

/* 공용 */
.centerCol {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.centerRow {
  display: flex;
  justify-content: center;
  align-items: center;
}
.selectBox {
  position: relative;
  width: 150px;
  border: none;
}
.selectBox .select {
  width: inherit;
  height: inherit;
  background: transparent;
  border: 0 none;
  outline: 0 none;
  padding: 0 5px;
  position: relative;
  z-index: 3;
  padding: 15px;
  border: none;
}
.selectBox .select option {
  background: none;
  color: rgb(0, 0, 0);
  font-size: 16px;
  border: none;
  padding: 15px;
  height: 40px;
}
.selectBox .icoArrow {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 4;
  width: 35px;
  height: inherit;
  border: none;
  display: flex;
  justify-content: center;
  align-items: center;
}

.selectBox .icoArrow img {
  width: 50%;
}

.selectBox .select:focus + .icoArrow img {
  transform: rotate(180deg);
}

/* 주의사항, 전성분 */
.c_precautions {
  margin-top: 40px;
  margin-bottom: 100px;
  width: 780px;
}
.accordion {
  --bs-accordion-btn-icon: url(https://static.vecteezy.com/ti/vetor-gratis/p1/613847-vector-plus-icon-gr%C3%A1tis-vetor.jpg);
  --bs-accordion-btn-focus-border-color: none !important;
  --bs-accordion-btn-active-icon: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSap8dmKEV8NR0lqMJ3xAwRROiA5efyUlDos_5wFIRTfA1l4FyX4xQuMbiy38SAHS1lTqA&usqp=CAU) !important;
  color: var(--text-gray) !important;
  --bs-accordion-btn-focus-box-shadow: none !important;
  --bs-accordion-active-color: none !important;
  --bs-accordion-active-bg: none !important;
}
.accordion-item {
  border: none !important;
  border-top: 1px solid #dee2e6 !important;
}

.accordion-button:not(.collapsed) {
  color: var(--text-gray) !important;
}
.accordion-button {
  color: var(--text-gray) !important;
}
.accordion-button:focus {
  border: none !important;
}
.accordion-body {
  color: var(--text-gray);
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

@media (max-width: 958.98px) {
}

@media (max-width: 991.98px) {
}

@media (min-width: 1199.98px) {
  .longVideo {
  }
}

@media (max-width: 1399.98px) {
}
</style>
