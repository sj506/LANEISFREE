<template>
  <div>
    <hommeBanner />
    <hommeCategoryButton />
  </div>
  bu
</template>

<script>
import hommeBanner from './hommeBanner';
import hommeCategoryButton from './hommeCategoryButton';

export default {
  name: '',
  components: { hommeBanner, hommeCategoryButton },
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
