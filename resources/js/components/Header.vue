<template>
    <header>
      <nav>
        <ul>
          <li><router-link to="/">Home</router-link></li>
          <li><router-link to="/blog">Blog</router-link></li>
          <li><router-link to="/about">About</router-link></li>
          <!-- Add more navigation links as needed -->
        </ul>
      </nav>
    </header>
  </template>
  
  <script>
  export default {
    name: 'Header',
  };
  </script>
  
  <style scoped>
  /* Add your header styles here */
  header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
  }
  
  nav ul {
    list-style: none;
    padding: 0;
    display: flex;
  }
  
  nav li {
    margin-right: 20px;
  }
  
  nav a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
  }
  
  nav a:hover {
    color: #ff9900;
  }
  </style>
  