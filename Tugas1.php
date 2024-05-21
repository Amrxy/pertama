<?php

$bilangan = array(215, 367, 234, 555, 122, 899, 200, 194, 420, 98);

// Menampilkan semua bilangan
echo "Semua bilangan: ";
foreach ($bilangan as $bil) {
    echo $bil . " ";
}
echo "<br>";

// Mencari bilangan terkecil dan terbesar
$terkecil = $bilangan[0];
$terbesar = $bilangan[0];

foreach ($bilangan as $bil) {
    if ($bil < $terkecil) {
        $terkecil = $bil;
    }
    if ($bil > $terbesar) {
        $terbesar = $bil;
    }
}

echo "Bilangan terkecil: " . $terkecil . "<br>";
echo "Bilangan terbesar: " . $terbesar;

?>