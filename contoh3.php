<html>
<body>
<form method="post" action=" <?php echo $_SERVER['PHP_SELF'];?>">
Nama:<input type="text" name="nama">
<input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
//menggunakan nilai input field
$nama = $_REQUEST['nama'];
if(empty($nama)){
echo "Nama kosong";
}else{
echo "selamat datang $nama";
}
}
?>
</body>
</html>