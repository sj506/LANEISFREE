import axios from 'axios';

export default {
  methods: {
    $getSrc(mainImg) {
      return require('@/assets/img' + mainImg);
    },
    $addComma(price) {
      return price.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ',');
    },
    async $post(url, param) {
      return (
        await axios({
          method: 'post',
          url,
          data: param,
        }).catch((e) => {
          console.error(e);
        })
      ).data;
    },

    async $get(url, param) {
      return (
        await axios
          .get(url, {
            params: param,
          })
          .catch((e) => {
            console.error(e);
          })
      ).data;
    },

    $base64(file) {
      return new Promise((resolve) => {
        const fr = new FileReader();
        fr.onload = (e) => {
          resolve(e.target.result);
        };
        fr.readAsDataURL(file);
      });
    },
  },
};
