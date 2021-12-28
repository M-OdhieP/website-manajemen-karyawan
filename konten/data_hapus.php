<?php
mysql_query("DELETE FROM pegawai WHERE
pk='$_GET[id]'") or die(mysql_error());
echo "Data telah dihapus";
echo "<meta http-equiv='refresh' content='0;url=?tampil=semuadata'>";
?>