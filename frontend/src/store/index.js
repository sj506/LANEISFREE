import { createStore } from 'vuex';
import createPersistedState from 'vuex-persistedstate';

export default createStore({
  state: {
    user: {},
    session_id: '',
    getProductList: {},
    selectProduct: [],
    getProductImg: {},
    cateList: {
      유형별: ['전체보기', '스킨/미스트', '기프트세트', '클렌징', '로션/에멀젼'],
      고민별: ['전체보기', '주름/탄력/보습', '수분/보습'],
      라인별: ['전체보기', '블루에너지', '크림 스킨', '액티브워터', '기타'],
    },
    userProductList: [],
  },
  getters: {},
  mutations: {
    user: (state, data) => {
      state.user = data;
    },
    session_id: (state, data) => {
      state.session_id = data;
    },
    getProductList: (state, data) => {
      state.getProductList = data;
    },
    selectProduct: (state, data) => {
      state.selectProduct = data;
    },
    getProductImg: (state, data) => {
      state.getProductImg = data;
    },
    userProductList: (state, data) => {
      state.userProductList = data;
    },
  },
  plugins: [
    createPersistedState({
      paths: ['setUser', 'getProductList', 'user.result.m_email', 'user.result.m_tel', 'user.result.m_addr', 'user.result.m_nm', 'user.result.m_num'],
      storage: window.sessionStorage,
    }),
  ],
  actions: {},
});
