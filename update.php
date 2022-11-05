<?php
//include config get_included_files
require_once "config.php";

//update data
//$sql = "UPDATE signup SET name  = ?, password = ?, address = ?, postcode = ?, city = ?, state = ?, country = ?, email = ?, mobile = ? WHERE ori_name = ?"

$name = $_POST['name'];
$pwd = $_POST['pwd'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
session_start();
$uid = $_SESSION['uid'];

//echo '<script>alert("'.$name.'"); window.location = "http://localhost/bookstore/index.php"</script>';


$sql = "UPDATE users SET name  = '$name', password = '$pwd', address = '$address', postcode = '$postcode', city = '$city', state = '$state', country = '$country', email = '$email', mobile = '$mobile' WHERE uid = '$uid'";

if (mysqli_query($conn, $sql)){
  echo '<script>alert("Info updated"); window.location = "http://localhost/bookstore/index.php"</script>';
  session_destroy();
  session_unset();
  session_start();
  $_SESSION['uid']=$uid;
  $_SESSION['email']=$email;
  $_SESSION['pwd']=$pwd;
  $_SESSION['name']=$name;
  $_SESSION['address']=$address;
  $_SESSION['mobile']=$mobile;
  $_SESSION['postcode']=$postcode;
  $_SESSION['city']=$city;
  $_SESSION['state']=$state;
  $_SESSION['country']=$country;
}else{
  echo '<script>alert("Fail to update"); window.location = "http://localhost/bookstore/index.php"</script>';
}

 ?>
