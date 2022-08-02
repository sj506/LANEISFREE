<template>
  <div>
    <list-item></list-item>
    <best-seller></best-seller>
  </div>
</template>

<script>
import ListItem from '../components/ListItem.vue';
import BestSeller from '@/components/BestSeller.vue';
export default {
  components: { ListItem, BestSeller },
  data() {
    return {};
  },
  setup() {},
  created() {},
  mounted() {},
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
