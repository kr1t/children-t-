<template>
  <card title="เพิ่มที่อยู้ในการจัดส่ง" class="mb-3">
    <form @submit.prevent="addAddress()" @keydown="form.onKeydown($event)" class="p-5">
      <textarea
        v-model="form.information"
        cols="30"
        rows="10"
        class="form-control"
        placeholder="ที่อยู่"
      ></textarea>
      <hr />
      <!-- ตำบล/แขวง -->
      <addressinput-subdistrict v-model="form.subdistrict" />
      <!-- อำเภอ/เขต -->
      <addressinput-district v-model="form.district" />
      <!-- จังหวัด -->
      <addressinput-province v-model="form.province" />
      <!-- รหัสไปรษณีย์ -->
      <addressinput-zipcode v-model="form.zipcode" />
      <label for>เบอร์โทรศัพท์</label>
      <input type="tel" class="form-control" v-model="form.mobile_number" />
      <br />
      <input type="checkbox" v-model="form.def" /> ตั้งเป็นที่อยู่ปัจจุบัน
      <hr />
      <v-button :loading="form.busy">เพิ่มที่อยู่</v-button>
    </form>
  </card>
</template>

<script>
import Form from "vform";

export default {
  data() {
    // เก็บข้อมูลที่อยู่ที่ได้จาก input ไว้ใน data
    return {
      form: new Form({
        information: "",
        subdistrict: "",
        district: "",
        province: "",
        zipcode: "",
        mobile_number: "",
        def: false
      })
    };
  },
  methods: {
    async addAddress() {
      const { data } = await this.form.post("/api/addresses");
      this.$router.push({ name: "settings.address" });
    }
  }
};
</script>
<style scoped>
label {
  width: 100%;
}
</style>
