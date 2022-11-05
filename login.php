<?php

require_once "config.php";
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

$sql1 = "SELECT * from users WHERE email = '$email' or password = '$password'";
$sql2 = "SELECT * from users WHERE email = '$email' and password = '$password'";

$uid = "";

//check if email exist
if($stmt1 = mysqli_prepare($conn, $sql1)){
  if(mysqli_stmt_execute($stmt1)){
    $result1 = mysqli_stmt_get_result($stmt1);
    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    if(empty($row1)) {
      echo '<script>alert("User not found. Please register"); window.location = "http://localhost/bookstore/register.php"</script>';
    } else {
      if($stmt2 = mysqli_prepare($conn, $sql2)){
        if(mysqli_stmt_execute($stmt2)){
          $result2 = mysqli_stmt_get_result($stmt2);
          $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
          if(!empty($row2)) {
            $uid = $row2["uid"];
            $email = $row2["email"];
            $pwd = $row2["password"];
            $name = $row2["name"];
            $address = $row2["address"];
            $mobile = $row2["mobile"];
            $postcode = $row2["postcode"];
            $city = $row2["city"];
            $state = $row2["state"];
            $country = $row2["country"];
          }
        }
      }
    }
    if(isset($uid) && !empty($uid)){
      echo '<script>alert("Login successful"); window.location = "http://localhost/bookstore/index.php"</script>';
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
    } else {
      echo '<script>alert("Wrong email/password"); window.location = "http://localhost/bookstore/loginpage.php"</script>';
    }
  }
}


 ?>
