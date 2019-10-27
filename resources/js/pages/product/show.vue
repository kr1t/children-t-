<template>
  <div>
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">{{ product.category.type.name}}</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">{{ product.category.name}}</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ product.name}}</li>
        </ol>
      </nav>
      <h1>{{ product.name}}</h1>
      <img :src="product.img_url" />
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";

export default {
  computed: {
    ...mapGetters({
      product: "product/show"
    }),
    id() {
      return parseInt(this.$route.params.id);
    }
  },
  methods: {
    ...mapActions({
      fetch: "product/show"
    })
  },
  created() {
    this.fetch(this.id);
  }
};
</script>

<style>
</style>
