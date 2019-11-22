<template>
  <div>
    <div class="container"></div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import Form from "vform";

export default {
  computed: {
    ...mapGetters({
      show: "package/myPackageShow"
    }),
    id() {
      return this.$route.params.id;
    }
  },
  methods: {
    ...mapActions({
      fetch: "package/myPackageShow"
    })
  },
  created() {
    this.fetch(this.id);
  }
};
</script>

<style>
</style>
