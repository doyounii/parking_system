<?php
  $link = mysqli_connect('localhost', 'root', '1234', 'park');
  $query = "SELECT parking_area_location, car_num  FROM parking_area ORDER BY parking_area_location ";
  $result = mysqli_query($link, $query);

  $emp_info = '';
  while($row = mysqli_fetch_array($result)) {
    $emp_info .= '<tr>';
    $emp_info .= '<th>'.$row['parking_area_location'].'</th>';
    $emp_info .= '<th>'.$row['car_num'].'</th>';

    if ($row['parking_area_location'] == '나-1') {
         $emp_info .= '<th><a href="process_resident_park.php? input_car_num='.$row['car_num'].'"> check</a></th>';
     } elseif ($row['parking_area_location'] == '나-2') {
        $emp_info .= '<th><a href="process_resident_park.php? input_car_num='.$row['car_num'].'"> check</a></th>';
     } elseif ($row['parking_area_location'] == '다-9') {
        $emp_info .= '<th><a href="process_resident_park.php? input_car_num='.$row['car_num'].'"> check</a></th>';
     }elseif ($row['parking_area_location'] == '다-10') {
         $emp_info .= '<th><a href="process_resident_park.php? input_car_num='.$row['car_num'].'"> check</a></th>';
     }else{

         $emp_info .= '<th></th>';

     }


    $emp_info .= '</tr>';
  }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>주차장</title>

    <style>
    form {
      text-align: right;
    }
    </style>
</head>
<body>
  <form action="long_term.php" method="POST">
    <input type="number" name="number" placeholder="number">
    <input type="submit" value="Search">
</form>

  <table  border = "1" width = "300" height = "130" align = "center">
     <tr>
       <td bgcolor="#99CC66"> 나-1 </td>
       <td bgcolor="#99CC66"> 나-2 </td>
       <td> 나-3 </td>
       <td> 나-4 </td>
       <td> 나-5 </td>
       <td> 나-6 </td>
       <td> 나-7 </td>
       <td> 나-8 </td>
       <td> 나-9 </td>
       <td> 나-10 </td>

     </tr>
     <tr>
       <td> 다-1 </td>
       <td> 다-2 </td>
       <td> 다-3 </td>
       <td> 다-4 </td>
       <td> 다-5 </td>
       <td> 다-6 </td>
       <td> 다-7 </td>
       <td> 다-8 </td>
       <td bgcolor= "#3195ab"> 다-9 </td>
       <td bgcolor= "#3195ab">다-10</td>
     </tr>

   </table>


    <h2><center>현시각 주차장 상황</center></h2><br>
    <table style="float:center;" border = "3" width = "500" height = "500" align = "center">
        <tr>
            <th>parking_area</th>
            <th>car_num</th>
            <th>check</th>
        </tr>
        <?= $emp_info ?>
    </table>

</body>
</html>
