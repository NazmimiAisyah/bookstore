<?php
//include config file
require_once "config.php";

//dapatkan value
$uid = $_POST['uid'];
$bid = $_POST['bid'];
$ref = $_POST['ref'];

//prepare data for insert
$sql = "INSERT INTO purchase (uid, bid, ref) VALUES ('$uid', '$bid', '$ref')";

if (mysqli_query($conn, $sql)){
  echo '<script>alert("Purchase successful"); window.location = "http://localhost/bookstore/index.php"</script>';
}else{
  echo '<script>alert("try again"); window.location = "http://localhost/bookstore/index.php"</script>';
}

// Close connection
mysqli_close($conn);
 ?>
