<template>
  <div class="text-center">
    <router-link :to="`/products/${product.id}`">
      <img :src="product.img_url" class="w-100" />
      <h5 class="mt-2">{{product.name}}</h5>
      <h6>เหมาะกับช่วงอายุ {{product.range}}</h6>
      <span v-if="product.price">เริ่มต้น {{ product.price.price}}฿</span>
    </router-link>
  </div>
</template>

<script>
export default {
  props: ["product"]
};
</script>

<style>
</style>
