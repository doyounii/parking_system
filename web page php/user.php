<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>사용자페이지</title>
    <style>
      #jb-container {
        background-color:#F8EFFB;
        width: 940px;
        margin: 0px auto;
        padding: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-header {
        border: 1px solid #bcbcbc;
        border-radius:10px;
        padding: 20px;
        margin-bottom: 30px;
        text-align: center;

      }
      #jb-sidebar-left {
        background-color: #C0B3E5;
        width: 185px;
        padding: 20px;
        margin-left: 200px;
        margin-right: 60px;
        margin-bottom: 100px;
        float: left;
        border: 1px solid #bcbcbc;
      }
      #jb-content {
        background-color: #C0B3E5;
        width: 185px;
        padding: 20px;
        margin-right: 60px;
        margin-bottom: 20px;
        float: left;
        border: 1px solid #bcbcbc;
      }

      #jb-sidebar-right {
        background-color: #C0B3E5;
        width: 185px;
        padding: 20px;
        margin-right: 60px;
        margin-bottom: 20px;
        float: left;
        border: 1px solid #bcbcbc;
      }

      #jb-footer {
        clear: both;
        padding: 20px;
        text-align: right;
      }
      a{
        color:black;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div id="jb-container">
      <div id="jb-header">
        <h1>사용자 페이지 </h1>
      </div>
      <div id="jb-sidebar-left">
        <h3><a href = "user_park.php"> 주차장 실시간</a></h3>
        <img src = "주차장.png">
      </div>
      <div id="jb-content">
        <h3><a href = "user_info.php"> 차량위치 확인</a></h3>
        <img src = "차량위치.png">

      </div>
      <!-- <div id="jb-sidebar-right">
        <h3>장기거주 차량조회</h3>
        <img src = "장기거주.png">
      </div> -->
      <div id="jb-footer">
        <p>  Developers: 한이음 [20_HI043F] </p>
      </div>
    </div>
  <h2>
    <form action="user_login.php" method="POST">
      <input type="submit" value="돌아가기">
    </form>
  </h2>

  </body>
</html>
