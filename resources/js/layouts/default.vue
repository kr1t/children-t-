<template>
  <div class="main-layout">
    <navbar />
    <navbar-sub />
    <div class="min-h-700">
      <child />
    </div>
    <footer-app/>
    <footer-sub/>

    
  </div>
</template>

<script>
import Navbar from "~/components/Navbar";
import NavbarSub from "~/components/NavbarSub";
import FooterApp from "~/components/Footer";
import FooterSub from "~/components/FooterSub";

export default {
  name: "MainLayout",

  components: {
    Navbar,
    NavbarSub,
    FooterApp,
    FooterSub
  }
};
</script>
<style scoped>

.min-h-700{
  min-height: 750px;
}
</style>
<style>
@import url('https://fonts.googleapis.com/css?family=Kanit&display=swap');
  body{
  font-family: 'Kanit', sans-serif !important;
}
</style>
