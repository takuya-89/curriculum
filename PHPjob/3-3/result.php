<?php
  $num = $_GET['num'];
  $fortune = array('0'=>'凶', '1'=>'小吉', '2'=>'小吉', '3'=>'小吉', '4'=>'中吉', '5'=>'中吉', '6'=>'中吉', '7'=>'吉', '8'=>'吉', '9'=>'大吉');
?>


<?php
  $min = 0; $max = 9;

    while(true){

      $i = mt_rand($min, $max);

      if( strpos( $num, $i ) === false ){
      }else{
        echo date("Y/m/d"),"の運勢は<br>"; 
        echo "選ばれた数字は $i <br>"; 
        echo $fortune[$i];
        break;
      } 
    }
?>


