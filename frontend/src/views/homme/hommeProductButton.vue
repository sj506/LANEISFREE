<template>
  <div class="btn-group">
    <button @click="clickToggle" class="cateBtn flexBtn toggle" type="button" data-bs-toggle="dropdown">
      {{ productCateNm }}
      <i v-if="dNone" class="fa-solid fa-angle-down btni"></i>
      <i v-if="!dNone" class="fa-solid fa-angle-up btni"></i>
    </button>
    <div class="dropdown-menu dropDownBox cate2Box">
      <div>
        <span class="active pointer" ref="new" @click="addActive1">신상품순</span>
      </div>
      <div>
        <span ref="best" class="pointer" @click="addActive2">베스트순</span>
      </div>
    </div>
  </div>
  <!-- 카테고리 buttton -->
</template>

<script>
export default {
  name: '',
  data() {
    return {
      example: '',
      productCateNm: '신상품순',
      dNone: true,
    };
  },
  beforeCreate() {},
  created() {},
  beforeMount() {},
  mounted() {},
  beforeUpdate() {},
  updated() {},
  beforeUnmount() {},
  unmounted() {},
  methods: {
    clickToggle() {
      this.dNone = !this.dNone;
    },
    addActive1(e) {
      this.productCateNm = e.target.innerText;
      this.$refs.best.classList.remove('active');
      this.$refs.new.classList.add('active');
    },
    addActive2(e) {
      this.productCateNm = e.target.innerText;
      this.$refs.best.classList.add('active');
      this.$refs.new.classList.remove('active');
    },
  },
};
</script>

<style scoped>
.flexDiv {
  margin: 2rem;
  display: flex;
  flex-direction: row;
  align-content: center;
  margin-left: 3rem;
}

.cateBtn {
  border: 1px solid #cacaca;
  font-size: 0.9rem;
  padding: 10px;
  border-radius: 0;
  padding-right: 3rem;
}

.flexBtn {
  display: flex;
  flex-direction: row;
  padding-right: 1rem;
  background-color: #ffffff;
}
.active {
  border-bottom: 1px solid;
  color: #4477be !important;
}

.btni {
  padding-left: 2.5rem;
}

.dropDownBox {
  border: 1px solid #cacaca;
  border-radius: 0;
  padding: 10px;
  --bs-dropdown-min-width: 8.6rem;
}

.cateBox {
  width: 55rem;
  border-radius: 0;
  font-size: 0.8rem;
  padding: 3rem;
  padding-left: 2.5rem;
  padding-right: 2.5rem;
}

.cate2Box {
  font-size: 0.9rem;
}

.cate2Box div {
  margin-top: 0.5rem;
  margin-bottom: 0.7rem;
  padding: 0;
}
</style>
