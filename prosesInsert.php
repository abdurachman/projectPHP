<?php
include "koneksi.php";
mysql_query("insert into mahasiswa (id_mahasiswa,nama_mahasiswa,jenis_kelamin,alamat)
						values('$_POST[nim]','$_POST[mahasiswa]','$_POST[jk]','$_POST[alamat]')");
 header("location: ../addHtml.php");
?>