<template>
    <div>
      <h1>Create a New Blog Post</h1>
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" id="title" v-model="title" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea id="content" v-model="content" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Create Post</button>
        </div>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        title: '',
        content: '',
      };
    },
    methods: {
      submitForm() {
        // Handle form submission here
        const newPost = {
          title: this.title,
          content: this.content,
          // You may want to add the author and other necessary data here
        };
        // Send the new post data to your API or backend for storage
        console.log('New Blog Post:', newPost);
        // Optionally, you can redirect to the newly created post or display a success message
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add your component-specific styles here */
  </style>
  