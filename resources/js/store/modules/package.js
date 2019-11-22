import axios from "axios"
import * as types from "../mutation-types"

// state
export const state = {
  packages: null,
  show: null,
  myPackage: null,
  myPackageShow: null
}

// getters
export const getters = {
  packages: state => state.packages,
  show: state => state.show,
  myPackage: state => state.myPackage,
  myPackageShow: state => state.myPackageShow
}

// mutations
export const mutations = {
  [types.FETCH_PACKAGE](state, { data }) {
    state.packages = data
  },
  [types.FETCH_PACKAGE_SHOW](state, { data }) {
    state.show = data
  },
  [types.FETCH_MYPACKAGE](state, { data }) {
    state.myPackage = data
  },
  [types.FETCH_MYPACKAGESHOW](state, { data }) {
    state.myPackageShow = data
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
  async myPackage({ commit }) {
    try {
      const { data } = await axios.get("/api/packages/list")
      commit(types.FETCH_MYPACKAGE, { data })
    } catch (e) {
      console.log(e)
    }
  },
  async show({ commit }, id) {
    try {
      const { data } = await axios.get(`/api/packages/${id}`)
      commit(types.FETCH_PACKAGE_SHOW, { data })
    } catch (e) {
      console.log(e)
    }
  },
  async myPackageShow({ commit }, id) {
    try {
      const { data } = await axios.get(`/api/packages/list/${id}`)
      commit(types.FETCH_MYPACKAGESHOW, { data })
    } catch (e) {
      console.log(e)
    }
  }
}
