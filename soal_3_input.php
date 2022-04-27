<!DOCTYPE html>
<html>
<head>
	<title> Form Biodata </title>
</head>

<style type="text/css">
	*{
		text-decoration: none;
		font-family: Verdana;
	}
	.judul{
		width: 600px;
		height: 50px;
		margin: 0 auto;
		align-content: center;
		background-color: #ae93d9;
		border-radius: 10px;
		border-radius: 15px 15px;
		box-shadow: 0 8px 5px rgba(32,32,32,.3);
	}
	.judul h1{
		text-align: center;
	}
	.container{
		width: 600px;
		height: 497px;
		align-content: center;
		background-color:#f7d550;
		border-radius: 10px;
		border-radius: 15px 15px;
		box-shadow: 0 8px 5px rgba(32,32,32,.3);
		margin: 0 auto;
		margin-top: 3%;
	}
	.container p{
		font-weight: bold;
		padding-top: 4%;
		padding-right: 5%;
		padding-left: 8%;
		line-height: 25px;
	}
	table{
		padding-right: 5%;
		padding-left: 8%;
		line-height: 22px;
	}
	.button{
		width: 170px;
		height: 35px;
		line-height: 20px;
		cursor: pointer;
		font-weight: bold;
	}
	.button:hover{
		background: #c9e2bb;
		box-shadow: 2px 2px 2px grey;
	}
	.tbox{
		width: 300px;
		height: 20px;
	}
	.tboxalamat{
		width: 300px;
		height: 45px;
	}
	.opsiagama{
		height: 25px;
	}
	.wrapper{
		padding-left: 20%;
	}
</style>

<body>
	<form  method="GET" action="soal_3_proses.php">
		<div class="judul">
			<h1>Form Biodata</h1>
			
		</div>

		<div class="container">
			<p>Silakan isi data diri berikut !</p>
			<table>
				<tr>
					<td>Nama</td> 
					<td> : </td> 
					<td><input type="text" class="tbox" name="nama"> </td>
				</tr>
				<tr>
					<td>Alamat</td> 
					<td> : </td> 
					<td><textarea class="tboxalamat" name="alamat"></textarea> </td>
				</tr>
				<tr>
					<td>Tempat Tanggal Lahir</td> 
					<td> : </td> 
					<td> <input type="text" class="tbox" name="ttl"> </td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td> 
					<td> : </td> 
					<td>
						<input type="radio" name="jk" value="Perempuan"> Perempuan 
						<input type="radio" name="jk" value="Laki-Laki"> Laki - Laki
					</td>
				</tr>
				<tr>
					<td>Agama</td> 
					<td> : </td> 
					<td>
						<select name="agama" class="opsiagama">
							<option value="Islam"> Islam </option>
							<option value="Kristen"> Kristen </option>
							<option value="Hindu"> Hindu </option>
							<option value="Budha"> Budha </option>
							<option value="Kong Hu Chu"> Kong Hu Chu </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hobi</td> 
					<td> : </td> 
					<td><input type="text" class="tbox" name="hobi"> </td>
				</tr>
				<tr>
					<td>No. Tlp/HP</td> 
					<td> : </td> 
					<td><input type="text" class="tbox" name="notlp"> </td>
				</tr>
				<tr>
					<td>Email</td> 
					<td> : </td> 
					<td><input type="text" class="tbox" name="email"> </td>
				</tr>
				<tr>
					<td>Asal Universitas</td> 
					<td> : </td> 
					<td><input type="text" class="tbox" name="univ"> </td>
				</tr>
				<tr>
					<td>Program Studi</td> 
					<td> : </td> 
					<td><input type="text" class="tbox" name="prodi"> </td>
				</tr>
				<tr>
					<td>Upload Photo</td> 
					<td> : </td> 
					<td><input type="file" name="picture" accept="image/jpeg"> </td>
				</tr>
			</table>
			<div class="wrapper">
				<br>
				<input class="button" type="submit" name="btnSubmit" value="Submit">
				<input class="button" type="reset" name="btnReset" value="Reset">
			</div>	
		</div>
	</form>
</body>
</html>