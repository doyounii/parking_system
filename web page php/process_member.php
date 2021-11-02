<?php

$link= mysqli_connect('localhost', 'root', 'rootroot', 'park');

$query = "
INSERT INTO user
  (user_id,user_name,user_pw,car_num,user_phone)
  VALUES(
    '{$_POST['user_id']}',
    '{$_POST['user_name']}',
    '{$_POST['user_pw']}',
    '{$_POST['car_num']}',
    '{$_POST['user_phone']}'
    )
";

$result = mysqli_query($link, $query);

if ($result == false) {
    echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
    error_log(mysqli_error($link));
} else {
    header('Location: ./user_login.php');
}
