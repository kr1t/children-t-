<template>
  <div class="bg py-5">
    <div class="container text-white text-center">
      <h5>Lorem ipsum, dolor sit amet</h5>
      <h6>Tenetur praesentium quas amet dolorem</h6>

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
            " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod laborum vitae at nostrum rem tempora non officiis hic repudiandae quas, saepe asperiores, optio, nihil magni! Voluptatibus itaque rerum animi ipsam!"
        },
        {
          img_url:
            "/images/step/2.png",
          title: "เลือกระยะเวลาเช่า",
          des:
            " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod laborum vitae at nostrum rem tempora non officiis hic repudiandae quas, saepe asperiores, optio, nihil magni! Voluptatibus itaque rerum animi ipsam!"
        },
        {
          img_url:
            "/images/step/3.png",
          title: "รอรับสินค้าและคืนสินค้า",
          des:
            " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod laborum vitae at nostrum rem tempora non officiis hic repudiandae quas, saepe asperiores, optio, nihil magni! Voluptatibus itaque rerum animi ipsam!"
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
