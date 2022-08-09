<template>
  <div class="chat-container">
    <div class="chat-header">
      <h3 class="chat-title">LALESFREE</h3>
      <button class="btnClose"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="chat-body">
      <div v-for="(item, idx) in chatList" class="d-flex chat-box" :key="idx">
        <div class="circle-img">
          <img src="@/assets/img/logo-nobg.png" alt="" />
        </div>
        <div class="chat-content">
          <div class="user-name">{{ item.name }}</div>
          <div class="message">
            {{ item.msg }}
          </div>
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
export default {
  data() {
    return {
      input: '',
      chatList: [],
      user: {},
    };
  },
  created() {
    this.user = this.$store.state.user;
    this.$socket.on('msg', (data) => {
      this.chatList.push(data);
    });
  },
  methods: {
    sendMsg() {
      if (this.input !== '') {
        this.$socket.emit('msg', {
          msg: this.input,
          name: this.user.result['m_nm'],
        });
        this.input = '';
      }
    },
  },
};
</script>

<style scoped>
.chat-container {
  width: 360px;
  max-height: 640px;
  box-shadow: var(--box-shadow);
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
.chat-header .chat-title {
  padding: 0;
  margin: 0;
}
.chat-box {
  margin: 5px 0;
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
  height: 100%;
  min-height: 300px;
  max-height: 500px;
  overflow-y: auto;
  padding: 20px;
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
</style>
