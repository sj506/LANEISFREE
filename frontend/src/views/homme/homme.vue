<template>
  <div>
    <hommeBanner />
    <div class="flexDiv">
      <!-- Large button groups (default and split) -->
      <div class="btn-group">
        <button @click="clickToggle" class="cateBtn toggle flexBtn" type="button" data-bs-toggle="dropdown">
          카테고리
          <i v-if="dNone" class="fa-solid fa-angle-down btni"></i>
          <i v-if="!dNone" class="fa-solid fa-bars btni"></i>
        </button>
        <div class="dropdown-menu">...</div>
      </div>
      <select>
        <option value="">신상품 순</option>
      </select>
    </div>
  </div>
</template>

<script>
import hommeBanner from './hommeBanner';

export default {
  name: '',
  components: { hommeBanner },
  data() {
    return {
      example: '',
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
  border: 1px solid gray;
  font-size: 0.8rem;
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

.btni {
  padding-left: 2.5rem;
}
</style>
