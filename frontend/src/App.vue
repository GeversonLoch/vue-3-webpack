<template>
  <div class="border">
    <h1>App main component</h1>
    <RouterView></RouterView>
    <Sidebar></Sidebar>
  </div>
</template>

<script>
  import { RouterView } from 'vue-router';
  import Sidebar from './components/Sidebar';

  export default {
    components: {
      RouterView,
      Sidebar
    }
  }
</script>

<style>
  .border {
    border: 1px solid black;
    margin: 8px;
    padding: 8px;
  }
</style>