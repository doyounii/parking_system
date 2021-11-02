
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title> 회원가입</title>
    <link rel = "stylesheet" type = "text/css" href = "test.css">
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
<h3>
    <div id = "frm" >

        <h1><strong>SignUp</strong></h1>


			     <h4 > <form action="process_member.php" method = "POST">

			          <table>
								 <tr>
									 <td><t> ID: </td>
									 <td><input type="text" size="28" name="user_id" placeholder="아이디"></td>
								</tr>
								<tr>
									 <td> PW: </td>
									 <td><input type="password" size="28" name="user_pw" placeholder="비밀번호"></td>
								</tr>
								<tr>
									 <td> NAME: </td>
									 <td><input type="text" size="28" name="user_name" placeholder="이름"></td>
								</tr>
								<tr>
									 <td> carnum: </td>
									 <td><input type="text" size="28" name="car_num" placeholder="차량번호"></td>
								</tr>
                <tr>

									 <td> tel: </td>
											<td><input type="text" size="28" name="user_phone" placeholder="핸드폰번호"></td>
                </tr>

					 </table>

            	<input type="submit" value="가입하기" >
			      </form> </h4>


      </div>
</h3>
      <h2>
        <form action="real_front.php" method="POST">
          <input type="submit" value="돌아가기">
        </form>
      </h2>
    </body>
</html>
