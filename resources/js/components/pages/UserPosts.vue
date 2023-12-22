<template>
    <div>
      <h1>Blog Posts by {{ username }}</h1>
      <!-- Display the list of blog posts here -->
      <ul>
        <li v-for="post in posts" :key="post.id">
          <router-link :to="`/blog/${post.id}`">{{ post.title }}</router-link>
        </li>
      </ul>
  
      <!-- Pagination controls -->
      <div>
        <button @click="prevPage" :disabled="currentPage === 1">Previous</button>
        <span>Page {{ currentPage }}</span>
        <button @click="nextPage" :disabled="currentPage === totalPages">Next</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      username: String, // The username to display
      posts: Array, // An array of blog posts
      currentPage: Number, // The current page number
      totalPages: Number, // The total number of pages
    },
    methods: {
      // Handle pagination: Go to the previous page
      prevPage() {
        if (this.currentPage > 1) {
          this.$router.push(`/user/${this.username}/posts?page=${this.currentPage - 1}`);
        }
      },
      // Handle pagination: Go to the next page
      nextPage() {
        if (this.currentPage < this.totalPages) {
          this.$router.push(`/user/${this.username}/posts?page=${this.currentPage + 1}`);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add your component-specific styles here */
  </style>
  