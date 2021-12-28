<?php
$tampil = mysql_query("SELECT * FROM pegawai WHERE
pk='$_GET[id]'")
or die(mysql_error());
$data = mysql_fetch_array($tampil);
?>

<br><br>


<h4>Detail Data <?php echo $data['nama']; ?></h4>

<br>

<table class="table table-hover text-nowrap table-responsive table-striped table-bordered">


	<tr> <td>KANTOR</td> <td><?php echo $data['kantor']; ?></td> </tr>
	<tr> <td>NIP</td> <td><?php echo $data['nip']; ?></td> </tr>
	<tr> <td>NAMA</td> <td><?php echo $data['nama']; ?></td> </tr>
	<tr> <td>TEMPAT, TANGGAL LAHIR</td> <td><?php echo $data['tempat_lahir']; ?>, <?php echo $data['tanggal_lahir']; ?></td> </tr>
	<tr> <td>TMT CPNS</td> <td><?php echo $data['tmt_cpns']; ?></td> </tr>
	<tr> <td>TMT PNS</td> <td><?php echo $data['tmt_pns']; ?></td> </tr>
	<tr> <td>PANGKAT</td> <td><?php echo $data['pangkat']; ?></td> </tr>
	<tr> <td>GOL. RUANG</td> <td><?php echo $data['gologan']; ?></td> </tr>
	<tr> <td>TMT PANGKAT</td> <td><?php echo $data['tmt_pangkat']; ?></td> </tr>
	<tr> <td>PENDIDIKAN</td> <td><?php echo $data['pendidikan']; ?></td> </tr>
	<tr> <td>JABATAN</td> <td><?php echo $data['jabatan']; ?></td> </tr>
	<tr> <td>TMT JABATAN</td> <td><?php echo $data['tmt_jabatan']; ?></td> </tr>
	<tr> <td>Sub Bagian/Seksi</td> <td><?php echo $data['unit_kerja']; ?></td> </tr>
	<tr> <td>SURAT KEPUTUSAN</td> <td><?php echo $data['sk']; ?></td> </tr>
	<tr> <td>TGL SK</td> <td><?php echo $data['tgl_sk']; ?></td> </tr>
	<tr> <td>ESELON</td> <td><?php echo $data['eselon']; ?></td> </tr>
	<tr> <td>JENIS KELAMIN</td> <td><?php echo $data['jenis_kelamin']; ?></td> </tr>





<tr>
<td></td>
<td><center><a href="?tampil=semuadata" class="btn btn-success"> kembali </a><center></td>

</tr>
</table>
</form>

