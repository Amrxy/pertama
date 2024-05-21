<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Data transaksi dalam bentuk array
$transaksi = array(
    array("kode_barang" => "001", "nama_barang" => "sabun", "jumlah" => 4, "harga_satuan" => 2000),
    array("kode_barang" => "002", "nama_barang" => "permen", "jumlah" => 10, "harga_satuan" => 500),
    array("kode_barang" => "003", "nama_barang" => "tissue", "jumlah" => 2, "harga_satuan" => 10000),
    array("kode_barang" => "004", "nama_barang" => "shampo", "jumlah" => 1, "harga_satuan" => 45500)
);

// Hitung total harga transaksi
$total_harga = 0;
foreach ($transaksi as $item) {
    $total_harga += $item["jumlah"] * $item["harga_satuan"];
}

// Tampilkan data transaksi dalam tabel
echo "<h2>Data Transaksi</h2>";
echo "<table>";
echo "<tr><th>Kode Barang</th><th>Nama Barang</th><th>Jumlah</th><th>Harga Satuan</th></tr>";
foreach ($transaksi as $item) {
    echo "<tr>";
    echo "<td>" . $item["kode_barang"] . "</td>";
    echo "<td>" . $item["nama_barang"] . "</td>";
    echo "<td>" . $item["jumlah"] . "</td>";
    echo "<td>" . number_format($item["harga_satuan"], 0, ",", ".") . "</td>";
    echo "</tr>";
}
echo "<tr><td colspan='3' style='text-align: left;'>Total Harga</td><td>" . number_format($total_harga, 0, ",", ".") . "</td></tr>";
echo "</table>";
?>

</body>
</html>