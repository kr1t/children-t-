<template>
  <div>
    <div class="container my-3">
      <head-bar title="แพคเกจการเช่าสินค้า" to="packages" />
      <div class="row">
        <div class="col-md-4" v-for="(packagex, index) in packages" :key="index">
          <package-card :packagex="packagex" />
        </div>
      </div>

      <b-modal
        :id="`paymentbox-${item.id}`"
        hide-header
        hide-footer
        centered
        v-for="(item, index) in packages"
        :key="index"
      >
        <p class="my-4">
          <payment :set_id="item.id" :item="item" />
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
