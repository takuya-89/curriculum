<?php

$fruits = ["りんご" => "300" , "みかん" => "150", "もも" =>"3000" ];
$Quantity = ["2","2","2"];

function getPrice($UnitPrice,$Quantity) {
  $FruitsPrice = $UnitPrice * $Quantity;
  // echo $FruitsPrice , '<br>';
  return $FruitsPrice;
}
getPrice(300,2);
getPrice(150,2);
getPrice(3000,2);


foreach($fruits as $value => $UnitPrice ){
  echo $value ,"は",$UnitPrice, "円です", '<br>' ;
}

?>