<?php

require_once "config.php";
session_start();
$title = $_POST["ftitle"];
$author = $_POST["fauthor"];
$price = $_POST["fprice"];
$genre = $_POST["fgenre"];
$quantity = $_POST["fquantity"];
$uid = $_POST['uid'];
$email = $_POST['email'];
$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$postcode = $_POST['postcode'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];

$sql = "SELECT bid from books WHERE title = '$title' or author = '$author'";


      if($stmt2 = mysqli_prepare($conn, $sql)){
        if(mysqli_stmt_execute($stmt2)){
          $result2 = mysqli_stmt_get_result($stmt2);
          $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
          if(!empty($row2)) {
            $bid = $row2["bid"];
          }
        }
      }

$_SESSION['bid']=$bid;
$_SESSION['title']=$title;
$_SESSION['author']=$author;
$_SESSION['price']=$price;
$_SESSION['genre']=$genre;
$_SESSION['quantity']=$quantity;
$_SESSION['uid']=$uid;
$_SESSION['email']=$email;
$_SESSION['name']=$name;
$_SESSION['address']=$address;
$_SESSION['mobile']=$mobile;
$_SESSION['postcode']=$postcode;
$_SESSION['city']=$city;
$_SESSION['state']=$state;
$_SESSION['country']=$country;
header("Location: purchaseform.php");

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script type="text/javascript">
     function debug(){
       alert("<?php echo $uid, $email, $name, $address, $mobile, $postcode, $city; ?>");
     }
     </script>
   </head>
   <body>
     <input type="button" name="" value="debug" onclick="debug()">
   </body>
 </html>
