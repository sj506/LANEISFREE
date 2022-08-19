<!-- 추후 추가할 기능 룸사용 및 채팅왔을때 알림기능 -->
<template>
  <div class="chat-container" :class="{ dNone: dNone }">
    <div class="chat-header">
      <h3 class="chat-title">LANEISFREE</h3>
      <button class="btnClose" @click="closeChat"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="chat-body">
      <div v-for="(item, idx) in chatList" class="d-flex chat-box" :class="{ sent: item.name === userNm ? true : false }" :key="idx">
        <div class="chat-section d-flex" :class="{ sent: item.name === userNm ? true : false }">
          <div class="circle-img">
            <img src="@/assets/img/logo-nobg.png" alt="" />
          </div>
          <div class="chat-content" :class="{ sent: item.name === userNm ? true : false }">
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
      setUser: 0,
    };
  },
  computed: {
    loginToggle: function () {
      return this.$store.state.setUser;
    },
  },
  created() {
    if (this.loginToggle === 1) {
      this.user = this.$store.state.user;
      this.userNm = this.user.result['m_nm'];
    }
    this.$socket.on('msg', (data) => {
      this.chatList.push(data);
    });
  },
  updated() {
    if (this.loginToggle === 1) {
      this.user = this.$store.state.user;
      this.userNm = this.user.result['m_nm'];
    }
    const chatBody = document.querySelector('.chat-body');
    chatBody.scrollTop = chatBody.scrollHeight;
  },

  methods: {
    sendMsg() {
      if (this.input !== '' && this.userNm !== '') {
        this.$socket.emit('msg', {
          msg: this.input,
          name: this.userNm,
          time: dayjs().format('h:mm A'),
        });
        this.input = '';
      } else {
        this.input = '';
        if (!alert('로그인이 필요합니다.')) {
          this.closeChat();
        }
      }
    },
    closeChat() {
      const chatContainer = document.querySelector('.chat-container');
      chatContainer.classList.add('dNone');
    },
  },
};
</script>

<style scoped>
.chat-container.dNone {
  display: none;
}
.chat-container {
  position: fixed;
  z-index: 20;
  bottom: 30px;
  right: 30px;
  width: 360px;
  max-height: 640px;
  box-shadow: var(--box-shadow);
  background-color: #a9e8fe;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding-bottom: 20px;
}

.chat-header {
  position: relative;
  background-color: var(--bg-main);
  color: var(--text-white);
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 48px;
}
.chat-section {
  align-items: flex-end;
}
.chat-header .chat-title {
  padding: 0;
  margin: 0;
}
.chat-box {
  margin: 5px 0;
}
.chat-content.sent {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}
.btnClose {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 20px;
  background: inherit;
  border: none;
  box-shadow: none;
  border-radius: 0;
  padding: 0;
  overflow: visible;
  cursor: pointer;
  font-size: 24px;
  color: var(--text-white);
}
.chat-body {
  width: 100%;
  height: 300px;
  overflow-y: auto;
  padding: 0 20px;
  display: flex;
  flex-direction: column;
  justify-content: start;
}
.user-name {
  font-size: 10px;
  color: var(--text-dark-gray);
}
.chat-footer {
  display: flex;
  justify-content: center;
  align-items: flex-end;
}
.chat-footer .input-box {
  position: relative;
}
.chat-footer input[type='text'] {
  width: 300px;
  padding: 10px;
  padding-right: 60px;
  border-radius: 10px;
  background-color: var(--bg-white);
  border: none;
}
.btnSend {
  position: absolute;
  background-color: var(--bg-white);
  padding: 10px;
  right: 5px;
  /* z-index: 1; */
  border: none;
  color: var(--text-main);
  font-size: 18px;
}

.message {
  margin-top: 4px;
  padding: 10px;
  background-color: var(--bg-white);
  border-radius: 0 5px 5px 5px;
}
.message.sent {
  background-color: var(--bg-main);
  color: var(--text-white);

  border-radius: 5px 0px 5px 5px;
}
.sent {
  flex-direction: row-reverse;
}
.circle-img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
}
.circle-img img {
  width: 100%;
}
.chat-footer input[type='text']:focus {
  outline: none;
}
.time {
  font-size: 12px;
  color: var(--text-gray);
  margin: 5px;
}
</style>
