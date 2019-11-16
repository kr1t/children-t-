<template>
  <div class="mb-2">
    <div class="container">
      <div class="mt-2">Categories</div>
      <div v-for="item in posts" :key="item.id">
        <h1>{{ item.name }}</h1>
        <hr />
        <h6>{{ item.des}}</h6>
      </div>
      <div class="row mt-2">
        <div class="col-md-2" v-for="(cat, index) in categories" :key="index">
          <card-app :cat="cat" />
          <!-- <button @click="del(cat.id)">del</button> -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CardApp from "./Card";

import { mapActions, mapGetters } from "vuex";

export default {
  components: {
    CardApp
  },
  computed: {
    ...mapGetters({
      categories: "category/categories"
    })
  },
  methods: {
    ...mapActions({
      fetch: "category/fetch",
      del: "category/del"
    })
  },
  created() {
    this.fetch();
  }
};
</script>

<style>
</style>
