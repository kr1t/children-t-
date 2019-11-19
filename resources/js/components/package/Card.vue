<template>
  <div class="card bg-primary text-white p-5 text-center">
    <h4>{{packagex.description}}</h4>
    <h6>Swap ได้ {{packagex.limit}} ครั้ง</h6>
    <p>{{packagex.price}} ฿</p>

    <b-button v-b-modal.paymentbox variant="light">ซื้อ</b-button>
  </div>
</template>

<script>
export default {
  props: ["packagex"]
};
</script>

<style>
</style>
