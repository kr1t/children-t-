<template>
  <div class="bg py-5">
    <div class="container text-white text-center">
      <h5>Childrent บริการให้เช่าสินค้าแม่และเด็ก</h5>
      <h6>เช่าสินค้าง่ายๆ เพียง 3 ขั้นตอน</h6>

      <div class="row">
        <div class="col-md-4" v-for="(step, index) in steps" :key="index">
          <step-card :step="step" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import StepCard from "./Card";
export default {
  components: {
    StepCard
  },
  data() {
    return {
      steps: [
        {
          img_url:
            "/images/step/1.png",
          title: "เลือกสินค้าที่ต้องการเช่า",
          des:
            "พบกับสินค้ามากมายหลายประเภท เช่น เครื่องแต่งกายเด็ก คาร์ซีท รถเข็นเด็ก ของเล่นเด็ก จากแบรนด์ชั้นนำทั่วโลก"
        },
        {
          img_url:
            "/images/step/2.png",
          title: "เลือกระยะเวลาเช่า",
          des:
            "เลือกระยะเวลาที่ต้องการเช่าสินค้าตามการใช้งานที่เหมาะสม ยิ่งเช่านาน ยิ่งคุ้มค่าช่วยให้ได้สินค้าที่มีคุณภาพ ประหยัดค่าใช้จ่าย"
        },
        {
          img_url:
            "/images/step/3.png",
          title: "รอรับสินค้าและคืนสินค้า",
          des:
            "มีบริการจัดส่งสินค้าและรับคืนสินค้าตามจุดหมายและวันที่ที่ท่านระบุไว้"
        }
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
.bg {
  background: #f87096;
}
</style>
