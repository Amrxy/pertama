operator_pembandingdanlogika.php
<?php
$a=2;
$b=5;
echo "Hasil pembanding $a==$b:".($a==$b);
echo "<br>Hasil pembanding $a != $b :".($a>$b);
echo "<br>Hasil pembanding $a > $b :".($a>$b);
echo "<br>Hasil pembanding $a < $b :".($a<$b);
echo "<br>Hasil logika ($a == $b) && ($a>$b):".(($a != $b) && ($a > $b));
echo "<br>Hasil logika ($a == $b) || ($a>$b):".(($a != $b)||($a>$b));
?>