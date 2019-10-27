<template>
  <div class="main-layout">
    <navbar />
    <navbar-sub />
    <child />
  </div>
</template>

<script>
import Navbar from "~/components/Navbar";
import NavbarSub from "~/components/NavbarSub";

export default {
  name: "MainLayout",

  components: {
    Navbar,
    NavbarSub
  }
};
</script>
<style>
@import "~/css/main.scss";
</style>
