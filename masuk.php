<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<center>
		<h2>Aplikasi Pendaftaran</h2>
	<form action="masuk-log.php" method="POST">
		<table>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name=nim></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required="wajib isi !!"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim"></td>
				<td colspan="2"><input type="reset" name="reset"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>