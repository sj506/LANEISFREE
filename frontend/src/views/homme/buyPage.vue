<template>
  <div class="buypage-container">
    <h1 class="header">결제하기</h1>
    <div class="buy-box">
      <div class="buypage-main">
        <div class="list">
          <h2 class="_hr">주문/배송정보</h2>
          <div class="formBox">
            <div class="formData">
              <label>
                <span class="star">*</span>
                주문자
                <input class="ml-10" v-model="userData.m_nm" type="text" />
              </label>
            </div>
            <div class="formData">
              <label>
                <span class="star">*</span>
                연락처
                <select class="telInput ml-10" @change="changeTel1" v-model="userData.m_tel1">
                  <option v-for="(code, idx) in AreaCode" :key="idx" :value="code">{{ code }}</option>
                </select>
              </label>
              - <input v-model="userData.m_tel2" class="telInput" type="text" /> -
              <input v-model="userData.m_tel3" class="telInput" type="text" />
            </div>
            <div class="formData">
              <label>
                <span class="star">*</span>
                이메일 <input class="emailInputBox ml-10" v-model="userData.m_email" type="text"
              /></label>
            </div>
            <!-- 이메일 형식으로 -->
            <div class="formData">
              <div>
                <span class="star">*</span>
                배송지 선택
                <button ref="addrBtn1" class="addrBtn activeBd ml-8" @click="toggleBtn">배송지 관리</button>
                <button ref="addrBtn2" class="addrBtn" @click="toggleBtn">새로운 배송지</button>

                <div class="addrBox" v-if="userAddr === 0">
                  {{ userData.m_addr }}
                </div>
                <div class="addrBox" v-else>
                  <label>주소</label>
                  <div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <input type="text" v-model="userData.postcode" class="form-control" placeholder="우편번호" />
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="button" @click="execDaumPostcode()" class="btn btn-secondary my-1 btn-sm" value="우편번호 찾기" />
                      </div>
                    </div>
                    <div>
                      <input type="text" v-model="userData.m_addr" class="form-control mb-3" placeholder="주소" />
                      <input type="text" v-model="userData.detailAddr" class="form-control mb-3" placeholder="상세주소" />
                      <input type="text" v-model="userData.extraAddr" class="form-control mb-3" placeholder="참고항목" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="formData">
              <label class="formData">
                <span class="star">*</span>
                배송 요청사항
                <select class="" v-model="RequireOption">
                  <option v-if="RequireOption === '배송 요청사항을 선택해 주세요.'">{{ RequireOption }}</option>
                  <option v-for="(option, idx) in Requirements" :key="idx" :value="option">{{ option }}</option>
                </select>
                <div>
                  <input
                    class="longInputBox"
                    v-if="RequireOption === '메세지 직접 입력'"
                    type="text"
                    placeholder="배송 요청사항을 입력해주세요.(최대 45자까지 입력)"
                  />
                </div>
              </label>
            </div>
          </div>
          <hr />
        </div>
        <!-- ---------------------------- -->
        <div class="list">
          <h2 class="_hr">주문 상품 정보</h2>
          <div class="orderInfo" v-for="(basketData, idx) in basketList" :key="idx">
            <!-- {{ productDetail.pro_mainimg }} -->
            <img :src="this.$getSrc(basketData.pro_mainimg)" />
            <div class="pro_name">{{ basketData.pro_name }}</div>
            <div><input type="number" min="1" v-model="basketData.ba_stock" />개</div>
            <td>{{ this.$addComma(basketData.ba_stock * basketData.pro_price) }}원</td>
            <td><i :data-pro_num="basketData.pro_num" @click="delLike" class="fa-solid fa-x pointer"></i></td>
          </div>
          <hr />
        </div>
        <!-- ---------------------------- -->
        <div class="list">
          <h2 class="_hr">결제수단 선택</h2>
          <div class="mt">
            <span v-for="(payment, idx) in payment" :key="idx" class="changePayment">
              <input @change="changePayment" :value="payment" type="radio" name="payment" v-model="paymentCate" /> {{ payment }}
            </span>
          </div>
          <hr />
          <div class="mb-5 column-center" v-show="selectPayment === 0">
            <img style="width: 800px; cursor: pointer" src="@/assets/img/bank.png" />
            <span class="interest">무이자할부안내</span>
          </div>
          <div class="mb" v-show="selectPayment === 1">
            <button class="cardBtn"><span class="cardBtnImg">대표카드를 등록해주세요</span></button>
            <div class="buyCaution">
              저희 쇼핑몰은 고객님의 안전한 거래를 위해 무통장입금/계좌이체 거래에 대해 구매안전서비스를 적용하고 있습니다.
            </div>
          </div>
          <hr />
        </div>
        <!-- ---------------------------- -->

        <div class="mb-6">
          <h3>유의사항</h3>
          ※주문 변경 시 카드사 혜택 및 할부 적용 여부는 해당 카드사 정책에 따라 변경될 수 있습니다. <br />
          네이버페이는 네이버ID로 별도 앱 설치 없이 신용카드 또는 은행계좌 정보를 등록하여 네이버페이 비밀번호로 결제할 수 있는 간편결제 서비스입니다.
          <br />
          ※결제 가능한 신용카드: 신한, 삼성, 현대, BC, 국민, 하나, 롯데, NH농협, 씨티, 카카오뱅크
          <br />
          ※결제 가능한 은행: NH농협, 국민, 신한, 우리, 기업, SC제일, 부산, 경남, 수협, 우체국, 미래에셋대우, 광주, 대구, 전북, 새마을금고, 제주은행,
          신협, 하나은행, 케이뱅크, 카카오뱅크, 삼성증권
          <br />
          ※네이버페이 카드 간편결제는 네이버페이에서 제공하는 카드사 별 무이자, 청구할인 혜택을 받을 수 있습니다.
          <br />
          ※네이버페이로 결제 완료 시 결제하신 수단으로만 환불됩니다.
          <br />
          ※간편 신용카드/체크카드 : 취소 완료 후 3~5영업일 이후 환불(승인/매입 구분 불가) <br />
          ※간편 계좌이체 : 취소 완료 즉시 환불(단, 은행 정기점검시간등에는 환불 실패)
          <br />
          ※포인트 : 취소 완료 즉시 환불
          <div>저희 쇼핑몰은 고객님의 안전한 거래를 위해 무통장입금/계좌이체 거래에 대해 구매안전서비스를 적용하고 있습니다.</div>
        </div>
      </div>
      <!-- -------------------------------------------------------- -->
      <section class="buy-section">
        <h3>결제예정 금액</h3>
        <div class="sectionBuyBox">
          <div class="flex-between buy-section-txt">
            <div>주문금액</div>
            <div>{{ $addComma(price()) }}원</div>
          </div>
          <!-- ---------------------------- -->
          <div class="flex-between buy-section-txt">
            <div>할인금액</div>
            <div class="d-flex">
              <div class="discount">0</div>
              원
            </div>
          </div>
          <!-- ---------------------------- -->
          <div class="flex-between buy-section-txt">
            <div>배송비</div>
            <div>무료</div>
          </div>
          <!-- ---------------------------- -->
          <hr />
          <div class="flex-between total-amount">
            <div class="txt">최종결제금액</div>
            <div class="num">{{ $addComma(price()) }}원</div>
          </div>
          <!-- ---------------------------- -->
          <div class="essential">
            <label> <input type="checkbox" v-model="payAgree" /> [필수] 구매조건 및 결제 진행동의 </label>
            <div>
              주문할 상품의 상품명, 상품가격, 배송정보를 확인하였으며, 구매 진행에 동의 하시겠습니까? <br />
              (전자상거래법 제8조 제2항)
            </div>
          </div>
        </div>
        <div class="buyBtn">
          <button @click="buy">{{ $addComma(price()) }}원 결제하기</button>
        </div>
      </section>
      <!-- -------------------------------------------------------- -->
    </div>
  </div>
</template>
<script>
export default {
  props: {
    name: {
      type: String,
      default: '',
    },
  },
  components: {},
  data() {
    return {
      AreaCode: ['010', '011', '016', '017', '018', '019'],
      Requirements: [
        '부재시 경비(관리)실에 맡겨주세요.',
        '부재시 문 앞에 놓아주세요',
        '파손의 위험이 있는 상품이 있으니, 배송에 주의해주세요.',
        '배송 전에 연락주세요.',
        '메세지 직접 입력',
      ],
      payment: ['신용카드 결제', '원클릭 결제'],
      paymentCate: '신용카드 결제',
      RequireOption: '배송 요청사항을 선택해 주세요.',
      productDetail: '',
      selectPayment: 0,
      payAgree: false,
      userData: {
        pro_num: 0,
        m_num: 0,
        m_nm: '',
        m_email: '',
        m_tel1: '010',
        m_tel2: '',
        m_tel3: '',
        postcode: '',
        m_addr: '',
        detailAddr: '',
        extraAddr: '',
      },
      basketList: {},
      userPhNum: [],
      userAddr: 0,
    };
  },

  computed: {
    loginToggle: function () {
      return this.$store.state.session_id;
    },
  },
  watch: {
    loginToggle: function () {
      this.loginCheck();
    },
  },
  beforeCreate() {},
  created() {
    this.getBasket();
    this.getUserTel();
    this.userData.m_num = this.$store.state.user.result.m_num;
    this.userData.m_nm = this.$store.state.user.result.m_nm;
    this.userData.m_email = this.$store.state.user.result.m_email;
    this.userData.m_addr = this.$store.state.user.result.m_addr;
    console.log(this.userData);
  },
  beforeMount() {},
  beforeUpdate() {},
  updated() {},
  unmounted() {},
  mounted() {
    window.addEventListener('beforeunload', this.unLoadEvent);
  },
  beforeUnmount() {
    window.removeEventListener('beforeunload', this.unLoadEvent);
  },
  methods: {
    async getBasket() {
      const param = { m_num: this.$store.state.user.result.m_num };
      const selbasket = await this.$post('product/selbasket', param);
      this.basketList = selbasket.result;
      console.log(this.basketList);
    },
    unLoadEvent: function (event) {
      if (this.canLeaveSite) return;

      event.preventDefault();
      event.returnValue = '';
    },
    getUserTel() {
      const userTel = this.$store.state.user.result.m_tel.split('-');
      this.userData.m_tel1 = userTel[0];
      this.userData.m_tel2 = userTel[1];
      this.userData.m_tel3 = userTel[2];
    },
    changeTel1(e) {
      this.basketList.m_tel1 = e.target.value;
    },
    loginCheck() {
      if (!this.$store.state.session_id) {
        alert('로그인 한 유저만 구매가 가능합니다.');
        this.$router.push('signin');
      }
    },
    logout() {
      this.$store.commit('user', null);
      this.$router.push('signin');
    },
    price() {
      let product_price = 0;
      this.basketList.forEach((basketList) => {
        product_price += basketList.ba_stock * basketList.pro_price;
      });
      return product_price;
    },
    changePayment() {
      if (this.paymentCate === this.payment[0]) {
        this.selectPayment = 0;
      } else if (this.paymentCate === this.payment[1]) {
        this.selectPayment = 1;
      } else {
        this.selectPayment = 2;
      }
    },
    async buy() {
      if (this.payAgree === false) {
        alert('결제진행 동의를 해야만 구매가 가능합니다.');
        return;
      }
      const buyList = this.basketList;
      this.basketList.forEach((item) => {
        item.m_num = this.userData.m_num;
        item.m_nm = this.userData.m_nm;
        item.m_email = this.userData.m_email;
        item.m_addr = this.userData.m_addr;
        item.detailAddr = this.userData.detailAddr;
        item.extraAddr = this.userData.extraAddr;
        item.m_tel1 = this.userData.m_tel1;
        item.m_tel2 = this.userData.m_tel2;
        item.m_tel3 = this.userData.m_tel3;
        item.postcode = this.userData.postcode;
      });
      console.log(buyList);
      const result = await this.$post('product/productBuy', buyList);
      if (result) {
        alert('결제 완료되었습니다.');
        this.$router.push('/mypageOnlineOrderList');
      } else {
        alert('결제에 실패하였습니다.');
        return;
      }
    },
    toggleBtn(e) {
      this.userAddr -= 1;
      this.userAddr *= -1;
      this.$refs.addrBtn1.classList.remove('activeBd');
      this.$refs.addrBtn2.classList.remove('activeBd');
      e.target.classList.add('activeBd');
      console.log(this.userAddr);
    },
    execDaumPostcode() {
      new window.daum.Postcode({
        oncomplete: (data) => {
          if (this.userData.extraAddr !== '') {
            this.userData.extraAddr = '';
          }
          if (data.userSelectedType === 'R') {
            // 사용자가 도로명 주소를 선택했을 경우
            this.userData.m_addr = data.roadAddress;
          } else {
            // 사용자가 지번 주소를 선택했을 경우(J)
            this.userData.m_addr = data.jibunAddress;
          }

          // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
          if (data.userSelectedType === 'R') {
            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
            if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
              this.userData.extraAddr += data.bname;
            }
            // 건물명이 있고, 공동주택일 경우 추가한다.
            if (data.buildingName !== '' && data.apartment === 'Y') {
              this.userData.extraAddr += this.userData.extraAddr !== '' ? `, ${data.buildingName}` : data.buildingName;
            }
            // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
            if (this.userData.extraAddr !== '') {
              this.userData.extraAddr = `(${this.userData.extraAddr})`;
            }
          } else {
            this.userData.extraAddr = '';
          }
          // 우편번호를 입력한다.
          this.userData.postcode = data.zonecode;
        },
      }).open();
    },
    async delLike(e) {
      const param = {
        m_num: this.$store.state.user.result.m_num,
        pro_num: e.target.dataset.pro_num,
      };
      const delLike = await this.$post('product/delLike', param);
      console.log(delLike);
      this.getBasket();
    },
  },
};
</script>

<style scoped>
.header {
  margin: 3rem 0rem 7rem 3rem;
  /* 위 오른쪽 아래 왼쪽 */
}

.ml-10 {
  margin-left: 10rem;
}
.mb {
  margin-bottom: 5rem;
}
._hr {
  padding-bottom: 1rem;
  border-bottom: 1px solid #000000;
}
.list {
  font-size: 1rem;
  width: 100%;
  margin-bottom: 6rem;
}
.formBox {
  display: flex;
  flex-direction: column;
}
.formData {
  padding-top: 0.8rem;
  line-height: 2rem;
}

select {
  height: 2.3rem;
  padding-left: 0.6rem;
}
.telInput {
  width: 5rem;
}
.sectionBuyBox {
  border: 2px solid #000000;
  padding: 20px;
}

.emailInputBox {
  width: 20rem;
}
.longInputBox {
  margin-top: 1rem;
  margin-left: 7.1rem;
  width: 40rem;
}

img {
  width: 10rem;
}

input {
  padding-left: 10px;
}

.orderInfo {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.orderInfo input {
  height: 30px;
  width: 50px;
}
.mb-6 {
  margin-bottom: 6rem;
  line-height: 150%;
}
.changePayment {
  margin-right: 2rem;
}
.star {
  color: rgba(255, 0, 0, 0.774);
}
.mt {
  margin-top: 1rem;
}

/* 재훈형 파트 */
.buypage-container {
  width: 100vw;
  display: flex;
  flex-direction: column;
  max-width: 1400px;
}

.buy-section {
  margin: 40px;
  /* position: -webkit-sticky; */
  position: sticky;
  top: 100px;
  height: 25vh;
  width: 500px;
}
.buy-box {
  display: flex;
  justify-content: space-between;
  padding: 20px;
}

.flex-between {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.buy-section-txt {
  margin: 20px 0;
}
.total-amount {
  margin: 20px 0;
}
.total-amount .num {
  font-size: 30px;
  font-weight: bold;
  color: var(--text-point);
}
.total-amount .txt {
  font-size: 18px;
  font-weight: bold;
}

.essential {
  line-height: 20px;
  color: var(--text-gray);
}
.essential label {
  font-size: 18px;
  margin: 20px 0;
  color: var(--text-dark-gray);
}
.buyBtn button {
  margin-top: 20px;
  width: 100%;
  height: 80px;
  font-size: 24px;
  font-weight: bold;
  background-color: var(--bg-main);
  border: none;
  color: var(--text-white);
}
.discount {
  color: tomato;
}

.addrBox {
  margin: 1.5rem 0 0 0;
  padding: 24px;
  background: #f3f3f3;
}

.addrBtn {
  border: 1px solid rgb(173, 173, 173);
  margin-left: 2rem;
  padding-left: 15px;
  padding-right: 15px;
  font-size: 0.9rem;
}

.ml-8 {
  margin-left: 8rem;
}
.activeBd {
  border: 1px solid #222;
}

.interest {
  font-size: 0.9rem;
  border-bottom: 1px solid #000000;
  margin-top: 1.5rem;
  margin-right: 45rem;
  cursor: pointer;
}

.cardBtn {
  display: block;
  width: 328px;
  height: 200px;
  margin: 0 auto;
  background: #a7a7a7;
  border-radius: 15px;
  color: #fff;
  font-family: 'SDNeoL', 'notoL';
  border: none;
}

.buyBtn > button:hover {
  animation: buyBtn-hover-effect 1s;
}

.cardBtnImg {
  display: block;
  padding-top: 72px;
  background: url(https://images.innisfree.co.kr/resources/web2/images/order/btn_add_card.png) no-repeat 50% 0;
}

.buyCaution {
  margin-top: 3rem;
  text-align: center;
  color: #949494;
}

.pro_name {
  width: 200px;
  text-align: center;
}

@keyframes buyBtn-hover-effect {
  50% {
    opacity: 0.9;
    color: #ffffff;
  }
  100% {
    opacity: 1;
    color: #ffffff;
  }
}

@media (max-width: 1240px) {
  .buy-section {
    display: flex;
    flex-direction: column;
    position: static;
    top: 0px;
    height: 100%;
    width: 80%;
  }
  .buy-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
}
</style>
