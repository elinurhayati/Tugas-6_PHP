<style type="text/css">
	*{
		text-align: center;
		line-height: 30px;
	}
</style>

<?php
	echo "Nama : ".$_GET['nama']."<br>";
	echo "Email : ".$_GET['email']."<br>";
	echo "Tanggal : ";
	echo date("m-F-Y, g:i:s a");
?>