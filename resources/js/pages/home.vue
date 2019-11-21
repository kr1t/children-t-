<template>
  <div>
    <banner style="margin-top: -16px;" />
    <package-app />
    <category />
    <step />
    <product />
  </div>
</template>

<script>
import PackageApp from "~/components/package/Index";

import Banner from "~/components/home/Banner";
import Category from "~/components/category/Index";
import Step from "~/components/step/Index";
import Product from "~/components/product/Index";
import TestJaa from "~/components/Test";

export default {
  data() {
    return {
      msg: "Hello"
    };
  },
  middleware: "auth",
  components: {
    Banner,
    Category,
    Step,
    Product,
    TestJaa,
    PackageApp
  },
  metaInfo() {
    return { title: "หน้าแรก" };
  }
};
</script>
