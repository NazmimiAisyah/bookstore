<?php ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/loginpage.css">
    <style media="screen">

    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>Login</h1>
      </div>
      <div class="main">
        <form action="login.php" method="post">
          <span>
            <i class="fa fa-user"></i>
            <input type="text" id="email" placeholder="Email" name="email"><br><br>
          </span>
          <span>
            <i class="fa fa-lock"></i>
            <input type="password" id="password" placeholder="Password" name="password"><br><br>
          </span>
          <button type="submit">Login</button>
        </form>
      </div>
    </div>







  </body>
</html>
