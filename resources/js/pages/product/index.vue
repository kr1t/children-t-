<template>
  <div>
    <div class="container">
      <h1>สินค้าทั้งหมด</h1>
      <div class="row">
        <div class="col-md-3" v-for="(product, index) in products" :key="index">
          <product-card :product="product" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ProductCard from "~/components/product/Card";
import { mapActions, mapGetters } from "vuex";

export default {
  components: {
    ProductCard
  },
  computed: {
    ...mapGetters({
      products: "product/all"
    })
  },
  methods: {
    ...mapActions({
      fetch: "product/fetchAll"
    })
  },
  created() {
    this.fetch();
  }
};
</script>

<style>
</style>
