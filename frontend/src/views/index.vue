<template>
  <div>
    <list-item></list-item>
    <best-seller></best-seller>
    <middle-banner></middle-banner>
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

<style scoped></style>
