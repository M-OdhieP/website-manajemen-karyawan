<?php
$dataa = $_POST['kantor'];
mysql_query("INSERT INTO pegawai SET



kantor = '$dataa',
nip = '$_POST[nip]',
nama = '$_POST[nama]',
tempat_lahir = '$_POST[tempat_lahir]',
tanggal_lahir = '$_POST[tanggal_lahir]',
tmt_cpns = '$_POST[tmt_cpns]',
tmt_pns = '$_POST[tmt_pns]',
pangkat = '$_POST[pangkat]',
gologan = '$_POST[gologan]',
tmt_pangkat = '$_POST[tmt_pangkat]',
pendidikan = '$_POST[pendidikan]',
jabatan = '$_POST[jabatan]',
tmt_jabatan = '$_POST[tmt_jabatan]',
unit_kerja = '$_POST[unit_kerja]',
sk = '$_POST[sk]',
tgl_sk = '$_POST[tgl_sk]',
eselon = '$_POST[eselon]',
jenis_kelamin = '$_POST[jenis_kelamin]'

") or die(mysql_error());





echo "Data telah ditambahkan";
echo "<meta http-equiv='refresh' content='1; url=?tampil=semuadata'>";
?>