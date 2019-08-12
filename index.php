

<?php
  for(  $i=0; 
        $i <= 10; 
        $i++ ){
    for(    $j=0; 
            $j <= $i; 
            $j++ ){
      echo $j; //echo j for every new lines start from 0 to 10 where left to right
    }
    echo "<br>"; //for new lines
  }
?>


<?php
  for(  $i=0;  
        $i <=10; 
        $i++ ){
    for(  $j=0; 
          $j <= $i; 
          $j++ ){
      echo $i; // echo i for every new line strat counting from 0 to 10 while loop
    }
    echo "<br>"; //for new lines
  }
 ?>

 <?php
   for( $i=0; $i <=10; $i++ ){
     for( $j=0; $j <= $i; $j++ ){
       echo '*'; // echo * instead of numbers
     }
     echo "<br>"; // made a half diamond
   }
?>

<?php
  for( $i=0; $i <= 10; $i++ ){
    for( $j=0; $j <= 10-$i; $j++ ){
      echo '*';
    }
    echo "<br>";
  }
?>

<?php
  for( $i=0; $i <= 20; $i++ ){
    for( $j=20; $j >= $i; $j-- ){
      echo '&nbsp;&nbsp;';
    }
    for( $x=0; $x <= $i; $x++ ){
      echo '&nbsp;&nbsp;*'; //made a half diamond for right side
    }
    echo '<br>'; 
  }
?>

<?php
  for( $i=0; $i <= 20; $i++ ){
    for( $j=20; $j >= 20-$i; $j-- ){
      echo '&nbsp;&nbsp;';
    }
    for( $x=0; $x <=20-$i; $x++ ){
      echo '&nbsp;&nbsp;*'; //made a half diamond for left side
    }
    echo '<br>'; 
  }
?>
