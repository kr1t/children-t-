<template>
  <div>
    <div class="container">
      <h3>{{category.name}}({{category.products.length}})</h3>
      <hr />

      <div class="row">
        <div class="col-md-3 mb-4" v-for="(product, index) in category.products" :key="index">
          <product-card :product="product" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import Form from "vform";
import ProductCard from "~/components/product/Card";

export default {
  components: {
    ProductCard
  },
  computed: {
    ...mapGetters({
      category: "category/show"
    }),
    slug() {
      return this.$route.params.slug;
    }
  },
  methods: {
    ...mapActions({
      fetch: "category/show"
    })
  },
  created() {
    this.fetch(this.slug);
  }
};
</script>

<style>
</style>
