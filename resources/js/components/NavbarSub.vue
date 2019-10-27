<template>
  <div class="navsub">
    <div class="container">
      <ul class="menus clearfix p-0">
        <li v-for="(menu, index) in menus" :key="index" :class="menu.class ? menu.class : ''">
          <router-link :to="menu.to" class="text-white">{{menu.name}}</router-link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      menus: [
        { name: "หน้าแรก", to: "/home", class: "pl-0" },
        { name: "สินค้า", to: "" },
        { name: "รีวิว", to: "" },
        { name: "แพ็คเกจ", to: "" },
        { name: "วิธีการเช่า", to: "" },
        { name: "เกี่ยวกับเรา", to: "" },
        { name: "ติดต่อเรา", to: "", class: "pr-0" }
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
.navsub {
  background: #f87096;
}
.menus {
  list-style: none;
  color: #fff;
  li {
    float: left;
    padding: 20px 60px;
  }
}
</style>
