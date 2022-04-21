<template>
  <div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Home</router-link>
          <router-link to="/login" class="nav-link">Login</router-link>
          <router-link to="/register" class="nav-link">Register</router-link>
        </li>

      </ul>
    </nav>
    <div>
        <router-view />
    </div>
  </div>
</template>

<style>

</style>

<script>
    export default{}
</script>
