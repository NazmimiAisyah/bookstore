<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

//creating connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connect ke tak
if(!$conn){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

/*if($conn)
    "Connection successful";*/


?>
