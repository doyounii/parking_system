
## 주차 시스템

<h1> 한이음 IoT 기반 스마트 공유 주차 관리 시스템 구축 </h1>
<h3> [ 인력 기반 주차 관리의 새건 및 특수 구역의 관리 활성화를 위한 프로젝트 ] </h3>
<h3> 시스템 구축팀 </h3>
김보연 김은서 이소윤 홍민아

<h5> 1. 프로젝트 개발 배경 </h5>
<ul>
<li> 인력 기반 주차 관리의 개선 필요 </li>
<li> 정기 주차 차량과 방문 주차 차량의 구분이 명확하지 않음 </li> 
<li> 전기 자동차와 장애인 주차 구역의 관리가 소홀함 </li>
</ul>

 <h5> 2. 서비스의 주요 기능 </h5>
<ul>
<li> OpenCV를 이용해 전기자동차, 장애인 자동차 등록여부 판단 </li>
<li> 영상 데이터를 기반으로 주차차량 데이터 실시간 수집 </li>
<li> 전기 자동차, 장애인자동차 등록되지 않은 차량 파악 </li>
<li> 장기 거주 차량 출차 유도 </li>
</ul>

<h5> 3. 서비스 흐름도 </h5>
<img scr="![image](https://user-images.githubusercontent.com/49148640/139809466-9b4fce20-4964-49b5-9eaa-63cdefb53660.png)" width="600" height="370">
 
<h5> 4. 프로그램 작동 동영상 & 화면 및 설명 </h5>

<h5> https://www.youtube.com/watch?v=p7RqX0axbCo&feature=youtu.be </h5>

<h5>OpenCV를 이용한 차량 번호 인식</h5>
![image](https://user-images.githubusercontent.com/49148640/139810073-2eadf60d-23f7-49a2-a534-354cee034740.png)

OpenCV 라이브러리를 이용해 차량의 번호판 글자 인식 및 추출. 인식된 번호를DB에 자동으로 데이터 삽입해 데이터 누적.

<h5> 5. 역할 분담 </h5>

<ul> 
 <li> 20180887 강민진 </li>
웹 호스팅 담당
db 임포트 및 xml 파일 변환, 인코딩
 <li> 20180990 이소윤 </li>
db와 웹 페이지 연동 및 웹 페이지 프로그래밍, db 임포트
sql 쿼리 작성 및 career.php, closedt.php, local.php, salary.php 구현
 <li>	20180991 이영주 </li>
전체 시스템 취합 및 프로젝트 목표 확립, sql 쿼리 작성 및
소개 페이지 작성 
 <li>	20172076 이지원 </li>
sql 쿼리 작성 및 웹 페이지 프로그래밍
</ul>
<h5> + 저희는 연락을 빠르게 수행하기 위해 슬랙보다는 카카오톡 단체 채팅방에서 회의와 프로그래밍 진행상황을 공유하였으며 슬랙은 회의 내용을 요약해 간단히 작성해 놓았습니다.</h5>

<h5> 6. 데이터베이스 출처 : 워크넷 </h5>
http://openapi.work.go.kr/opi/opi/opia/wantedApi.do?authKey=WNKIECSDX2XT7JDKXLBUU2VR1HK&callTp=L&returnType=XML&startPage=1&display=10

<h5> 7. 웹 호스팅 주소 </h5>
http://dbpt12.woobi.co.kr/index.php

<h5> 8. 웹 호스팅 영상 </h5>
https://youtu.be/ZuGC13up_Rk
