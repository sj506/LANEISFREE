<template>
  <div @wheel="wheelEvent">
    <div class="section column-center">
      <img src="@/assets/img/story/visual-logo.png" alt="" />
      <h3>내 피부 본연의 건강한 빛, 내 삶의 빛나는 자신감.</h3>
      <h4>Radiance on my skin, Confidence in my life.</h4>
      <div class="down-icon"><i class="fa-solid fa-angle-down"></i></div>
    </div>
    <div class="section column-center ms-5 me-5">
      <div class="flex-center">
        <img src="@/assets/img/story/glow01-img.png" class="mw-40 me-5" alt="" />
        <div class="ms-5 me-5 mw-40">
          <h2>라네즈는 피부의 건강한 빛은 물론<br />삶까지 빛나는 자신감을 선사합니다.</h2>
          <p>
            라네즈는 누군가 정의한 아름다움을 따르는 것이 아닌 개개인의<br />
            다양성과 자신만의 반짝임을 존중합니다.
          </p>
          <p>
            자신의 피부가 가진 건강함을 되찾을 수 있도록 라네즈는 오늘도<br />
            당신의 피부를 위한 최적의 솔루션을 찾기 위해 분석하고 연구하죠.
          </p>
          <p>
            라네즈가 선사하는 최적의 피부 솔루션으로 피부 본연의 건강한 빛을 되찾고<br />
            더 나아가 스스로를 믿고 자신감을 가지고 나아가세요.
          </p>
          <p>라네즈와 함께라면 언제나 빛나고 아름다울 거에요.</p>
          <h3>FEEL the GLOW with LANEIGE.</h3>
        </div>
      </div>
    </div>
    <div class="section">3</div>
    <div class="section">4</div>
    <div class="section">5</div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },

  methods: {
    wheelEvent() {
      const elm = document.querySelectorAll('.section');
      const elmCount = elm.length;
      elm.forEach(function (item, index) {
        item.addEventListener('mousewheel', function (event) {
          event.preventDefault();
          let delta = 0;

          if (!event) event = window.event;
          if (event.wheelDelta) {
            delta = event.wheelDelta / 120;
            if (window.opera) delta = -delta;
          } else if (event.detail) delta = -event.detail / 3;

          let moveTop = window.scrollY;
          let elmSelector = elm[index];

          // wheel down : move to next section
          if (delta < 0) {
            if (elmSelector !== elmCount - 1) {
              try {
                moveTop = window.pageYOffset + elmSelector.nextElementSibling.getBoundingClientRect().top;
              } catch (e) {}
            }
          }
          // wheel up : move to previous section
          else {
            if (elmSelector !== 0) {
              try {
                moveTop = window.pageYOffset + elmSelector.previousElementSibling.getBoundingClientRect().top;
              } catch (e) {}
            }
          }

          const body = document.querySelector('html');
          window.scrollTo({ top: moveTop, left: 0, behavior: 'smooth' });
        });
      });
    },
  },
};
</script>

<style scoped>
.section {
  padding-top: 60px;
  width: 100vw;
  height: 100vh;
}
.section:first-child {
  background: url('https://www.laneige.com/kr/ko/assets/image/brand/feel-the-glow/img_20211215_visual-pc.jpg');
  object-fit: cover;
  color: var(--text-white);
}
.section:first-child h3 {
  margin-top: 30px;
}
.section h4 {
  font-size: 18px;
  font-weight: normal;
}
.section p {
  margin: 20px 0;
  color: var(--text-gray);
  line-height: 30px;
}
.mw-40 {
  max-width: 40%;
}
.section h2 {
  font-size: 26px;
}
.section h3 {
  font-size: 18px;
}
</style>
