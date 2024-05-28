<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$kelamin = $_POST['kelamin'];
$umur = $_POST['umur'];
$username = $_POST['username'];
$password = $_POST['password'];
$ulangi_password = $_POST['ulangi_password'];
$file_foto = $_FILES['foto']['tmp_name'];
$nama_foto = $_FILES['foto']['nama'];

// Definisi error validasi dengan array kosong
$errors = array();
if(empty($nama)){
$errors[] = "Nama Harus diisi";
}else{
	if(!preg_match("/^[a-zA-Z]*$/",$nama)){
	$errors[] = "Hanya Huruf dan Spasi yang diperbolehkan";
	}
}
if(empty($email)){
$errors[] = "Email Harus Diisi";
}else{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors[]="Email tidak sesuai format";
		}
}
if(empty($kelamin)){
		$errors[]="Jenis Kelamin Harus Dipilih";
}
if(!is_numeric($umur)) {
$errors[] = "Umur Harus Angka";
}
if(strlen($username) >=7) {
$errors[] = "Username Harus kurang dari 7 Karakter";
}
if(strlen($password) >=7) {
$errors[] = "Password Harus kurang dari 7 Karakter";
}
if($ulangi_password != $password) {
$errors[] = "Password dan Retype Password Harus Sama";}
if(count($errors) > 0){//JIKA ADA ERRORS
foreach ($errors as $error) {
echo "<li>", $error, "</li>";
}
}else{//JIKA TIDAK ADA ERRORS
// Upload FILE
move_uploaded_file($file_foto, $nama_foto);
//Tampilkan Data
echo "Nama: ",$nama,"<br>","Email: ",$email,"<br>";
echo "Kelamin: ", $kelamin,"<br>","Umur",$umur,"<br>";
echo "Username:", $username, "<br>";
echo "Foto: <img src='$nama_foto' width='100'>";
}
?>