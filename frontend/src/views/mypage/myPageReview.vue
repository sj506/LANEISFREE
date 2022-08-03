<template>
  <div id="container">
    <myPageHeader />
    <section class="contents d-flex row">
      <myPageSide />
      <div class="col-9 reviewHeader">
        <h3>내 리뷰</h3>
        <div class="reviewDiv">
          <div class="reviewP">작성 가능한 리뷰</div>
          <div class="reviewW">내가 작성한 리뷰</div>
        </div>
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
    data() {
        return {
       
        };
    },
}
</script>

<style scoped>
h3{
  font-size: 30px;
  font-weight: 600;
  padding-bottom: 20px;
}

#container {
  min-height: 500px;
  padding-bottom: 110px;
  border-top: 1px solid transparent;
}

.contents{
  max-width: 1067px;
  min-width: 811px;
  margin: auto;
}
.reviewHeader{
  padding: 40px;
}
.reviewDiv{
  display: flex;

}
.reviewP{
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}
.reviewW{
  width: 513px;
  height: 62px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>