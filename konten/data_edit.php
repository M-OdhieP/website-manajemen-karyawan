<?php
$tampil = mysql_query("SELECT * FROM pegawai WHERE
pk='$_GET[id]'")
or die(mysql_error());
$data = mysql_fetch_array($tampil);
?>

<br><br>
<div class="container-fluid">

<h4>Edit Data Pegawai</h4>

<br>

<form name="edit" method="post" action="?tampil=data_editproses"
enctype="multi-part/form-data">
<input type="hidden" name="id" value="<?php echo $data['pk']; ?>">
<table class="table table-hover text-nowrap table-responsive table-striped table-bordered odhie">


<tr>
<td>KANTOR</td>
<td>
<select id="kantor" name="kantor" class="form-control">
<option value="<?php echo $data['kantor']; ?>"><?php echo $data['kantor']; ?></option>
<?php

$no=1;
$taampil = mysql_query("SELECT * FROM daftar_kantor ORDER BY pk_kantor") or die(mysql_error());
while($daata=mysql_fetch_array($taampil)) {

?>
<option value="<?php echo $daata['kantor']; ?>"><?php echo $daata['kantor']; ?></option>
<?php } ?>

</select>

</td>
</tr>



<tr> <td>NIP</td> <td><input class="form-control" type="text" name="nip" size="100" value="<?php echo $data['nip']; ?>"></td> </tr>
<tr> <td>NAMA</td> <td><input class="form-control" type="text" name="nama" size="100" value="<?php echo $data['nama']; ?>"></td> </tr>
<tr> <td>TEMPAT LAHIR</td> <td><input class="form-control" type="text" name="tempat_lahir" size="100" value="<?php echo $data['tempat_lahir']; ?>"></td> </tr>
<tr> <td>TANGGAL LAHIR</td> <td><input class="form-control" type="text" name="tanggal_lahir" size="100" value="<?php echo $data['tanggal_lahir']; ?>"></td> </tr>
<tr> <td>TMT CPNS</td> <td><input class="form-control" type="text" name="tmt_cpns" size="100" value="<?php echo $data['tmt_cpns']; ?>"></td> </tr>
<tr> <td>TMT PNS</td> <td><input class="form-control" type="text" name="tmt_pns" size="100" value="<?php echo $data['tmt_pns']; ?>"></td> </tr>
<tr> <td>PANGKAT</td> <td><input class="form-control" type="text" name="pangkat" size="100" value="<?php echo $data['pangkat']; ?>"></td> </tr>
<tr> <td>GOL. RUANG</td> <td><input class="form-control" type="text" name="gologan" size="100" value="<?php echo $data['gologan']; ?>"></td> </tr>
<tr> <td>TMT PANGKAT</td> <td><input class="form-control" type="text" name="tmt_pangkat" size="100" value="<?php echo $data['tmt_pangkat']; ?>"></td> </tr>
<tr> <td>PENDIDIKAN</td> <td><input class="form-control" type="text" name="pendidikan" size="100" value="<?php echo $data['pendidikan']; ?>"></td> </tr>
<tr> <td>JABATAN</td> <td><input class="form-control" type="text" name="jabatan" size="100" value="<?php echo $data['jabatan']; ?>"></td> </tr>
<tr> <td>TMT JABATAN</td> <td><input class="form-control" type="text" name="tmt_jabatan" size="100" value="<?php echo $data['tmt_jabatan']; ?>"></td> </tr>
<tr> <td>UNIT KERJA TERKECIL</td> <td><input class="form-control" type="text" name="unit_kerja" size="100" value="<?php echo $data['unit_kerja']; ?>"></td> </tr>
<tr> <td>SURAT KEPUTUSAN</td> <td><input class="form-control" type="text" name="sk" size="100" value="<?php echo $data['sk']; ?>"></td> </tr>
<tr> <td>TGL SK</td> <td><input class="form-control" type="text" name="tgl_sk" size="100" value="<?php echo $data['tgl_sk']; ?>"></td> </tr>
<tr> <td>ESELON</td> <td><input class="form-control" type="text" name="eselon" size="100" value="<?php echo $data['eselon']; ?>"></td> </tr>
<tr> <td>JENIS KELAMIN</td> <td><input class="form-control" type="text" name="jenis_kelamin" size="100" value="<?php echo $data['jenis_kelamin']; ?>"></td> </tr>




<tr>
<td></td>
<td><center><input class="btn btn-lg btn-primary" type="submit" name="edit" value="Edit"><center></td>

</tr>
</table>
</form>

</div>




