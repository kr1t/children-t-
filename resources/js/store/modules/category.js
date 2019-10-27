import axios from "axios"
import * as types from "../mutation-types"

// state
export const state = {
  categories: null
}

// getters
export const getters = {
  categories: state => state.categories
}

// mutations
export const mutations = {
  [types.FETCH_CAT](state, { data }) {
    state.categories = data
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
  }
}
