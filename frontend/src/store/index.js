import { createStore } from 'vuex';

export default createStore({
  state: {
    getCategoryList: {},
    getProductList: {},
    selectProduct: [],
    cateList: {
      유형별: ['전체보기', '스킨/미스트', '기프트세트', '클렌징', '로션/에멀젼'],
      고민별: ['전체보기', '주름/탄력/보습', '수분/보습'],
      라인별: ['전체보기', '블루에너지', '크림 스킨', '액티브워터', '기타'],
    },
  },
  getters: {},
  mutations: {
    getCategoryList: (state, data) => {
      state.getCategoryList = data;
    },
    getProductList: (state, data) => {
      state.getProductList = data;
    },
    selectProduct: (state, data) => {
      state.selectProduct = data;
    },
  },
  actions: {},
  modules: {},
});
