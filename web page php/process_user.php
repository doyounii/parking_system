<?php

if(isset($_GET['input_car_num'])){
     $carnum = $_GET['input_car_num'];
} else {
    $carnum = $_POST['input_car_num'];
}

$link = mysqli_connect('localhost', 'root', '1234', 'park');

  $query = "SELECT car_num, parking_area_location FROM parking_area WHERE car_num= '{$carnum}' ";
  $result = mysqli_query($link, $query);
  $list='';


  // $list ='';
  while ($row = mysqli_fetch_array($result)) {

      $list=$list."<h3>차량번호: {$row['car_num']} <br>
     주차구역: {$row['parking_area_location']} <br></h3>" ;
  }


  ?>

 <!DOCTYPE html>
  <html>
   <head>
    <meta charset="utf-8">
    <title> 사용자 페이지 </title>
    <style>
      h2 {
        text-align: center;
      }
      h3 {
        text-align: center;
        margin: 0 auto;
        border: 10px solid #dddddd;
        padding: 10px;
        width: 300px;
        box-sizing: 100px;
        background-color: white;
        line-height: 2.0;
      }

    </style>

   </head>
   <body>
    <h2 style="line-height: 4.0;"><strong>---- 사용자 페이지 ----</strong></h2>
    <ol><?= $list ?></ol>
    <form action="user_info.php" method="POST">
     <h2><p><input type="submit" value="돌아가기"></p></h2>
    </form>
   </body>
  </html>
