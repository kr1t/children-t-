<template>
  <div class="px-5 text-center pt-3">
    <img :src="step.img_url" class="w-50" />
    <h5>{{ step.title }}</h5>
    <p>{{ step.des }}</p>
  </div>
</template>

<script>
export default {
  props: ["step"]
};
</script>

<style scoped>
p {
  font-size: 12px;
}
</style>
