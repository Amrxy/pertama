<?php
function luas_persegi ($panjang,$lebar){
 return $panjang*$lebar;
 }
 //pemanggilan fumgsi
 $p = 10;
 $l = 5;
 echo "Luas persegi dengan panjang $p dan lebar $l=";
 echo luas_persegi($p, $l);
 ?>