<?php
$arrNilai = array("Ani" =>80, "Budi" =>70, "Coki" =>65, "Dika" =>85);
echo "Array sebelum pengurutan";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "Array setelah pengurutan arsort()";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "Array setelah pengurutan ksort()";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

sort($arrNilai);
reset($arrNilai);
echo "Array setelah pengurutan sort()";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>