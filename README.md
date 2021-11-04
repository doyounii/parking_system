# parking_system

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
![image](https://user-images.githubusercontent.com/49148640/140250521-ab72451f-7973-41fe-84bd-d258ec8855a0.png)



<h5> 4. 프로그램 작동 동영상 & 화면 및 설명 </h5>

<h5> https://www.youtube.com/watch?v=p7RqX0axbCo&feature=youtu.be </h5>

#

<h5>OpenCV를 이용한 차량 번호 인식</h5>

![image](https://user-images.githubusercontent.com/49148640/140250567-a75282a9-513d-4c5c-bc7a-ccdbdc89b67c.png)

- OpenCV 라이브러리를 이용해 차량의 번호판 글자 인식 및 추출. 인식된 번호를DB에 자동으로 데이터 삽입해 데이터 누적.

#

<h5>장애인 차량 스티커 인식</h5>
![image](https://user-images.githubusercontent.com/49148640/140250591-30261cb9-1784-41f1-bb78-0ee14771c78a.png)


- OpenCV 라이브러리를 이용해 차량의 장애인 차량 스티커 인식. 준비된 장애인 차량 스티커와 실제 차량의 스티커가 일치하는 부분을 비교해 50개 이상 일치할 때 장애인 차량으로 간주함.

#

<h5>S/W 웹 기능 실사 사진</h5>
![image](https://user-images.githubusercontent.com/49148640/139928720-f50ac2e1-f3be-4ec8-bf9c-7400f41e1760.png)


#

<h5>- 사용자 웹 페이지</h5>
![image](https://user-images.githubusercontent.com/49148640/140250978-807e4466-fdf8-438b-a2d0-75d55a462aea.png)

1. 프론트 페이지에서 사용자/매니저 구분 및 회원가입
2. 사용자 로그인
3. 사용자 페이지에서 현재 잔여 좌석 확인


#
<h5>- 관리자 웹 페이지</h5>

![image](https://user-images.githubusercontent.com/49148640/140250729-b732f8cf-b268-4f97-b273-7a7b5cbaabaf.png)

![image](https://user-images.githubusercontent.com/49148640/140250759-8e1f3985-d7d7-4328-8dff-f02c8dbc7616.png)


1. 주차장 실시간 확민 및 특수 구역 관리
2. 차량 번호 조회를 통한 거주자의 정보 확인
3. 장기 주차 차량 조회 및 출차 유도를 통한 관리
#


<h5>R을 이용한 차량 시간 조회</h5>
![image](https://user-images.githubusercontent.com/49148640/140250824-7bf37826-d50f-4d3b-842f-b5316172815e.png)


    R과 MySQL을 연결한 후 resident_long_term_parking 테이블의 total_time 컬럼의 시간 중 max 값을 찾음. 그 max에 해당하는 정수 값이 가장 주차를 오래한 차가 되므로 출차 유도를 해야 함. 관리자 페이지에서 max 값에 해당하는 숫자를 입력하면 해당 시간만큼 주차한 차량을 웹에서 출력한 후 출차 유도.




<h5> 5. 역할 분담 </h5>

<ul>

 <li> 팀장 -  이소윤 </li>
dOpenCV,  AWS S3 , web css 
OpenCV를 이용하여 차량번호 식별
Apache를 이용하여 웹 구축
- 주차장 실시간 학인
- 거주자 정보 확인
- 정기 거주 차량 조회
 <li> 김은서 </li>
AWS EC2, manager web, DB 
 <li> 김보연 </li>
R,  WS S3 , web css
 <li> 홍민아 </li>
AWS EC2, user web
</ul>


![image](https://user-images.githubusercontent.com/49148640/140272381-f795964a-d04f-4324-a57d-bbf714abd5a3.png)


