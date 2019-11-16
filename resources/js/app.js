import Vue from "vue"
import store from "~/store"
import router from "~/router"
import i18n from "~/plugins/i18n"
import App from "~/components/App"
import "~/plugins"
import "~/components"
import BootstrapVue from "bootstrap-vue"
import VueThailandAddress from "vue-thailand-address"

Vue.use(BootstrapVue)
import "bootstrap/dist/css/bootstrap.css"
import "bootstrap-vue/dist/bootstrap-vue.css"

Vue.config.productionTip = false

// เพิ่ม stylesheet ของ Vue Thailand Address เข้าไป
import "vue-thailand-address/dist/vue-thailand-address.css"

// ใช้ Plugin
Vue.use(VueThailandAddress)

/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App
})
