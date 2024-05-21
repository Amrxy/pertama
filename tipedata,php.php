tipedata.php
<?php
$nim = "0122030";
$nama = "Kurniawanto";
$usia = 21;
$nilai = 82.65;
$status = TRUE;

echo "NIM : " . $nim . "<br>";
echo "Nama : . $usia . $nama <br>";
echo "Usia : ". $usia . "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
