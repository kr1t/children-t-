<template>
  <div>
    <banner style="margin-top: -16px;" />
    <package-app />
    <!-- <category /> -->
    <step />
    <product titlex="สินค้าแนะนำประจำวันนี้" tox="products" />

    <hr />
    <product titlex="สินค้าประเภทรถเข็นเด็ก" tox="category/stroller" :cat_id="1" />
    <hr />
    <product titlex="สินค้าประเภทของเล่นเสริมพัฒนาการ" tox="category/toy" :cat_id="2" />
    <hr />
    <product titlex="สินค้าประเภทตู้แช่นม
" tox="category/freezer" :cat_id="3" />
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
