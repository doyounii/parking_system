<?php
 $link = mysqli_connect('localhost:3307', 'root', 'rootroot', 'dbp2');
 $carnum = mysqli_real_escape_string($link, $_POST['input_car_num']);
 $query = "SELECT * FROM resident WHERE car_num= '{$carnum}' ";
 $result = mysqli_query($link, $query);
 $list='';
 $type='';

 // $list ='';
 while ($row = mysqli_fetch_array($result)) {
     if ($row['car_type'] == 1) {
         $num = '일반 차량';
     } elseif ($row['car_type'] == 2) {
         $num = '장애인 차량';
     } elseif ($row['car_type'] == 3) {
         $num = '전기 차량';
     }

     $type = $num;

     $list=$list."<h3>차량번호: {$row['car_num']} <br>
    이름: {$row['name']} <br>
    전화번호: {$row['phone']} <br>
    주소: {$row['address']} <br>
    차량 종류 : {$type} <br></h3>" ;
 }


 ?>

<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
   <title> 관리자 페이지 </title>
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
   <h2 style="line-height: 4.0;"><strong>---- 관리자 페이지 ----</strong></h2>
   <ol><?= $list ?></ol>
   <form action="park.php" method="POST">
    <h2><p><input type="submit" value="돌아가기"></p></h2>
   </form>
  </body>
 </html>
