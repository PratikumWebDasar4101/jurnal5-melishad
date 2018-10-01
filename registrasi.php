<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<center>
<h3>APLIKASI PENDAFTARAN MAHASISWA</h3>
	<form action="prosesregis.php" method="post">		
		<table>
			<tr>
				<td>Nim : </td>
				<td><input type="text" name="nim"  pattern="[0-9]{10}" title="Nim harus angka dan 10 karakter"  required ></td>					
			</tr>	
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama" pattern="[A-Za-z ]{1,25}" title=" Nama harus maks 25 karakter" required></td>					
			</tr>	
			<tr>
				<td>Email : </td>
				<td><input type="email" name="email" placeholder="email@gmail.com" required></td>					
			</tr>	
			<tr>
				<td></td>
				<td><br><input type="submit" name="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>


</body>
</html>
