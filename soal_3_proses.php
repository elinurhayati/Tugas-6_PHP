
<!DOCTYPE html>
<html>
<head>
</head>
<style type="text/css">
	*{
		text-align: left;
		line-height: 30px;
	}
</style>
<body>
	<h1>BIODATA</h1>
	<table border="1">
		<tr>
			<td>Nama</td> 
			<td> : </td> 
			<td> <?php echo $_GET['nama']; ?> </td>
		</tr>
		<tr>
			<td>Alamat</td> 
			<td> : </td> 
			<td><?php echo $_GET['alamat']; ?>  </td>
		</tr>
		<tr>
			<td>Tempat Tanggal Lahir</td> 
			<td> : </td> 
			<td> <?php echo $_GET['ttl']; ?>  </td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td> 
			<td> : </td> 
			<td> <?php echo $_GET['jk']; ?> </td>
		</tr>
		<tr>
			<td>Agama</td> 
			<td> : </td> 
			<td><?php echo $_GET['agama']; ?> </td>
		</tr>
		<tr>
			<td>Hobi</td> 
			<td> : </td> 
			<td><?php echo $_GET['hobi'] ;?>  </td>
		</tr>
		<tr>
			<td>No. Tlp/HP</td> 
			<td> : </td> 
			<td><?php echo $_GET['notlp'] ;?>  </td>
		</tr>
		<tr>
			<td>Email</td> 
			<td> : </td> 
			<td><?php echo $_GET['email']; ?>  </td>
		</tr>
		<tr>
			<td>Asal Universitas</td> 
			<td> : </td> 
			<td><?php echo $_GET['univ']; ?>  </td>
		</tr>
		<tr>
			<td>Program Studi</td> 
			<td> : </td> 
			<td><?php echo $_GET['prodi']; ?> </td>
		</tr>
		<tr>
			<td>Upload Photo</td> 
			<td> : </td> 
			<td><img src="<?php echo $_GET['picture'] ?> "></td>
		</tr>
	</table>
</body>
</html>