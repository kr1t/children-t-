<template>
  <div class="px-5 text-center pt-3">
    <img :src="step.img_url" class="w-50 pb-3"/>

    <h5><span>{{ step.title }}</span></h5>
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
h5{
  padding-bottom: 15px;
}
h5 span{
  padding-bottom: 3px;
  border-bottom: 3px solid #fff;
}
</style>
