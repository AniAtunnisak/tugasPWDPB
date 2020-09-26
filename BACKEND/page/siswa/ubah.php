<?php

     $nis = $_GET['nis'];

     $sql = $koneksi->query("select * from tb_siswa where nis='$nis'");

     $tampil = $sql->fetch_assoc();
      
?>

<div class="panel panel-default">
<div class="panel-heading">
    Ubah Data
  </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis" value="<?php echo $tampil['nis']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" name="kelas" value="<?php echo $tampil['kelas']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?php echo $tampil['alamat']; ?>" />
                                            
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                                       </div> 

                                 </div>

                                 </form>
                              </div>
 </div>
 </div>
 </div>


 <?php
 
   $nis = $_POST ['nis'];
   $nama = $_POST ['nama'];
   $kelas = $_POST ['kelas'];
   $alamat = $_POST ['alamat'];

   $simpan = $_POST ['simpan'];


    if ($simpan) {
        
        $sql = $koneksi->query("update tb_siswa set nis='$nis', nama='$nama', kelas='$kelas', alamat='$alamat' where nis='$nis'");
        
        if ($sql) {
            ?>
               <script type="text/javascript">

                   alert ("Ubah Data Berhasil Disimpan");
                   window.location.href="?page=siswa";

               </script>
            <?php
        }
    }
 
 ?>