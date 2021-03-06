function page(path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [
  { path: "/", name: "welcome", component: page("welcome.vue") },

  { path: "/login", name: "login", component: page("auth/login.vue") },
  { path: "/register", name: "register", component: page("auth/register.vue") },
  { path: "/password/reset", name: "password.request", component: page("auth/password/email.vue") },
  {
    path: "/password/reset/:token",
    name: "password.reset",
    component: page("auth/password/reset.vue")
  },
  {
    path: "/email/verify/:id",
    name: "verification.verify",
    component: page("auth/verification/verify.vue")
  },
  {
    path: "/email/resend",
    name: "verification.resend",
    component: page("auth/verification/resend.vue")
  },

  { path: "/home", name: "home", component: page("home.vue") },
  {
    path: "/settings",
    component: page("settings/index.vue"),
    children: [
      { path: "", redirect: { name: "settings.profile" } },
      { path: "profile", name: "settings.profile", component: page("settings/profile.vue") },
      { path: "address", name: "settings.address", component: page("settings/address.vue") },
      {
        path: "address/create",
        name: "settings.address.create",
        component: page("settings/address-create.vue")
      },

      { path: "password", name: "settings.password", component: page("settings/password.vue") }
    ]
  },
  {
    path: "/products",
    name: "product.all",
    component: page("product/index.vue")
  },
  {
    path: "/mycarts",
    name: "cart",
    component: page("cart/index.vue")
  },
  {
    path: "/mypackage",
    name: "my.package",
    component: page("myPackage/index.vue")
  },
  {
    path: "/products/:id",
    name: "product.show",
    component: page("product/show.vue")
  },
  {
    path: "/howto",
    name: "howto",
    component: page("howto/index.vue")
  },
  {
    path: "/about",
    name: "about",
    component: page("about/index.vue")
  },
  {
    path: "/contact",
    name: "contact",
    component: page("contact/index.vue")
  },
  {
    path: "/category/:slug",
    name: "category.show",
    component: page("category/show.vue")
  },
  {
    path: "/payment/:payment_by",
    name: "payment",
    component: page("payment/Index.vue")
  },

  { path: "*", component: page("errors/404.vue") }
]
