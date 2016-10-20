<?php
	include "koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "select * from mahasiswa where nama_mahasiswa = '$username'";
	$hasil = mysql_query($query, $connection);
	$rows = mysql_num_rows($hasil);
	if($rows > 0){
		echo "ini username : ". $username."<br/>";
	}else{
		echo "data kosong";
	}

	//echo "ini Password : ". $password;
?>