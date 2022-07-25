# LANEIGFREE 설치

# 백앤드 경로 변경

conf 파일에서
DocumentRoot "${SRVROOT}/LANEISFREE/backend"
<Directory "${SRVROOT}/LANEISFREE/backend">
로 바꾸기

# 파일 받아오기 및 vue 설치

git clone https://github.com/sj506/LANEIGFREE.git

frontend 폴더에 들어가서

npm i --s vue

vue add router

vue add vuex

npm i --s axios

실행 , 중간에 나오는 것들은 다 y
