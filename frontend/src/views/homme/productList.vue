<template>
  <ul class="productBox">
    <li class="und-border" v-for="product in selectProduct" :key="product.pro_num">
      <router-link :to="{ name: 'hommeProductDetail', params: { productId: product.pro_num } }">
        <!-- params로 상품번호를 전달 -->
        <div class="column-center">
          <img
            @mouseover="changeImg"
            class="cursor-png"
            @mouseout="reChangeImg($event.target, product.pro_mainimg)"
            :src="$getSrc(product.pro_mainimg)"
            :data-category="product.cate_class"
          />

          <div class="pro_tag">{{ product.pro_tag1 }} {{ product.pro_tag2 }}</div>
          <div class="pro_name">{{ product.pro_name }}</div>
        </div>
      </router-link>
      <div class="heartIconBox">
        <i ref="heart" :data-pro_num="product.pro_num" class="fa-regular fa-heart heartIcon pointer" @click="likeUp"></i>
        <!-- <i class="fa-solid fa-heart bigHeartIcon"></i> -->
      </div>
    </li>
  </ul>
  <div class="pagination">
    <span class="page_text" :data-page="page - 1" @click="changPage"><i class="fa-solid fa-angle-left"></i></span>
    <span
      v-for="(item, idx) in pagingCount.cnt"
      :key="idx"
      :data-page="item"
      @click="changPage"
      class="page_text"
      :class="{ page_text_active: item == page }"
      >{{ item }}</span
    >
    <span :data-page="page + 1" @click="changPage"><i class="fa-solid fa-angle-right"></i></span>
  </div>
</template>
<script>
export default {
  name: 'Params',
  components: {},
  props: {
    name: {
      type: String,
      default: '',
    },
  },
  data() {
    return {
      pagingCount: 0,
      page: 1,
      rowCount: 8,
      startIdx: 0,
      proCount: 1,
    };
  },
  computed: {
    loginToggle: function () {
      return this.$store.state.session_id;
    },
    selectProduct() {
      return this.$store.state.selectProduct;
    },
  },

  watch: {
    loginToggle: function () {
      this.heartClear();
    },
    selectProduct: function () {
      this.getPagingCount();
    },
  },

  beforeCreate() {},
  created() {
    this.getPagingCount();
    this.getProductList();
  },

  beforeMount() {},
  mounted() {},
  beforeUpdate() {},
  updated() {
    this.getHeart();
  },
  beforeUnmount() {},
  unmounted() {},
  methods: {
    async getProductList() {
      const pageProduct = [];
      const getProductList = await this.$get(`/product/getProductList/${this.startIdx}/${this.rowCount}`, {});
      const lastPage = this.page * this.rowCount > getProductList.length ? getProductList.length : this.page * this.rowCount;
      for (let i = this.startIdx; i < lastPage; i++) {
        pageProduct.push(getProductList[i]);
      }
      // console.log(getProductList[this.page-1 ~ this.rowCount-1]);
      this.$store.commit('selectProduct', pageProduct);
      this.$store.commit('getProductList', getProductList);
      //상품 리스트 가져오는 통신
    },
    changeImg(e) {
      if (e.target.dataset.category === '1') {
        e.target.src = 'https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2019/11/17/Active_Water_Skin_Toner_thumb_list.png';
      } else if (e.target.dataset.category === '2') {
        e.target.src =
          'https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2020/04/28/20200427_final_cream-skin-refiner-all-in-one_thumbnails_02_pc.png';
      } else {
        e.target.src = 'https://www.laneige.com/kr/ko/homme/__icsFiles/afieldfile/2021/09/30/Blue_Energy_Skin_Toner_EX_thumb_list.jpg';
      }
    },
    reChangeImg(target, mainImg) {
      target.src = require('@/assets/img' + mainImg);
    },
    async likeUp(e) {
      if (!this.loginToggle) {
        alert('로그인 후 찜을 할 수 있습니다');
        return;
      }

      if (e.target.classList[5] === 'bigHeartIcon') {
        setTimeout(() => {
          const param = { pro_num: e.target.dataset.pro_num };
          this.$post('product/delHeart', param);

          e.target.classList.remove('bigHeartIcon');
          e.target.classList.remove('fa-solid');
        }, 400);
      } else {
        setTimeout(() => {
          const param = { pro_num: e.target.dataset.pro_num };
          const insHeart = this.$post('product/insHeart', param);

          e.target.classList.add('fa-solid');
          e.target.classList.add('bigHeartIcon');

          if (insHeart === 0) {
            alert('찜 하기에 실패하였습니다.');
            return;
          }
        }, 400);
      }
    },

    async getHeart() {
      const getHeartList = await this.$post('product/getHeart', {});
      if (Array.isArray(getHeartList)) {
        getHeartList.result.forEach((heartNum) => {
          this.$refs.heart.forEach((heart) => {
            if (heart.dataset.pro_num == heartNum.pro_num) {
              heart.classList.add('fa-solid');
              heart.classList.add('bigHeartIcon');
            }
          });
        });
      }
    },
    heartClear() {
      this.$refs.heart.forEach((heart) => {
        heart.classList.remove('fa-solid');
        heart.classList.remove('bigHeartIcon');
      });
    },

    // 페이징

    changPage(e) {
      this.page = e.target.dataset.page;
      this.startIdx = (this.page - 1) * this.rowCount;
      this.getProductList();
    },

    async getPagingCount() {
      if (this.$store.state.selectProduct.length < this.rowCount) {
        this.pagingCount.cnt = 1;
      } else {
        this.pagingCount = await this.$get(`/product/getPagingCount/${this.rowCount}`, {});
      }
      console.log(this.pagingCount.cnt);
    },
  },
};
</script>

<style scoped>
.heartIcon {
  position: absolute;
  top: 65%;
  left: 80%;
  font-size: 1rem;
  padding: 10px;
  color: var(--bg-gray);
}
.bigHeartIcon {
  position: absolute;
  top: 65%;
  left: 80%;
  font-size: 1rem;
  color: var(--bg-point);
}
.heartIcon:hover {
  animation: heart-effect 0.5s both;
}

img {
  width: 100%;
  max-width: 250px;
  height: 100%;
}
.cursor-png {
  cursor: url('https://www.laneige.com/kr/ko/assets/image/a/pointer.png'), auto;
}

.productBox {
  display: grid;
  grid-template-rows: repeat(4, minmax(auto, auto));
  grid-template-columns: repeat(4, minmax(auto, auto));
}

.pro_tag {
  color: #767676;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.pro_name {
  font-size: 0.9rem;
  margin-bottom: 2rem;
  color: #000000;
}

.und-border {
  position: relative;

  margin-bottom: 3rem;
  border-bottom: 1px solid #eaeaea;
}

img:hover {
  animation: blink-effect 0.4s;
}

img:not(:hover) {
  animation: blink-effect2 0.4s;
}

.pagination {
  display: flex;
  justify-content: center;
  flex-direction: row;
}

.page_text {
  margin-right: 1rem;
}

.page_text:active {
  color: var(--bg-main);
}

.page_text_active {
  color: var(--bg-main);
}
@keyframes blink-effect {
  0% {
    opacity: 0.3;
  }
  100% {
    opacity: 1;
  }
}

@keyframes blink-effect2 {
  0% {
    opacity: 0.3;
  }
  100% {
    opacity: 1;
  }
}

@keyframes heart-effect {
  0%,
  100% {
    transform: translateX(0);
    transform-origin: 50% 50%;
  }
  30% {
    transform: translateX(-3px) rotate(-1deg);
  }
  60% {
    transform: translateX(3px) rotate(1deg);
  }
}

@media (max-width: 980px) {
  .productBox {
    display: grid;
    grid-template-rows: repeat(2, minmax(auto, auto));
    grid-template-columns: repeat(2, minmax(auto, auto));
  }
}
</style>
