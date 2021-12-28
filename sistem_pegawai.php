<?php
session_start();
include "koneksi.php";
 define("INDEX",true);
  if($_SESSION['id']=='')
{
	echo "<meta http-equiv='refresh'
	content='0; url=noakses.php'>";
}
?>


<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/css/bootstrap.css"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">	
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">	





	
	<title>Sistem Pegawai</title> 
</head> 
<body> 




<nav class="navbar navbar-expand-lg navbar-light bg-light">


  <a class="navbar-brand" href="#">Sistem Pegawai</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
 <a class="nav-link" href="?tampil=semuadata">Semua Data</a>
      </li>
	  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kantah
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

	<a class="dropdown-item" href="?tampil=Bandar_Lampung">Bandar Lampung</a>
	<a class="dropdown-item" href="?tampil=Lampung_Selatan">Lampung Selatan</a>
	<a class="dropdown-item" href="?tampil=Lampung_Tengah">Lampung Tengah</a>
	<a class="dropdown-item" href="?tampil=Lampung_Utara">Lampung Utara</a>
	<a class="dropdown-item" href="?tampil=Lampung_Barat">Lampung Barat</a>
	<a class="dropdown-item" href="?tampil=Tulang_Bawang">Tulang Bawang</a>
	<a class="dropdown-item" href="?tampil=Metro">Metro</a>
	<a class="dropdown-item" href="?tampil=Tanggamus">Tanggamus</a>
	<a class="dropdown-item" href="?tampil=Waykanan">Waykanan</a>
	<a class="dropdown-item" href="?tampil=Lampung_Timur">Lampung Timur</a>
	<a class="dropdown-item" href="?tampil=Pesawaran">Pesawaran</a>
	<a class="dropdown-item" href="?tampil=Pringsewu">Pringsewu</a>
	<a class="dropdown-item" href="?tampil=Tulang_Bawang_Barat">Tulang Bawang Barat</a>





        </div>
      </li>
	  
	  
	  
	  
	  
	  
	  
	  
      <li class="nav-item">
        <a class="nav-link" href="?tampil=kanwil">Kantor Wilayah</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger text-light nav-link" onclick="return confirm('yakin ingin keluar ?')" href="logout.php">Logout</a>
    </li>

    </ul>

  </div>


</nav>







<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>











<div class="container-fluid">




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">	
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">	
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">	
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
			lengthChange: false,
		    lengthMenu: [
        [ 10, 25, 50, -1 ],
        [ '10', '25', '50', 'All' ]
    ],
        buttons: [
            'pageLength','copy', 'csv', 'excel', 'pdf', 'print'
        ],
		
		
		
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }		
		
    } );
	
} );
</script>

	<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



	<?php include "isi.php";?> 

</div>











</body> 
</html>