<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
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
$NIK = array("M001", "M002", "M003");
$Nama = array("Septiana", "Rizki", "Clarisa");
$TmpLahir = array("solo", "Jakarta", "Surabaya");
$TglLahir = array("01-04-1988", "30-03-1985", "12-12-1990");

// Fungsi untuk menghitung usia
function hitungUsia($tgl_lahir) {
    $tanggal_lahir = new DateTime($tgl_lahir);
    $sekarang = new DateTime(date('Y-m-d'));
    $usia = $sekarang->diff($tanggal_lahir);
    return $usia->y;
}

// Mengubah format tanggal lahir dari angka menjadi huruf
function ubahFormatTanggal($tgl_lahir) {
    $bulan = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    );

    $tanggal = explode('-', $tgl_lahir);
    return $tanggal[0] . ' ' . $bulan[$tanggal[1]] . ' ' . $tanggal[2];
}

echo "<h2>Data Karyawan</h2>";
echo "<table>";
echo "<tr><th>NIK</th><th>Nama</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Usia</th></tr>";
for ($i = 0; $i < count($NIK); $i++) {
    echo "<tr>";
    echo "<td>" . $NIK[$i] . "</td>";
    echo "<td>" . $Nama[$i] . "</td>";
    echo "<td>" . $TmpLahir[$i] . "</td>";
    echo "<td>" . ubahFormatTanggal($TglLahir[$i]) . "</td>";
    echo "<td>" . hitungUsia($TglLahir[$i]) . " tahun</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>