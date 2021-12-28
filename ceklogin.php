<?php
	session_start();
	include("koneksi.php");
	$id = $_POST['id'];
	$password = $_POST['password'];
	$cek = mysql_query("SELECT * FROM user
		WHERE username='$id'
		AND password='$password'");
	$data = mysql_fetch_array($cek);
	$jumlah = mysql_num_rows($cek);
if ($jumlah>0) {
	$_SESSION['id'] = $data['username'];
	$_SESSION['password'] = $data['password'];
	
	echo "<meta http-equiv='refresh'
	content='0; url=sistem_pegawai.php'>";
}
else {

	echo "password atau username salah!!";
	echo "<meta http-equiv='refresh'
	content='1; url=index.php'>";

}
?>