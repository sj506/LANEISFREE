<template>
  <div>
    <HommeBanner />
    <div class="flexDiv">
      <select>
        <option value="">신상품 순</option>
      </select>
    </div>
    <div class="dropdown show">
      <a
        class="btn btn-secondary dropdown-toggle"
        href="#"
        role="button"
        id="dropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        Dropdown link
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
  </div>
</template>

<script>
import HommeBanner from './hommeBanner.vue';

export default {
  components: { HommeBanner },
};
</script>

<style scoped>
.flexDiv {
  margin: 2rem;
  display: flex;
  flex-direction: row;
  align-content: center;
  margin-left: 3rem;
}
</style>
