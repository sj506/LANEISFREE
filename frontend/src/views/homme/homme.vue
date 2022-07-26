<template>
  <div>
    <hommeBanner />
    <hommeButton />
  </div>
  bu
</template>

<script>
import hommeBanner from './hommeBanner';
import hommeButton from './hommeButton';

export default {
  name: '',
  components: { hommeBanner, hommeButton },
  data() {
    return {
      example: '',
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
  methods: {},
};
</script>

<style scoped>
@media (max-width: 59.99em) {
  .mobile {
    display: block;
  }
}
</style>
