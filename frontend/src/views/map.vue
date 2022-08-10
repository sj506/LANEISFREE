<template>
  <div class="map-container">
    <div class="search-box">
      <div class="find-store__panel">
        <h1 class="h2 find-store__title">매장찾기</h1>
        <div class="find-store__form">
          <div class="find-store__form__search">
            <div class="input-g input-g--search">
              <input type="search" id="keyword1" placeholder="지역 또는 매장명 입력" v-model="mainAddrName" @keyup.enter="initMap(mainAddrName)" class="input-block" />
              <button type="submit" class="btnSearch" @click="initMap(mainAddrName)"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </div>
        </div>
        <p class="find-store__noti xsearch-result">총 <strong>1</strong>건 검색되었습니다.</p>
      </div>
      <div class="find-store__results">
        <ul class="xstore-list">
          <li class="store-item store-item--fs is-current" data-lat="37.563353" data-lng="126.984372" data-specific="마이 딜리셔스 테라피">
            <a class="store-item__link link" @click="initMap('라네즈 명동')">
              <div class="store-item__info">
                <div class="store-item__title"><span class="badge">FS</span> <strong class="store-item__name link__text">라네즈 명동 쇼룸</strong></div>
                <div class="store-item__address">서울 중구 명동8길 8 (명동2가)</div>
                <div class="store-item__tel"><span class="link">02-754-1970</span></div>
              </div>
            </a>
            <div class="store-item__map-container"></div>
          </li>
        </ul>
      </div>
    </div>
    <div class="map-box">
      <div id="map"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'KakaoMap',
  data() {
    return {
      mainAddr: {
        addrName: '라네즈 명동',
        lat: 37.5633964,
        lng: 126.984469,
      },
      mainAddrName: '라네즈 명동',
    };
  },
  mounted() {
    if (window.kakao && window.kakao.maps) {
      this.initMap();
    } else {
      const script = document.createElement('script');
      /* global kakao */
      script.onload = () => kakao.maps.load(this.initMap);
      script.src = '//dapi.kakao.com/v2/maps/sdk.js?autoload=false&appkey=bde863c577cbd7e12809573b0542820b&libraries=services';
      document.head.appendChild(script);
    }
  },
  created() {
    // this.initMap();
  },
  methods: {
    initMap(mainAddrName) {
      console.log(mainAddrName);
      if (mainAddrName === null) {
        mainAddrName = '라네즈 명동';
      }
      this.mainAddr.addrName = mainAddrName;
      // 마커를 클릭하면 장소명을 표출할 인포윈도우 입니다
      var infowindow = new kakao.maps.InfoWindow({ zIndex: 1 });

      var mapContainer = document.getElementById('map'), // 지도를 표시할 div
        mapOption = {
          center: new kakao.maps.LatLng(this.mainAddr.lat, this.mainAddr.lng), // 지도의 중심좌표
          level: 3, // 지도의 확대 레벨
        };

      // 지도를 생성합니다
      var map = new kakao.maps.Map(mapContainer, mapOption);

      // 장소 검색 객체를 생성합니다
      var ps = new kakao.maps.services.Places();

      // 키워드로 장소를 검색합니다
      ps.keywordSearch(this.mainAddr.addrName, placesSearchCB);

      // 키워드 검색 완료 시 호출되는 콜백함수 입니다
      function placesSearchCB(data, status, pagination) {
        if (status === kakao.maps.services.Status.OK) {
          // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
          // LatLngBounds 객체에 좌표를 추가합니다
          var bounds = new kakao.maps.LatLngBounds();

          for (var i = 0; i < data.length; i++) {
            displayMarker(data[i]);
            bounds.extend(new kakao.maps.LatLng(data[i].y, data[i].x));
          }

          // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
          map.setBounds(bounds);
        }
      }

      // 지도에 마커를 표시하는 함수입니다
      function displayMarker(place) {
        // 마커를 생성하고 지도에 표시합니다
        var marker = new kakao.maps.Marker({
          map: map,
          position: new kakao.maps.LatLng(place.y, place.x),
        });
        console.log(place);

        // 마커에 클릭이벤트를 등록합니다
        kakao.maps.event.addListener(marker, 'click', function () {
          // 마커를 클릭하면 장소명이 인포윈도우에 표출됩니다
          infowindow.setContent(`<div class="placeInfo"  style="padding:30px;font-size:12px;"><h6 class="placeName">${place.place_name}</h6>
          <p>${place.address_name}</p>
          </div>`);
          infowindow.open(map, marker);
        });
      }
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#map {
  margin-top: 20px;
  width: 60vw;
  height: 80vh;
}
.search-box {
  width: 20vw;
  margin-top: 100px;
}
.find-store__title {
  font-size: 28px;
}
.map-container {
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
}
.map-box {
  margin: 50px;
}
.placeInfo {
  width: 200px;
  height: 200px;
}
.input-block {
  width: 100%;
  height: 50px;
  padding: 10px;
}
.input-block:focus {
  outline: none;
}
.input-g {
  display: flex;
}
.btnSearch {
  width: 50px;
  height: 50px;
  background-color: var(--bg-black);
  color: var(--text-white);
}
.btnSearch i {
  font-size: 20px;
}
.badge {
  background-color: var(--bg-point);
  width: 40px;
  border-radius: none !important;
}
.store-item__link {
  color: var(--text-dark-gray);
}
.store-item__link:hover {
  color: var(--text-point);
}

.store-item__title {
  margin: 10px 0;
}
.find-store__noti {
  color: var(--text-gray);
  margin-top: 10px;
  padding-bottom: 10px;
  border-bottom: 1px solid var(--text-dark-gray);
}
</style>
