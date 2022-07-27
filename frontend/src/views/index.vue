<template>
  <div>
    <main class="index-main">
      <list-item></list-item>
      <best-seller></best-seller>
    </main>
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
main {
  margin-top: 60px;
}
</style>
