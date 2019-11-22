<template>
  <div>
    <div class="container">
      <head-bar :title="titlex" :to="tox" />
      <div class="row pb-4">
        <div class="col-md-3 mb-4" v-for="(product, index) in products" :key="index">
          <product-card :product="product" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ProductCard from "./Card";
import { mapActions, mapGetters } from "vuex";
import axios from "axios";
export default {
  props: ["titlex", "tox", "cat_id"],
  components: {
    ProductCard
  },
  data() {
    return {
      products: []
    };
  },
  computed: {
    ...mapGetters({
      // products: "product/products",
      categories: "category/categories"
    })
  },
  methods: {
    // ...mapActions({
    //   fetch: "product/fetch"
    // }),
    async fetch(cat = "") {
      try {
        const { data } = await axios.get(
          "/api/products" + `${cat ? `?cat=${cat}` : ""}`
        );
        this.products = data;
        // commit(types.FETCH_PRODUCT, { data });
      } catch (e) {
        console.log(e);
      }
    }
  },
  created() {
    this.fetch(this.cat_id);
  }
};
</script>

<style>
</style>
