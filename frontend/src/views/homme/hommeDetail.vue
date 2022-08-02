<template>
  <div>
    <div class="nav-box">
      <div class="nav justify-content-center d-flex">
        <a v-bind:class="{bottomLine: this.geturl() == 'feature'}" href="#feature" class="nav-item">상품 특징</a>
        <a v-bind:class="{bottomLine: this.geturl() == 'review'}" href="#review" class="nav-item">사용 리뷰(479)</a>
        <a v-bind:class="{bottomLine: this.geturl() == 'info'}" href="#info" class="nav-item">전성분/주의사항</a>
      </div>
    </div>
    <section id="main" class="">
      <div class="c_recommend">
        <dl class="frecommend">
          <dt class="recommend_t">이런 피부 고민에 추천해요!</dt>
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

<<<<<<< HEAD
      <blockquote class="ft-quote">
        <div class="ft-quote__deco">
          <span class="icon icon-quotes" aria-hidden="true"></span>
=======
      <blockquote class="c_quote">
        <div class="c_c_qutote">
          <div class="quote-line">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z" />
            </svg>
          </div>
          <p class="quote_text">수분은 부족하고 피지량은 많은 남자 피부를 위한 진화, <br />스킨만으로도 로션, 크림을 따로 바를 필요 없이 바로 촉촉해지는 <br />남자만의 스킨케어 - 올인원 스킨으로 쉽고 간편하게 사용할수 있어요!</p>
          <footer class="quote_footer">라네즈 크림 스킨 옴므 올인원 상품개발 담당자</footer>
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
        </div>
        <p class="ft-quote__msg">수분은 부족하고 피지량은 많은 남자 피부를 위한 진화, <br />스킨만으로도 로션, 크림을 따로 바를 필요 없이 바로 촉촉해지는 <br />남자만의 스킨케어 - 올인원 스킨으로 쉽고 간편하게 사용할수 있어요!</p>
        <footer class="ft-quote__footer">라네즈 크림 스킨 옴므 올인원 상품개발 담당자</footer>
      </blockquote>
<<<<<<< HEAD
      <div class="ft-viral">
        <div class="ft-viral__title">라네즈 크림 스킨 옴므 올인원</div>
        <div class="ft-viral__sub">[HOMME] CREAM SKIN REFINER ALL IN ONE</div>
        <div class="ft-viral__box">
          <img src="/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_top-visuals-banner_pc.jpg" class="ft-viral__img" alt="라네즈 크림 스킨 옴므 올인원 제품 연출 이미지" />
        </div>
      </div>
      <div class="ft-mood" role="presentation">
        <div class="ft-mood__pad">
          <div class="ft-mood__box">
            <img src="/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_mood-cut_01_pc.jpg" class="ft-mood__img" alt="" />
          </div>
          <div class="ft-mood__box">
            <img src="/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_mood-cut_03_pc.jpg" class="ft-mood__img" alt="" />
=======

      <div class="c_viral">
        <div class="viral_title">라네즈 크림 스킨 옴므 올인원</div>
        <div class="viral_sub">[HOMME] CREAM SKIN REFINER ALL IN ONE</div>
        <div class="viral_box">
          <img src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_top-visuals-banner_pc.jpg" class="ft-viral__img" alt="라네즈 크림 스킨 옴므 올인원 제품 연출 이미지" />
        </div>
      </div>
      <div class="c_mood_img">
        <div class="c_c_mood_img">
          <div class="img_box1">
            <img src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_mood-cut_01_pc.jpg" />
          </div>
          <div class="img_box2">
            <img src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_mood-cut_03_pc.jpg" />
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
          </div>
        </div>
      </div>
      <div class="ft-proof">
        <div class="wrapper">
          <header class="pdp__sub-header">
            <em class="pdp__sub-cap">THE PROOF</em>
            <h3 class="h4 pdp__sub-header">크림 스킨 옴므 올인원 개발 스토리</h3>
          </header>
          <ul class="proof-list">
            <li class="proof">
              <div class="proof__bg">
<<<<<<< HEAD
                <img
                  src="/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_01_pc.jpg"
                  alt="스킨+로션+크림을 한 단계로! <br>
간편한 올인원 스킨"
                />
=======
                <img src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_01_pc.jpg" />
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
              </div>
              <div class="proof__inner">
                <p class="proof__desc">크림 한 통을 그대로 녹여낸 스킨 제형으로 로션, 크림이 따로 필요 없는 즉각 수분 충전되는 제품입니다.</p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 1.</em>
                  <span class="proof__t"
                    >스킨+로션+크림을 한 단계로! <br />
<<<<<<< HEAD
                    간편한 올인원 스킨</span
                  >
                  <button type="button" class="proof__btn">
                    <span class="more"></span>
                    <span class="a11y">더보기</span>
=======
                    간편한 올인원 스킨
                  </span>
                  <button class="proofBtn">
                    <div @click="collapsedToggle($event.target, 'isActive1')" class="plus-minus-toggle collapsed"></div>
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
                  </button>
                </div>
              </div>
            </li>
            <li class="proof">
              <div class="proof__bg">
<<<<<<< HEAD
                <video src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_the-proof_02_pc.mp4" class="proof-bg-video" loop="" autoplay="" muted="" playsinline=""></video>
=======
                <video src="https://www.laneige.com//kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_the-proof_02_pc.mp4"></video>
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
              </div>
              <div class="proof__inner">
                <p class="proof__desc">끈적이는 올인원은 NO! 물스킨 제형으로 즉각적으로 피부에 흡수되어 빠르고 간편하게 사용하는 남자 올인원 스킨입니다.</p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 2.</em>
                  <span class="proof__t"
                    >물 스킨 제형으로 <br />
<<<<<<< HEAD
                    번들거림 없이 빠르게</span
                  >
                  <button type="button" class="proof__btn">
                    <span class="more"></span>
                    <span class="a11y">더보기</span>
                  </button>
=======
                    번들거림 없이 빠르게
                  </span>
                  <button @click="collapsedToggle($event.target, 'isActive2')" class="plus-minus-toggle collapsed"></button>
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
                </div>
              </div>
            </li>
            <li class="proof">
              <div class="proof__bg">
<<<<<<< HEAD
                <img
                  src="/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_03_pc.jpg"
                  alt="어성초 성분으로 <br> 
과다 분비된 피지 조절 및 모공케어"
                />
=======
                <img class="proof_img" src="https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/20200427_final_cream-skin-refiner-all-in-one_the-proof_03_pc.jpg" />
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
              </div>
              <div class="proof__inner">
                <p class="proof__desc">과다 분비된 피지 조절 효능이 있는 어성초 성분으로 모공 및 피지를 컨트롤해줍니다.</p>
                <div class="proof__cont">
                  <em class="proof__cap">SECRET 3.</em>
                  <span class="proof__t"
                    >어성초 성분으로 <br />
<<<<<<< HEAD
                    과다 분비된 피지 조절 및 모공케어</span
                  >
                  <button type="button" class="proof__btn">
                    <span class="more"></span>
                    <span class="a11y">더보기</span>
=======
                    과다 분비된 피지 조절 및 모공케어
                  </span>
                  <button class="proofBtn">
                    <div @click="collapsedToggle($event.target, 'isActive3')" class="plus-minus-toggle collapsed"></div>
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
                  </button>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
<<<<<<< HEAD
      <div class="ft-shade">
        <div class="wrapper">
          <div class="ft-viral__box">
            <img src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_detail-PDP_pc.jpg" alt="" />
            <div class="pdpBlind">
              <p>수분은 부족하고 피지량은 많은 남성 피부를 위한 진화</p>
              <strong>4가지 고민을 케어해주는 스마트한 #올인원 스킨</strong>
              <ul>
                <li>1. 피지 분비로 인한 모공</li>
                <li>2. 건조 피부 각질</li>
                <li>3. 거친 피부 결</li>
                <li>4. 면도 등으로 민감해진 피부</li>
              </ul>

              <strong>남자 피부, 고민할 것 없이 #크림 스킨 옴므 올인원</strong>
              <p>이런 분들에게 추천해요!</p>
              <ul>
                <li>바르고 발라도 채워지지 않는 건조 피부</li>
                <li>건조한 동시에 이마, 코, 턱 등의 T존은 피지 분비로 인해 번들거리는 분</li>
                <li>매일 아침 면도로 인해서 피부가 건조하고 연약해진 분</li>
                <li>끈적이는 느낌이 싫고 여러가지 사용하기 귀찮은 분</li>
              </ul>

              <ul>
                <li>
                  <div>
                    <strong>크림 한통을 그대로 녹여낸 스킨</strong>
                    <p>#크림인듯스킨인듯 #크림스킨옴므</p>
                    <p>스킨인데 진짜 로션 + 크림까지 생략 가능하다구요?</p>
                    <p>네. 가능합니다!</p>
                    <p>CREAM + SKIN = ALL IN ONE!</p>
                    <p>크림 한통을 물 같은 스킨 제형에 그대로 녹여내서, 스킨만으로도 로션/크림까지 바른듯 촉촉한 피부!!</p>
                  </div>
                  <div>
                    <strong>"바르는 즉시 촉촉해져서, 각질과 건조함을 잠재워줘요"</strong>
                    <video src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_01_pc.mp4" class="viral-pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
                  </div>
                  <div>
                    <p>라네즈의 제형기술인 Cream Blending TechnologyTM로 '크림'과 '스킨'을 혼합하고 작게 쪼개어 하나의 워터로 안정화시켰습니다.</p>
                    <dl>
                      <dt>크림의 장점은?</dt>
                      <dd>높은 보습력과 유지력</dd>
                      <dt>스킨의 장점은?</dt>
                      <dd>산뜻한 사용감과 높은 흡수력</dd>
                    </dl>
                  </div>
                  <div>
                    <p>그렇다면 진짜 스킨이 크림 만큼의 보습력이 있을까요?</p>
                    <p>실제 '크림'과 '크림 스킨 옴므 올인원'의 보습력 비교 결과</p>
                    <strong>크림 VS 크림 스킨 옴므 올인원</strong>
                    <p>사용 직후 분 아니라 24시간 후까지 크림보다 우월한 보습력 유지</p>
                    <ul>
                      <li>시험 기관 : P&amp;K 피부임상 연구센터</li>
                      <li>시험 대상 : 건조로 인한 남성 민감피부 30명</li>
                      <li>시험 기간 : 2020.01.28 ~ 2020.02.17</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <strong>어성초 성분으로 모공 및 피지 케어</strong>
                    <p>과다 분비된 피지 조절 효능이 있는 어성초 성분을 팅크처 공법으로 추출하여 즉각적인 '모공 및 피지케어'를 해줍니다.</p>
                  </div>
                  <div>
                    <strong>농도에 따른 어성초 추출물의 과다 분비 피지 조절 효능</strong>
                    <p>농도가 높을 수록 피지량 감소</p>
                    <strong>크림 스킨 옴므 올인원의 즉각적인 모공케어</strong>
                    <p>과다 분비된 피지를 조절하여, 모공을 한번에 잠재워줍니다.</p>
                  </div>
                </li>
                <li>
                  <div>
                    <strong>면도로 연약해진 남성 피부에 저자극</strong>
                    <p>매일 아침 면도와 각종 외부 자극등 으로 인해 남자 피부도 연약해집니다.</p>
                    <p>보습에 꼭 필요한 성분을 담은 착한 처방의 스킨으로 피부 장벽을 건강하게 가꿔주세요.</p>
                    <ul>
                      <li>POINT 1. 보습에 필요한 성분을 담은 착한 포뮬러의 스킨이에요! 향, 합성색소, PEG계면활성제, 동물성원료, 트리에탄올아민 무첨가</li>
                      <li>POINT 2. 피부과 테스트 완료 / 하이포 알러지 테스트 완료한 처방으로 연약해진 남성 피부에 저자극</li>
                      <li>PIONT 3. 아미노산이 풍부한 White Leaf Tea Water 함유로 거칠어진 피부 장벽 강화</li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="ft-data ft-data--speech" style="color: #4477be">
        <div class="bg" role="presentation" style="background-color: #e6ecf8">
          <div class="bg__moving" style="color: rgb(80, 105, 159); width: 2958.94px">
            <div class="bg__marquee-wrap" style="transform: translate3d(-1342.77px, 0px, 0px)">
              <span class="bg__marquee">
                <span class="bg__tag">#피부진정</span>
                <span class="bg__tag">#로션크림스킵케어</span>
                <span class="bg__tag">#유수분밸런스</span>
                <span class="bg__tag">#건성피부보습</span>
                <span class="bg__tag">#피부진정</span><span class="bg__tag">#로션크림스킵케어</span><span class="bg__tag">#유수분밸런스</span><span class="bg__tag">#건성피부보습</span></span
              >
              <span class="bg__marquee">
                <span class="bg__tag">#피부진정</span>
                <span class="bg__tag">#로션크림스킵케어</span>
                <span class="bg__tag">#유수분밸런스</span>
                <span class="bg__tag">#건성피부보습</span>
                <span class="bg__tag">#피부진정</span><span class="bg__tag">#로션크림스킵케어</span><span class="bg__tag">#유수분밸런스</span><span class="bg__tag">#건성피부보습</span></span
              >
            </div>
          </div>
        </div>
        <div class="ft-data__pad">
          <header class="pdp__sub-header">
            <em class="pdp__sub-cap">Clinical Data</em>
            <h3 class="h4 pdp__sub-heading">2주의 기적 - 크림 스킨 옴므 올인원 사용 만족도</h3>
          </header>
          <div class="ft-data__cont">
            <img src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_clinical-data_pc.png" class="ft-data__center" alt="크림 스킨 옴므 올인원" />
            <div class="speech">
              <span class="speech__text">
                <span class="u-br">바를 때 피부에</span>
                <span class="u-br">흡수가 잘되는 느낌이다.</span>
                <span class="u-br"><em>100%</em></span>
              </span>
            </div>
            <div class="speech">
              <span class="speech__text">
                <span class="u-br">사용 후 피부가 촉촉해진 느낌이다.</span>
                <span class="u-br"><em>96.6%</em></span>
              </span>
            </div>
            <div class="speech">
              <span class="speech__text">
                <span class="u-br">일반 옴므 스킨 대비</span>
                <span class="u-br">더 촉촉한 느낌이다.</span>
                <span class="u-br"><em>86.6%</em></span>
              </span>
            </div>
            <div class="speech">
              <span class="speech__text">
                <span class="u-br">사용 후 피부가 진정된 느낌이다.</span>
                <span class="u-br"><em>90.0%</em></span>
              </span>
            </div>
            <div class="speech">
              <span class="speech__text">
                <span class="u-br">사용 후 피부에 자극이 덜한 느낌이다.</span>
                <span class="u-br"><em>86.6%</em></span>
              </span>
            </div>
            <div class="speech">
              <span class="speech__text">
                <span class="u-br">사용 후 피부 답답함이 느껴지지 않는다.</span>
                <span class="u-br"><em>86.6%</em></span>
              </span>
            </div>
            <div class="speech">
              <span class="speech__text">
                <span class="u-br">에센스, 크림 등 사용하는</span>
                <span class="u-br">제품 단계를 축소할 수 있다.</span>
                <span class="u-br"><em>83.3%</em></span>
              </span>
            </div>
          </div>
          <footer class="ft-data__footer">
            <span class="u-br">크림 스킨 옴므 올인원 만족도 평가 결과</span>
            <span class="u-br"><i class="a11y">시험기관: </i>㈜글로벌의학연구센터</span><br />
            <span class="u-br"><i class="a11y">시험대상: </i>건조/민감 남성 피부 30명 대상 피부 임상 진행</span>
            <span class="u-br"><i class="a11y">시험기간: </i>2020.02.04 ~ 2020.02.19 (2주)</span>
          </footer>
        </div>
      </div>
      <div class="ft-texture">
        <div class="wrapper">
          <header class="pdp__sub-header">
            <em class="pdp__sub-cap">TEXTURE</em>
            <h3 class="h4 pdp__sub-header">우윳빛 물 타입의 스킨</h3>
          </header>
          <div class="u-tc" style="">
            <video src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_01_pc.mp4" class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
            <p>촉촉하고는 싶지만 번들거림은 부담스러웠던 남자 피부를 위해, <br />물 같은 스킨 제형이라 번들거림 없이 바르는 즉시 흡수돼요!</p>
          </div>
          <div class="u-tc" style="">
            <strong>&lt;자사 올인원 제품과 끈적임 비교 TEST&gt;</strong>
            <video src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_02_pc.mp4" class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
            <p>올인원이지만 스킨 제형이라 <br />피부에 끈적임은 남지 않아 산뜻해요!</p>
          </div>
        </div>
      </div>

      <div class="ft-how-to">
        <div class="wrapper wrapper--8-over-12">
          <header class="pdp__sub-header">
            <em class="pdp__sub-cap">How to</em>
            <h3 class="h4 pdp__sub-heading">크림 스킨 옴므 올인원 기본 사용법</h3>
          </header>

          <ol class="ft-how-to__list">
            <li class="ft-how-to__item">
              <div class="ft-how-to__box">
                <video src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_how-to_01_pc.mp4" class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
              </div>
              <div class="ft-how-to__cont">
                <b class="h">Step 1.</b>
                <p class="text">아침, 저녁 세안 후 손바닥에 적당량을 덜어주세요. <br />(500원 동전 크기)</p>
              </div>
            </li>
            <li class="ft-how-to__item">
              <div class="ft-how-to__box">
                <video src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_how-to_02.mp4" class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
              </div>
              <div class="ft-how-to__cont">
                <b class="h">Step 2.</b>
                <p class="text">손으로 챱챱 두드리듯 발라 흡수시켜줍니다.</p>
                <p>*피부 컨디션이 유난히 좋지 않거나 건조할 때에는 2-3회 덧발라 흡수시켜주면 더욱 효과적입니다.</p>
              </div>
            </li>
          </ol>
        </div>
      </div>
      <div class="ft-step">
        <div class="bg" role="presentation">
          <img src="/kr/ko/assets/pdp/beststep-bg.jpg" class="bg__img" alt="" />
        </div>
        <header class="pdp__sub-header">
          <em class="pdp__sub-cap">BEST STEP</em>
          <h3 class="h4 pdp__sub-header">라네즈가 추천하는 남성 피부 수분 충전 스텝</h3>
        </header>
        <div class="swiper-container ft-step__carousel swiper-container-initialized swiper-container-horizontal" data-initial-step="1">
          <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms">
            <div class="swiper-slide swiper-slide-active" style="width: 302px">
              <a href="/kr/ko/homme/active-water-foam-cleanser.html" class="ft-step__link" ap-click-area="Product" ap-click-name="Click - Product Detail Link" ap-click-data="스텝_액티브 워터 폼 클렌저">
                <div class="ft-step__thumb">
                  <img src="/kr/ko/homme/__icsFiles/afieldfile/2021/10/05/bs-active-water-foam-cleanser-200427.png" class="ft-step__img" alt="액티브 워터 폼 클렌저" />
                  <div class="item-deco">
                    <div class="item-deco-bubble"><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span></div>
                  </div>
                </div>
                <b class="ft-step__cap">Step 1</b>
                <div class="ft-step__category">Cleansing</div>
                <div class="ft-step__name">액티브 워터 폼 클렌저</div>
              </a>
            </div>
            <div class="swiper-slide swiper-slide-next" style="width: 302px">
              <a href="/kr/ko/homme/cream-skin-homme-all-in-one.html" class="ft-step__link is-current" ap-click-area="Product" ap-click-name="Click - Product Detail Link" ap-click-data="스텝_크림 스킨 옴므 올인원">
                <div class="ft-step__thumb">
                  <img src="/kr/ko/homme/__icsFiles/afieldfile/2020/04/28/20200427_final_cream-skin-refiner-all-in-one_best-step_pc.png" class="ft-step__img" alt="크림 스킨 옴므 올인원" />
                  <div class="item-deco">
                    <div class="item-deco-bubble">
                      <span class="bubble" style="visibility: inherit; opacity: 0.736489; transform: translate3d(7.77028px, -15.0247px, 0px) scale(0.76284, 0.76284)"></span><span class="bubble" style="visibility: hidden; opacity: 0; transform: translate3d(-0.119717px, -120px, 0px) scale(0.1, 0.1)"></span><span class="bubble" style="visibility: inherit; opacity: 0.0316049; transform: translate3d(-5.31459px, -119.743px, 0px) scale(0.128444, 0.128444)"></span
                      ><span class="bubble" style="visibility: inherit; opacity: 0.459383; transform: translate3d(-3.2426px, -116.268px, 0px) scale(0.513444, 0.513444)"></span><span class="bubble" style="visibility: inherit; opacity: 1; transform: translate3d(2.33763px, -108.729px, 0px)"></span><span class="bubble" style="visibility: inherit; opacity: 1; transform: translate3d(3.23362px, -97.1286px, 0px)"></span
                      ><span class="bubble" style="visibility: inherit; opacity: 1; transform: translate3d(-3.60971px, -81.4654px, 0px)"></span>
                    </div>
                  </div>
                </div>
                <b class="ft-step__cap">Step 2</b>
                <div class="ft-step__category">Morning Care</div>
                <div class="ft-step__name">크림 스킨 옴므 올인원</div>
              </a>
            </div>
            <div class="swiper-slide" style="width: 302px">
              <a href="/kr/ko/homme/homme-air-light-sun-stick.html" class="ft-step__link" ap-click-area="Product" ap-click-name="Click - Product Detail Link" ap-click-data="스텝_옴므 에어라이트 선 스틱">
                <div class="ft-step__thumb">
                  <img src="/kr/ko/homme/__icsFiles/afieldfile/2020/04/28/bs-homme-air-light-sun-stick-200427.png" class="ft-step__img" alt="옴므 에어라이트 선 스틱" />
                  <div class="item-deco">
                    <div class="item-deco-bubble"><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span></div>
                  </div>
                </div>
                <b class="ft-step__cap">Step 3</b>
                <div class="ft-step__category">Day Care</div>
                <div class="ft-step__name">옴므 에어라이트 선 스틱</div>
              </a>
            </div>
            <div class="swiper-slide" style="width: 302px">
              <a href="/kr/ko/skincare/cream-skin-quick-skin-pack.html" class="ft-step__link" ap-click-area="Product" ap-click-name="Click - Product Detail Link" ap-click-data="스텝_크림 스킨 퀵 스킨 팩">
                <div class="ft-step__thumb">
                  <img src="/kr/ko/homme/__icsFiles/afieldfile/2020/04/28/cs-qsp-best-step-01_1.png" class="ft-step__img" alt="크림 스킨 퀵 스킨 팩" />
                  <div class="item-deco">
                    <div class="item-deco-bubble"><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span></div>
                  </div>
                </div>
                <b class="ft-step__cap">Step 4</b>
                <div class="ft-step__category">Night Care</div>
                <div class="ft-step__name">크림 스킨 퀵 스킨 팩</div>
              </a>
            </div>
          </div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
      </div>
      <div class="ft-tip">
        <div class="wrapper wrapper--8-over-12">
          <header class="pdp__sub-header">
            <em class="pdp__sub-cap">BEAUTY TIPS</em>
            <h3 class="h4 pdp__sub-heading">크림 스킨 옴므 올인원, 이렇게 사용해보세요!</h3>
          </header>

          <ul class="ft-tip__list">
            <li class="ft-tip__item">
              <div class="ft-tip__box">
                <p><b>#닦토로 사용</b>지성 피부이거나 더 산뜻한 사용감을 원한다면 <br />토너로 사용하는 것 처럼 화장솜으로 #닦토 해보세요!</p>
                <div class="ft-tip__imgarea">
                  <video src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_beauty-tips_01_pc.mp4" class="bt_pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
                  <video src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_beauty-tips_02_pc.mp4" class="bt_pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
                </div>
              </div>
            </li>
            <li class="ft-tip__item">
              <div class="ft-tip__box">
                <p><b>#스킨팩으로 사용</b>건성 피부 혹은 즉각적인 피부 진정이 필요할 때 <br />화장솜에 듬뿍 적셔 #스킨팩 해보세요!</p>
                <div class="ft-tip__imgarea">
                  <video src="/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_beauty-tips_03_pc.mp4" class="bt_pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
                </div>
              </div>
            </li>
          </ul>
=======
      <div class="mainImgBox">
        <div class="c_long-video">
          <img class="longImg" src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_detail-PDP_pc.jpg" />
          <video class="longVideo" src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_01_pc.mp4" loop="" autoplay="" muted="" playsinline=""></video>
        </div>
        <div></div>
      </div>

      <div class="c_data">
        <div class="data_header">
          <em class="data_title">CLINICAL DATA</em>
          <h3 class="h4 data_title2">2주의 기적 - 크림 스킨 옴므 올인원 사용 만족도</h3>
        </div>
        <div class="bg">
          <MARQUEE behavior="scroll" scrollamount="10"> #피부진정#로션크림스킵케어#유수분밸런스#건성피부보습#피부진정#로션크림스킵케어#유수분밸런스#건성피부보습#피부진정#로션크림스킵케어#유수분밸런스#건성피부보습#피부진정#로션크림스킵케어#유수분밸런스#건성피부보습 </MARQUEE>
        </div>
        <div class="data">
          <img class="data_img" src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_clinical-data_pc.png" />
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
          <video class="texture_video1" src="https://www.laneige.com//kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_01_pc.mp4" loop="" autoplay="" muted="" playsinline=""></video>
          <div class="texture_ctnt">촉촉하고는 싶지만 번들거림은 부담스러웠던 남자 피부를 위해,</div>
          <div class="texture_ctnt">물 같은 스킨 제형이라 번들거림 없이 바르는 즉시 흡수돼요!</div>
        </div>
        <div class="texture_title2">
          <div class="texture_stitle3">&lt 자사 올인원 제품과 끈적임 비교 TEST &gt</div>
          <video src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_texture_02_pc.mp4" class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
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
            <video src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_how-to_01_pc.mp4" class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
            <div class="how-cnt-box">
              <div class="h4">STEP 1.</div>
              <div class="how-cnt">
                <div>아침, 저녁 세안 후 손바닥에 적당량을 덜어주세요.</div>
                <div>(500원 동전 크기)</div>
              </div>
            </div>
          </li>
          <li>
            <video src="https://www.laneige.com/kr/ko/assets/pdp/homme/201911/20200427_final_cream-skin-refiner-all-in-one_how-to_02.mp4" class="pdp__video" loop="" autoplay="" muted="" playsinline=""></video>
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
        <div class="step1"></div>
        <div class="step2">
          <div class="h4">BEST STEP</div>
          <div class="h2">라네즈가 추천하는 남성 피부 수분 충전 스텝</div>
        </div>
        <div class="step3">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
        </div>
      </div>
    </section>
  </div>
</template>

<script>
<<<<<<< HEAD
import { computed } from '@vue/reactivity';

export default {
  data() {
    return {
      navurl: this.geturl()
=======
export default {
  data() {
    return {
      navurl: this.geturl(),
      isActive1: false,
      isActive2: false,
      isActive3: false,
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
    };
  },
  methods: {
   geturl() {
      return window.location.href.split('#')[1];
<<<<<<< HEAD
   }
  },
  created() {
  },
  computed: {

  }
};
</script>

<style>
.nav-box{
   position: sticky;
   top: 0;
   background-color: white;
=======
    },
    collapsedToggle(ele, activeNm) {
      this[activeNm] = !this[activeNm];
      ele.classList.toggle('collapsed');
    },
  },
  created() {},
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

.nav-box {
  position: sticky;
  top: 60px;
  background-color: white;
  z-index: 4;
  width: 100%;
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
}

.nav {
  position: relative;
  display: flex;
  height: 54px;
  font-size: 1.0625rem;
  justify-content: center;
  color: #ddd;
  border-top: 1px solid;
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
  display: block;
  padding: 0 3em;
  color: #5f5f5f;
  font-weight: 700;
  line-height: 54px;
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

.nav-item:hover::before, nav-item:focus::before{
    transform: translateY(0); 
}

.bottomLine::before {
  transform: translateY(0);
  color: #000;
}

.c_recommend {
  display: flex;
  justify-content: center;
}

<<<<<<< HEAD
=======
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
.bubbles {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 3;
  top: 0;
  left: 0;
  margin-bottom: 100px;
}
.bubble {
  position: absolute;
  bottom: 0;
  width: 40px;
  height: 40px;
  background: rgb(0, 0, 0);
  border-radius: 50%;
  opacity: 0.5;
  animation: flying 15s infinite ease-in-out;
}
.bubble:nth-child(1) {
  width: 40px;
  height: 40px;
  left: 10%;
  animation-duration: 15s;
}
.bubble:nth-child(2) {
  width: 20px;
  height: 20px;
  left: 20%;
  animation-duration: 15s;
  animation-delay: 1s;
}
.bubble:nth-child(3) {
  width: 50px;
  height: 50px;
  left: 35%;
  animation-duration: 17s;
  animation-delay: 2s;
}
.bubble:nth-child(4) {
  width: 80px;
  height: 80px;
  left: 50%;
  animation-duration: 14s;
  animation-delay: 0s;
}
.bubble:nth-child(5) {
  width: 35px;
  height: 35px;
  left: 55%;
  animation-duration: 13s;
  animation-delay: 1s;
}
.bubble:nth-child(6) {
  width: 45px;
  height: 45px;
  left: 65%;
  animation-duration: 15s;
  animation-delay: 3s;
}
.bubble:nth-child(7) {
  width: 25px;
  height: 25px;
  left: 75%;
  animation-duration: 14s;
  animation-delay: 2s;
}
.bubble:nth-child(8) {
  width: 80px;
  height: 80px;
  left: 80%;
  animation-duration: 13s;
  animation-delay: 1s;
}
.bubble:nth-child(9) {
  width: 15px;
  height: 15px;
  left: 70%;
  animation-duration: 16s;
  animation-delay: 0s;
}
.bubble:nth-child(10) {
  width: 50px;
  height: 50px;
  left: 85%;
  animation-duration: 12s;
  animation-delay: 3s;
}
.c_step {
  margin: 60px 0 30px 0;
  position: relative;
  box-sizing: border-box;
  text-align: center;
  background-image: url('https://www.laneige.com/kr/ko/assets/pdp/beststep-bg.jpg');
}
.step1 {
  width: 100%;
  height: 100%;
}

.centerCol {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.centerRow {
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
>>>>>>> 940bbc22b71d9ad42d8490a093e4e1fa056348fa
</style>
