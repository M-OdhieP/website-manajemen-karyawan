<?php
if (!defined("INDEX")) die("---");
if (isset($_GET['tampil'])) $tampil = $_GET['tampil']; else $tampil = "semuadata";



if ($tampil == "semuadata")	include("konten/semuadata.php");

elseif($tampil == "kanwil") include("konten/kanwil.php");
	elseif($tampil == "Bandar_Lampung") include("konten/Bandar_Lampung.php");
	elseif($tampil == "Lampung_Selatan") include("konten/Lampung_Selatan.php");
	elseif($tampil == "Lampung_Tengah") include("konten/Lampung_Tengah.php");
	elseif($tampil == "Lampung_Utara") include("konten/Lampung_Utara.php");
	elseif($tampil == "Lampung_Barat") include("konten/Lampung_Barat.php");
	elseif($tampil == "Tulang_Bawang") include("konten/Tulang_Bawang.php");
	elseif($tampil == "Metro") include("konten/Metro.php");
	elseif($tampil == "Tanggamus") include("konten/Tanggamus.php");
	elseif($tampil == "Waykanan") include("konten/Waykanan.php");
	elseif($tampil == "Lampung_Timur") include("konten/Lampung_Timur.php");
	elseif($tampil == "Pesawaran") include("konten/Pesawaran.php");
	elseif($tampil == "Pringsewu") include("konten/Pringsewu.php");
	elseif($tampil == "Tulang_Bawang_Barat") include("konten/Tulang_Bawang_Barat.php");

	elseif($tampil == "data_edit") include("konten/data_edit.php");
	elseif($tampil == "data_editproses") include("konten/data_editproses.php");
	elseif($tampil == "data_hapus") include("konten/data_hapus.php");
	
	elseif($tampil == "data_tambah") include("konten/data_tambah.php");
	elseif($tampil == "data_lihat") include("konten/data_lihat.php");
	elseif($tampil == "data_tambahproses") include("konten/data_tambahproses.php");


else echo "Halaman tidak ditemukan";

?>