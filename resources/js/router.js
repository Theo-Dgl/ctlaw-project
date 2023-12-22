import { createRouter, createWebHistory } from 'vue-router';

import Layout from './components/Layout.vue'
import Register from './components/pages/Register.vue';
import Login from './components/pages/Login.vue';
import Home from './components/pages/Home.vue';
import UserPosts from './components/pages/UserPosts.vue';
import BlogPost from './components/pages/BlogPost.vue';
import CreateBlogPost from './components/pages/CreateBlogPost.vue';
import AdminUserList from './components/pages/AdminUserList.vue';

const routes = [
  {
    path: '/register',
    name: 'register',
    component: Register,
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
  },
  {
    path: '/',
    name: 'home',
    component: Home,
  },
  {
    path: '/user/:username/posts',
    name: 'user-posts',
    component: UserPosts,
    props: true, // Pass route parameters as props
  },
  {
    path: '/blog/:postId',
    name: 'blog-post',
    component: BlogPost,
    props: true, // Pass route parameters as props
  },
  {
    path: '/create-blog-post',
    name: 'create-blog-post',
    component: CreateBlogPost,
  },
  {
    path: '/admin/user-list',
    name: 'admin-user-list',
    component: AdminUserList,
  },
];

const router = createRouter({
  component: Layout,
  history: createWebHistory(),
  routes,
});

export default router;
