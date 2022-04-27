
<?php
if (isset($_GET['nama']) and isset($_GET['email'])){
	$nama = $_GET['nama'];
	$email = $_GET['email'];
}

if (empty($nama) and empty($email)){
	echo "<script> alert ('Silahkan isi nama dan email terlebih dahulu !') </script>";
}
else if (empty($nama)){
	echo "<script> alert ('Silahkan isi nama terlebih dahulu !') </script>";
}
else if (empty($email)){
	echo "<script> alert ('Silahkan isi email terlebih dahulu !') </script>";
}
else {
	include('soal_1_include.php');
}
?>