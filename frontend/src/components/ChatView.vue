<template>
  <div>
    <h1>Chat</h1>
    <div v-for="(item, idx) in chatList" :key="idx">{{ item.name }} : {{ item.msg }}</div>
    <div><input type="text" v-model="input" /><button @click="sendMsg">전송</button></div>
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
      this.$socket.emit('msg', {
        msg: this.input,
        name: this.user.result['m_nm'],
      });
    },
  },
};
</script>

<style></style>
