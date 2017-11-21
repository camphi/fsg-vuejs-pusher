<template lang="html">
  <div class="notification-log">
      <notification-message v-for="message in messages" :message="message" v-bind:key="message.id"></notification-message>
  </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style lang="css">
.notification-log .notification-message:nth-child(even) {
    background-color: #ccc;
}
</style>