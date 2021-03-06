import axios from "axios"
import * as types from "../mutation-types"

// state
export const state = {
  categories: null,
  show: null
}

// getters
export const getters = {
  categories: state => state.categories,
  show: state => state.show
}

// mutations
export const mutations = {
  [types.FETCH_CAT](state, { data }) {
    state.categories = data
  },
  [types.FETCH_CAT_SHOW](state, { data }) {
    state.show = data
  }
}

// actions
export const actions = {
  async fetch({ commit }) {
    try {
      const { data } = await axios.get("/api/categories")
      commit(types.FETCH_CAT, { data })
    } catch (e) {
      console.log(e)
    }
  },
  async show({ commit }, slug) {
    try {
      const { data } = await axios.get(`/api/categories/${slug}`)
      commit(types.FETCH_CAT_SHOW, { data })
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
