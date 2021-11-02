<!DOCTYPE html>
 <html lang = "ko">
 <head>
   <meta charset="utf-8">
   <title> 사용자 페이지</title>
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
   <h3> 차량 번호를 입력하세요.
   <form action="process_user.php" method="post">
   <p><input type="text" name="input_car_num" placeholder="차량 번호"></p>
   <p><input type="submit" value="입력"></p> </h3>
 </body>
 </html>
