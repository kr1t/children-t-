<template>
  <div>
    <banner style="margin-top: -16px;" />
    <category />
    <step />
    <product />
  </div>
</template>

<script>
import Banner from "~/components/home/Banner";
import Category from "~/components/category/Index";
import Step from "~/components/step/Index";
import Product from "~/components/product/Index";

export default {
  middleware: "auth",
  components: {
    Banner,
    Category,
    Step,
    Product
  },
  metaInfo() {
    return { title: "หน้าแรก" };
  }
};
</script>
