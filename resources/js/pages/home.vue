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
import TestJaa from "~/components/Test";

export default {
  data() {
    return {
      msg: 'Hello',
      
    }
  },
  middleware: "auth",
  components: {
    Banner,
    Category,
    Step,
    Product,
    TestJaa
  },
  metaInfo() {
    return { title: "หน้าแรก" };
  }
};
</script>
