import axios from "axios"
import * as types from "../mutation-types"

// state
export const state = {
  packages: null,
  show: null
}

// getters
export const getters = {
  packages: state => state.packages,
  show: state => state.show
}

// mutations
export const mutations = {
  [types.FETCH_PACKAGE](state, { data }) {
    state.packages = data
  },
  [types.FETCH_PACKAGE_SHOW](state, { data }) {
    state.show = data
  }
}

// actions
export const actions = {
  async fetch({ commit }) {
    try {
      const { data } = await axios.get("/api/packages")
      commit(types.FETCH_PACKAGE, { data })
    } catch (e) {
      console.log(e)
    }
  },
  async show({ commit }, id) {
    try {
      const { data } = await axios.get(`/api/packages/${id}`)
      commit(types.FETCH_CAT_SHOW, { data })
    } catch (e) {
      console.log(e)
    }
  }
}
