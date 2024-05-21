<html>
<body>
<fotm method="post" action= <?php echo $_SERVER['PHP_SELF'];?>">
Nama:<input type="text" name="nama">
<input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_MRTHOD"]=="POST"){
//menggunakan nulai input field
$nama = $_REQUEST['nama'];
if(empety($nama)){
echo "Nama kosong";
}else{
echo "selamat datang".$gama;
}
}
?>
</body>
</html>