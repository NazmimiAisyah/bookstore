<?php
require_once "config.php";

$sql = "SELECT * FROM users";
session_start();
$uid = $_SESSION['uid'];
if($stmt = mysqli_prepare($conn, $sql)){

//execute (run)
if(mysqli_stmt_execute($stmt)){
  $result = mysqli_stmt_get_result($stmt);
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //echo $result;
  //echo $rows;
  $name = $row["name"];
  $address = $row["address"];
  $postcode = $row["postcode"];
  $city = $row["city"];
  $state = $row["state"];
  $country = $row["country"];
  $email = $row["email"];
  $mobile = $row["mobile"];

}else{
   echo "Opps! something went wrong.";
}
}
if(mysqli_num_rows($result) > 0) {
  echo "<table>";
    echo "<tr>";
      echo "<th>Name</th>";
      echo "<th>Address</th>";
      echo "<th>Postcode</th>";
      echo "<th>City</th>";
      echo "<th>State</th>";
      echo "<th>Country</th>";
      echo "<th>Email</th>";
      echo "<th>Mobile</th>";
    echo "</tr>";

    //Insert row of data here (loop)
    foreach ($rows as $row) {
      echo "<tr>";
        echo "<td>" .$row['name']. "</td>";
        echo "<td>" .$row['address']. "</td>";
        echo "<td>" .$row['postcode']. "</td>";
        echo "<td>" .$row['city']. "</td>";
        echo "<td>" .$row['state']. "</td>";
        echo "<td>" .$row['country']. "</td>";
        echo "<td>" .$row['email']. "</td>";
        echo "<td>" .$row['mobile']. "</td>";
      echo "</tr>";
    }

  echo "</table>";
  mysqli_free_result($result);
 }





//close statment
mysqli_stmt_close($stmt);

//close fann_get_total_connections
mysqli_close($conn);


?>
