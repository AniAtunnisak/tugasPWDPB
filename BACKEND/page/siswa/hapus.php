<?php

   $nis = $_GET ['nis'];

   $koneksi->query("delete from tb_siswa where nis ='$nis'");

?>

<script type="text/javascript">
      window.location.href="?page=siswa";
</script>