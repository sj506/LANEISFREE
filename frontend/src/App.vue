<template>
  <div>
    <Header />
    <main>
      <router-view />
    </main>
    <Footer />
  </div>
</template>

<script>
import Header from './layout/Header.vue';
import Footer from './layout/Footer.vue';

export default {
  components: { Header, Footer },
  computed: {},
};
</script>

<style>
main {
  margin-top: 60px;
}
</style>
