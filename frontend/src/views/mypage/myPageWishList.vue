<template>
  <div class="containers">
    <myPageHeader />
    <section class="d-flex row align-items-baseline justify-content-between">
      <myPageSide />
      <div class="col-9">
        <h3>찜한 제품</h3>
      </div>
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
.containers {
  width: 100%;
}

</style>