<template>
  <div class="buypage-container">
    <!-- <button @click="logout">로그아웃</button> -->
    <h1 class="header">결제하기</h1>
    <div class="buy-box">
      <div class="buypage-main">
        <div class="list">
          <h2 class="_hr">주문/배송정보</h2>
          <div class="formBox">
            <div class="formData">
              <label>
                주문자
                <input v-model="user.m_nm" type="text" />
              </label>
            </div>
            <div class="formData">
              <label>
                연락처
                <select class="telInput">
                  <option v-for="(code, idx) in AreaCode" :key="idx" :value="code">{{ code }}</option>
                </select>
              </label>
              - <input v-model="userPhNum[1]" class="telInput" type="text" /> - <input v-model="userPhNum[2]" class="telInput" type="text" />
            </div>
            <div class="formData">
              <label>이메일 <input class="emailInputBox" v-model="user.m_email" type="text" /></label>
            </div>
            <!-- 이메일 형식으로 -->
            <div class="formData">
              <div>
                배송지 선택
                <button>배송지 관리</button>
                <div v-show="userAddr === 0">
                  {{ productDetail.m_addr }}
                </div>
                <button>새로운 배송지</button>
              </div>
            </div>
            <div class="formData">
              <label class="formData"
                >배송 요청사항
                <select class="" @change="getOption" v-model="RequireOption">
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
          <div class="orderInfo">
            <!-- {{ productDetail.pro_mainimg }} -->
            <img :src="this.$getSrc(productDetail.pro_mainimg)" />
            {{ productDetail.pro_name }}
            <div><input type="number" min="0" v-model="productCount" />개</div>
            <div>{{ $addComma(price()) }}원</div>
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
          {{ selectPayment }}
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
            <div>주문할 상품의 상품명, 상품가격, 배송정보를 확인하였으며, 구매 진행에 동의 하시겠습니까? (전자상거래법 제8조 제2항)</div>
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
      payment: ['신용카드 결제', '원클릭 결제', '다른 결제수단'],
      paymentCate: '신용카드 결제',
      RequireOption: '배송 요청사항을 선택해 주세요.',
      productDetail: '',
      productCount: 1,
      selectPayment: '신용카드로 결제할 페이지',
      payAgree: false,
      user: '',
      userPhNum: [],
      userAddr: 0,
    };
  },
  beforeCreate() {},
  created() {
    this.productDetail = this.$store.state.getProductList[this.$route.params.productId - 1];
    console.log(this.productDetail);
    if (!this.$store.state.user) {
      alert('로그인 한 유저만 구매가 가능합니다.');
      this.$router.push('signin');
    } else {
      this.user = this.$store.state.user.result;
      console.log(this.user);
      this.getTel();
    }
  },
  beforeMount() {},
  mounted() {},
  beforeUpdate() {},
  updated() {},
  beforeUnmount() {},
  unmounted() {},
  methods: {
    logout() {
      this.$store.commit('user', null);
      this.$router.push('signin');
    },
    getOption() {
      console.log(this.RequireOption);
    },
    price() {
      return this.productCount * this.productDetail.pro_price;
    },
    changePayment() {
      if (this.paymentCate === this.payment[0]) {
        this.selectPayment = '신용카드로 결제할 페이지';
      } else if (this.paymentCate === this.payment[1]) {
        this.selectPayment = '원클릭으로 결제할 페이지';
      } else {
        this.selectPayment = '다른 결제수단으로 결제할 페이지';
      }
    },
    buy() {
      if (this.payAgree === false) {
        alert('결제진행 동의를 해야만 구매가 가능합니다.');
        return;
      }
    },
    getTel() {
      console.log(this.user.m_tel);
      const phNum = this.user.m_tel.split('-');
      console.log(phNum);
      this.userPhNum = phNum;
    },
  },
};
</script>

<style scoped>
.header {
  margin: 3rem 0rem 7rem 3rem;
  /* 위 오른쪽 아래 왼쪽 */
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
  width: 40rem;
}

img {
  width: 10rem;
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
.mt {
  margin-top: 1rem;
}

/* 재훈형 파트 */
.buypage-container {
  width: 100vw;
  display: flex;
  flex-direction: column;
  max-width: 1180px;
}

.buy-section {
  margin: 40px;
  /* position: -webkit-sticky; */
  position: sticky;
  top: 100px;
  height: 25vh;
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
</style>
