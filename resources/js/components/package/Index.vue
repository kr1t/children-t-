<template>
  <div>
    <div class="container">
      <head-bar title="แพคเกจการเช่าสินค้า" to="packages" />
      <div class="row">
        <div class="col-md-4" v-for="(packagex, index) in packages" :key="index">
          <package-card :packagex="packagex" />
        </div>
      </div>

      <b-modal id="paymentbox" hide-header hide-footer centered>
        <p class="my-4">
          <payment />
        </p>
      </b-modal>
    </div>
  </div>
</template>

<script>
import PackageCard from "./Card";
import Payment from "../payment/Index";

import { mapActions, mapGetters } from "vuex";

export default {
  components: {
    PackageCard,
    Payment
  },
  computed: {
    ...mapGetters({
      packages: "package/packages"
    })
  },
  methods: {
    ...mapActions({
      fetch: "package/fetch"
    })
  },
  created() {
    this.fetch();
  }
};
</script>

<style>
</style>
