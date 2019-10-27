import axios from "axios"
import * as types from "../mutation-types"

// state
export const state = {
  products: null,
  all: null,
  show: null
}

// getters
export const getters = {
  products: state => state.products,
  all: state => state.all,
  show: state => state.show
}

// mutations
export const mutations = {
  [types.FETCH_PRODUCT](state, { data }) {
    state.products = data
  },
  [types.FETCH_PRODUCT_ALL](state, { data }) {
    state.all = data
  },
  [types.FETCH_PRODUCT_SHOW](state, { data }) {
    state.show = data
  }
}

// actions
export const actions = {
  async fetch({ commit }) {
    try {
      const { data } = await axios.get("/api/products")

      commit(types.FETCH_PRODUCT, { data })
    } catch (e) {
      console.log(e)
    }
  },
  async fetchAll({ commit }) {
    try {
      const { data } = await axios.get("/api/products?all=1")

      commit(types.FETCH_PRODUCT_ALL, { data })
    } catch (e) {
      console.log(e)
    }
  },
  async show({ commit }, id) {
    try {
      const { data } = await axios.get(`/api/products/${id}`)

      commit(types.FETCH_PRODUCT_SHOW, { data })
    } catch (e) {
      console.log(e)
    }
  }
}
