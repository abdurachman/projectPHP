<?php 
include "koneksi.php";
?>
<html>
<table border="1" cellspacing="1" cellpadding="0"> <!-- pengaturan tampilan table -->
  <tr> <!-- vertikal -->
  	<th>NO</th> <!-- judul -->
  	<th>NIM</th>
  	<th>NAMA</th>
  </tr>
  <?php
  $nomor=1;
  $siswa=mysql_query("SELECT m.id_mahasiswa, m.nama_mahasiswa, j.nama_jurusan FROM `master_mahasiswa` ms left join mahasiswa m on m.id_mahasiswa = ms.id_mahasiswa INNER join jurusan j on j.id_jurusan = ms.id_jurusan where j.id_jurusan = 2 ORDER BY id_mahasiswa  ASC");
  while($data=mysql_fetch_array($siswa)){
  echo "
  <tr>
  	<td>$nomor</td>      
  	<td>$data[id_mahasiswa]</td>
  	<td>$data[nama_mahasiswa]</td>
  </tr>";
  $nomor++;
  }
  ?>
</table>
<a href='index.php'>Back</a>
</html>