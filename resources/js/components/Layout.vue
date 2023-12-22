<template>
    <div>
      <Header />
      <!-- Add the main content of your layout here -->
      <router-view />
    </div>
  </template>
  
  <script>
  import Header from '@/components/Header.vue'; // Adjust the import path as needed
  
  export default {
    components: {
      Header,
    },
  };
  </script>
  