<template>
  <div :class="!props ? 'container' : ''">
    <div class="card">
      <div class="card-header bg-dark text-light">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        แพ็คเกจของฉัน
        <div class="clearfix"></div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>ระยะเวลาการเช่า</th>
            <th>วันที่เริ่ม</th>
            <th>วันหมดอายุ</th>
            <th>จำนวนการเช่า</th>
            <th>สถานะ</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="(item, index) in packages"
            :key="index"
            :class="item.expire ? 'bg-secondary' : ''"
          >
            <td scope="row">{{index + 1}}</td>
            <td>{{item.package.description}}</td>
            <td>{{item.created_at}}</td>
            <td>{{item.expiry_date}}</td>
            <td>{{item.lists.length}}/{{item.package.limit}}</td>
            <td>{{item.expire ? 'หมดอายุ':'ยังไม่หมดอายุ'}}</td>
            <td v-if="product_id">
              <button class="btn btn-primary" @click="add(item.id)">เพิ่มสินค้าเข้า Package</button>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="card-footer"></div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import axios from "axios";
export default {
  props: {
    props: {
      type: Boolean,
      default: false
    },
    product_id: {
      type: Number
    },
    product_amount_id: {
      type: Number
    }
  },
  computed: {
    ...mapGetters({
      packages: "package/myPackage"
    })
  },
  methods: {
    ...mapActions({
      fetch: "package/myPackage"
    }),
    getProduct(item) {
      return item.price.product;
    },

    async add(id) {
      await axios.post("/api/packages/list/rent/add", {
        product_amount_id: this.product_amount_id,
        package_list_id: id
      });

      this.$router.push("/mypackage");
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
