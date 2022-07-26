<template>
  <main id="main" class="main">
    <ol>
      <li>
        <router-link to="/index">
          <!-- 링크주소 넣기-->
          <span>Main</span>
        </router-link>
      </li>
      <li class="liList">
        >
        <router-link to="/new">
          <!-- 링크주소 넣기-->
          <span>신상품</span>
        </router-link>
      </li>
    </ol>
    <div class="mainTitle">
      <header>
        <h2>신상품</h2>
      </header>
    </div>
    
    <div class="container">
      <div>
        <img src="../newImage/9.jpg" alt="">
      </div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </main>
</template>

<script>
export default {};
</script>

<style>
h2 {
  text-align: center;
}
li {
  display: inline;
}
</style>
