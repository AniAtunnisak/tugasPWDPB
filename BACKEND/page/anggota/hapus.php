<?php

   $no_anggota = $_GET ['no_anggota'];

   $koneksi->query("delete from tb_kartu_anggota where no_anggota ='$no_anggota'");

?>

<script type="text/javascript">
      window.location.href="?page=anggota";
</script>