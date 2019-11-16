<template>
  <card title="ที่อยู่">
    <router-link :to="{name:'settings.address.create'}">
      <button class="btn btn-primary">เพิ่มที่อยู่</button>
    </router-link>
    <div class="row" v-for="(item, index) in user.addresses" :key="index">
      <div class="card w-100 m-3 p-4" :class="item.default?'bg-primary text-white':'' ">
        <div class="clearfix">
          <i class="fa fa-times float-right" @click="del(item.id)"></i>
        </div>

        <a v-if="item.default">ที่อยู่ปัจจุบัน</a>
        <hr />
        {{item.information}} {{item.subdistrict}} {{item.district}} {{item.province}} {{item.zipcode}}
        <hr />
        {{item.mobile_number}}
      </div>
    </div>
  </card>
</template>

<script>
import Form from "vform";
import { mapGetters } from "vuex";

export default {
  scrollToTop: false,

  metaInfo() {
    return { title: this.$t("settings") };
  },

  data: () => ({
    form: new Form({
      name: "",
      email: "",
      mobile_number: ""
    })
  }),

  computed: mapGetters({
    user: "auth/user"
  }),

  created() {
    // Fill the form with user data.
    this.form.keys().forEach(key => {
      this.form[key] = this.user[key];
    });
  },

  methods: {
    async del(id) {
      const { data } = await this.form.delete(`/api/addresses/${id}`);
      await this.$store.dispatch("auth/fetchUser");
    }
  }
};
</script>
