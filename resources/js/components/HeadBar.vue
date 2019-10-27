<template>
  <div>
    <div class="clearfix py-3">
      <div class="float-left">{{ title }}</div>
      <div class="float-right">
        <router-link :to="`/${to}`">ดูทั้งหมด ></router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HeadBar",
  data() {
    return {
      domain: ".com"
    };
  },
  props: ["title", "to"]
};
</script>

<style>
</style>
