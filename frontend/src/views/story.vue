<template>
  <div>
    <div class="scroll-container">
      <div class="scroll-area">1</div>
      <div class="scroll-area">2</div>
      <div class="scroll-area">3</div>
      <div class="scroll-area">4</div>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  data() {
    return {
      sampleData: '',
    };
  },
  setup() {},
  created() {},
  mounted() {},
  unmounted() {},
  methods: {},
};
</script>

<style scoped>
.scroll-container {
  overflow-x: hidden;
}
.scroll-container,
.scroll-area {
  width: 100vw;
  height: 100vh;
  font-size: 60px;
}

.scroll-container {
  overflow: auto;
  scroll-snap-type: y mandatory;
}

.scroll-area {
  scroll-snap-align: start;
}

.scroll-container,
.scroll-area {
  margin: 0 auto;
}

.scroll-area {
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
}

.scroll-area:nth-of-type(1) {
  background: #49b293;
}

.scroll-area:nth-of-type(2) {
  background: #c94e4b;
}

.scroll-area:nth-of-type(3) {
  background: #4cc1be;
}

.scroll-area:nth-of-type(4) {
  background: #8360a6;
}
</style>
