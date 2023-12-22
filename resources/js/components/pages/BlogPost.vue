<template>
    <div>
      <h1>{{ post.title }}</h1>
      <p>{{ post.content }}</p>
      <p>Author: {{ post.author }}</p>
      <p>Published on: {{ formatDate(post.publishedAt) }}</p>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      post: Object, // The blog post object with title, content, author, and publishedAt
    },
    methods: {
      // Format the date in a human-readable format
      formatDate(dateString) {
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return new Date(dateString).toLocaleDateString(undefined, options);
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add your component-specific styles here */
  </style>
  