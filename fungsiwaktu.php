<?php
echo "Hari, Tanggal, dan Waktu sekarang : ";
echo date ("l, d-M-y H:i:s");
echo "<br><br>";

echo "jumlah detik dari 11 Januari 1970 sampai sekarang :";
echo time();

echo "<br><br>";
echo "Dua hari sebelum hari ini :";
echo date ("d M Y", time()-60*60*24*2);
echo "<br><br>";

echo "Hari pada tanggal 22 Januari 1990 :";
echo date ("l", mktime(0,0,0,1,22,1990));
echo "<br><br>";

echo "Hari pada tanggal 22 Januari 1990 :";
echo date ("l", strtotime("22 Januari 1990"));
?>