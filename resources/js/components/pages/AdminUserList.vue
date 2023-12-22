<template>
    <div>
      <h1>Admin User List</h1>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <!-- Add more user attributes as needed -->
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in userList" :key="user.id">
            <td>{{ user.id }}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
            <!-- Display additional user attributes here -->
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        userList: [], // Populate this array with user data from your API or backend
      };
    },
    created() {
      axios.get('/api/users').then(response => {
        this.userList = response.data;
      }).catch(error => {
        console.error('Error fetching user data:', error);
      });
    },
  };
  </script>
  
  <style scoped>
  /* Add your component-specific styles here */
  </style>
  