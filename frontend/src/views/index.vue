<template>
  <div class="index-container column-center" @wheel="scrollBgChange" :class="{ bgColor: bgColor, bgColorOut: bgColorOut }">
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
      bgColorOut: false,
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
      if (currentScroll + modifier > documentHeight) {
        this.bgColor = true;
        this.bgColorOut = false;
      } else {
        this.bgColor = false;
        this.bgColorOut = true;
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
  background-image: var(--bg-gradient);
}
.bgColorOut {
  position: relative;
}
.bgColorOut::before {
  content: '';
  background-size: cover;
  position: absolute;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  opacity: 0;
  animation: bgColorOut 0.5s linear;
  z-index: -1;
  background-image: var(--bg-gradient);
}
@keyframes bgColorOut {
  0% {
    opacity: 0.4;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 0;
  }
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
