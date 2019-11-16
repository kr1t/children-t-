<template>
  <div class="container">
    <div class="card">
      <div class="card-header bg-dark text-light">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        ตะกร้าสินค้าของฉัน
        <div class="clearfix"></div>
      </div>
      <div class="card-body" v-if="carts.list.length">
        <div class="row mb-2" v-for="(item, index) in carts.list" :key="index">
          <div class="col-xs-2 col-md-2">
            <img
              class="img-responsive"
              :src="getProduct(item).img_url"
              alt="prewiew"
              width="120"
              height="80"
            />
          </div>
          <div class="col-xs-4 col-md-6">
            <h4 class="product-name">
              <strong>{{getProduct(item).name}}</strong>
            </h4>
            <small class="text-secondary">ระยะเวลา {{item.price.description}}</small>
          </div>
          <div class="col-xs-6 col-md-4 row">
            <div class="col-xs-6 col-md-6 text-right" style="padding-top: 5px">
              <h6>
                <strong>
                  {{item.price.price}}
                  <span class="text-muted">x</span>
                </strong>
              </h6>
            </div>
            <div class="col-xs-4 col-md-4">
              <input
                type="number"
                class="form-control input-sm"
                v-model="item.amount"
                min="1"
                @change="updateAmount(item.id,item.amount)"
              />
            </div>
            <div class="col-xs-2 col-md-2">
              <button
                type="button"
                class="btn btn-outline-danger btn-xs"
                @click="delAmount(item.id)"
              >
                <i class="fa fa-trash" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <hr />
      </div>
      <div v-else class="p-4 card-body">ยังไม่มีสินค้าในตระกร้าของคุณ</div>
      <div class="card-footer">
        <button
          href
          class="btn btn-success pull-right"
          :disabled="!carts.list.length"
        >ทำการสั่งสินค้า</button>
        <div class="pull-right" style="margin: 5px">
          ราคาทั้งหมด:
          <b>{{carts.price_all}} ฿</b>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import axios from "axios";
export default {
  computed: {
    ...mapGetters({
      carts: "cart/carts"
    })
  },
  methods: {
    ...mapActions({
      fetch: "cart/fetch"
    }),
    getProduct(item) {
      return item.price.product;
    },
    async updateAmount(id, amount) {
      const { data } = await axios.put(`/api/carts/${id}`, { amount });
      this.fetch();
    },
    async delAmount(id) {
      const { data } = await axios.delete(`/api/carts/${id}`);
      this.fetch();
    }
  },
  created() {
    this.fetch();
  }
};
</script>

<style>
</style>
