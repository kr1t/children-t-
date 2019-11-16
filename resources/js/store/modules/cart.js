import axios from "axios"
import * as types from "../mutation-types"

// state
export const state = {
  carts: null
}

// getters
export const getters = {
  carts: state => state.carts
}

// mutations
export const mutations = {
  [types.FETCH_CART](state, { data }) {
    state.carts = data
  }
}

// actions
export const actions = {
  async fetch({ commit }) {
    try {
      const { data } = await axios.get("/api/carts")
      commit(types.FETCH_CART, { data })
    } catch (e) {
      console.log(e)
    }
  },
  async del({ dispatch }, id) {
    console.log("คุณกด id" + id)
    try {
      const { data } = await axios.delete(`/api/categories/${id}`)
      dispatch("fetch")
    } catch (e) {
      console.log(e)
    }
  }
}
