<template>
  <div class="chat-container" :class="{ dNone: dNone }">
    <div class="chat-header">
      <h3 class="chat-title">LALESFREE</h3>
      <button class="btnClose" @click="closeChat"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="chat-body">
      <div v-for="(item, idx) in chatList" class="d-flex chat-box" :class="{ sent: item.name === userNm ? true : false }" :key="idx">
        <div class="chat-section d-flex" :class="{ sent: item.name === userNm ? true : false }">
          <div class="circle-img">
            <img src="@/assets/img/logo-nobg.png" alt="" />
          </div>
          <div class="chat-content">
            <div class="user-name">{{ item.name }}</div>
            <div class="message" :class="{ sent: item.name === userNm ? true : false }">
              {{ item.msg }}
            </div>
          </div>
          <div class="time">{{ item.time }}</div>
        </div>
      </div>
    </div>
    <div class="chat-footer">
      <div class="input-box">
        <input type="text" v-model="input" @keyup.enter="sendMsg" placeholder="메세지를 입력해 주세요!" /><button class="btnSend" @click="sendMsg"><i class="fa-regular fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
</template>

<script>
import dayjs from 'dayjs';

export default {
  data() {
    return {
      component: {
        dayjs,
      },
      input: '',
      chatList: [],
      user: {},
      userNm: '',
      sent: false,
      dNone: true,
    };
  },
  created() {
    this.user = this.$store.state.user;
    if (this.user.result['m_nm'] !== null) {
      this.userNm = this.user.result['m_nm'];
    }
    console.log(this.time);
    this.$socket.on('msg', (data) => {
      this.chatList.push(data);
    });
  },
  updated() {
    const chatBody = document.querySelector('.chat-body');
    chatBody.scrollTop = chatBody.scrollHeight;
  },

  methods: {
    sendMsg() {
      if (this.input !== '') {
        this.$socket.emit('msg', {
          msg: this.input,
          name: this.user.result['m_nm'],
          time: dayjs().format('h:mm A'),
        });
        this.input = '';
      }
    },
    closeChat() {
      const chatContainer = document.querySelector('.chat-container');
      chatContainer.classList.add('dNone');
    },
  },
};
</script>

<style scoped></style>
