<html>
	<body>
		<form action="prosesInsert.php" method="post">
			<table>
				<tr>
					<td>No Induk Mahasiswa</td>
					<td>:</td>
					<td><input type="text" name="nim"/></td>
				</tr>
				<tr>
					<td>Mahasiswa</td>
					<td>:</td>
					<td><input type="text" name="mahasiswa"/></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						Laki - Laki <input type="radio" name="jk" value="L" />
						Perempuan <input type="radio" name="jk" value="P" />
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="alamat"></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="kirim" value="kirim" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>