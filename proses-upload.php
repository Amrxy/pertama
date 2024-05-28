<?php
$file_foto = $_FILES['foto']['tmp_name'];
$nama_foto = $_FILES['foto']['name'];
move_uploaded_file($file_foto,$nama_foto);
echo "Foto: <img src='$nama_foto' width='100'>";
?>