<template>
  <div class="dateSearchDiv">
    <table class="dateSearchTable">
      <tr>
        <th>기간별 조회</th>
        <td>
          <label class="inputRadio">
            <input type="radio" name="date">15일
          </label>
          <label class="inputRadio">
            <input type="radio" name="date">1개월
          </label>
          <label class="inputRadio">
            <input type="radio" name="date">2개월
          </label>
          <label class="inputRadio">
            <input type="radio" name="date">3개월
          </label>
          <label class="inputRadio">
            <input type="radio" name="date">6개월
          </label>
        </td>
      </tr>
      <tr>
        <th>일자별 조회</th>
        <td>
          <input type="text" class="inputText"> ~ <input type="text" class="inputText">
          <button class="searchBtn">검색</button>
        </td>
      </tr>
    </table>
  </div>
</template>

<script>
  export default {
    
  }
</script>

<style scoped>


.dateSearchDiv{
  margin: 0 0 14px;
  padding: 16px 0;
}
.dateSearchTable {
  border-collapse: collapse;
  table-layout: fixed;
  vertical-align: middle;
}

.dateSearchTable th {
  color: #222;
  text-align: left;
  vertical-align: middle;
  font-size: 16px;
  padding: 10px 0;
  font-weight: bold;
  width: 175px;
  height: 44px;
}

.dateSearchTable td {
  padding: 10px 0;
  vertical-align: middle;
}

.inputRadio {
  display: inline-block;
  margin-right: 25px;
  /* padding-left: 23px; */
  font-size: 15px;
  line-height: 1;
  cursor: pointer;
  vertical-align: middle;
  color: var(--text-light-gray);
}

.inputRadio input {
  margin: 5px;
  vertical-align: middle;
}

.inputText {
  width: 270px;
  height: 40px;
  border: 1px solid #dcdcdc;
  background-color: #fbfbfc;
  color: var(--bg-dark-gray);
  font-size: 16px;
  vertical-align: middle;
}

.searchBtn {
  height: 40px;
  line-height: 38px;
  padding: 0 16px;
  margin: 0 5px;
  background-color: #f3f3f3;
  border: 1px solid #a7a7a7;
  color: var(--bg-dark-gray);
  vertical-align: middle;
}
</style>