<template>
  <div id="container">
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide />

    </section>
  </div>
</template>

<script>
import myPageHeader from '@/layout/myPageHeader';
import myPageSide from '@/layout/myPageSide';
  export default {
  name: '',
  components: { myPageHeader, myPageSide },
  }
</script>

<style scoped>

</style>