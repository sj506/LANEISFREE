<template>
  <div>
    <section id="item-1" class="item">첫번째 섹션</section>
    <section id="item-2" class="item">두번째 섹션</section>
    <section id="item-3" class="item">세번째 섹션</section>
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
html,
body {
  width: 100vw;
  height: 100vh;
  scroll-snap-type: y mandatory;
}

html {
}

.item {
  width: 100vw;
  height: 100vh;

  scroll-snap-align: center;
  scroll-snap-stop: always;
}

.item:nth-child(1) {
  background: green;
}
.item:nth-child(2) {
  background: blue;
}
.item:nth-child(3) {
  background: yellow;
}
</style>
