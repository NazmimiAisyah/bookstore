<?php
require_once "config.php";
session_start();
$uid = $_SESSION['uid'];
$bid = $_SESSION['bid'];
$title = $_SESSION['title'];
$author = $_SESSION['author'];
$genre = $_SESSION['genre'];
$price = $_SESSION['price'];
$quantity = $_SESSION['quantity'];
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$address = $_SESSION['address'];
$mobile = $_SESSION['mobile'];
$postcode = $_SESSION['postcode'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$country = $_SESSION['country'];

if(!isset($uid) && empty($uid)) {
  echo '<script>alert("Not logged in"); window.location = "http://localhost/bookstore/loginpage.php"</script>';
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="css/purchaseform.css">
    <title>Purchase form</title>
  </head>
  <body>
    <div class="container">
      <form action="purchase.php" method="post">
        <h1 class="form-title">Purchase</h1>
      <div class="main-user-info">
        <div class="user-input-box">
          <label for="name">Name</label><br>
          <input type="text" id="name" name="name" value="<?php echo $name; ?>" disabled="disabled"><br><br>
        </div>
        <div class="user-input-box">
          <label for="email">Email</label><br>
          <input type="text" id="email" name="email" value="<?php echo $email; ?>" disabled="disabled"><br><br>
        </div>
        <div class="user-input-box">
          <label for="mobile">Mobile</label><br>
          <input type="text" id="mobile" name="mobile" value="<?php echo $mobile; ?>" disabled="disabled"><br><br>
        </div>
        <div class="user-input-box">
          <label for="address">Address</label><br>
          <input type="text" id="address" name="address" value="<?php echo $address; ?>" disabled="disabled"><br><br>
        </div>
        <div class="user-input-box">
          <label for="postcode">Postcode</label><br>
          <input type="text" id="postcode" name="postcode" value="<?php echo $postcode; ?>" disabled="disabled"><br><br>
        </div>
        <div class="user-input-box">
          <label for="city">City</label><br>
          <input type="text" id="city" name="city" value="<?php echo $city; ?>" disabled="disabled"><br><br>
        </div>
        <div class="user-input-box">
          <label for="state">State</label><br>
          <input type="text" id="state" name="state" value="<?php echo $state; ?>" disabled="disabled"><br><br>
        </div>

        <div class="user-input-box">
          <label for="country">Country</label><br>
          <input type="text" id="country" name="country" value="<?php echo $country; ?>" disabled="disabled"><br><br>
        </div>
        <div class="user-input-box">
          <label for="title">Title</label><br>
          <input type="text" id="title" name="title" value="<?php echo $title; ?>" disabled="disabled"><br><br>
        </div>
        <div class="user-input-box">
          <label for="author">Author</label><br>
          <input type="text" id="author" name="author" value="<?php echo $author; ?>" disabled="disabled"><br><br>
        </div>
        <div class="user-input-box">
          <label for="price">Price</label><br>
          <input type="text" id="price" name="price" value="<?php echo $price; ?>" disabled="disabled"><br><br>
        </div>

        <div class="user-input-box">
          <label for="ref">Payment Reference</label><br>
          <input type="text" id="ref" name="ref" value="" placeholder="Enter Payment Reference Number"><br><br>
        </div>

        <div class="center">
          <img src="images/qr.jpeg" alt="" style="width: 282px; height: 282px;">
        </div>


          <input type="hidden" id="uid" name="uid" value="<?php echo $uid; ?>">
          <input type="hidden" id="bid" name="bid" value="<?php echo $bid; ?>">

      </div>

      <div class="form-submit-btn">
        <input type="submit" value="Submit">
      </div>
      <div class="form-submit-btn2">
        <input type="button" value="Cancel" onclick="document.location.href='http://localhost/bookstore/index.php'">
      </div>

      </form>




    </div>

  </body>
</html>
