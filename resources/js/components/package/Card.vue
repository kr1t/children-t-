<template>
  <div class="card bg-primary text-white p-5 text-center">
    <h4>{{packagex.description}}</h4>
    <h6>Swap ได้ {{packagex.limit}} ครั้ง</h6>
    <h6>ฟรี ค่าจัดส่ง</h6>
    <h6>ค่ามัดจำ 500 ฿</h6>
    <p>ราคา {{packagex.price}} ฿</p>

    <b-button v-b-modal="`paymentbox-${packagex.id}`" variant="light">ซื้อ</b-button>
  </div>
</template>

<script>
export default {
  props: ["packagex"]
};
</script>

<style>
</style>
