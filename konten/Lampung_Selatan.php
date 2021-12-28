 

<center><h4>Data Pegawai Kantor Pertanahan Kab. Lampung Selatan</h4></center>

<table id="example" class="table text-nowrap table-responsive table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              
	<th>NO</th>
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
$sql = "SELECT * FROM pegawai where kantor='KANTOR PERTANAHAN KAB. LAMPUNG SELATAN'";
$tampil = mysql_query($sql);
$no=1;
while ($data = mysql_fetch_array($tampil)) { 
$Kode = $data['nip'];?>		
		
            <tr>

	<td><?php echo $no++; ?></td>	
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