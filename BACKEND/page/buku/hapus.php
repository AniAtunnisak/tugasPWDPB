<?php

   $no_buku = $_GET ['no_buku'];

   $koneksi->query("delete from tb_buku where no_buku ='$no_buku'");

?>

<script type="text/javascript">
      window.location.href="?page=buku";
</script>