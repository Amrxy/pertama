<h1>Form Registrasi</h1>
<hr>
<form action ="proses-registrasi.php" method="POST"
enctype="multipart/form-data">
Nama: <input type="text" name="nama"> <br>
Foto <input type="file" name="foto"> <br>
Email <input type="text" name="email"> <br>
Kelamin: <input type="radio" name="kelamin" value="Pria"
checked=""> Pria
<input type="radio" name="kelamin" value="Wanita"> Wanita<br>
Umur <input type="text" name="umur"> <br>
Username: <input type="text" name="username"> <br> Password: <input type="password" name="password">
<br>
Retype Password <input type="password" name="ulangi_password">
<br>
<input type="submit" value="Registrasi">
</form>