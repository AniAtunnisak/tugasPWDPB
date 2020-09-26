<?php

   $id_pinjam = $_GET ['id_pinjam'];

   $koneksi->query("delete from tb_pinjam where id_pinjam='$id_pinjam'");

?>

<script type="text/javascript">
      window.location.href="?page=pinjam";
</script>