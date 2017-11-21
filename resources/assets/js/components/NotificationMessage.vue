<template lang="html">
  <div class="notification-message">
    <p>{{ message.message }}</p>
    <small>{{ message.user }}</small>
  </div>
</template>

<script>
export default {
    props: ['message']
}
</script>

<style lang="css">
    .notification-message {
        padding: 1rem;
    }
    
    .notification-message > p {
        margin-bottom: .5rem;
    }
</style>