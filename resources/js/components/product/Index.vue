<template>
  <div>
    <div class="container">
      <head-bar title="สินค้าแนะนำประจำวันนี้" to="products" />
      <pre>
      {{categories}}

      </pre>
      <div class="row">
        <div class="col-md-3" v-for="(product, index) in products" :key="index">
          <product-card :product="product" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ProductCard from "./Card";
import { mapActions, mapGetters } from "vuex";

export default {
  components: {
    ProductCard
  },
  computed: {
    ...mapGetters({
      products: "product/products",
      categories: "category/categories"
    })
  },
  methods: {
    ...mapActions({
      fetch: "product/fetch"
    })
  },
  created() {
    this.fetch();
  }
};
</script>

<style>
</style>
