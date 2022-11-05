<?php
//include config file
require_once "config.php";

//dapatkan value
$name = $_POST['name'];
$password = $_POST['password'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

//prepare data for insert
$sql = "INSERT INTO users (name, password, address, postcode, city, state, country, email, mobile)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt,"sssissssi", $name, $password, $address, $postcode, $city, $state, $country, $email, $mobile);

$execute_result = mysqli_stmt_execute($stmt);
/*if($execute_result){
   echo "data successfully created";
}
 else{
    echo "Opps, something went wrong!";
 }*/


// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($conn);
header("Location: index.php");
 ?>
