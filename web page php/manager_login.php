<?php
      //<!--php부분 form에 입력한 내용을 데이터베이스와 비교해서 로그인 여부를 알려준다.-->
      if(isset($_POST['user'])&&isset($_POST['pass'])){//post방식으로 데이터가 보내졌는지?
        $username=$_POST['user'];//post방식으로 보낸 데이터를 username이라는 변수에 넣는다.
        $userpw=$_POST['pass'];//post방식으로 보낸 데이터를 userpw라는 변수에 넣는다.


$conn= mysqli_connect('localhost:3307', 'root', 'mina8244', 'parking_project');
        //sql문을 sql변수에 저장해놓는다.

        $sql="SELECT * FROM manager where code='$username'&&pw='$userpw'";

        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공

          //로그인 성공하면 manager 페이지로 이동
        echo "<script>location.href='manager.php';</script>";
        }
        else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
          echo 'login 실패 하였습니다.';
        }
      }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Manager Login</title>
    <style>
      h2 {
        text-align: center;
      }
      h3 {
        text-align: center;
        margin: 100px auto;
        border: 10px solid #ffffff;
        padding: 10px;
        width: 300px;
        box-sizing: 100px;
        background-color: #eeeefe;
        line-height: 2.0;
      }
    </style>

    <!-- <link rel = "stylesheet" type = "text/css" href = "test.css"> -->
</head>
<body bgcolor = "#e9ebfE">

    <!-- <div id = "frm"> -->
        <h3>
          <p> Manager Login</p>
        <form method = "POST">
          <p>
              <label> M_Code: </label>
              <input type = "text" id ="user" name  = "user" />

              <label> Password: </label>
              <input type = "password" id ="pass" name  = "pass" />
          </p>

              <input type =  "submit" id = "btn" value = "Login" />

        </form>
      </h3>
    <!-- </div> -->

    <h2>
      <form action="real_front.php" method="POST">
        <input type="submit" value="돌아가기">
      </form>
    </h2>
</body>
</html>