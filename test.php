<div class="vid">
</div>
<div class="main">
  <div class="flex-container kontena">
    <?php
       $x=0;
       while($x < $i && $x < 11){
         echo "<div class='items'>";
           echo "<img src='".$imagesfic[$x]."'class='book' id='bookfic".$x."' onclick='showbookdetail(event)' data-title='".$titlesfic[$x]."' data-author='".$authorsfic[$x]."' data-price='".$pricesfic[$x]."' data-genre='".$genresfic[$x]."' data-quantity='".$quantitiesfic[$x]."'>";
         echo "</div>";
         $x++;
       }
     ?>
  </div>
  <div class="flex-container kontena">
    <?php
       $x=0;
       while($x < $j && $x < 11){
         echo "<div class='items'>";
           echo "<img src='".$imagesnon[$x]."'class='book' id='booknon".$x."' onclick='showbookdetail(event)' data-title='".$titlesnon[$x]."' data-author='".$authorsnon[$x]."' data-price='".$pricesnon[$x]."' data-genre='".$genresnon[$x]."' data-quantity='".$quantitiesnon[$x]."'>";
         echo "</div>";
         $x++;
       }
     ?>
  </div>
  <div class="flex-container kontena">
    <?php
       $x=0;
       while($x < $k && $x < 11){
         echo "<div class='items'>";
           echo "<img src='".$imageschd[$x]."'class='book' id='bookchd".$x."' onclick='showbookdetail(event)' data-title='".$titleschd[$x]."' data-author='".$authorschd[$x]."' data-price='".$priceschd[$x]."' data-genre='".$genreschd[$x]."' data-quantity='".$quantitieschd[$x]."'>";
         echo "</div>";
         $x++;
       }
     ?>
  </div>
</div>
