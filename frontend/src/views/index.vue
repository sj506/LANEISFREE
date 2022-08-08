<template>
  <div class="index-container column-center" @wheel="scrollBgChange" :class="{ bgColor: bgColor }">
    <list-item></list-item>
    <div class="index-main column-center">
      <best-seller></best-seller>
      <middle-banner></middle-banner>
    </div>
  </div>
</template>

<script>
import ListItem from '../components/ListItem.vue';
import BestSeller from '@/components/BestSeller.vue';
import MiddleBanner from '@/components/MiddleBanner.vue';
export default {
  components: { ListItem, BestSeller, MiddleBanner },
  data() {
    return {
      bgColor: false,
    };
  },
  setup() {},
  created() {},
  mounted() {
    AOS.init();
  },
  unmounted() {},
  methods: {
    scrollBgChange() {
      let documentHeight = document.body.scrollHeight;
      let currentScroll = window.scrollY + window.innerHeight;
      // When the user is [modifier]px from the bottom, fire the event.
      let modifier = 1000;

      console.log(`documentHeight = ${documentHeight}`);
      console.log(`currentScroll = ${currentScroll}`);
      if (currentScroll + modifier > documentHeight) {
        this.bgColor = true;
      } else {
        this.bgColor = false;
      }
    },
  },
};
</script>

<style scoped>
.index-container {
  width: 100vw;
  overflow: hidden;
  transition: background-image ease-in-out 2s;
}
.index-main {
  max-width: 1180px;
  margin-bottom: 100px;
}
.bgColor {
  position: relative;
}
.bgColor::before {
  content: '';
  background-size: cover;
  position: absolute;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  opacity: 0.6;
  animation: bgColor 0.5s linear;
  z-index: -1;
  background-image: linear-gradient(to left bottom, #f3bac7, #ebb4ce, #deafd7, #cbade0, #b2ace7, #9fb4f1, #88bcf7, #6ec3f9, #5fd2fd, #5be1fd, #64eff9, #7afbf1);
}
@keyframes bgColor {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 0.4;
  }
}
</style>
