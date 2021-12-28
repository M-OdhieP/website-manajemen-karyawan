<center><h4>Data Pegawai BPN Seluruh Lampung</h4></center>

<a href="?tampil=data_tambah" class="btn btn-info">Tambah Data</a><br><br>

<table id="example" class="table table-hover text-nowrap table-responsive table-striped table-bordered display">
        <thead>
            <tr>
              
	<th>NO</th>
	<th>AKSI</th>
	<th>KANTOR</th>
	<th>NIP</th>
	<th>NAMA</th>
	<th>TEMPAT, TANGGAL LAHIR</th>
	<th>TMT CPNS</th>
	<th>TMT PNS</th>
	<th>PANGKAT</th>
	<th>GOL. RUANG</th>
	<th>TMT PANGKAT</th>
	<th>PENDIDIKAN</th>
	<th>JABATAN</th>
	<th>TMT JABATAN</th>
	<th>UNIT KERJA</th>
	<th>SURAT KEPUTUSAN</th>
	<th>TGL SK</th>
	<th>ESELON</th>
	<th>JENIS KELAMIN</th>
			   
			   
			   
			   
			   
            </tr>
        </thead>
        <tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM pegawai";
$tampil = mysql_query($sql);
$no=1;
while ($data = mysql_fetch_array($tampil)) { 
$Kode = $data['nip'];?>		
		
            <tr>

	<td><?php echo $no++; ?></td>	
			<td>
			


<div class="dropdown">
	<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		aksi
	</button>
	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a href="?tampil=data_lihat&id=<?php echo $data['pk']; ?>" class="btn btn-info btn-sm"> Lihat </a>			
<a href="?tampil=data_edit&id=<?php echo $data['pk']; ?>" class="btn btn-primary btn-sm"> Edit </a>
<a onclick="return confirm('apakah anda yakin ingin menghapus Data Pegawai ?')" href="?tampil=data_hapus&id=<?php echo $data['pk']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
	</div>
</div>

			</td>
		<td><?php echo $data['kantor']; ?></td>
		<td><?php echo $data['nip']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['tempat_lahir']; ?>, <?php echo $data['tanggal_lahir']; ?></td>
		<td><?php echo $data['tmt_cpns']; ?></td>
		<td><?php echo $data['tmt_pns']; ?></td>
		<td><?php echo $data['pangkat']; ?></td>
		<td><?php echo $data['gologan']; ?></td>
		<td><?php echo $data['tmt_pangkat']; ?></td>
		<td><?php echo $data['pendidikan']; ?></td>
		<td><?php echo $data['jabatan']; ?></td>
		<td><?php echo $data['tmt_jabatan']; ?></td>
		<td><?php echo $data['unit_kerja']; ?></td>
		<td><?php echo $data['sk']; ?></td>
		<td><?php echo $data['tgl_sk']; ?></td>
		<td><?php echo $data['eselon']; ?></td>
		<td><?php echo $data['jenis_kelamin']; ?></td>

   
            </tr>
			
<?php } ?>

        </tbody>
        <tfoot>
            <tr>
			
	<th>NO</th>
	<th>AKSI</th>
	<th>KANTOR</th>
	<th>NIP</th>
	<th>NAMA</th>
	<th>TEMPAT, TANGGAL LAHIR</th>
	<th>TMT CPNS</th>
	<th>TMT PNS</th>
	<th>PANGKAT</th>
	<th>GOL. RUANG</th>
	<th>TMT PANGKAT</th>
	<th>PENDIDIKAN</th>
	<th>JABATAN</th>
	<th>TMT JABATAN</th>
	<th>UNIT KERJA</th>
	<th>SURAT KEPUTUSAN</th>
	<th>TGL SK</th>
	<th>ESELON</th>
	<th>JENIS KELAMIN</th>
	
            </tr>
        </tfoot>
    </table>