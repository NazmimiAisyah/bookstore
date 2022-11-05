<?php
session_start();
$uid = $_SESSION['uid'];
$email = $_SESSION['email'];
$pwd = $_SESSION['pwd'];
$name = $_SESSION['name'];
$address = $_SESSION['address'];
$mobile = $_SESSION['mobile'];
$postcode = $_SESSION['postcode'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$country = $_SESSION['country'];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,
       initial-scale=1.0"/>
     <link rel="stylesheet" href="css/updateform.css">
     <title>Update form</title>
     <script type="text/javascript">
          function makeEditable(event){
            var id = event.currentTarget.getAttribute("data-target");
            var target = document.getElementById(id);
            target.readOnly=false;
            if(id=="pwd")
              target.setAttribute("type", "text");
          }
     </script>
   </head>
   <body>
     <div class="container">
       <h1 class="form-title">Update</h1>
       <form action="update.php" method="post">
         <div class="main-user-info">
           <div class="user-input-box">
             <label for="name">Name</label><br>
             <input type="text" id="name" name="name" value="<?php echo $name ?>" readonly>
             <a href="#" onclick="makeEditable(event)" data-target="name">Edit</a>
             <br><br>
           </div>

           <div class="user-input-box">
             <label for="email">Email</label><br>
             <input type="text" id="email" name="email" value="<?php echo $email ?>" readonly>
             <a href="#" onclick="makeEditable(event)" data-target="email">Edit</a><br><br>
           </div>

           <div class="user-input-box">
              <label for="pwd">Password</label><br>
              <input type="password" id="pwd" name="pwd" value="<?php echo $pwd ?>" readonly>
              <a href="#" onclick="makeEditable(event)" data-target="pwd">Edit</a><br><br>
            </div>

           <div class="user-input-box">
             <label for="mobile">Mobile</label><br>
             <input type="text" id="mobile" name="mobile" value="<?php echo $mobile ?>" readonly>
             <a href="#" onclick="makeEditable(event)" data-target="mobile">Edit</a><br><br>
           </div>

           <div class="user-input-box">
             <label for="address">Address</label><br>
             <input type="text" id="address" name="address" value="<?php echo $address ?>" readonly>
             <a href="#" onclick="makeEditable(event)" data-target="address">Edit</a><br><br>
           </div>
           <div class="user-input-box">
             <label for="postcode">Postcode</label><br>
             <input type="text" id="postcode" name="postcode" value="<?php echo $postcode ?>" readonly>
             <a href="#" onclick="makeEditable(event)" data-target="postcode">Edit</a><br><br>
           </div>
           <div class="user-input-box">
             <label for="city">City</label><br>
             <input type="text" id="city" name="city" value="<?php echo $city ?>" readonly>
              <a href="#" onclick="makeEditable(event)" data-target="city">Edit</a><br><br>
           </div>
           <div class="user-input-box">
              <label for="state">State</label><br>
              <input type="text" id="state" name="state" value="<?php echo $state ?>" readonly>
              <a href="#" onclick="makeEditable(event)" data-target="state">Edit</a><br><br>
           </div>

           <div class="user-input-box">
             <label for="country">Country</label><br>
             <input type="text" id="country" name="country" value="<?php echo $country ?>" readonly>
             <a href="#" onclick="makeEditable(event)" data-target="country">Edit</a><br><br>
           </div>
         </div>
         <div class="form-submit-btn">
           <input type="submit" value="Submit">
         </div>



       </form>

     </div>

   </body>
 </html>
