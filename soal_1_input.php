<!DOCTYPE html>
<html>
<head>
	<title> Form Login </title>
</head>

<style type="text/css">
	*{
		text-decoration: none;
		font-family: Verdana;
	}
	.container{
		width: 400px;
		height: 320px;
		align-content: center;
		background-color: lightpink;
		border-radius: 10px;
		border-radius: 15px 15px;
		box-shadow: 0 8px 5px rgba(32,32,32,.3);
		margin: 0 auto;
		margin-top: 10%;
	}
	.container h1{
		text-align: center;
		padding-top: 5%;
	}
	table{
		padding-right: 5%;
		padding-left: 10%;
		line-height: 20px;
	}
	.tbox{
		width: 300px;
		height: 25px;
	}
	.button{
		width: 150px;
		height: 35px;
		line-height: 20px;
		cursor: pointer;
		font-weight: bold;
	}
	.button:hover{
		background: #c9e2bb;
		box-shadow: 2px 2px 2px grey;
	}
</style>

<body>
	<form  method="GET" action="soal_1_proses.php">
		<div class="container">
			<table>
				<h1>Form Login</h1>
				<tr>
					<td width="200">Nama</td>
				</tr>
				<tr>
					<td><input class="tbox" type="text" name="nama" id="nama" width="300"></td>
				</tr>
				<tr>
					<td width="130">Email</td>
				</tr>
				<tr>
					<td><input class="tbox" type="text" name="email" id="email"></td>
				</tr>

				<tr>
					<td>
						<br>
						<input class="button" type="submit" name="btnLogin" value="Login">
						<input class="button" type="reset" name="btnReset" value="Reset">
					</td>
				</tr>
			</table>
		</div>
	</form>
</body>
</html>