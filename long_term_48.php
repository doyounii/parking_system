<?php
  $link = mysqli_connect('localhost:3307', 'root', 'rootroot', 'park');
  $query = "SELECT * FROM resident_longterm_parking WHERE total_time >2880 ";
  $result = mysqli_query($link, $query);



$list='';


  while ($row = mysqli_fetch_array($result)) {
      $list=$list."<h3>
   차량번호: {$row['car_num']} <br>
   총 주차 시간: {$row['total_time']}분 <br></h3>" ;
  }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>주차장</title>
    <style>
    h3 {
      text-align: center;
      margin: 0 auto;
      border: 10px solid #ff3366;
      padding: 10px;
      width: 300px;
      box-sizing: 100px;
      background-color: white;
      line-height: 2.0;
    }
    h4 {
      text-align: center;
      margin: 0 auto;
      color: #ff3366;
      background-color: white;
      line-height: 2.0;
    }

    </style>
</head>
<body>


    <br>
    <h2><center>장기 주차 차량</center></h2>
    <h4><center>*출차 유도 하세요*</center></h4>
    <?= $list ?>

    <form action="manager.php" method="POST"><center>
     <p><input type="submit" value="돌아가기"></p></center>
    </form>
</body>
</html>
