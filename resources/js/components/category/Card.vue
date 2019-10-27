<template>
  <div>
    <router-link :to="`/category/${cat.slug}`">
      <img :src="cat.img_url" class="img-fluid" style="border-radius:20px;" />
      <div class="text-center">
        <span>{{ cat.name }}</span>
      </div>
    </router-link>
  </div>
</template>

<script>
export default {
  props: ["cat"]
};
</script>

<style>
</style>
