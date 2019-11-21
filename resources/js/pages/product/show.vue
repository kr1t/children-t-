<template>
  <div>
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <router-link :to="`/category/${product.category.slug}`">{{ product.category.name}}</router-link>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ product.name}}</li>
        </ol>
      </nav>

      <div class="main-product row">
        <div
          class="col-md-6"
          style="border-right:1px solid #ccc; padding-right:10px; box-sizing:border-box;"
        >
          <img :src="product.img_url" class="w-100" />
        </div>
        <div class="col-md-6">
          <h1>{{ product.name}}</h1>
          <hr />
          <b-button v-b-modal.addPackage variant="primary">เพิ่มสินค้าเข้าแพ็คเกจ</b-button>หรือ
          <button class="btn btn-success">ซื้อแพ็คเกจ</button>

          <b-modal id="addPackage" hide-footer hide-header scrollable size="xl">
            <p class="my-4">
              <MyPackagePage :product_id="product.id"/>
            </p>
          </b-modal>

          <hr />

          <button
            class="btn btn-outline-secondary"
            @click="showBuy = 1"
            v-if="!showBuy"
          >หรือซื้อสินค้า</button>

          <div class="showBuy" v-else>
            <div class="price-text">
              <div v-if="!priceActive">
                <span class="text-secondary">เริ่มต้น</span>
                <span class="h2 text-success">{{product.price}} ฿</span>
              </div>
              <div v-else>
                <span class="text-secondary">ราคา</span>
                <span class="h2 text-success">{{product.prices[priceActive].price}} ฿</span>
              </div>
            </div>

            <div class="price-list py-2">
              <button
                v-for="(price,index) in product.prices"
                :key="price.id"
                class="btn m-1"
                :class="priceActive == index ? 'btn-success' : 'btn-outline-secondary'"
                @click="setPrice(index)"
              >{{ price.description }}</button>
            </div>

            <div>เหลือ {{ product.amount.amount }} ชิ้น</div>
            <div class="mt-3">
              <hr />
              <form @submit.prevent="addTocart()" @keydown="form.onKeydown($event)">
                <input type="number" v-model="form.amount" />
                <v-button :loading="form.busy">เพิ่มสินค้าลงตะกร้า</v-button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <hr />
      <div class="row">
        <div class="col-md-2" v-for="(image) in product.images" :key="image.id">
          <img :src="image.file_url" class="w-100" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import Form from "vform";
import MyPackagePage from "../myPackage/index";

export default {
  data() {
    return {
      priceActive: 0,
      form: new Form({
        product_amount_id: "",
        product_price_id: "",
        amount: 1
      }),
      showBuy: 0
    };
  },
  components: {
    MyPackagePage
  },
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
    }),
    setPrice(index) {
      this.priceActive = index;
    },
    async addTocart() {
      this.form.product_price_id = this.product.prices[this.priceActive].id;

      this.form.product_amount_id = this.product.amount.id;

      const { data } = await this.form.post("/api/carts");
    }
  },
  created() {
    this.fetch(this.id);
  }
};
</script>

<style>
</style>
