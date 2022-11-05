<?php

session_start();
if(isset($_SESSION['uid'])){
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
}
  $param = $_GET['param'];



require_once "config.php";

$sql = "SELECT * FROM books where genre = '$param'";
if($param == "All Books"){
  $sql = "SELECT * FROM books where 1";
}

if($stmt = mysqli_prepare($conn, $sql)){

  //execute (run)
  if(mysqli_stmt_execute($stmt)){
    $result = mysqli_stmt_get_result($stmt);
    $rows= mysqli_fetch_all($result, MYSQLI_ASSOC);

    $z=0;
    foreach ($rows as $row) {
      $titles[$z] = $row["title"];
      $authors[$z] = $row["author"];
      $genres[$z] = $row["genre"];
      $prices[$z] = $row["price"];
      $images[$z] = $row['image'];
      $quantities[$z] = $row['quantity'];
      $z++;
    }

  }else{
    echo "something went wrong";
  }

}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/books.css">
     <script type="text/javascript">
       function openLog(){
         var x=document.getElementById("logReg");
         if (x.style.display==="block"){
           x.style.display="none";

         }
         else{
           x.style.display="block";
         }
       }

       function showbookdetail(event){
         var x=document.getElementById('overlay');
         x.style.display="flex";
         document.getElementById('body').style.overflow="hidden";
         var title = document.getElementById(event.currentTarget.id).getAttribute("data-title");
         var author = document.getElementById(event.currentTarget.id).getAttribute("data-author");
         var price = document.getElementById(event.currentTarget.id).getAttribute("data-price");
         var genre = document.getElementById(event.currentTarget.id).getAttribute("data-genre");
         var quantity = document.getElementById(event.currentTarget.id).getAttribute("data-quantity");
         var img = document.getElementById(event.currentTarget.id).getAttribute("src");
         //alert(x);
         document.getElementById("h4t").innerHTML=title;
         document.getElementById("h4a").innerHTML=author;
         document.getElementById("h4p").innerHTML=price;
         document.getElementById("h4g").innerHTML=genre;
         document.getElementById("h4q").innerHTML=quantity;
         document.getElementById("imgd").setAttribute("src", img);

         document.getElementById('ftitle').setAttribute("value", title);
         document.getElementById('fauthor').setAttribute("value", author);
         document.getElementById('fprice').setAttribute("value", price);
         document.getElementById('fgenre').setAttribute("value", genre);
         document.getElementById('fquantity').setAttribute("value", quantity);

       }
       function rmvOverlay(){
         var x=document.getElementById('overlay');
         x.style.display="none";
         document.getElementById('body').style.overflow="auto";
       }
       function loginaction(){
         if("<?php echo $uid ?>" == ""){
           document.location.href='http://localhost/bookstore/loginpage.php'
         } else {
           var x=document.getElementById("userinfo");
           if (x.style.display==="flex"){
             x.style.display="none";
           }
           else{
             x.style.display="flex";
           }
         }
         //
       }
       function logout(){
         alert("Logged out");
         document.location.href='http://localhost/bookstore/logout.php';
       }
       function debug(){
         alert("<?php echo $uid ?>,<?php echo $name ?>, <?php echo $pwd ?>");
       }
       function update(){
         <?php
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
         ?>

         window.location = "http://localhost/bookstore/updateform.php";
       }
        function myFunction() {
          // Declare variables
          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById('myInput');
          filter = input.value.toUpperCase();
          ul = document.getElementById("myUL");
          li = ul.getElementsByTagName('li');

          // Loop through all list items, and hide those who don't match the search query
          for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (filter != "") {
             if (txtValue.toUpperCase().indexOf(filter) > -1) {
                 li[i].style.display = "block";
             } else {
                 li[i].style.display = "none";
             }
             } else {
             li[i].style.display = "none";
            }
          }
        }
        function openpage(event){
          <?php
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
          ?>

          var id=event.currentTarget.id;
          var param=event.currentTarget.getAttribute("data-param");
          window.location.href = "books.php?param=" + param;
        }
     </script>
     <title></title>
   </head>
   <body id='body'>
     <div id="overlay" class="default" onclick="rmvOverlay()">
       <div class="bookdetail">
         <div class="bookdisp">
           <img id="imgd" src="" alt="" onclick="event.stopPropagation()">

         </div><br><br>
         <div class="bookinfo">
           <h4 id="h4t" onclick="event.stopPropagation()"></h4><br>
           <h4 id="h4a" onclick="event.stopPropagation()"></h4><br>
           <h4 id="h4g" onclick="event.stopPropagation()"></h4><br>
           <h4 id="h4p" onclick="event.stopPropagation()"></h4><br>
           <h4 id="h4q" onclick="event.stopPropagation()"></h4><br>
         </div>

         <form class="" action="<?php if(isset($uid) && !empty($uid)) echo "getbid.php"; else echo "loginpage.php"; ?>" method="post">
           <input type="hidden" name="ftitle" id="ftitle" value="">
           <input type="hidden" name="fauthor" id="fauthor" value="">
           <input type="hidden" name="fgenre" id="fgenre" value="">
           <input type="hidden" name="fprice" id="fprice" value="">
           <input type="hidden" name="fquantity" id="fquantity" value="">
           <input type="hidden" name="uid" id="uid" value="<?php echo $uid; ?>">
           <input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
           <input type="hidden" name="name" id="name" value="<?php echo $name; ?>">
           <input type="hidden" name="address" id="address" value="<?php echo $address; ?>">
           <input type="hidden" name="mobile" id="mobile" value="<?php echo $mobile; ?>">
           <input type="hidden" name="postcode" id="postcode" value="<?php echo $postcode; ?>">
           <input type="hidden" name="city" id="city" value="<?php echo $city; ?>">
           <input type="hidden" name="state" id="state" value="<?php echo $state; ?>">
           <input type="hidden" name="country" id="country" value="<?php echo $country; ?>">

           <input type="submit" name="" value="Buy">
         </form>

       </div>
     </div>
     <div class="header">
      <div class="reg">
       <img class="logo" src="images/logo.png">
      </div>
      <nav class="navbar">
        <ul>
          <li><a href="http://localhost/bookstore/index.php">Home</a></li>
          <li><a onclick="openpage(event)" data-param="All Books">All Books</a></li>
          <li><a onclick="openpage(event)" data-param="Fiction">Fiction</a></li>
          <li><a onclick="openpage(event)" data-param="Non-Fiction">Non-Fiction</a></li>
          <li><a onclick="openpage(event)" data-param="Childrens Books">Children's Books</a></li>
        </ul>
      </nav>
      <div class="search">
         <input type="text" id="myInput" onkeyup="myFunction()" onblur="this.value=''; myFunction()" placeholder="Search book titles..">
         <ul id="myUL">
           <?php
           $x=0;
           while($x < $z){
               echo "<li><a href='#' src='".$images[$x]."' id='book".$x."' onmousedown='showbookdetail(event)' data-title='".$titles[$x]."' data-author='".$authors[$x]."' data-price='".$prices[$x]."' data-genre='".$genres[$x]."' data-quantity='".$quantities[$x]."'>".$titles[$x]."</a></li>";
             $x++;
           }
           ?>
         </ul>
       </div>
       <div class="user">
         <div class="reg">
           <img class="log" src="images/login.png" alt="login" onclick="loginaction()">
         </div>
         <div id="userinfo">
           <input type="button" name="" value="logout" onclick="logout()">
           <input type="button" name="" value="update info" onclick="update()">
         </div>
       </div>
     </div>
     <div class="main default">
       <h1 class="form-title"><?php if($param == "Childrens Books") echo "Children's Books"; else echo $param; ?></h1>
       <div class="flex-container kontena">
         <?php
            $x=0;
            while($x < $z){
              echo "<div class='items'>";
                echo "<img src='".$images[$x]." 'class='book' id='book".$x."' onclick='showbookdetail(event)' data-title='".$titles[$x]."' data-author='".$authors[$x]."' data-price='".$prices[$x]."' data-genre='".$genres[$x]."' data-quantity='".$quantities[$x]."'>";
              echo "</div>";
              $x++;
            }
          ?>
       </div>
     </div>
   </body>
 </html>
