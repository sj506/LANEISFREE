<template>
  <div>
    <Header />
    <main>
      <router-view />
      <Side />
    </main>
    <Footer />
  </div>
</template>

<script>
import Header from './layout/Header.vue';
import Footer from './layout/Footer.vue';
import Side from './layout/side.vue';

export default {
  components: { Header, Footer, Side },
  computed: {},
};
</script>

<style>
main {
  margin-top: 60px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</style>
