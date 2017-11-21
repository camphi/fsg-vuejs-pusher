<template lang="html">
  <div class="notification-composer">
      <input type="text" placeholder="Start typing your message..." v-model="messageText" @keyup.enter="sendMessage">
      <button class="btn btn-primary" @click="sendMessage">Send</button>
  </div>
</template>

<script>
export default {
    data() {
        return {
            messageText: ''
        }
    },
    methods: {
        sendMessage() {
            this.$emit('messagesent', {
                message: this.messageText,
                from: $('.navbar-right .dropdown-toggle').text()
            });
            this.messageText = '';
        }
    }
}
</script>

<style lang="css">
.notification-composer {
    display: flex;
}

.notification-composer input {
    flex: 1 auto;
}

.notification-composer button {
    border-radius: 0;
}
</style>