<?php

$arrMahasiswa = array ("Ana", "Budi", "Coki", "Dika");
$arrNilai = array ("Ani" => 80, "Budi" => 70, "Coki" => 65, "Dika" => 85);
echo "Menampilkan isi array dengan for: <br>";
for ($i=0; $i <count($arrMahasiswa); $i++) {
		echo "Nama Mahasiswa : ".$arrMahasiswa[$i]."<br>";
}

echo "<br>Menampilkan isi array dengan foreach: <br>";
foreach ($arrMahasiswa as $mhs) {
		echo "Nama Mahasiswa : ".$mhs. "<br>";
}

echo "<br>Menampilkan isi array asosiatif dengan foreach: <br>";
foreach ($arrNilai as $nama => $nilai) {
		echo "Nilai $nama = $nilai <br>";
}

?>