<template>
  <aside class="column-center">
    <div class="basket"></div>
    <div class="btnChat" @click="showChat">
      <div class="chat-circle flex-center">
        <i class="fa-regular fa-comment-dots"></i>
      </div>
    </div>
    <div class="toTop flex-center" @click="toTop">
      <i class="fa-solid fa-angle-up"></i>
    </div>
  </aside>
  <chat-view />
</template>

<script>
import ChatView from '@/components/ChatView.vue';
export default {
  components: {
    ChatView,
  },
  data() {
    return {
      dNone: true,
    };
  },
  methods: {
    toTop() {
      window.scrollTo(0, 0);
    },
    showChat() {
      const chatContainer = document.querySelector('.chat-container');
      chatContainer.classList.toggle('dNone');
    },
  },
};
</script>

<style scoped>
.chat-container.dNone {
  display: none;
}
aside {
  position: fixed;
  bottom: 300px;
  right: 0;
  z-index: 1;
  width: 100px;
}
.chat-circle {
  margin: 20px 0;
  width: 80px;
  height: 80px;
  background-color: var(--bg-main);
  border-radius: 50%;
  padding: 20px;
  cursor: pointer;
}
.chat-circle i {
  font-size: 40px;
  color: var(--text-white);
}

.basket,
.toTop {
  border: 1px solid var(--text-light-gray);
  width: 100%;
  cursor: pointer;
  background-color: var(--bg-white);
}
.toTop i {
  margin: 5px 0;
  font-size: 40px;
  color: var(--text-light-gray);
}
</style>
