<?php
     $lottodate = date("dmY");
     echo "The lottery numbers for $lottodate are ";
     for($n = 0; $n < 6; $n++) {
        $number[$n] = rand(1, 49);
        echo "<br/> $number[$n]";
     }
?>
