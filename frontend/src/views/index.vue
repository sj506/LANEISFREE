<template>
  <div class="index-container column-center">
    <list-item></list-item>
    <div class="index-main column-center">
      <best-seller></best-seller>
      <middle-banner></middle-banner>
    </div>
  </div>
</template>

<script>
import ListItem from '../components/ListItem.vue';
import BestSeller from '@/components/BestSeller.vue';
import MiddleBanner from '@/components/MiddleBanner.vue';
export default {
  components: { ListItem, BestSeller, MiddleBanner },
  data() {
    return {};
  },
  setup() {},
  created() {},
  mounted() {
    AOS.init();
  },
  unmounted() {},
  methods: {},
};
</script>

<style scoped>
.index-container {
  width: 100vw;
  overflow: hidden;
}
.index-main {
  max-width: 1180px;
  margin-bottom: 100px;
}
</style>
