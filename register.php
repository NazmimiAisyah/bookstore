<?php
session_start();
$uid = $_SESSION['uid'];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="css/registerform.css">

    <title>Register form</title>
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Registration</h1>
    <form action="insert.php" method="post">
      <div class="main-user-info">
        <div class="user-input-box">
          <label for="name">Name</label><br>
          <input type="text" id="name" name="name" placeholder="Enter Full Name"><br><br>
        </div>
        <div class="user-input-box">
          <label for="email">Email</label><br>
          <input type="text" id="email" name="email" placeholder="Enter Email"><br><br>
        </div>
        <div class="user-input-box">
          <label for="password">Password</label><br>
          <input type="password" id="password" name="password" placeholder="Enter Password"><br><br>
        </div>
        <div class="user-input-box">
          <label for="mobile">Mobile Number</label><br>
          <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile Number"><br><br>
        </div>
        <div class="user-input-box">
            <label for="address">Address</label><br>
            <input type="text" id="address" name="address" placeholder="Enter Address"><br><br>
        </div>
        <div class="user-input-box">
            <label for="postcode">Postcode</label><br>
            <input type="text" id="postcode" name="postcode" placeholder="Enter Postcode"><br><br>
        </div>
        <div class="user-input-box">
          <label for="city">City</label><br>
          <input type="text" id="city" name="city" placeholder="Enter City"><br><br>
        </div>
        <div class="user-input-box">
          <label for="state">State</label><br>
          <input type="text" id="state" name="state" placeholder=" Enter State"><br><br>
        </div>
        <div class="user-input-box">
          <label for="country">Country</label><br>
          <input type="text" id="country" name="country" placeholder="Enter Country"><br><br>
        </div>
      </div>
      <div class="form-submit-btn">
        <input type="submit" value="Register">
      </div>
      </form>
    </div>
  </body>
</html>
