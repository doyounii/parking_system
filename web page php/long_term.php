<?php

if(isset($_GET['number'])){
    $number = $_GET['number'];
} else {
    $number = $_POST['number'];
}

    $link = mysqli_connect('localhost:3306', 'root', '1234', 'park');
    $query = "select * from resident_long_term_parking where total_time = '{$number}'";
    $result = mysqli_query($link, $query);
    $list='';

    while ($row = mysqli_fetch_array($result)) {
      $list = $list."<h3>
    거주자 코드: {$row['resident_code']} <br>
     차량 번호 : {$row['car_num']} <br>
     총 주차 시간 : {$row['total_time']} <br>
     </h3>" ;

    }

?>

<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
   <title> 장기간 주차 </title>
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
