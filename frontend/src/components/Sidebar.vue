<template>
  <h2>Sidebar Component</h2>
  <ul>
    <li>
      <RouterLink to="/">Home</RouterLink>
    </li>
    <li>
      <RouterLink to="/about">About</RouterLink>
    </li>
  </ul>
</template>

<script>
  import { RouterLink } from 'vue-router';

  export default {
    components: {
      RouterLink
    }
  }
</script>