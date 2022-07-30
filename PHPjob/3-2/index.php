<?php

$fruits = ["りんご" => "150" , "みかん" => "75", "もも" =>"1500" ];

function getPrice($UnitPrice,$Quantity) {
  $FruitsPrice = $UnitPrice * $Quantity;
  return $FruitsPrice;
}
getPrice(150,2);
getPrice(75,2);
getPrice(1500,2);


foreach($fruits as $value => $UnitPrice ){
  echo $value ,"は",getPrice($UnitPrice,2) , "円です", '<br>' ;
}

?>
