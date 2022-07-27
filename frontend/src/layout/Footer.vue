<template>
  <footer>
    <div class="footer-header flex-center">
      <div class="footer-top">
        <ul class="footer-links">
          <li><a href="https://www.apgroup.com/int/ko/">회사소개</a></li>
          <li><a href="https://www.beautypoint.co.kr/footer/agreement.do">서비스이용약관</a></li>
          <li><a href="https://www.beautypoint.co.kr/footer/privacy.do">개인정보처리방침</a></li>
          <li><a href="https://www.apgroup.com/int/ko/misc/cctv-policies-and-procedures/cctv-policies-and-procedures.html">영상정보처리방침</a></li>
          <li><a href="https://www.beautypoint.co.kr/beautypoint/about.do">뷰티포인트</a></li>
          <li><a href="">사이트맵</a></li>
          <li><a href="">공지사항</a></li>
        </ul>
        <ul class="footer-sns flex-center">
          <li>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-brands fa-tiktok"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom column-center">
      <div class="footer-main">
        <div class="company-info flex-center">
          <span>고객상담실 (수신자요금부담) 080-230-5454</span>
          <span>운영시간 : 월 ~ 금 09:00 ~ 18:00</span>
          <div class="certification">
            <img src="https://www.laneige.com/kr/ko/assets/image/a/wa-mark.png" alt="" />
          </div>
        </div>
        <div class="language">언어</div>
      </div>
      <div class="company-box">
        <div>
          <strong> © AMOREPACIFIC </strong>
          CORPORATION. ALL RIGHTS RESERVED.
        </div>
      </div>
    </div>
  </footer>
</template>
<script>
export default {
  components: {},
  data() {
    return {
      sampleData: '',
    };
  },
  methods: {},
};
</script>

<style scoped>
footer {
  position: static;
  bottom: 0;
  left: 0;
  right: 0;
  padding-bottom: 100px;
  background-color: var(--bg-white);
}
footer a {
  color: var(--text-black);
}
.footer-header {
  border-top: 1px solid var(--text-light-gray);
  border-bottom: 1px solid var(--text-light-gray);
}
.footer-top {
  width: 100%;
  max-width: 1180px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.footer-links li:not(:first-child) {
  margin-left: 20px;
}
.footer-links {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.footer-sns i {
  padding: 10px;
  font-size: 24px;
}
.footer-main {
  margin-top: 20px;
  width: 100%;
  max-width: 1180px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.company-info span {
  padding: 0 20px;
  height: 20px;
}

.company-info span:not(:first-child) {
  border-left: 1px solid var(--text-light-gray);
}
.company-box {
  margin-top: 20px;
  width: 100%;
  max-width: 1180px;
}

@media screen and (max-width: 975px) {
  footer {
    background-color: #eaeaea;
    padding: 20px;
  }
  .footer-header {
    display: none;
  }
  .footer-main {
    display: none;
  }
}
</style>
