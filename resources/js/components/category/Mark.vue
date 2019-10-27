<template>
  <div :class="color">Welcome {{name}}</div>
</template>

<script>
export default {
  props: ["name", "color"]
};
</script>

<style scoped>
.red {
  color: red;
}
.blue {
  color: blue;
}
</style>
