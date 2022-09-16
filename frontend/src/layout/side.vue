<template>
  <aside class="column-center">
    <div class="basket"></div>
    <div class="btnChat" @click="showChat">
      <div class="chat-circle flex-center">
        <i class="fa-regular fa-comment-dots"></i>
      </div>
    </div>
    <div class="toTop flex-center" @click="toTop">
      <i class="fa-solid fa-angle-up"></i>
    </div>
    <div>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-ins_product" data-bs-toggle="modal" data-bs-target="#exampleModal">상품등록</button>
    </div>
  </aside>
  <chat-view />

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">상품등록</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div><label for="" ref="pro_name">상품이름[한글]</label><input v-model="product.pro_name" type="text" name="" id="" /></div>
          <div><label for="" ref="pro_ename">상품이름[영어]</label><input v-model="product.pro_ename" type="text" name="" id="" /></div>
          <div>
            <label for="">카테고리 선택</label>
            <select name="" id="" ref="category1" @change="selectCate()" v-model="cate_type">
              <option value="">선택</option>
              <option v-for="(cate, idx) in category.cateList1" :value="idx + 1" :key="idx">{{ cate }}</option>
            </select>
            <select name="" id="" ref="category2" @change="selectCate()" v-model="cate_class">
              <option value="">선택</option>
              <option v-for="(cate, idx) in category.cateList2[cate_type - 1]" :value="idx + 1" :key="idx">{{ cate }}</option>
            </select>
          </div>
          <div><label for="">가격</label><input v-model="product.pro_price" type="number" ref="pro_price" name="" id="" /></div>
          <div><label for="">용량</label><input v-model="product.pro_volume" type="number" ref="pro_volume" name="" id="" /></div>
          <div><label for="">재고수량</label><input v-model="product.pro_stock" type="number" ref="pro_stock" name="" id="" /></div>
          <div><label for="">해쉬태그1</label><input v-model="product.pro_tag1" type="text" ref="pro_tag1" name="" id="" /></div>
          <div><label for="">해쉬태그2</label><input v-model="product.pro_tag2" type="text" ref="pro_tag2" name="" id="" /></div>
          <div class="product-ctnt"><label for="">상품설명</label><textarea v-model="product.pro_explain" ref="pro_explain" name="" id="" cols="30" rows="10"></textarea></div>
          <div><label for="">메인사진</label><input type="file" accept="image/png,image/jpeg" @change="mainImg" name="" id="" /></div>
          <div><label for="">서브사진[최대5개]</label><input type="file" accept="image/png,image/jpeg" @change="subImgs" multiple name="" id="" /></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
          <button type="submit" class="btn btn-primary" @click="productInsert">등록하기</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ChatView from '@/components/ChatView.vue';
export default {
  components: {
    ChatView,
  },
  data() {
    return {
      user: {},
      dNone: true,
      cate_type: '',
      cate_class: '',
      category: {
        cateList1: ['유형별', '고민별', '라인별'],
        cateList2: [
          ['스킨/미스트', '기프트세트', '클렌징', '로션/에멀젼'],
          ['주름/탄력/보습', '수분/보습'],
          ['블루에너지', '크림 스킨', '엑티브워터', '기타'],
        ],
      },

      product: {
        pro_name: '',
        pro_ename: '',
        pro_stock: '',
        pro_explain: '',
        pro_tag1: '#',
        pro_tag2: '#',
        pro_price: 0,
        pro_volume: 0,
        pro_mainimg: '',
        pro_subimgs: [],
      },
    };
  },
  methods: {
    showUser() {
      this.user = this.$store.state.user;
      console.log(this.user.result.m_level);
    },
    toTop() {
      window.scrollTo(0, 0);
    },
    showChat() {
      const chatContainer = document.querySelector('.chat-container');
      chatContainer.classList.toggle('dNone');
    },
    selectCate() {
      console.log(this.cate_type);
      console.log(this.cate_class);
    },
    async productInsert() {
      this.product.cate_type = this.cate_type;
      this.product.cate_class = this.cate_class;
      // 해쉬태그가 #으로 시작 하지 않을 때 앞에 #추가
      this.product.pro_tag1.startsWith('#') ? true : (this.product.pro_tag1 = '#' + this.product.pro_tag1);
      this.product.pro_tag2.startsWith('#') ? true : (this.product.pro_tag2 = '#' + this.product.pro_tag2);
      const res = await this.$post('/product/insProduct', this.product);

      const btnClose = document.querySelector('.btn-close');
      btnClose.click();
      alert('상품이 등록되었습니다.');
    },
    async mainImg(e) {
      const image = await this.$base64(e.target.files[0]);
      this.product.pro_mainimg = image;
      console.log(this.product);
    },
    async subImgs(e) {
      const files = e.target.files;
      if (files.length <= 5) {
        for (let i = 0; i < files.length; i++) {
          this.product.pro_subimgs.push(await this.$base64(files[i]));
        }
      } else {
        alert('5개를 초과하였습니다[최대 4개]');
      }
    },
  },
};
</script>

<style scoped>
.chat-container.dNone {
  display: none;
}
aside {
  position: fixed;
  bottom: 300px;
  right: 0;
  z-index: 10;
  width: 80px;
}
.chat-circle {
  margin: 20px 0;
  width: 60px;
  height: 60px;
  background-color: var(--bg-main);
  border-radius: 50%;
  padding: 20px;
  cursor: pointer;
}
.chat-circle i {
  font-size: 28px;
  color: var(--text-white);
}

.basket,
.toTop {
  border: 1px solid var(--text-light-gray);
  width: 100%;
  cursor: pointer;
  background-color: var(--bg-white);
}
.toTop i {
  font-size: 30px;
  color: var(--text-light-gray);
}
.btn-ins_product {
  width: 100%;
  margin-top: 20px;
  color: var(--text-white);
  background-color: var(--bg-main);
  border: none;
  display: none;
  padding: 10px;
}
.modal-body label {
  width: 150px;
  margin-right: 20px;
}
.product-ctnt {
  display: flex;
  justify-content: flex-start;
}
.modal-body input {
  width: 200px;
}
</style>
