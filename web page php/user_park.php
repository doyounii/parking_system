<?php
   $link = mysqli_connect('localhost', 'root', '1234', 'park');
   $query = "SELECT parking_area_location FROM parking_area";
   $result = mysqli_query($link, $query);

   $total_rows = mysqli_num_rows($result);
   //echo "현재 잔여 좌석: ";
   //echo 24 - $total_rows;
   //$echo =  echo($total_rows);

  // $colors = ['FF0000', '#008000'];

  //$num = count($row);



  // while ($row = mysqli_fetch_array($result)){
  //   $num = count($row);
  //   echo count($row);
  // }





//   while ($row = mysqli_fetch_array($result)) {
//       $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
//   }

//   if($result = mysqli_query($link, $query)){
//     if(mysqli_num_rows($result) > 0){
  //     echo '<table>';
  //  while($row = mysqli_fetch_array($result)){
  //    $bgColor= $colors[$statusDevice];
  //    echo $bgColor;
      //echo $colors[0];
  //    echo '<tr><th>Status of Device</th>';
  //    echo "<td style = background-color:' .$bgColor.'>".$row['A'].'</td></tr>';
  //  }echo "</table>";
  //}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <h1 align = "center"> 주차장 </h1>
  <h5 align = "center"> 총 좌석: 24 </h5>
  <h5 align = "center"> 현재 잔여 좌석: <?=24 - $total_rows?></h5>

</head>
  <body>
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


    <div style = "padding: 10px;">
    </div>



  </body>
</head>
</html>